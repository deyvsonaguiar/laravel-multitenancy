<?php

namespace App\Tenant;

trait TenantModels
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TenantScope);
    }

}
