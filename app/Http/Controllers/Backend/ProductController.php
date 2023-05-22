<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Seri;
use App\Models\Car;
use App\Models\Brand;
use App\Models\CarProduct;
use App\Models\seriProduct;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->returnUrl = "/products/product";
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $products = Product::all();
        return view("backend.products.index", ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $categories= Category::all();
        $brands= Brand::all();
        $cars= Car::all();
        $series= Seri::all();
        return view("backend.products.insert_form",["categories"=>$categories,"brands"=>$brands,"cars"=>$cars,"series"=>$series]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return RedirectResponse
     */
    public function store(ProductRequest $request): RedirectResponse
    {
        $carIds = (array) $request->input('car_id');
        $seriIds = (array) $request->input('seri_id');
    
        $product = new Product();
        $data = $this->prepare($request, $product->getFillable());
        $product->fill($data);

        $product->save();
        
        $product->car()->attach($carIds);
        $product->seri()->attach($seriIds);

        return Redirect::to($this->returnUrl);
    }
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return View
     */
    public function edit(Product $product): View
    {
        $carProduct = $product->car;
        
        $seriProduct = $product->seri;


        $categories = Category::all();
        $brands = Brand::all();
        $cars = Car::all();
        $series = Seri::all();
        return view("backend.products.update_form",[
            "categories"=>$categories,
            "brands"=>$brands,
            "cars"=>$cars,
            "series"=>$series,
            "product" => $product,
            "carProduct" => $carProduct,
            "seriProduct" => $seriProduct
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $carIds = (array) $request->input('car_id');
        $seriIds = (array) $request->input('seri_id');
        
        $data = $this->prepare($request, $product->getFillable());
        $product->fill($data);
        $product->save();
        
        $product->car()->sync($carIds);
        $product->seri()->sync($seriIds);
    
        return Redirect::to($this->returnUrl);
    }

    public function show(): View
    {
        $products = Product::all();
        return view("backend.products.index", ["products" => $products]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return JsonResponse
     */
    public function destroy(Product $product): JsonResponse
    {
        $product->delete();
        return response()->json(["message" => "Done", "id" => $product->product_id]);
    }
}