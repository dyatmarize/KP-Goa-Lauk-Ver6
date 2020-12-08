<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use App\Article;
Use App\Contact;
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
        $artikel = Article::paginate(30);
        $contact = Contact::paginate(1);
    	return view('artikel')->with(compact('artikel', 'contact'));
    }

    public function untukuser()
    {
        $artikel = Auth::user()->artikel()->paginate(30);
        $contact = Contact::paginate(1);
    	return view('artikeluser')->with(compact('artikel','contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = Contact::paginate(1);
        return view('tambahartikel')->with(compact('contact'));
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

        $artikel = Article::paginate(50);
        $contact = Contact::paginate(1);

        return view('/artikel')->with(compact('artikel','contact'));
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
        $contact = Contact::paginate(1);
        return view('editartikel',compact('artikel','contact'));
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
        $contact = Contact::paginate(1);
		return redirect('/artikeluser',compact('contact')) ->with('status', 'Artikel berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $artikel)
    {
        Article::destroy($artikel->id); 
		return redirect('/artikeluser');
    }
}
