<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    use HasFactory;
    // protected $fillable = ['judul_content','slug_content','isi_content','created_by'];
    protected $guarded = ['id_content'];
}
