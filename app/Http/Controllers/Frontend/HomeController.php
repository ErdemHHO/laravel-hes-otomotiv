<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Seri;
use App\Models\Car;
use App\Models\Product;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = Product::all()->where("is_active", true);
        $categories = Category::all();
        $series = Seri::all();
        $cars = Car::all();

        return view("frontend.home.index", ["categories" => $categories,"series" => $series,"cars" => $cars, "products" => $products]);
    }
}