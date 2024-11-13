<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class products extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view("products");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return "Create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return "product #". $id;
    }

    /** 
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return "Update product #". $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return "Product" . $id . "It is being Deleted";
    }
}