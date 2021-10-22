<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'role_name',
        'role_slug'
    ];
    public function users(){
        return $this->hasMany('App\User');
    }
}
