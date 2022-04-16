<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    // Method untuk mengambil seluruh data user
    public function index(){
        $data = User::all();
        return view('profilPegawai',['data'=>$data]);
    }
    //
}
