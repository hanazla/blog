<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use App\Models\Tags;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Posts $posts){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $data = $posts->latest()->take(6)->get();
        return view('blog', compact('data', 'category_widget', 'tag_widget'));
    }

    public function isi_blog($slug){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $data = Posts::where('slug', $slug)->get();
        return view('blog.isi_post', compact('data', 'category_widget', 'tag_widget'));
    }

    public function list_blog(){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $data = Posts::latest()->paginate(6);
        return view('blog.list_post', compact('data', 'category_widget', 'tag_widget') );
    }

    public function list_category(category $category){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $data = $category->posts()->paginate();
        return view('blog.list_post', compact('data', 'category_widget', 'tag_widget'));
    }

    public function showPostsByTag(tags $tags){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $data = $tags->posts()->paginate();
        return view('blog.list_post', compact('data', 'category_widget', 'tag_widget'));
    }

    public function cari(request $request){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $data = Posts::where('judul', $request->cari)->orWhere('judul', 'LIKE', '%' .$request->cari. '%')->paginate();
        return view('blog.list_post', compact('data', 'category_widget'));
    }
}