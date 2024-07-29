<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        Auth::check();
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    public function create(Blog $blog){
        Auth::check();
        return view('blog.create',['blog' => $blog]);
    }

    public function store(Request $request)
        {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'content' =>'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'featured_text' => 'required|string',
            ]);

            $blog = new Blog;
            $blog->title = $validatedData['title'];
            $blog->content = $validatedData['content'];
            $blog->featured_text = $validatedData['featured_text'];
            $blog->slug = Str::slug($blog->title);
            $blog->user_id = Auth::id();

            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('public/blogs');
                $blog->image = Storage::url($path); 
            }

            $blog->save();

            return redirect()->route('blog.index')->with('success', 'Blog created successfully.');
        }
    
    public function show(Blog $blog){
        return view('blog.show', ['blog' => $blog]);
    }
    public function edit(Blog $blog){
        return view('blog.edit', ['blog' => $blog]);
    }
    public function update(Request $request, Blog $blog)
    {
        // Validácia vstupu
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'featured_text' => 'required',
        ]);

        // Aktualizácia príspevku
        $blog->title = $validatedData['title'];
        $blog->content = $validatedData['content'];
        $blog->featured_text = $validatedData['featured_text'];
        $blog->slug = Str::slug($blog->title);

        // Spracovanie obrázka
        if ($request->hasFile('image')) {
            // Odstránenie starého obrázka, ak existuje
            if ($blog->image) {
                Storage::delete(str_replace('/storage', 'public', $blog->image));
            }

            $path = $request->file('image')->store('public/blogs');
            $blog->image = Storage::url($path);
        }

        $blog->update();

        return redirect()->route('blog.index')->with('success', 'Post updated successfully.');
    }
    public function destroy(Blog $blog)
    {
        // Odstránenie obrázka, ak existuje
        if ($blog->image) {
            Storage::delete(str_replace('/storage', 'public', $blog->image));
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Post deleted successfully.');
    }   
}
