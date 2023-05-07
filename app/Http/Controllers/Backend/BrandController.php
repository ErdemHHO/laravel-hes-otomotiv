<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->returnUrl = "/brands";
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $brands = Brand::all();
        return view("backend.brands.index", ["brands" => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view("backend.brands.insert_form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BrandRequest $request
     * @return RedirectResponse
     */
    public function store(BrandRequest $request): RedirectResponse
    {
        $brand = new Brand();
        $data = $this->prepare($request, $brand->getFillable());
        $brand->fill($data);
        $brand->save();

        return Redirect::to($this->returnUrl);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Brand $brand
     * @return View
     */
    public function edit(Brand $brand): View
    {
        return view("backend.brands.update_form", ["brand" => $brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BrandRequest $request
     * @param Brand $brand
     * @return RedirectResponse
     */
    public function update(BrandRequest $request, Brand $brand): RedirectResponse
    {
        $data = $this->prepare($request, $brand->getFillable());
        $brand->fill($data);
        $brand->save();

        return Redirect::to($this->returnUrl);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Brand $brand
     * @return JsonResponse
     */
    public function destroy(Brand $brand): JsonResponse
    {
        $brand->delete();
        return response()->json(["message" => "Done", "id" => $brand->brand_id]);
    }
}