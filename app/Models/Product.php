<?php

namespace App\Models;

use App\Tenant\TenantModels;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use TenantModels;

    protected $fillable = ['name', 'description', 'price', 'category_id', 'company_id'];

    public function Category() {

        return $this->belongsTo(Category::class);
    }

    public function Company()
    {
        return $this->belongsTo(Company::class);
    }
}
