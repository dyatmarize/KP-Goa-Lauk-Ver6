<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles'; 

    protected $fillable = [
        'judul', 'deskripsi', 'id_user', 'nama',
    ];

    public function users()
    {
    	return $this->belongsTo('App\User', 'id_user');
    }
}
