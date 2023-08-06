<?php

namespace App\Http\Controllers;

use App\Models\Blogcategory;
use Illuminate\Http\Request;

class BlogcategoryController extends Controller
{
    public function index()
    {

    }

    public function store()
    {
        $aboutus = Blogcategory::with('blogs')->orderBy('id','desc')->get();
        return $aboutus;
    }

    public function showBlogCategoryById($id)
    {
        $blogcategory = Blogcategory::with('blogs')->find($id);
        return $blogcategory;
    }
}
