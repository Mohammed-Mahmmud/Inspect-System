<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Users\UpdateUserAction;
use App\Actions\Users\StoreUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Admins\AdminStoreRequest;
use App\Http\Requests\Dashboard\Admins\AdminUpdateRequest;
use App\Models\Dashboard\Admin;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
    protected $userStatus;
    public function __construct()
    {
        $this->userStatus = User::STATUS;
    }
    public function index()
    {
        try {
            $users = User::where('status', 'Active')->paginate(15);
            $userStatus = $this->userStatus;
            return view('dashboard.pages.users.view', compact('users', 'userStatus'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function create()
    {
        try {
            return view('dashboard.pages.users.view');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function store(AdminStoreRequest $request)
    {

        try {
            app(StoreUserAction::class)->handle($request->validated());
            return redirect()->route('users.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $user = User::FindOrFail($id);
            return view('dashboard.pages.users.view', compact('user'));
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
            app(UpdateUserAction::class)->handle($user, $request->validated());
            return redirect()->route('users.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $user = Admin::FindOrFail($id);
        try {
            // $user->delete();
            $user->delete();
            toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
            return back();
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
