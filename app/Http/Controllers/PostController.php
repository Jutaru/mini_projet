<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')->get();
    
        return view('posts.index',['post'=>$posts]);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        /*DB::table('posts')->insert([
            'title' =>$request->title,
            'description' => $request->description,
            'categorie' => $request->category,
            'created_at'=> date("Y-m-d H:i:s")
        ]);
        return back()->with('post_add','post added succefully');*/
        $posts = new Post();
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->categorie = $request->category;
        $posts->save();
        return redirect()->route('posts.index')->with('success','Post créé avec succès.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'id' => 'required',
            'titre' => 'required',
            'description' => 'required',
            'categorie' => 'required',
        ]);
    
        $post->update($request->all());
    
        return redirect()->route('posts.index')
                        ->with('success','Post mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit->delete();
    
        return redirect()->route('posts.index')
                        ->with('success','Post supprimé avec succès');
    }
}
