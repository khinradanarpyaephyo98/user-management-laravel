<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function rolesPermission()
    {
        return $this->hasMany(RolesPermission::class, 'role_id');
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'role_id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
