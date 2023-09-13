<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('Cats.index')->with('CatCollection', Cat::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Cats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cat::create( $request->all() );
        return redirect('/Cats');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $Cat)
    {
        return View('Cats.show')->with('CatObject' , $Cat);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cat $Cat)
    {
        return View('Cats.edit')->with('CatObject' , $Cat);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cat $Cat)
    {
        $Cat->update($request->all());
        return redirect('/Cats');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $Cat)
    {
        $Cat->delete();
        return redirect('/Cats');
    }
}
