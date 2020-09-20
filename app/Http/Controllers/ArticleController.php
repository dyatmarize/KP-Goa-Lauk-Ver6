<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use App\Article;
Use App\User;
use DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Article::all();
    	return view('artikel')->with(compact('artikel'));
    }

    public function untukuser()
    {
        $artikel = Auth::user()->artikel()->all();
    	return view('artikeluser')->with(compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$
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
        Article::create([
            'id_user' => auth()->user()->id,   
            'nama' => $request->nama,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        $artikel = Article::paginate(10);

        return view('/artikel')->with(compact('artikel'));
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
    public function edit(Article $artikel)
    {
        return view('editartikel',compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $artikel)
    {
        $this->validate($request, [
			'judul' => 'required',
			'deskripsi' => 'required',
		]);

        $form_data = array(
            // 'file'            =>   $file_name,
            'judul' => $request->judul,
			'deskripsi' => $request->deskripsi,
        );

		// $file = $request->file('file');

		// $nama_file = time()."_".$file->getClientOriginalName();

      	//         // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'berita';
		// $file->move($tujuan_upload,$nama_file);
		Article::whereId($artikel->id)->update($form_data);

		return redirect('/artikeluser') ->with('status', 'Artikel berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
