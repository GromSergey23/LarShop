<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class ServicesStore extends Controller
{
    public function index(): Collection
    {

        return Product::all();
    }

    public function search($search): Collection
    {

        return Product::all()->where(fn($data) => Str::startsWith(Str::lower($data->name), Str::lower($search)));
    }

    public function sort(Request $request): Collection
    {
        $direction = $request->get('direction');
        switch (Route::currentRouteName()) {
            case 'sort.category':

                return Product::all()->sortBy(fn($product) => $product->collection_type);

            case 'sort.alfa':

                return Product::orderBy('name', $direction)->get();

            case 'sort.count':

                return Product::orderBy('count', $direction)->get();

            case 'sort.price':

                return Product::orderBy('price', $direction)->get();

            default:
                break;
        }
    }
}
