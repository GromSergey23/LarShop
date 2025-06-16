<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServicesStore extends Controller
{
    public function index(): Collection
    {

            return Product::all();
    }

    public function search($search): Collection
    {

        return Product::all()
            ->where(fn($data) => Str::startsWith(Str::lower($data->name), Str::lower($search)));
    }


}
