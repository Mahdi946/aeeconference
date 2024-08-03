<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jury;
use App\Models\User;
use App\Models\Congress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class JuryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $juries = Jury::all();
        return view('admin.jury.index', compact('juries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $congresses = Congress::all();
        $users = User::all();
        return view('admin.jury.create', compact('congresses', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'CongressID' => 'required',
            'users' => 'required',
        ]);
        try {
            DB::beginTransaction();

            $items = $request->users;
            foreach ($items as $item) {
                Jury::create([
                    'CongressID' => $request->CongressID,
                    'UserID' => $item
                ]);
            }


            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            flash()->error('مشکل در ذخیره سازی دوباره تلاش کنید');
            return redirect()->back();
        }

        flash()->success('داوران با موفقیت ثبت شد');
        return redirect()->route('Jury.index');

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
        $jury = Jury::findOrFail($id);
        $congresses = Congress::all();
        $users = User::all();
        return view('admin.jury.edit', compact('congresses','users','jury'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'users' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $location = Jury::findOrFail($id);
        $location->delete();

        flash()->success('داور با موفقیت حذف شد');
        return redirect()->route('Jury.index');
    }
}
