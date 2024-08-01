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

    // Ošetrenie prípadnej neprítomnosti príspevkov
    if ($latestBlog) {
        // Načítanie prekladu pre najnovší príspevok
        $latestTranslation = $latestBlog->getTranslation(app()->getLocale());

        if (!$latestTranslation) {
            $latestTranslation = new \stdClass();
            $latestTranslation->title = __('messages.not-in-your-language');
            $latestTranslation->content = __('messages.article-not-available');
            $latestTranslation->featured_text = '';
        }
        

        $latestBlog->translation = $latestTranslation;
    }

    // Získanie ďalších príspevkov, ktoré sú staršie než najnovší príspevok
    $blogs = Blog::where('id', '!=', $latestBlog ? $latestBlog->id : null)
                ->latest()
                ->paginate(9);

    // Načítanie prekladov pre ostatné príspevky
    $blogs->transform(function ($blog) {
        $translation = $blog->getTranslation(app()->getLocale());

        if (!$translation) {
            $translation = new \stdClass();
            $translation->title = __('messages.not-in-your-language');
            $translation->featured_text = '';
        }

        $blog->translation = $translation;
        return $blog;
    });

    return view('pages.blog', compact('blogs', 'latestBlog'));
}
    public function thankyouPage(){
        return view('pages.form-submit');
    }
}
