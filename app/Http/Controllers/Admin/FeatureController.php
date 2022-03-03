<?php

namespace App\Http\Controllers\Admin;
use App\Models\Feature;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
class FeatureController extends Controller
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
        return view('admin.features.index');
    } // end of index

    public function data()
    {
        $features = Feature::all();

        return DataTables::of($features)
            ->addColumn('record_select', 'admin.features.data_table.record_select')
          
            ->editColumn('created_at', function (Feature $feature) {
                return $feature->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.features.data_table.actions')
            ->rawColumns(['record_select', 'related_movies', 'actions'])
            ->toJson();
    } // end of data
    public function store(Request $request)
    {
        Feature::create(['title' => $request->title]);
        session()->flash('success', __('site.created_successfully'));
        return redirect()->route('admin.features.index');
    }
    public function destroy(Feature $feature)
    {
        $this->delete($feature);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));
    } // end of destroy
    public function create()
    {
        return view('admin.features.create');
    }
    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $feature = Feature::FindOrFail($recordId);
            $this->delete($feature);
        } //end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));
    } // end of bulkDelete

    private function delete(Feature $feature)
    {
        $feature->delete();
    } // end of delete

}//end of controller

