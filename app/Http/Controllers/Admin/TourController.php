<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;

use App\Models\Tour;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TourController extends Controller
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
        return view('admin.tours.index');
    } // end of index
    public function edit(Tour $tour)
    {
        return view('admin.tours.edit', compact('tour'));
    }
    public function data()
    {
        $tours = Tour::with(['genre'])->get();

        return DataTables::of($tours)
            ->addColumn('record_select', 'admin.tours.data_table.record_select')
            ->addColumn('genre', function (Tour $tour) {
                return $tour->genre->title;
            })
            ->editColumn('created_at', function (Tour $tour) {
                return $tour->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.tours.data_table.actions')
            ->rawColumns(['record_select', 'related_movies', 'actions'])
            ->toJson();
    } // end of data

    public function show(Tour $tour)
    {
        return view('admin.tours.show', compact('tour'));
    } // end of show
    public function store(Request $request)
    {
        Tour::create(['title' => $request->title, 'genre_id' => $request->genre_id]);
        session()->flash('success', __('site.created_successfully'));
        return redirect()->route('admin.tours.index');
    }
    public function destroy(Tour $genre)
    {
        $this->delete($genre);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));
    } // end of destroy
    public function create()
    {
        $genres = Genre::all();
        return view('admin.tours.create', compact('genres'));
    }
    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $genre = Tour::FindOrFail($recordId);
            $this->delete($genre);
        } //end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));
    } // end of bulkDelete

    private function delete(Tour $genre)
    {
        $genre->delete();
    } // end of delete

}//end of controller
