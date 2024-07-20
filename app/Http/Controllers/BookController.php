<?php
namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    const PATH_VIEW = 'books.';

    /**
     * Display a listing of the resource.
     */
    // App\Http\Controllers\BookController.php
    public function index()
    {
        $data = Book::query()->with(['author', 'category'])->latest('id')->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::pluck('name', 'id')->all();
        $categories = Category::pluck('name', 'id')->all();
        return view(self::PATH_VIEW . 'create', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $data = $request->except('image');
        $data['is_active'] = isset($data['is_active']) ? 1 : 0;
        if ($request->hasFile('image')) {
            $data['image'] = Storage::put('books', $request->file('image'));
        }
        Book::create($data);
        // dd($data);
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view(self::PATH_VIEW . 'show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::pluck('name', 'id')->all();
        $categories = Category::pluck('name', 'id')->all();
        return view(self::PATH_VIEW . 'edit', compact('book', 'authors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $data = $request->except('image');
        $data['is_active'] = isset($data['is_active']) ? 1 : 0;
        if ($request->hasFile('image')) {
            $data['image'] = Storage::put('books', $request->file('image'));
            if (!empty($book->image) && Storage::exists($book->image)) {
                Storage::delete($book->image);
            }
        } else {
            $data['image'] = $book->image;
        }
        $book->update($data);
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return back();
    }
}
