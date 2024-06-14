<!-- <?php

use App\Models\Book; // pastikan Anda telah mengimpor model Book

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::all(); // mengambil semua data buku dari model Book
        return view('home', ['books' => $books]); // meneruskan data buku ke view home.blade.php
    }
}
?> 
-->