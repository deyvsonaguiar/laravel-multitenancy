<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Tenant\TenantScope;

class Category extends Model
{
    protected $fillable = ['name', 'company_id'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TenantScope);
    }

    public function Company()
    {
        return $this->belongsTo(Company::class);
    }
}

