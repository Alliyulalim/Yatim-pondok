<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Alert;
use Illuminate\Database\Eloquent\Model;

class pengasuh extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_pengasuh', 'jk', 'tgl_lahir'];
    protected $visible = ['id', 'nama_pengasuh', 'jk', 'tgl_lahir'];

    public $timestamps = true;

    public function anak_asuh()
    {
        return $this->hasMany('App\Models\anak_asuh' , 'nama_pengasuh');
    }
    public static function boot()
    {
        parent::boot();
        self::deleting(function($pengasuh){
            if($pengasuh->anak_asuh->count() > 0){
                Alert::error('Gagal Menghapus', 'Data '.$pengasuh->nama_pengasuh.' Masih Memiliki Data');
                return false;
            }
        });
    }
}
