<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Seri;
use App\Models\Car;
use App\Models\Brand;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->returnUrl = "/products";
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
        $categories= Category::all()->where("is_active",true);
        $brands= Brand::all()->where("is_active",true);
        $cars= Car::all()->where("is_active",true);
        $series= Seri::all()->where("is_active",true);
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
        
        $product = new Product();
        $data = $this->prepare($request, $product->getFillable());
        $product->fill($data);
        $product->save();

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
        $categories= Category::all()->where("is_active",true);
        $brands= Brand::all()->where("is_active",true);
        $cars= Car::all()->where("is_active",true);
        $series= Seri::all()->where("is_active",true);
        return view("backend.products.update_form",["categories"=>$categories,"brands"=>$brands,"cars"=>$cars,"series"=>$series]);
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
        $data = $this->prepare($request, $product->getFillable());
        $product->fill($data);
        $product->save();

        return Redirect::to($this->returnUrl);
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
        return response()->json(["message" => "Done", "id" => $product->Product_id]);
    }
}