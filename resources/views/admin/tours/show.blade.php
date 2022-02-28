@extends('layouts.admin.app')

@section('content')
    <div>
        <h2>@lang('tours.tours')</h2>
    </div>

    <ul class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">@lang('site.home')</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.tours.index') }}">@lang('tours.tours')</a></li>
        <li class="breadcrumb-item">@lang('site.show')</li>
    </ul>

    <div class="row">

        <div class="col-md-12">

            <div class="tile shadow">

                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ $tour->image }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-md-10">
                        <h2>{{ $tour->title }}</h2>


                        <p style="font-size: 16px;">{{ $tour->description }}</p>

                        <div class="d-flex mb-2">
                            <i class="fa fa-star text-warning" style="font-size: 35px;"></i>
                            <h3 class="m-0 mx-2">{{ $tour->adult_price }}</h3>
                            <p class="m-0 align-self-center">@lang('tours.by') {{ $tour->child_price }}</p>
                        </div>


                        </p>

                        <hr>

                        {{-- <div class="row" id="tour-images">

                            @foreach ($tour->images as $image)
                                <div class="col-md-3 my-2">
                                    <a href="{{ $image->image_path }}"><img src="{{ $image->image_path }}"
                                            class="img-fluid" alt=""></a>
                                </div><!-- end of col -->
                            @endforeach

                        </div><!-- end of row --> --}}

                        <hr>


                    </div><!-- end of col  -->

                </div><!-- end of row -->

            </div><!-- end of tile -->

        </div><!-- end of col -->

    </div><!-- end of row -->
@endsection

@push('scripts')
    <script>
        $(function() {

            $('#tour-images').magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

        }); //end of document ready
    </script>
@endpush
