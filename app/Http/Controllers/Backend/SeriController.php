<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeriRequest;
use App\Models\Seri;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class SeriController extends Controller
{
    public function __construct()
    {
        $this->returnUrl = "/series";
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $series = Seri::all();
        return view("backend.series.index", ["series" => $series]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view("backend.series.insert_form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SeriRequest $request
     * @return RedirectResponse
     */
    public function store(SeriRequest $request): RedirectResponse
    {
        $seri = new Seri();
        $data = $this->prepare($request, $seri->getFillable());
        $seri->fill($data);
        $seri->save();

        return Redirect::to($this->returnUrl);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Seri $seri
     * @return View
     */
    public function edit(Seri $seri): View
    {
        return view("backend.series.update_form", ["seri" => $seri]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SeriRequest $request
     * @param Seri $seri
     * @return RedirectResponse
     */
    public function update(SeriRequest $request, Seri $seri): RedirectResponse
    {
        $data = $this->prepare($request, $seri->getFillable());
        $seri->fill($data);
        $seri->save();

        return Redirect::to($this->returnUrl);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Seri $seri
     * @return JsonResponse
     */
    public function destroy(Seri $seri): JsonResponse
    {
        $seri->delete();
        return response()->json(["message" => "Done", "id" => $seri->seri_id]);
    }
}