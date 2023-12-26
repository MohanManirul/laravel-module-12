@extends('backend.layouts.master')
@section('per_page_meta')
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
@endsection

@section('per_page_title')
    {{ __('Edit Bus Trip | Super Admin Dashboard') }}
@endsection

@push('per_page_css')
<link href="{{ asset('backend/assets/css/select2/form-select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/css/select2/select2-bootstrap-5-theme.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/css/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<style>
    .select2-container--bootstrap-5 + .select2-container--bootstrap-5 {
        z-index: 10 !important;
    }
</style>
<style>
    .text{
        color: #ffffff;
    }
    .danger .text-muted .form-errors .require-span{
        color: red;
    }
    
   
</style>
@endpush


@section('content')
    <div class="page-content">
        <div class="container-fluid">
 
            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">{{ __('Home') }}</a></li>
                                        <li class="breadcrumb-item"><a href="#">{{ __('Bus Trip Management') }}</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('bus.seat.all') }}">{{ __('Bus Trip') }}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ __('Add Bus Trip') }}</li>
                                    </ol>
                                </nav>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">{{ __('Edit Bus Trip') }}</h5>                                    
                                            <a href="{{ route('bus.trip.all') }}" class="btn btn-outline-dark waves-effect waves-light float-end">{{ __('All Bus Trip') }}</a>
                                    
                                    </div>
                                    <div class="card-body">

                                        <form class="ajax-form" action="{{ route('bus.trip.update', ['id' => encrypt($single_trip->id)]) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">
                                                <!-- bus trip date start -->
                                                <div class="col-md-6 col-12 mb-2 form-group ">
                                                    <div class="col-md-6 col-12 mb-2 form-group ">
                                                        <label for="journey_date" class="form-label">{{ __('Bus Trips Date') }}</label><span class="require-span">*</span>
                                                        <input type="date" name="journey_date" value="{{ $single_trip->journey_date }}" class="form-control" id="journey_date" placeholder="{{ __(' Bus Trip Date') }}">                                                        
                                                        <input type="hidden" name="id" value="{{ $single_trip->id }}" class="form-control">
                                                    </div> 
                                                </div>                                                    
                                                <!-- bus trip date ends -->

                                                 <!-- bus name start -->
                                                <div class="col-md-6 col-12 mb-2 form-group">
                                                    <label for="">{{ __('Bus Name') }}</label><span class="require-span">*</span>
                                                    <select class="form-select select2 form-control" name="bus_id" id="bus_id">
                                                        <option selected disabled >{{ __('Select Bus Name') }}</option>
                                                        @foreach ($buses as $bus)                                                            
                                                            <option value="{{ $bus->id }}" @if($single_trip->bus_id == $bus->id) @endif>{{ $bus->name }}  ( {{ $bus->bus_type }} )</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!-- bus name ends --> 

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-outline-success waves-effect waves-light float-end">{{ __('Update') }}</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                    </div> <!-- end .h-100-->

                </div> <!-- end col -->


            </div>

        </div>
        <!-- container-fluid -->
    </div>
@endsection

@push('per_page_js')

    <script src="{{ asset('backend/assets/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/ajax_form_submit.js') }}"></script>

    <script src="{{ asset('backend/assets/js/select2/form-select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/select2/select2.full.min.js') }}"></script>


    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'cancellation_policy' );
    </script>

    <script>
        $(document).ready(function domReady() {
            $(".select2").select2({
                theme: 'bootstrap-5',
                dropdownAutoWidth: true,
                width: '100%',
            });
        });
    </script>
@endpush