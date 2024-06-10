<?php

namespace App\Http\Controllers\Dashboard\Tublar;

use App\Actions\Tublar\MudJar\StoreMudJarAction;
use App\Actions\Tublar\MudJar\UpdateMudJarAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Tublar\MudJar\MudJarStoreRequest;
use App\Http\Requests\Dashboard\Tublar\MudJar\MudJarUpdateRequest;
use App\Models\Dashboard\Order;
use App\Models\Dashboard\Tublar\MudJar\MudJar;
use App\ViewModels\Dashboard\MudJarView\MudJarViewModel;
use Exception;
use PDF;
use Illuminate\Http\Request;

class MudJarController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        try {
            $data = session('searchedItems', MudJar::where('type', $request->type)->paginate('30')->withQueryString());
            $type = session('type', $request->type);
            $orders = Order::get();
            return view('dashboard.pages.tublar.mud-jar.view', compact('data', 'orders', 'type'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create(Request $request)
    {
        try {
            return view('dashboard.pages.tublar.mud-jar.crud', new MudJarViewModel($request->type));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(MudJarStoreRequest  $request)
    {
        try {
            app(StoreMudJarAction::class)->handle($request->validated());
            return redirect()->route('mud-jar.reports.create', ['type' => $request->type]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        try {
            $mudjar = MudJar::FindOrFail($id);
            $pdf = PDF::loadView('website.reports.pages.Tublar.MudJar.mudjar', compact('mudjar'));
            return $pdf->stream($mudjar->report_num . '.pdf');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        try {
            $mudjar = MudJar::FindOrFail($id);
            return view('dashboard.pages.tublar.mud-jar.crud', new MudJarViewModel($mudjar->type, $mudjar));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function repeat(string $id)
    {
        try {
            $mudjar = MudJar::FindOrFail($id);
            return view('dashboard.pages.tublar.mud-jar.crud', new MudJarViewModel($mudjar->type, $mudjar));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(MudJarUpdateRequest $request, string $id)
    {
        try {
            $mudjar = MudJar::FindOrFail($id);
            app(UpdateMudJarAction::class)->handle($mudjar, $request->validated());
            return redirect()->route('mud-jar.reports.index', ['type' => $mudjar->type]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        try {
            $mudjar = MudJar::FindOrFail($id);
            $type = $mudjar->type;
            $mudjar->delete();
            toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
            return redirect()->route('mud-jar.reports.index', ['type' => $type]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function download($id)
    {
        try {
            $mudjar = MudJar::FindOrFail($id);
            $pdf = PDF::loadView('website.reports.pages.Tublar.MudJar.mudjar', compact('mudjar'));
            return $pdf->download($mudjar->report_num . '.pdf');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function filter(Request $request)
    {
        try {

            $data = MudJar::where('type', $request->type)->where(function ($query) use ($request) {
                $query->where('order_id', $request->order_id)->orWhere('date', $request->date);
            })->paginate(20)->withQueryString();

            $orders = Order::get();
            $type = $request->type;
            return view('dashboard.pages.tublar.mud-jar.view', compact('data', 'orders', 'type'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
