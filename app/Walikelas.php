<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walikelas extends Model
{
    protected $table = 'walikelas';

    protected $fillable = [
        'id_guru',
        'id_kelas',
        'ava'
    ];

    public function guru()
    {
        return $this->belongsTo('App\guru','id_guru');
    }
    public function Kelas()
    {
        return $this->belongsTo('App\Kelas','id_kelas');
    }
}
