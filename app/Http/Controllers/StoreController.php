<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Services\ServicesStore;
use Illuminate\Http\Request;
use Illuminate\View\View;


class StoreController extends Controller
{
    public function __construct(public ServicesStore $servicesStore)
    {

    }

    public function index(): View
    {
        $products = $this->servicesStore->index()->take(10);

        return view('main',[
            'productCollection' => $products,
        ]);
    }

    public function search(Request $request): View
    {
        $products = $this->servicesStore->search($request)->index();
    }
}
