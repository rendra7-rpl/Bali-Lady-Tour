<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $data = Review::all();
        return view('backend.Review.review', compact('data')); 
    }

    public function create()
    {
        return view('backend.Review.tambah_review'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'   => 'required',
            'ulasan' => 'required',
            'rate'   => 'required|integer|min:1|max:5',
        ]);

        Review::create([
            'nama'   => $request->nama,
            'ulasan' => $request->ulasan,
            'rate'   => $request->rate,
        ]);

        return redirect()->route('review.index')->with('success', 'Ulasan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('backend.Review.edit_review', compact('review')); 
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        $request->validate([
            'nama'   => 'required',
            'ulasan' => 'required',
            'rate'   => 'required|integer|min:1|max:5',
        ]);

        $review->update([
            'nama'   => $request->nama,
            'ulasan' => $request->ulasan,
            'rate'   => $request->rate,
        ]);

        return redirect()->route('review.index')->with('success', 'Ulasan berhasil diupdate');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('review.index')->with('success', 'Ulasan berhasil dihapus');
    }
}
