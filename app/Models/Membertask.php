<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membertask extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'datetime',
        'location',
        'usertype_id',
        'remark'
    ];

    public function usertype()
    {
        return $this->belongsTo(Usertype::class);
    }
}
