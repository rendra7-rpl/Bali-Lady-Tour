<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Program;
use App\Models\Category;
use App\Models\Short;
use App\Models\Review;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
{
    // Short content untuk hero section
    $shortContent = Short::latest()->first();

    // Programs untuk top values (advantage section) - diubah dari categories ke programs
    $programs = Program::latest()->take(4)->get();

    // Articles untuk homepage
    $beritas = Berita::latest()->take(3)->get();

    // Gallery images
    $galeris = Galeri::latest()->take(10)->get();

    // Reviews untuk customer testimonials
    $reviews = Review::latest()->take(3)->get();

    // Programs untuk tour packages (ambil lagi karena dipakai di 2 tempat)
    $tourPackages = Program::latest()->take(3)->get();

    return view('Frontend.home', compact(
        'shortContent',
        'programs', // untuk top values section
        'beritas',
        'galeris',
        'reviews',
        'tourPackages' // untuk tour packages section
    ));
}


    public function articles()
{
    // Berita utama (4 card terbaru)
    $beritas = Berita::with('category')->latest()->take(4)->get();
    
    // Berita populer berdasarkan hit (5 berita dengan hit terbanyak)
    $popularBeritas = Berita::with('category')
        ->orderBy('hit', 'desc')
        ->take(5)
        ->get();
    
    $categories = Category::all();
    
    return view('Frontend.articles', compact('beritas', 'popularBeritas', 'categories'));
}


public function articleDetail($id)
{
    $berita = Berita::with('category')->findOrFail($id);
    
    // Increment hit counter
    $berita->incrementHit();
    
    // Trending posts untuk sidebar (berdasarkan hit terbanyak)
    $popularBeritas = Berita::where('id', '!=', $id)
        ->orderBy('hit', 'desc')
        ->take(5)
        ->get();
    
    // Related articles (berdasarkan category atau berita terbaru)
    $relatedBeritas = Berita::where('id', '!=', $id)
        ->when($berita->category, function($query) use ($berita) {
            return $query->where('category_id', $berita->category_id);
        })
        ->latest()
        ->take(3)
        ->get();
    
    return view('Frontend.articlesdetail', compact('berita', 'popularBeritas', 'relatedBeritas'));
}
    

    public function tourPackage()
{
    // Mengambil data programs untuk tour packages
    $tourPackages = Program::latest()->paginate(9);
    
    return view('Frontend.tourpackage', compact('tourPackages'));
}


    public function carRental()
    {
        return view('Frontend.carrental', compact('cars'));
    }

    public function tourExperience()
    {
        return view('Frontend.tourexperience');
    }

    public function gallery()
    {
        $galeris = Galeri::latest()->paginate(12);
        return view('Frontend.gallery', compact('galeris'));
    }
}
