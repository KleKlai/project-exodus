@extends('layouts.app')

@section('content')
<!-- <div class="container">

    <div class="row justify-content-center mt-2">
        <div class="col-lg-3 col-6">
        <div class="card">
                <div class="card-body">
                <i class="fa fa-users" style="float: right;"></i>
                </div>
                    <h6 class="font-weight-bold">Users</h6>
                    <h3 class="card-text">{{ $user }}</h3>
                </div>
            </div>
            <a href="#" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
        </div> -->

        <!-- <div class="container-fluid"> -->
        <!-- Small boxes (Stat box) -->
        <!-- <div class="row justify-content-center mt-2">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <!-- <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $user }}</h3>
                <p>Users</p>
              </div>
              <div class="icon">
              <i class="fa fa-users" style="float: right;"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> -->

        <!-- <div class="col-lg-3 col-6">
            <div class="card">
                <div class="card-body">
                <i class="fa fa-paint-brush" aria-hidden="true" style="float: right;"></i>
                    <h6 class="font-weight-bold">Artwork</h6>
                    <h3 class="card-text">{{ $artwork }}</h3>
                </div>
            </div>
        </div> -->
         <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="rowrow justify-content-center mt-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row justify-content-center mt-2">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $user }}</h3>
                <p>Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $artwork }}</h3>
                <p>Artwork</p>
              </div>
              <div class="icon">
                <i class="fa fa-paint-brush"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>560</h3>
                <p>Ticket</p>
              </div>
              <div class="icon">
                <i class="fa fa-ticket"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        <!-- /.row -->
        <!-- Main row -->
 
      </div><!-- /.container-fluid -->
    </section>

        <!-- <div class="col-lg-3 col-6">
            <div class="card">
                <div class="card-body">
                <i class="fa fa-ticket" aria-hidden="true" style="float: right;"></i>
                    <h6 class="font-weight-bold">Ticket</h6>
                    <h3 class="card-text">560</h3>
                </div>
            </div>
        </div> -->

    <!-- </div> -->

    <!-- <div class="row justify-content-center mt-2">
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

            </div> -->

            <!-- @include('services.newsletter') -->
        </div>
    </div>

</div>

@endsection

@section('script')

@endsection
