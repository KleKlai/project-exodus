@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">

                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">+63</div>
                                    </div>

                                    <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror"
                                        name="mobile"
                                        value="{{ old('mobile') }}"
                                        required
                                        autofocus
                                        maxlength="10"
                                        minlength="10"
                                    >

                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <select name="category" id="category" onchange="showOtherDropDown()" class="form-control @error('category') is-invalid @enderror" required>
                                    <option value="" selected>-</option>
                                    <option value="Gallery">Gallery</option>
                                    <option value="Regional Group">Regional Group</option>
                                    <option value="Special Projects">Special Projects</option>
                                    <option value="Featured Artist">Featured Artist</option>
                                </select>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-none" id="gallery">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Gallery') }}</label>

                            <div class="col-md-6">
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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Regional Group') }}</label>

                            <div class="col-md-6">
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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Special Projects') }}</label>

                            <div class="col-md-6">
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
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
