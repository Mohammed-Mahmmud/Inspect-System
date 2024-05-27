<?php

namespace App\Http\Controllers\Dashboard;

use Exception;
use App\Models\Dashboard\Admin;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Actions\Admins\StoreAdminAction;
use App\Actions\Admins\UpdateAdminAction;
use App\Http\Requests\Dashboard\Admins\AdminStoreRequest;
use App\Http\Requests\Dashboard\Admins\AdminUpdateRequest;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        try{
            $admins = Admin::where('trash',0)->where('role',1)->paginate(15);
            return view('dashboard.pages.admins.view',compact('admins')); 
        }
        catch(Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
           }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try{
         return view('dashboard.pages.admins.view');
    }
    catch(Exception $e){
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
       } 
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminStoreRequest $request)
    {
       try{
        app(StoreAdminAction::class)->handle($request->validated());
        return redirect()->route('admins.index');
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
        $admin = Admin::findorfail($id);
        return view('dashboard.pages.admins.view',compact('admin'));
    }
    catch(Exception $e){
        return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
       }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUpdateRequest $request, Admin $admin)
    { 
        try{
        app(UpdateAdminAction::class)->handle($admin,$request->validated());
        return redirect()->route('admins.index');
    }
        catch(Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
           }
    }
    

    /**
     * Remove the specified resource from storage.
     */

    public function destroy( $id)
    {
        $admin = Admin::findorfail($id);

        try{
        // $admin->delete();
        $admin->update([
            'trash' =>1
        ]);
           toastr(trans('Dashboard/toastr.destroy') ,'error',trans('Dashboard/toastr.deleted'));
          return back();
        }catch(Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
           }
        }
}
