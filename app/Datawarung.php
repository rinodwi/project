<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datawarung extends Model
{
    protected $table = 'datawarung';
    protected $fillable = ['namawarung','pemilikwarung','kota','alamat'];
}
