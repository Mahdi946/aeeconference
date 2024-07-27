<?php

namespace App\Http\Controllers\Admin;

use App\Models\Congress;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CongressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Congresses = Congress::all();

        return view('admin.congress.index', compact('Congresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.congress.create');
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
