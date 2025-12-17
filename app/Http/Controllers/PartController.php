<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Http\Requests\StorePartRequest;
use App\Http\Requests\UpdatePartRequest;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Part $part)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Part $part)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartRequest $request, Part $part)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Part $part)
    {
        //
    }
}
