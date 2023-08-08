<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded;

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function category()
    {
        return $this->sub_category->belongsTo(Category::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }

}
