<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagen;

class PostagemController extends Controller
{
    public function index(){

        $posts = Postagen::all();


        return view('teste', ['posts'=>$posts]);

    }

    public function create(){

        return view('create');
    }

    public function store(Request $request){
        $postagen = new Postagen;

        $postagen-> title = $request->title;
        $postagen-> description = $request->descrition;
        $postagen-> localization = $request->localization;
        $postagen-> date = $request->date;

        $postagen->save();

        return redirect('/');

    }
}
