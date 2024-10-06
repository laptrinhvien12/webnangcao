<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::all(); // Lấy tất cả sách từ cơ sở dữ liệu
        return view('books.index', compact('books')); // Trả về view
    }

    /**
     * Show the form for creating a new resource.
     */
     // Hiển thị form tạo sách mới
     public function create()
     {
         return view('books.create');
     }
 
     // Lưu sách mới vào database
     public function store(Request $request)
     {
         // Validation dữ liệu
         $request->validate([
             'title' => 'required',
             'author' => 'required',
             'published_year' => 'required|integer|min:1000|max:' . date('Y'),
         ]);
 
         // Tạo sách mới
         Book::create($request->all());
 
         // Redirect về trang danh sách với thông báo thành công
         return redirect()->route('books.index')->with('success', 'Book created successfully.');
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
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Cập nhật thông tin sách
    public function update(Request $request, Book $book)
    {
        // Validation dữ liệu
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required|integer|min:1000|max:' . date('Y'),
        ]);

        // Cập nhật sách
        $book->update($request->all());

        // Redirect về trang danh sách với thông báo thành công
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    // Xóa sách
    public function destroy(Book $book)
    {
        // Xóa sách
        $book->delete();

        // Redirect về trang danh sách với thông báo thành công
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
