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
                    <p class="card-text">{{ $ticket }}</p>
                </div>
            </div>
        </div>

    </div>

    <a href="{{ route('export') }}" class="btn btn-success mt-2">Export</a>

</div>

@include('services.home_modal')

@endsection

@section('script')

@endsection
