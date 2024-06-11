<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        // Получение фильтров из запроса
        $filters = $request->only(['type', 'city', 'rooms', 'price_from', 'price_to', 'address']);

        // Построение запроса с применением фильтров
        $query = Property::query();

        if (isset($filters['type'])) {
            $query->where('type', $filters['type']);
        }

        if (isset($filters['city'])) {
            $query->where('city', 'like', '%' . $filters['city'] . '%');
        }

        if (isset($filters['rooms'])) {
            $query->where('rooms', $filters['rooms']);
        }

        if (isset($filters['price_from'])) {
            $query->where('price', '>=', $filters['price_from']);
        }

        if (isset($filters['price_to'])) {
            $query->where('price', '<=', $filters['price_to']);
        }

        if (isset($filters['address'])) {
            $query->where('address', 'like', '%' . $filters['address'] . '%');
        }

        // Выполнение запроса и получение результата
        $properties = $query->get();

        return view('catalog', compact('properties'));
    }
}
