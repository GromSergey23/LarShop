<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class ServicesStore extends Controller
{
    public function index(): LengthAwarePaginator
    {
        return Product::orderBy("name")->paginate(10);
    }

    public function search($search): LengthAwarePaginator
    {
        $search_to_lower = Str::lower($search);

        return Product::orderBy("name")->where("name", "regexp", "^$search_to_lower")->paginate(10);
    }

    public function sort(Request $request): LengthAwarePaginator
    {
        $direction = $request->get('direction');
        switch ($request->get('type')) {
            case 'cat':
                return Product::orderBy('collection_type')->paginate(10);
            case 'alfa':
                return Product::orderBy('name', $direction)->paginate(10);
            case 'count':
                return Product::orderBy('count', $direction)->paginate(10);
            case 'price':
                return Product::orderBy('price', $direction)->paginate(10);
            default:
                return Product::paginate(10);
        }
    }
}
