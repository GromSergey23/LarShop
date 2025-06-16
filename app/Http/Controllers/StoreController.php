<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Services\ServicesStore;
use Illuminate\Http\Request;
use Illuminate\View\View;
use JetBrains\PhpStorm\NoReturn;


class StoreController extends Controller
{
    public function __construct(public ServicesStore $servicesStore)
    {

    }

    public function index(): View
    {
        $products = $this->servicesStore->index()->take(20);

        return view('main',[
            'productCollection' => $products,
        ]);
    }

    public function search(Request $request): View
    {

        $products = $this->servicesStore->search($request->get('search'));

        return view('main',[
            'productCollection' => $products,
        ]);
    }
}
