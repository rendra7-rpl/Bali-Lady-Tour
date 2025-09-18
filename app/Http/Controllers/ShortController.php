<?php

namespace App\Http\Controllers;

use App\Models\Short;
use Illuminate\Http\Request;
use HTMLPurifier;
use HTMLPurifier_Config;

class ShortController extends Controller
{
    // Halaman list data short (backend) dengan pencarian
    public function short(Request $request)
    {
        if ($request->has('search')) {
            $data = Short::where('title', 'LIKE', '%' . $request->search . '%')
                        ->orderBy('created_at', 'desc')
                        ->paginate(5);
        } else {
            $data = Short::orderBy('created_at', 'desc')->paginate(5);
        }

        return view('Backend.Short Content.sc', compact('data'));
    }

    // Halaman list data short untuk frontend
    public function frontendshort()
    {
        $short = Short::orderBy('created_at', 'desc')->get();
        return view('short', compact('short'));
    }

    // Form tambah short (backend)
    public function tambahsc()
    {
        return view('Backend.Short Content.tambahsc');
    }

    // Simpan short baru
    public function insertsc(Request $request)
    {
        $request->validate([
            'title'   => 'required|max:255',
            'content' => 'required',
        ]);

        // Bersihkan konten dengan HTMLPurifier
        $config   = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);

        $data = new Short();
        $data->title   = $request->input('title');
        $data->content = $purifier->purify($request->input('content'));
        $data->save();

        return redirect()->route('short')->with('success', 'Data berhasil ditambahkan!');
    }

    // Alternatif simpan dengan mass assignment
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'   => 'required|max:255',
            'content' => 'required',
        ]);

        Short::create($validated);

        return redirect()->route('short')->with('success', 'Data berhasil ditambahkan!');
    }

    // Tampilkan form edit
    public function tampilkansc($id)
    {
        $data = Short::findOrFail($id);
        return view('Backend.Short Content.editsc', compact('data'));
    }

    // Update data short
    public function updatesc(Request $request, $id)
    {
        $data = Short::find($id);

        if (!$data) {
            return redirect()->route('short')->with('error', 'Data tidak ditemukan!');
        }

        $request->validate([
            'title'   => 'required|max:255',
            'content' => 'required',
        ]);

        $config   = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);

        $data->update([
            'title'   => $request->input('title'),
            'content' => $purifier->purify($request->input('content')),
        ]);

        return redirect()->route('short')->with('update', 'Data berhasil diedit!');
    }

    // Hapus data short
    public function deletesc($id)
    {
        $data = Short::find($id);

        if ($data) {
            $data->delete();
            return redirect()->route('short')->with('delete', 'Data berhasil dihapus!');
        } else {
            return redirect()->route('short')->with('error', 'Data tidak ditemukan!');
        }
    }
}
