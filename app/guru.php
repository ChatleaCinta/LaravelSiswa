<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'nip',
        'nama_guru',
        'tanggal_lahir',
        'jenis_kelamin',
        'avatar'
    ];
    
    public function walikelas()
    {
        return $this->hasOne('App\Walikelas', 'id_walikelas');
    }
}
