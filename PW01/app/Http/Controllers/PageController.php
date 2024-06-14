<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function login()
    {
        return view("login");
    }
    public function home()
    {
        return view("home", ["key" => "home"]);
    }
    public function movies()
    {
        $Movies = Movies::orderBy('id', 'desc')->get();
        return view("movies", ["key" => "movies", "mv" => $Movies]);
    }
    public function addmovies()
    {
        return view("formadd", ["key" => "movies"]);
    }
    public function savemovies(Request $request)
    {
        $file_name = time() . '-' . $request->file('poster')->getClientOriginalName();
        $path = $request->file('poster')->storeAs('poster', $file_name, 'public');

        Movies::create([
            'title' => $request->title,
            'genre' => $request->genre,
            'year' => $request->year,
            'poster' => $path
        ]);

        return redirect("movies")->with('alert', 'Data Berhasil di Simpan');
    }

    public function editmovies($id)
    {
        $Movies = Movies::find($id);
        return view("formedit", ["key" => "movies", "mv" => $Movies]);
    }

    public function updatemovies($id, Request $request)
    {
        $Movies = Movies::find($id);

        $Movies->title = $request->title;
        $Movies->genre = $request->genre;
        $Movies->year = $request->year;     

        if ($request->poster) {
            if ($Movies->poster) {
                Storage::disk('public')->delete($Movies->poster);
            }
            $file_name = time() . '-' . $request->file('poster')->getClientOriginalName();
            $path = $request->file('poster')->storeAs('poster', $file_name, 'public');
            $Movies->poster = $path;
        }
        $Movies->save(); 
        return redirect("movies")->with('alert', 'Data Berhasil di Update');
    }

    public function deletemovies($id)
    {
        $Movies = Movies::find($id);
        if ($Movies -> poster)
        {
            Storage::disk('public')->delete($Movies->poster);
        }
        $Movies -> delete();
        return redirect("movies")->with('alert','Data Berhasil di Hapus');
    }

    public function edituser()
    {
        return view("edituser", ["key" => ""]);
    }

    public function updateuser(Request $request)
    {
        if ($request->password_baru == $request->konfirmasi_password)
        {
            $user = Auth::user();
            $user->password = bcrypt($request->konfirmasi_password);
            $user->save();

            return redirect("/user")->with("info","Password berhasil di ubah, MANTAP");
        }
        else 
        {
            return redirect("/user")->with("info","Password Gagal di ubah");
        }
    }
}