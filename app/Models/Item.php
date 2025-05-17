<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id, color_id, size_id, type, old_price, new_price, image, description'];

    public function scopePriceMin($query, $minPrice)
    {
        return $minPrice !== null
            ? $query->whereRaw('COALESCE(new_price, old_price) >= ?', [$minPrice])
            : $query;
    }

    public function scopePriceMax($query, $maxPrice)
    {
        return $maxPrice !== null
            ? $query->whereRaw('COALESCE(new_price, old_price) <= ?', [$maxPrice])
            : $query;
    }

    public function scopeFilterSizes($query, $sizes)
    {
        if(!empty($sizes)){
            return $query->whereIn('size_id', $sizes);
        }
    }

    public function scopeFilterColors($query, $colors)
    {
        if(!empty($colors)){
            return $query->whereIn('color_id', $colors);
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function size()
    {
        return $this->belongsTo(Size::class);
    }
}
