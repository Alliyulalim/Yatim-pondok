<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anak_asuh extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_pengasuh', 'nama_anak', 'jk', 'tgl_lahir', 'status'];
    protected $visible = ['id', 'nama_pengasuh', 'nama_anak', 'jk', 'tgl_lahir', 'status'];

    public $timestamps = true;

    public function pengasuh()
    {
        return $this->belongsTo('App\Models\pengasuh', 'nama_pengasuh');
    }
}
