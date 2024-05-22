<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    protected $table = 'agenda';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','acara','tgl_mulai','tgl_selesai','tempat','status'
    ];
}
