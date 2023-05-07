<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class CarController extends Controller
{
    public function __construct()
    {
        $this->returnUrl = "/cars";
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $cars = Car::all();
        return view("backend.cars.index", ["cars" => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view("backend.cars.insert_form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CarRequest $request
     * @return RedirectResponse
     */
    public function store(CarRequest $request): RedirectResponse
    {
        $car = new Car();
        $data = $this->prepare($request, $car->getFillable());
        $car->fill($data);
        $car->save();

        return Redirect::to($this->returnUrl);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Car $car
     * @return View
     */
    public function edit(Car $car): View
    {
        return view("backend.cars.update_form", ["car" => $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CarRequest $request
     * @param Car $car
     * @return RedirectResponse
     */
    public function update(CarRequest $request, Car $car): RedirectResponse
    {
        $data = $this->prepare($request, $car->getFillable());
        $car->fill($data);
        $car->save();

        return Redirect::to($this->returnUrl);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Car $car
     * @return JsonResponse
     */
    public function destroy(Car $car): JsonResponse
    {
        $car->delete();
        return response()->json(["message" => "Done", "id" => $car->car_id]);
    }
}