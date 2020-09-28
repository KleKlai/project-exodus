@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('ticket.create') }}" class="btn btn-link">
        + Support Ticket
    </a>

    @foreach($data as $data)
        <a href="{{ route('ticket.show', $data) }}" class="text-decoration-none">
            <div class="card card-body mb-2">
                <p class="lead">Ticket Ref: {{ $data->id }}</p>
                <small><b>Status:</b> {{ $data->status }} | <b>Created:</b> {{ $data->created_at->diffForHumans() }}</small>
            </div>
        </a>
    @endforeach
</div>
@endsection
