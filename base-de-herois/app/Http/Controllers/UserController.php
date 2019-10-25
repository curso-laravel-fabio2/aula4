<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $req)
    {   
        $req->validate([
        'nome' => 'nullable||alpha|min:3|max:255'
        ]);
        $qb = DB::table('users') -> select(['name','email']);
        if($req->nome){
            $qb->where('name', 'like',"$req->nome%");
        }
        $usuarios = $qb->get();
        return view('usuarioslist',['usuarios' => $usuarios]);
    }
    public function index2(Request $req){   
        $req->validate([
        'nome' => 'nullable||alpha|min:3|max:255'
        ]);
        $qb = User::select(['name','email']);

        $usuarios = User::select(['name', 'id']);
        if($req->nome){
            $qb->where('name', 'like',"$req->nome%");
        }
        $usuarios = $qb->get();
        return view('usuarioslist',['usuarios' => $usuarios]);
    }
}
