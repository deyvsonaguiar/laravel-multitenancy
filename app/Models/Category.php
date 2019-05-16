<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Tenant\TenantScope;
use App\Tenant\TenantModels;

class Category extends Model
{
    use TenantModels;

    protected $fillable = ['name', 'company_id'];

    public function Company()
    {
        return $this->belongsTo(Company::class);
    }
}

