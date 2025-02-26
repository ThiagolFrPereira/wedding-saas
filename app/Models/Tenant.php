<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = ['id'];

    public function domains()
    {
        return $this->hasMany(\Stancl\Tenancy\Database\Models\Domain::class);
    }
}
