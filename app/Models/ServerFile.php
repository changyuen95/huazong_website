<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServerFile extends Model
{
    use HasFactory, SoftDeletes;



    protected $fillable = ['name', 'mime_type', 'extension', 'size', 'type'];

    // relationships
    public function uploadable()
    {
        return $this->morphTo();
    }
}
