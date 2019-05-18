<?php

namespace App\Tenant;

use Illuminate\Database\Eloquent\Model;

trait TenantModels
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TenantScope);

        static::creating(function (Model $obj) {
            $company_id = \Auth::user()->company_id;
            $obj->company_id = $company_id;
        });
    }

}
