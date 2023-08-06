<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

    }

    public function store()
    {
        $aboutus = Blog::orderBy('id','desc')->get();
        return $aboutus;
    }

    public function showByBlogCategoryId($id)
    {
        $blog = Blog::with('blogcategory')->find($id);
        // $aboutus = Blog::where('blogcategory_id',$id)->orderBy('id','desc')->with('user')->get();
        return $blog;
    }
}
