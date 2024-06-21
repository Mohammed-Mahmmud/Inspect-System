<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Orders\StoreOrderAction;
use App\Actions\Orders\UpdateOrderAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Orders\OrderRequest;
use App\Models\Dashboard\Company;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Rig;
use Exception;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        try {
            $orders = Order::paginate('15');
            $companies = Company::get();
            $rigs = Rig::get();
            return view('dashboard.pages.orders.view', compact('rigs', 'companies', 'orders'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(OrderRequest $request)
    {
        try {
            app(StoreOrderAction::class)->handle($request->validationStore()->validated());
            return redirect()->route('order.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        try {
            $order = Order::FindOrFail($id);
            return view('dashboard.pages.orders.view', compact('order'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(OrderRequest $request, Order $order)
    {
        try {
            app(UpdateOrderAction::class)->handle($order, $request->validationUpdate()->validated());
            return redirect()->route('order.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        // dd( $id );
        try {
            Order::FindOrFail($id)->delete();
            toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
            return back();
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
