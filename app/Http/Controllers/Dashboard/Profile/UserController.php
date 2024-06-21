<?php

namespace App\Http\Controllers\Dashboard\Profile;

use App\Actions\Users\StoreUserAction;
use App\Actions\Users\UpdateUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Users\UserStoreRequest;
use App\Http\Requests\Dashboard\Users\UserUpdateRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\App;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    protected $userStatus;
    public function __construct()
    {
        $this->userStatus = User::STATUS;
        $this->middleware('permission:users|users.create|users.edit|users.destroy', ['only' => ['index', 'store']]);
        $this->middleware('permission:users.create', ['only' => ['create', 'store']]);
        $this->middleware('permission:users.edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:users.destroy', ['only' => ['destroy']]);
    }
    public function index()
    {
        try {
            $users = User::paginate(15);
            $userStatus = $this->userStatus;
            $roles = Role::get();
            return view('dashboard.pages.users.view', compact('users', 'userStatus', 'roles'));
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
    public function store(UserStoreRequest $request)
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
    public function show(user $user)
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
    public function update(UserUpdateRequest $request, $id)
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
        $user = User::FindOrFail($id);
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
