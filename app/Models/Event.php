<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    public const STATUS_ACTIVE = 'active';

    protected $fillable = [
        'title',
        'content',
        'publish_date',
        'pin',
        'status',
        'created_by',
    ];

    public function image()
    {
        return $this->morphOne(ServerFile::class, 'uploadable');
    }

    public function images()
    {
        return $this->morphMany(ServerFile::class, 'uploadable');
    }

    public function host()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
}
