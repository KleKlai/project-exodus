@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">How can we help you?</h1>

        <div class="form-group ">
            <div class="input-group mt-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-search"></i>
                    </div>
                </div>

                <input type="text" class="form-control" placeholder="Describe your issue">
            </div>
        </div>

    </div>
</div>
<div class="container">

    <a href="{{ route('FAQs.create') }}" class="btn btn-link">
        + FAQs
    </a>

</div>
@endsection
