<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTranslation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        Auth::check();
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('blog.index', compact('blogs'));
    }

    public function create(Blog $blog){
        Auth::check();
        return view('blog.create',['blog' => $blog]);
    }

    public function store(Request $request)
    {
        // Validácia vstupu
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'translations.sk.title' => 'required|string|max:255',
            'translations.sk.content' => 'required|string',
            'translations.sk.featured_text' => 'required|string',
            'translations.en.title' => 'nullable|string|max:255',
            'translations.en.content' => 'nullable|string',
            'translations.en.featured_text' => 'nullable|string',
            'translations.de.title' => 'nullable|string|max:255',
            'translations.de.content' => 'nullable|string',
            'translations.de.featured_text' => 'nullable|string',
        ]);
    
        // Generovanie slug z anglického názvu
        $slug = Str::slug($validatedData['translations']['sk']['title']);
    
        // Kontrola, či už existuje rovnaký slug
        $existingSlugCount = Blog::where('slug', $slug)->count();
        if ($existingSlugCount > 0) {
            $slug .= '-' . ($existingSlugCount + 1);
        }
    
        // Vytvorenie základného blogu
        $blog = new Blog;
        $blog->slug = $slug;
        $blog->title = $validatedData['translations']['sk']['title']; // Nastav title
        $blog->content = $validatedData['translations']['sk']['content']; // Nastav content
        $blog->featured_text = $validatedData['translations']['sk']['featured_text']; // Nastav content
        $blog->user_id = Auth::id();
    
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/blogs');
            $blog->image = Storage::url($path);
        }
    
        $blog->save();
    
        // Vytvorenie prekladov
        foreach ($request->translations as $lang => $translation) {
            if ($translation['title'] || $translation['content']) {
                BlogTranslation::create([
                    'blog_id' => $blog->id,
                    'language_code' => $lang,
                    'title' => $translation['title'] ?? '',
                    'content' => $translation['content'] ?? '',
                    'featured_text' => $translation['featured_text'] ?? '',
                ]);
            }
        }
    
        return redirect()->route('blog.index')->with('success', 'Blog created successfully.');
    }
    
    
    public function show(Blog $blog)
    {
        // Načítanie prekladu pre aktuálny jazyk
        $translation = $blog->getTranslation(app()->getLocale());
    
        // Ak preklad neexistuje, môžeme nastaviť predvolené hodnoty
        if (!$translation) {
            $translation = new \stdClass();
            $translation->title = __('messages.not-in-your-language');
            $translation->content = __('messages.article-not-available');
            $translation->featured_text = '';
        }
    
        return view('blog.show', compact('blog', 'translation'));
    }
    
    public function edit(Blog $blog)
    {
        return view('blog.edit', ['blog' => $blog]);
    }
    
    public function update(Request $request, Blog $blog)
    {
        // Validácia vstupu
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'translations.sk.title' => 'required|string|max:255',
            'translations.sk.content' => 'required|string',
            'translations.sk.featured_text' => 'required|string',
            'translations.en.title' => 'nullable|string|max:255',
            'translations.en.content' => 'nullable|string',
            'translations.en.featured_text' => 'nullable|string',
            'translations.de.title' => 'nullable|string|max:255',
            'translations.de.content' => 'nullable|string',
            'translations.de.featured_text' => 'nullable|string',
        ]);
    
        // Generovanie slug z anglického názvu
        $slug = Str::slug($validatedData['translations']['sk']['title']);
    
        // Kontrola, či už existuje rovnaký slug a či sa mení slug
        if ($blog->slug !== $slug) {
            $existingSlugCount = Blog::where('slug', $slug)->count();
            if ($existingSlugCount > 0) {
                $slug .= '-' . ($existingSlugCount + 1);
            }
            $blog->slug = $slug;
        }
    
        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::delete(str_replace('/storage', 'public', $blog->image));
            }
            $path = $request->file('image')->store('public/blogs');
            $blog->image = Storage::url($path);
        }
    
        $blog->save();
    
        // Aktualizácia prekladov
        foreach ($request->translations as $lang => $translation) {
            $translationData = [
                'title' => $translation['title'] ?? '',
                'content' => $translation['content'] ?? '',
                'featured_text' => $translation['featured_text'] ?? '',
            ];
    
            $blogTranslation = $blog->translations()->where('language_code', $lang)->first();
    
            if ($blogTranslation) {
                $blogTranslation->update($translationData);
            } else {
                $translationData['language_code'] = $lang;
                $translationData['blog_id'] = $blog->id;
                BlogTranslation::create($translationData);
            }
        }
    
        return redirect()->route('blog.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete(str_replace('/storage', 'public', $blog->image));
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully.');
    }
}
