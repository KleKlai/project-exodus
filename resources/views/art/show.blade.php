@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 mb-3">
            <img class="picture mb-1 mx-auto d-block" src="{{ url('storage/artwork/'.$art->attachment) }}" alt="art Picture" style="max-width:400px; max-height: 800px;">
        </div>
        <div class="col">

            <div class="btn btn-primary btn-lg  btn-block mb-2">
                {{ strtoupper($art->status) }}
            </div>

            <div class="card">
                <div class="card-header">
                    Details

                    <div class="dropdown float-right">
                        <a href="javascript:void();" class="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="javascript();" data-toggle="modal" data-target="#updateArtModal">Update</a>
                            <a class="dropdown-item" href="{{ route('art.edit', $art) }}">Edit</a>
                            <a class="dropdown-item" href="javascript();" data-toggle="modal" data-target="#deleteArtModal">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="text-muted"for="name">Artist:</label>
                            <a href="#RedirecToUserDetails">
                                <input type="text" class="form-control-plaintext" value="{{ $art->user->name }}" readonly>
                            </a>
                        </div>
                        <div class="form-group col-md-8">
                             <label class="text-muted" for="name">Name:</label>
                            <input type="text" class="form-control-plaintext" value="{{ $art->name }}" readonly>
                        </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-4">
                         <label class="text-muted" for="subject">Subject:</label>
                        <input type="text" class="form-control-plaintext" value="{{ $art->subject }}" readonly>
                    </div>

                    <div class="form-group col-md-4">
                         <label class="text-muted" for="city">City:</label>
                        <input type="text" class="form-control-plaintext" value="{{ $art->city }}" readonly>
                    </div>

                    <div class="form-group col-md-4">
                         <label class="text-muted" for="category">Category:</label>
                        <input type="text" class="form-control-plaintext" value="{{ $art->category }}" readonly>
                    </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                             <label class="text-muted" for="style">Style:</label>
                            <input type="text" class="form-control-plaintext" value="{{ $art->style }}" readonly>
                        </div>

                        <div class="form-group col-md-4">
                             <label class="text-muted" for="medium">Medium:</label>
                            <input type="text" class="form-control-plaintext" value="{{ $art->medium }}" readonly>
                        </div>

                        <div class="form-group col-md-4">
                             <label class="text-muted" for="material">Material:</label>
                            <input type="text" class="form-control-plaintext" value="{{ $art->material }}" readonly>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                             <label class="text-muted" for="size">Size:</label>
                            <input type="text" class="form-control-plaintext" value="{{ $art->size }}" readonly>
                        </div>

                        <div class="form-group col-md-2">
                             <label class="text-muted" for="height">Height:</label>
                            <input type="text" class="form-control-plaintext" value="{{ $art->height }} cm" readonly>
                        </div>

                        <div class="form-group col-md-2">
                             <label class="text-muted" for="width">Width:</label>
                            <input type="text" class="form-control-plaintext" value="{{ $art->width }} cm" readonly>
                        </div>

                        <div class="form-group col-md-2">
                             <label class="text-muted" for="depth">Depth:</label>
                            <input type="text" class="form-control-plaintext" value="{{ $art->depth }} cm" readonly>
                        </div>

                        <div class="form-group col-md-3">
                             <label class="text-muted" for="price">Price:</label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control-plaintext" value="₱ {{ $art->price }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="text-muted" for="description">Description:</span></label>
                        <p>{{ $art->description }}</p>
                    </div>
                </div>
            </div>

            <div class="card mt-2 {{ ($art->status == 'Pending') ? 'd-none' : '' }}" >
                <div class="card-header">Remark</div>
                <div class="card-body">
                    {{ $art->remark ?? 'No Remarks'}}
                </div>
            </div>

            @if (!empty($art->remarks))
                <div class="card mt-2">
                    <div class="card-header">
                        Remarks
                    </div>
                    <div class="card-body">
                        {{ $art->remarks }}
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>

<!-- Update Art Modal -->
<div class="modal fade" id="updateArtModal" tabindex="-1" role="dialog" aria-labelledby="updateArtModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateArtModal">Change Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="{{ url('art/status', $art) }}">
                @csrf
                @method('PATCH')

                <div class="modal-body">
                    <div class="form-group">
                        <label class="text-muted" for="name">Status</label>
                        <select name="status" class="form-control @error('status') is-invalid @enderror">
                            @foreach($status as $data)
                                <option value="{{ $data->name }}" {{ ($data->name == $art->status ? 'selected' : '') }}>
                                    {{ $data->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="remark">Remarks</label>
                        <textarea class="form-control @error('remark') is-invalid @enderror" name="remark" name="remark" rows="2"></textarea>

                        @error('remark')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link text-decoration-none" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
