@extends('layouts.admin.app')

@section('content')
    <div>
        <h2>@lang('orders.orders')</h2>
    </div>

    <ul class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">@lang('site.home')</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.orders.index') }}">@lang('orders.orders')</a></li>
        <li class="breadcrumb-item">@lang('site.show')</li>
    </ul>

    <div class="row">

        <div class="col-md-12">

            <div class="tile shadow">

                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ $order->image }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-md-10">
                        <h2>{{ $order->title }}</h2>


                        <p style="font-size: 16px;">{{ $order->description }}</p>

                        <div class="d-flex mb-2">
                            <i class="fa fa-star text-warning" style="font-size: 35px;"></i>
                            <h3 class="m-0 mx-2">{{ $order->name }}</h3>
                            <p class="m-0 align-self-center">@lang('orders.by') {{ $order->child_price }}</p>
                        </div>


                        </p>

                        <hr>

                        {{-- <div class="row" id="order-images">

                            @foreach ($order->images as $image)
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

            $('#order-images').magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

        }); //end of document ready
    </script>
@endpush
