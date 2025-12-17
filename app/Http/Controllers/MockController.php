<?php

namespace App\Http\Controllers;

use App\Models\Mock;
use App\Http\Requests\StoreMockRequest;
use App\Http\Requests\UpdateMockRequest;

class MockController extends Controller
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
    public function store(StoreMockRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mock $mock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mock $mock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMockRequest $request, Mock $mock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mock $mock)
    {
        //
    }
}
