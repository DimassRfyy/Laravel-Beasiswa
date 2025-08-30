<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;


class FrontController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function sponsorship()
    {
        return view('pages.sponsorship');
    }

    public function partnership()
    {
        return view('pages.partnership');
    }

    public function mentor()
    {
        return view('pages.mentor');
    }

    public function coach()
    {
        return view('pages.coach');
    }

    public function donation()
    {
        return view('pages.donation');
    }

    public function blog()
    {
        $categories = Category::all();
        $blogs = Blog::with(['user', 'category'])->take(8)->get();
        return view('pages.blog', compact('blogs', 'categories'));
    }

    public function blogDetail(Blog $blog)
    {
        $blog->load(['user', 'category']);
        $categories = Category::withCount('blogs')->get();
        $otherBlogs = Blog::where('id', '!=', $blog->id)->take(4)->get();
        return view('pages.details_blog', compact('blog', 'categories', 'otherBlogs'));
    }
}
