<?php

namespace App\Models;

use Illuminate\Container\Attributes\Database;
use Illuminate\Database\Eloquent\Model;
use Stancl\Tenancy\Database\Models\Tenant;

class WeddingTenant extends Model
{
    public function database()
    {
        return $this->hasOne(Database::class);
    }
}
