<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagen;

class PostagemController extends Controller
{
    public function index(){

        $posts = Postagen::all();


        return view('list', ['posts'=>$posts]);

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

    public function destroy($id){
        
        Postagen::findOrFail($id)->delete();

        return redirect('/');

    }

    public function edit($id){

        $post = Postagen::findOrFail($id);

        return view('edit', ['posts'=>$posts]);
    }
}
