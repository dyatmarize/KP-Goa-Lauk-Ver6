<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallerys';

    protected $fillable = [
        'id_user', 'file'
    ];

    public function users()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
