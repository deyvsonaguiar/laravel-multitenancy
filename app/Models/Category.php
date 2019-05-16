<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'company_id'];

    public function Company()
    {
        return $this->belongsTo(Company::class);
    }
}

