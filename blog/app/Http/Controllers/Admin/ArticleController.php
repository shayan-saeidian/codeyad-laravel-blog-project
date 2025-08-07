<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\updateArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=Article::query()->paginate(10);
        return view('admin.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::getCategories();
        return view('admin.articles.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateArticleRequest $request)
    {
        $image_name=$request->image->hashName();
        $request->image->storeAs('images/articles',$image_name,'public');
        Article::query()->create([
            'title'=>$request->title,
            'body'=>$request->body,
            'category_id'=>$request->category_id,
            'user_id'=>auth()->id(),
            'image'=>$image_name,
        ]);
        return redirect()->back()->with('success','Article created successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories=Category::getCategories();
        $article=Article::query()->find($id);
        return view('admin.articles.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, string $id)
    {
        $article=Article::query()->find($id);
        if($request->hasFile('image')){
            $image_name=$request->image->hashName();
            $request->image->storeAs('images/articles',$image_name,'public');
        }


        $article->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'category_id'=>$request->category_id,
            'user_id'=>auth()->id(),
            'image'=>$request->image ? $image_name : $article->image,
        ]);
        return redirect()->route('articles.index')->with('success','Article updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::query()->find($id)->delete();
        return redirect()->route('articles.index')->with('success','Article deleted successfully');
    }
}
