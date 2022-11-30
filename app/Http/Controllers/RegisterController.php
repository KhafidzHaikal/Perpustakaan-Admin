<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\User;
use App\Models\ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function dashboard()
    {
        return view('dashboard', [
            'title' => 'Dashboard',
            'users' => DB::table('users')->select('username')->get(),
            'jumlahbuku' => $this->jumlahbuku(),
            'jumlahruangan' => $this->jumlahruangan()
        ]);
    }
    public function jumlahbuku(){
        $buku = buku::count();
        return $buku;
    }
    public function jumlahruangan(){
        $ruangan = ruangan::count();
        return $ruangan;
    }

    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|max:20'
        ]);
        $validatedata['password'] = Hash::make($validatedata['password']);
        User::create($validatedata);
        $request->session()->flash('success', 'Registration Success');

        return redirect('/');
    }
}
