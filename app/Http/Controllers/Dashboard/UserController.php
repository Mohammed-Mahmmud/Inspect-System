<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Users\UpdateUserAction;
use App\Actions\Users\StoreUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Admins\AdminStoreRequest;
use App\Http\Requests\Dashboard\Admins\AdminUpdateRequest;
use App\Models\Dashboard\Admin;
use Exception;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
    public function index()
    {
        try{
            $users = Admin::where('trash',0)->where('role',2)->paginate(15);
            return view('dashboard.pages.users.view',compact('users')); 
        }
        catch(Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
           }
    }
    public function create()
    {
        try{
         return view('dashboard.pages.users.view');
    }
    catch(Exception $e){
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
       } 
}
    public function store(AdminStoreRequest $request)
    {
        
       try{
        app(StoreUserAction::class)->handle($request->validated());
        return redirect()->route('users.index');
     }catch(Exception $e){
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
      try{
        $user = Admin::findorfail($id);
        return view('dashboard.pages.users.view',compact('user'));
    }
    catch(Exception $e){
        return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
       }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUpdateRequest $request, Admin $user)
    { 
        try{
        app(UpdateUserAction::class)->handle($user,$request->validated());
        return redirect()->route('users.index');
    }
        catch(Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
           }
    }
    

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $user = Admin::findorfail($id);
        try{
        // $user->delete();
        $user->update([
            'trash' =>1
        ]);
           toastr(trans('Dashboard/toastr.destroy') ,'error',trans('Dashboard/toastr.deleted'));
          return back();
        }catch(Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
           }
        }
}

