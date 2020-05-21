<?php

namespace App;

use App\Artist;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = [];
    public function myartist(){
        return $this->belongsTo(Artist::class,"artist_id");
    }
}
