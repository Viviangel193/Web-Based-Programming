<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Freelancer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "home"]);
    }

    public function index()
    {
        $freelancers = Freelancer::orderBy('id_freelancer', 'desc')->get();
        return view("freelancer", ["key" => "freelancers", "freelancers" => $freelancers]);
    }

    public function create()
    {
        return view("formadd", ["key" => "add_freelancer"]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'spesialisasi' => 'required',
            'lokasi' => 'required',
            'rating' => 'required|numeric',
            'kontak' => 'required',
        ]);
        Freelancer::create($validatedData);

        return redirect('/freelancer')->with('alert', 'Freelancer added successfully!');
    }

    public function edit($id)
    {
        $freelancer = Freelancer::find($id);

        if (!$freelancer) {
            return redirect('/freelancer')->with('alert', 'Freelancer not found!');
        }

        return view('formedit', ['freelancer' => $freelancer, 'key' => 'edit_freelancer']);
    }

    public function update(Request $request, $id)
    {
        $freelancer = Freelancer::find($id);

        if (!$freelancer) {
            return redirect('/freelancer')->with('alert', 'Freelancer not found!');
        }

        $validatedData = $request->validate([
            'nama' => 'required',
            'spesialisasi' => 'required',
            'lokasi' => 'required',
            'rating' => 'required|numeric',
            'kontak' => 'required',
        ]);

        $freelancer->update($validatedData);

        return redirect('/freelancer')->with('alert', 'Freelancer updated successfully!');
    }

    public function destroy($id)
    {
        $freelancer = Freelancer::find($id);

        if (!$freelancer) {
            return redirect('/freelancer')->with('alert', 'Freelancer not found!');
        }

        $freelancer->delete();
        return redirect('/freelancer')->with('alert', 'Freelancer deleted successfully!');
    }
    public function editUser()
    {
        return view('edituser', ['key' => 'edit_user']);
    }

    public function updateUser(Request $request)
    {
        $request->validate([
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect('/home')->with('alert', 'Password updated successfully!');
    }


}
