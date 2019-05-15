<?php

namespace App\Http\Controllers\App;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('app.category.index', compact('categories'));
    }

    public function create()
    {
        return view('app.category.create');
    }


    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('app.categories.index');
    }

    public function show(Category $category)
    {
        return view('app.category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('app.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->fill($request->all());
        $category->save();
        return redirect()->route('app.categories.index');
    }

    public function destroy($id)
    {
        $category->delete();
        return redirect()->route('app.category.index');
    }
}
