<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userRoles = UserRole::all();
        return view('admin.userRole.index', compact('userRoles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.userRole.create', compact('users' , 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'UserID' => 'required',
            'RoleID' => 'required',
        ]);
        try {
            DB::beginTransaction();

            $userRole = UserRole::create([
                'UserID' => $request->UserID,
                'RoleID' => $request->RoleID,
            ]);


            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            flash()->error('مشکل در ذخیره سازی دوباره تلاش کنید');
            return redirect()->back();
        }

        flash()->success(' نقش کاربر با موفقیت ثبت شد');
        return redirect()->route('UserRole.index');

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
        $userRole = UserRole::findOrFail($id);
        $users = User::all();
        $roles = Role::all();
        return view('admin.userRole.edit', compact('userRole' , 'users' , 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $userRole = UserRole::findOrFail($id);
        $userRole->update([
            'UserID' => $request->UserID,
            'RoleID' => $request->RoleID,
        ]);
        flash()->success(' نقش کاربر با موفقیت ویرایش شد');
        return redirect()->route('UserRole.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $userRole = UserRole::findOrFail($id);
        $userRole->delete();
        flash()->success('نقش کاربر با موفقیت حذف شد');
        return redirect()->route('UserRole.index');
    }
}
