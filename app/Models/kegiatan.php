<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    use HasFactory;
    protected $visible = ['id', 'judul', 'image', 'isi', 'tgl_kegiatan'];
    protected $fillable = ['id', 'judul', 'image', 'isi', 'tgl_kegiatan'];
    public $timestamps = true;

    public function image()
    {
        if ($this->image && file_exists(public_path('image/kegiatan/' . $this->image))) {
            return asset('image/kegiatan/' . $this->image);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('image/kegiatan/' . $this->image))) {
            return unlink(public_path('image/kegiatan/' . $this->image));
        }
    }
}
