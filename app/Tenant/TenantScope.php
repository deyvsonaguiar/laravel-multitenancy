<?php

namespace App\Tenant;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TenantScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $companyId = \Auth::user()->company_id;
        $builder->where('company_id', $companyId);

    }

}
