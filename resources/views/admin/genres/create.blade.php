@extends('layouts.admin.app')

@section('content')
    <div>
        <h2>@lang('users.genres')</h2>
    </div>

    <ul class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">@lang('site.home')</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.genres.index') }}">@lang('genre.gernres')</a></li>
        <li class="breadcrumb-item">@lang('site.create')</li>
    </ul>

    <div class="row">

        <div class="col-md-12">

            <div class="tile shadow">

                <form method="post" action="{{ route('admin.genres.store') }}">
                    @csrf
                    @method('post')

                    @include('admin.partials._errors')

                    {{-- name --}}
                    <div class="form-group">
                        <label>@lang('genres.name')<span class="text-danger">*</span></label>
                        <input type="text" name="title" class="form-control" value="{{ old('name') }}" required
                            autofocus>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i
                                class="fa fa-plus"></i>@lang('site.create')</button>
                    </div>

                </form><!-- end of form -->

            </div><!-- end of tile -->

        </div><!-- end of col -->

    </div><!-- end of row -->
@endsection
