<?php

namespace App\Http\Controllers\Dashboard;

use Exception;
use App\Http\Controllers\Controller;
use App\Actions\Admins\StoreAdminAction;
use App\Actions\Admins\UpdateAdminAction;
use App\Http\Requests\Dashboard\Admins\AdminStoreRequest;
use App\Http\Requests\Dashboard\Admins\AdminUpdateRequest;
use App\Models\User;

class AdminController extends Controller
{
    protected $userStatus;
    public function __construct()
    {
        $this->userStatus = User::STATUS;
    }

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        try {
            $admins = User::paginate(15);
            $userStatus = $this->userStatus;
            return view('dashboard.pages.admins.view', compact('admins', 'userStatus'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $userStatus = $this->userStatus;
            return view('dashboard.pages.admins.view', compact('userStatus'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminStoreRequest $request)
    {
        try {
            app(StoreAdminAction::class)->handle($request->validated());
            return redirect()->route('admins.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $admin = User::FindOrFail($id);
            $userStatus = $this->userStatus;
            return view('dashboard.pages.admins.view', compact('admin', 'userStatus'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUpdateRequest $request, $id)
    {
        try {
            $user = User::FindOrFail($id);
            app(UpdateAdminAction::class)->handle($user, $request->validated());
            return redirect()->route('admins.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $admin = User::FindOrFail($id);
        try {
            $admin->delete();
            toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
            return back();
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
