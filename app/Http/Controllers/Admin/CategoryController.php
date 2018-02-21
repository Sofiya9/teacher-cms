<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         return view('admin.categories.index', [
             'categories' => Category::paginate(10)
        ]);
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
     * @param  \App\Categoryq  $categoryq
     * @return \Illuminate\Http\Response
     */
    public function show(Categoryq $categoryq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoryq  $categoryq
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoryq $categoryq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoryq  $categoryq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoryq $categoryq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoryq  $categoryq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoryq $categoryq)
    {
        //
    }
}
