<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'category_id', 'company_id'];

    public function Category() {

        return $this->belongsTo(Category::class);
    }

    public function Company()
    {
        return $this->belongsTo(Company::class);
    }
}
