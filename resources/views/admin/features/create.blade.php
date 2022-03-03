@extends('layouts.admin.app')

@section('content')
    <div>
        <h2>@lang('users.tours')</h2>
    </div>

    <ul class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">@lang('site.home')</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.tours.index') }}">@lang('tours.tours')</a></li>
        <li class="breadcrumb-item">@lang('site.create')</li>
    </ul>

    <div class="row">

        <div class="col-md-12">

            <div class="tile shadow">


                <form method="post" action="{{ route('admin.tours.store') }}">
                    @csrf
                    @method('post')

                    @include('admin.partials._errors')

                    {{-- name --}}
                    <div class="form-group">
                        <label>@lang('tours.title')<span class="text-danger">*</span></label>
                        <input type="text" name="title" class="form-control" value="" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>@lang('tours.title')<span class="text-danger">*</span></label>
                        <select name="genre_id" class="form-control select2" required>
                            <option value="">@lang('site.choose') @lang('genres.genres')</option>
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}" {{ $genre->id == old('genre_id') ? 'selected' : '' }}>
                                    {{ $genre->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>@lang('tours.description')<span class="text-danger">*</span></label>
                        <input type="text" name="description" class="form-control" value="" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>@lang('tours.adult_price')<span class="text-danger">*</span></label>
                        <input type="text" name="adult_price" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>@lang('tours.child_price')<span class="text-danger">*</span></label>
                        <input type="text" name="child_price" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i
                                class="fa fa-plus"></i>@lang('site.update')</button>
                    </div>

                </form><!-- end of form -->

            </div><!-- end of tile -->

        </div><!-- end of col -->

    </div><!-- end of row -->
@endsection
