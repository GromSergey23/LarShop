<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ServicesStore extends Controller
{
    public function index(): Collection
    {
        return Product::all();
    }
}
