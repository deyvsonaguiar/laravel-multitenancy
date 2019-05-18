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
            $company = \Tenant::getTenant();
            if ($company) {
                $obj->company_id = $company->id;
            }
        });
    }

}
