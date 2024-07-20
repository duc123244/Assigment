<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Hiển thị tất cả danh mục và sản phẩm (4 sản phẩm đầu tiên)
    public function index()
    {
        $categories = Category::all(); // Lấy tất cả danh mục
        $books = Book::take(4)->get(); // Lấy 4 sản phẩm đầu tiên
        return view('client.layouts.master', compact('categories', 'books'));
    }

    // Hiển thị sản phẩm theo danh mục
//     public function showCategoryHome($id)
// {
//     $categories = Category::all(); // Lấy tất cả danh mục
//     $selectedCategory = Category::with('books')->find($id); // Lấy danh mục với sản phẩm
//     $books = $selectedCategory ? $selectedCategory->books : collect(); // Lấy sản phẩm của danh mục được chọn

//     return view('client.layouts.master', compact('categories', 'books', 'selectedCategory'));
// }

}


