<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\File;

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
            'foto'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $namaFoto = null;
        if ($request->hasFile('foto')) {
            $namaFoto = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('fotoprofile'), $namaFoto);
        }

        Review::create([
            'nama'   => $request->nama,
            'ulasan' => $request->ulasan,
            'rate'   => $request->rate,
            'foto'   => $namaFoto
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
            'foto'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $namaFoto = $review->foto;
        if ($request->hasFile('foto')) {
            if ($namaFoto && File::exists(public_path('fotoprofile/' . $namaFoto))) {
                File::delete(public_path('fotoprofile/' . $namaFoto));
            }
            $namaFoto = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('fotoprofile'), $namaFoto);
        }

        $review->update([
            'nama'   => $request->nama,
            'ulasan' => $request->ulasan,
            'rate'   => $request->rate,
            'foto'   => $namaFoto
        ]);

        return redirect()->route('review.index')->with('success', 'Ulasan berhasil diupdate');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);

        if ($review->foto && File::exists(public_path('fotoprofile/' . $review->foto))) {
            File::delete(public_path('fotoprofile/' . $review->foto));
        }

        $review->delete();
        return redirect()->route('review.index')->with('success', 'Ulasan berhasil dihapus');
    }
}
