<?php

namespace App\Http\Controllers;

use App\Repositories\ApiRepository;
use Illuminate\Http\Request;
use App\Repositories\DatabaseRepository;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @param Database $repository
     * @return \Illuminate\Http\Response
     */
    public function index(ApiRepository $repository)
    {
        $products = $repository->all();

        return view('welcome', compact('products'));
    }
}
