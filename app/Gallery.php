<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallerys'; 

    protected $fillable = [
        'judul', 'deskripsi', 'id_user',
    ];

    public function users()
    {
    	return $this->belongsTo('App\User', 'id_user');
    }
}
