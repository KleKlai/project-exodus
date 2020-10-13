@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{ route('art.create') }}" class="btn btn-link">
        + Artworks
    </a>

    <table id="myTable" class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Artist</th>
                <th scope="col">Category</th>
                <th scope="col">Subject</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

                @forelse($data as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->user->name }}</td>
                        <td>{{ $data->category }}</td>
                        <td>{{ $data->subject }}</td>
                        <td>₱ {{ $data->price }}</td>
                        <td>{{ $data->status }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('art.show', $data) }}">view</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="12" class="text-center">No Data</td>
                    </tr>
                @endforelse
        </tbody>
    </table>

</div>

@endsection
