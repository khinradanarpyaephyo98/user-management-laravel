<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Features;

class Permission extends Model
{
    use HasFactory;

    public function features()
    {
        return $this->belongsTo(Features::class);
    }

    public function rolesPermissions()
    {
        return $this->hasMany(Permission::class, 'permission_id');
    }
}
