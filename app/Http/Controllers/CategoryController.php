<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categories = Category::where('user_id', $user->id)->get();
        return view('layouts.categoires', compact('categories'));
    
    }
    public function sendData()
    {
        $user = Auth::user(); 
        $categories = Category::where('user_id', $user->id)->get();
        
        return view('layouts.side', compact('categories',));
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $category = new Category();
        $category->category_name = $request->input('category_name');
        $category->user_id = Auth::id();
        $category->save();

        return redirect()->route('collections');
    }
    public function show()
    {     
    }
    public function edit(Category $category)
    {
    }
    public function update(Request $request, Category $category)
    {
    }
    public function destroy(Category $category)
    {
    }
}
