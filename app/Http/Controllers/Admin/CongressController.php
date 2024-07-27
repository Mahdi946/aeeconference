<?php

namespace App\Http\Controllers\Admin;

use App\Models\Congress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $request->validate([
            'Name' => 'required',
            'Description' => 'required',
            'StartDate' => 'required',
            'EndDate' => 'required',
        ]);
        try {
            DB::beginTransaction();

            $congress = Congress::create([
                'Name' => $request->Name,
                'Description' => $request->Description,
                'StartDate' => $request->StartDate,
                'EndDate' => $request->EndDate,
                'SecretaryID' => Auth::user()->id,
            ]);





            DB::commit();

        } catch (\Exception $ex) {
            DB::rollBack();
            flash()->error('مشکل در ذخیره سازی دوباره تلاش کنید');
            return redirect()->back();
        }

        flash()->success('کنگره با موفقیت ثبت شد');
        return redirect()->route('Congress.index');

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
        $congress = Congress::findOrFail($id);
        return view('admin.congress.edit', compact('congress'));
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
