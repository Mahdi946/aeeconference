<?php

namespace App\Http\Controllers\Admin;

use App\Models\Congress;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LocationController extends Controller
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
        // $Congress = Congress::first();
        // return view('admin.location.create', compact('Congress'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Location' => 'required',
            'CongressID' => 'required',
        ]);

        try {
            DB::beginTransaction();

            $location = Location::create([
                'Location' => $request->Location,
                'Phone' => $request->Phone,
                'CongressID' => $request->CongressID,
            ]);




            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            flash()->error('مشکل در ذخیره سازی دوباره تلاش کنید');
            return redirect()->back();
        }

        flash()->success('موقعیت مکانی با موفقیت ثبت شد');
        return view('admin.congress.index');
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
        $location = Location::findOrFail($id);
        return view('admin.location.edit', compact('location'));
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
        $location = Location::findOrFail($id);
        $location->delete();

        flash()->success('موقعیت مکانی با موفقیت حذف شد');
        return redirect()->route('Articles.getArticle');
    }
    public function getLocation(Congress $congress)
    {

        return view('admin.location.create', compact('congress'));

    }
}
