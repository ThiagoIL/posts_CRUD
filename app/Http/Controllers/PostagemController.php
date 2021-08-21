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
        $postagen-> description = $request->description;
        $postagen-> localization = $request->localization;
        $postagen-> date = $request->date;

        $postagen->save();

        return redirect('/');

    }

    public function destroy($id){
        
        Postagen::findOrFail($id)->delete(); // metodo para deletar direto

        return redirect('/');

    }

    public function edit($id){

        $post = Postagen::findOrFail($id);

        return view('edit', ['post'=>$post]);
    }

    public function update(Request $request){


        Postagen::findOrFail($request->id)->update($request->all());
        


        return redirect('/');
        
    }
}
