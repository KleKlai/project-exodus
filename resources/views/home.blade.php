@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row mt-2">
        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="font-weight-bold">{{ "User's" }}</h6>
                    <p class="card-text">{{ $user }}</p>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="font-weight-bold">Artwork</h6>
                    <p class="card-text">{{ $artwork }}</p>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="font-weight-bold">Ticket</h6>
                    <p class="card-text">560</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row justify-content-center mt-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                @can('create art')
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                @endcan

                {{--  <a href="{{ url('contact') }}">Contact</a>  --}}

            </div>

            @include('services.newsletter')
        </div>
    </div>

</div>

@endsection

@section('script')

@endsection
