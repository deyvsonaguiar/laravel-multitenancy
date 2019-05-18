<?php

namespace App\Tenant;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TenantScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $company = \Tenant::getTenant();
        if ($company) {
            $builder->where('company_id', $company->id);
        }
    }

}
