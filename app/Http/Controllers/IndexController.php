<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.index');
    }

    public function aerosol(){
        return view('pages.aerosol');
    }

    public function supervisor(){
        return view ('pages.supervisor');
    }
    public function dust(){
        return view('pages.dust');
    }

    public function waste(){
        return view('pages.waste');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function blog()
    {
        // Získanie najnovšieho príspevku
        $latestBlog = Blog::latest()->first();

        // Získanie ďalších príspevkov, ktoré sú staršie než najnovší príspevok
        $blogs = Blog::where('id', '!=', $latestBlog->id)
                    ->latest()
                    ->paginate(9);
        
        return view('pages.blog', compact('blogs', 'latestBlog', ));
    }
    public function thankyouPage(){
        return view('pages.form-submit');
    }
}
