<?php

namespace App\Http\Controllers;

use App\Models\MockTest;
use App\Http\Requests\StoreMockTestRequest;
use App\Http\Requests\UpdateMockTestRequest;

class MockTestController extends Controller
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
    public function store(StoreMockTestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MockTest $mockTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MockTest $mockTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMockTestRequest $request, MockTest $mockTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MockTest $mockTest)
    {
        //
    }
}
