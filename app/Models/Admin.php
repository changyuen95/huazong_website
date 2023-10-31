<?php

namespace App\Models;

use App\Models\Event;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Admin extends Model implements Authenticatable
{
    use HasFactory, HasRoles, AuthenticableTrait;

    protected $fillable = [
        // 'name',
        'email',
        'password',
        'group_id'
    ];

    protected $guard_name = 'web';

    public function events()
    {
        return $this->hasMany(Event::class, 'created_by');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
