<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\userCreateRequest;
use App\Http\Requests\userEditRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::query()->paginate(10);
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::getCategories();
        return view('admin.categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $data=$request->all();
        $data['slug']=make_slug($request->title);
        Category::query()->create($data);
        return redirect()->back()->with('success','Category created successfully');
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
        $category=Category::query()->find($id);
        return view('admin.categories.edit',compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $category=Category::query()->find($id);
        $category->update([
            'title'=>$request->title,
            'parent_id'=>$request->parent_id,
            'slug'=>make_slug($request->title),
        ]);
        return redirect()->route('categories.index')->with('success','Category updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::query()->find($id)->delete();
        return redirect()->route('categories.index')->with('success','Category deleted successfully');
    }
}
