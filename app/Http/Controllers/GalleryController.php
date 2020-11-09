<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Auth;
Use App\Article;
Use App\User;
use DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gallerys = Gallery::paginate(30);

        return view('gallery')->with(compact('gallerys'));
    }

    public function untukuser()
    {
        $gallerys = Auth::user()->gallery()->paginate(30);
    	return view('galleryuser')->with(compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $filename = 'gallerys\\' . uniqid() . '.' . $request->gambar->getClientOriginalExtension();
        $request->gambar->move(storage_path('app\public\gallerys'), $filename);

        Gallery::create([
            'id_user' => auth()->user()->id,
            'file' => $filename,
        ]);

        $gallerys = Gallery::paginate(50);

        return view('/gallery')->with(compact('gallerys'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallerys)
    {
        Gallery::destroy($gallerys->id); 
		return redirect('/galleryuser');
    }
}
