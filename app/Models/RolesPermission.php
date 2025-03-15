<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Roles;

class RolesPermission extends Model
{
    use HasFactory;

    public function role()
    {
        return $this->belongsTo(Roles::class);
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
}
