@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class="card-header">Profile</div>
                <div class="card-body">

                    <form action="{{ route('user.update', $user) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" value="{{ old('email', $user->email) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mobile</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">+63</div>
                                    </div>
                                    <input type="number" name="mobile" class="form-control" value="{{ old('mobile', $user->mobile) }}">
                                </div>
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">{{ __('Category') }}</label>

                            <div class="col-sm-10">
                                <select name="category" id="category" onchange="showOtherDropDown()" class="form-control @error('category') is-invalid @enderror" required>
                                    <option value="" selected>-</option>
                                    <option value="Gallery" {{ ($user->category == 'Gallery') ? 'selected' : '' }}>Gallery</option>
                                    <option value="Regional Group" {{ ($user->category == 'Regional Group') ? 'selected' : '' }}>Regional Group</option>
                                    <option value="Special Projects" {{ ($user->category == 'Special Projects') ? 'selected' : '' }}>Special Projects</option>
                                    <option value="Featured Artist" {{ ($user->category == 'Featured Artist') ? 'selected' : '' }}>Featured Artist</option>
                                </select>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-none" id="gallery">
                            <label for="email" class="col-sm-2 col-form-label">{{ __('Gallery') }}</label>

                            <div class="col-sm-10">
                                <select name="gallery" class="form-control @error('gallery') is-invalid @enderror" id="galleryInput">
                                    <option value="" selected>-</option>
                                    @foreach($gallery as $data)
                                        <option value="{{ $data->name }}" {{ old('gallery') == $data->name ? "selected" :""}}>
                                            {{ $data->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('gallery')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-none" id="regional">
                            <label for="email" class="col-sm-2 col-form-label">{{ __('Regional Group') }}</label>

                            <div class="col-sm-10">
                                <select name="regional" class="form-control @error('regional') is-invalid @enderror" id="regionalInput">
                                    <option value="" selected>-</option>
                                    @foreach($regional as $data)
                                        <option value="{{ $data->name }}" {{ old('regional') == $data->name ? "selected" :""}}>
                                            {{ $data->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('regional')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-none" id="special">
                            <label for="email" class="col-sm-2 col-form-label">{{ __('Special Projects') }}</label>

                            <div class="col-sm-10">
                                <select name="special" class="form-control @error('special') is-invalid @enderror" id="specialInput">
                                    <option value="" selected>-</option>
                                    @foreach($special as $data)
                                        <option value="{{ $data->name }}" {{ old('special') == $data->name ? "selected" :""}}>
                                            {{ $data->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('special')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Biography</label>
                            <div class="col-sm-10">
                                <textarea name="bio" rows="3" class="form-control">{{ old('bio', $user->bio) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Roles</label>
                            <div class="col-sm-10">
                                @foreach ($roles as $role)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $role->name }}" name="roles[]"
                                        @if($user->roles->pluck('name')->contains($role->name)) checked @endif
                                        >
                                        <label class="form-check-label" for="defaultCheck1">
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <button class="btn btn-outline-success">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    Permission
                </div>
                <div class="card-body">
                    <form action="{{ route('override.permission', $user) }}" method="POST" id="override-permission">
                        @csrf

                        @forelse ($permission as $permission)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $permission->name }}" name="permissions[]"
                                @if($user->getAllPermissions()->pluck('name')->contains($permission->name)) checked @endif
                                >
                                <label class="form-check-label" for="defaultCheck1">
                                    {{ $permission->name }}
                                </label>
                            </div>

                        @empty
                            <h4 class="text-center">Not yet verified</h4>
                        @endforelse
                    </form>

                    <button type="submit" class="btn btn-outline-info mt-3 @if(empty($user->verified)) d-none @endif" data-toggle="modal" data-target="#overridePermission">Override</button>

                </div>
            </div>
        </div>
    </div>

</div>

@include('services.user_management_modal')
@endsection

@section('script')
<script>
    function showOtherDropDown(){
        var x = document.getElementById("category").value;
        if(x == "Gallery"){
            document.getElementById("gallery").classList.remove('d-none');
            document.getElementById("special").classList.add('d-none');
            document.getElementById("regional").classList.add('d-none');
            document.getElementById("galleryInput").required = true;
        }
        else if(x == "Special Projects"){
            document.getElementById("special").classList.remove('d-none');
            document.getElementById("gallery").classList.add('d-none');
            document.getElementById("regional").classList.add('d-none');
            document.getElementById("specialInput").required = true;
        }
        else if(x == "Regional Group"){
            document.getElementById("regional").classList.remove('d-none');
            document.getElementById("gallery").classList.add('d-none');
            document.getElementById("special").classList.add('d-none');
            document.getElementById("regionalInput").required = true;
        }
        else {
            document.getElementById("gallery").classList.add('d-none');
            document.getElementById("regional").classList.add('d-none');
            document.getElementById("special").classList.add('d-none');
        }
    }
</script>
@endsection
