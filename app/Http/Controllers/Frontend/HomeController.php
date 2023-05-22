<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Seri;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarProduct;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index(): View
    {
        $products = Product::where("is_active", true)->paginate(12);
        $categories = Category::all();        
        $series = Seri::all();
        $cars = Car::all();

        return view("frontend.home.index", ["categories" => $categories,"series" => $series,"cars" => $cars, "products" => $products]);
    }

    public function cars($carSlug = '')
    {
        $car = Car::where('slug', $carSlug)->first();

        if (!$car) {
            abort(404);
        }

        $filteredProducts = $car->product()
                                ->where('is_active', true)
                                ->paginate(10);

        $categories = Category::all();
        $series = Seri::all();
        $cars = Car::all();
        $carImage = CarImage::where('car_id', $car->car_id)->first();

        return view('frontend.home.cars', [
            'categories' => $categories,
            'series' => $series,
            'cars' => $cars,
            'filteredProducts' => $filteredProducts,
            'carSlug' => $carSlug,
            'car'=>$car,
            'carImage' => $carImage
        ]);
    }
    public function categories($carSlug='',$categorySlug = '')
    {
        $car = Car::where('slug', $carSlug)->first();
        $selectedCategory=Category::all()->where("slug",$categorySlug)->first();

        if (!$car || !$selectedCategory) {
            abort(404);
        }


        $filteredProducts = $car->product()
                                ->where('is_active', true)
                                ->where('category_id',$selectedCategory->category_id)
                                ->paginate(10);

        $categories = Category::all();
        $series = Seri::all();
        $cars = Car::all();
        $carImage = CarImage::where('car_id', $car->car_id)->first();

        return view('frontend.home.categories', [
            'categories' => $categories,
            'series' => $series,
            'cars' => $cars,
            'filteredProducts' => $filteredProducts,
            'carSlug' => $carSlug,
            'carImage' => $carImage,
            'car'=>$car
        ]);
    }

    public function products($productSlug= '')
    {
        $products = Product::where('slug', $productSlug)->get();
        $categories = Category::all();
        $series = Seri::all();
        $cars = Car::all();


        return view('frontend.home.products', [
            'categories' => $categories,
            'series' => $series,
            'cars' => $cars,
            'products' => $products,
        ]);
    }

    
    public function search(Request $request): View
    {
        $search = $request->input('search');
        $products = Product::where('is_active', true)
            ->where('name', 'like', '%' . $search . '%')
            ->get();
    
        $categories = Category::all();        
        $series = Seri::all();
        $cars = Car::all();
    
        return view('frontend.home.search', compact('products', 'categories', 'series', 'cars'));
    }

}

