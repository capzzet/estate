<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['type', 'deal_type', 'city', 'rooms', 'price', 'address', 'area', 'floor', 'house_floors', 'living_area', 'kitchen_area', 'balcony', 'bathroom', 'view', 'renovation', 'house_type'];

    public function scopeFilter($query, $filters)
    {
        foreach ($filters as $key => $value) {
            if ($value) {
                if ($key === 'price_from') {
                    $query->where('price', '>=', $value);
                } elseif ($key === 'price_to') {
                    $query->where('price', '<=', $value);
                } else {
                    $query->where($key, $value);
                }
            }
        }
        return $query;
    }
}
