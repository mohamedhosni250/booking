<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;

use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_genres')->only(['index']);
        $this->middleware('permission:create_genres')->only(['create', 'store']);
        $this->middleware('permission:update_genres')->only(['edit', 'update']);
        $this->middleware('permission:delete_genres')->only(['delete', 'bulk_delete']);
    } // end of __construct

    public function index()
    {
        return view('admin.orders.index');
    } // end of index
    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }
    public function data()
    {
        $orders = Order::with(['user'])->get();

        return DataTables::of($orders)
            ->addColumn('record_select', 'admin.orders.data_table.record_select')

            ->editColumn('created_at', function (Order $order) {
                return $order->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.orders.data_table.actions')
            ->rawColumns(['record_select', 'related_movies', 'actions'])
            ->toJson();
    } // end of data

    public function show(Order $order)

    {


        return view('admin.orders.show', compact('order'));
    } // end of show
    public function store(Request $request)
    {
        Order::create(['name' => $request->name]);
        session()->flash('success', __('site.created_successfully'));
        return redirect()->route('admin.orders.index');
    }
    public function destroy(Order $genre)
    {
        $this->delete($genre);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));
    } // end of destroy
    public function create()
    {
        $genres = Genre::all();
        return view('admin.orders.create', compact('genres'));
    }
    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $genre = Order::FindOrFail($recordId);
            $this->delete($genre);
        } //end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));
    } // end of bulkDelete

    private function delete(Order $genre)
    {
        $genre->delete();
    } // end of delete

}//end of controller
