<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\ServerFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'status'];

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
}
