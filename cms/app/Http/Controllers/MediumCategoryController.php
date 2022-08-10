<?php

namespace App\Http\Controllers;

use App\Models\Medium_category;
use Illuminate\Http\Request;


class MediumCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('categories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medium_category  $medium_category
     * @return \Illuminate\Http\Response
     */
    public function show(Medium_category $medium_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medium_category  $medium_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Medium_category $medium_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medium_category  $medium_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medium_category $medium_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medium_category  $medium_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medium_category $medium_category)
    {
        //
    }
}
