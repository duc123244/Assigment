<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    const PATH_VIEW = 'categories.';

    public function index()
    {
        $categories = Category::all(); 
        return view(self::PATH_VIEW . 'index', compact('categories'));
    }

    public function show($id)
    {
        $categories = Category::all();
        $category = Category::findOrFail($id); 
        $books = $category->books;
        return view(self::PATH_VIEW . 'show', compact('categories', 'category', 'books'));
    }
    
    public function create()
    {
        return view(self::PATH_VIEW . 'create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }
}
