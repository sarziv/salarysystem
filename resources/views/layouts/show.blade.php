@extends('app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <br>
                <div class="card">
                    <div class="card-header text-center" style="background-color: #e3f2fd;">
                        Vartotojas: <b> {{ Auth::user()->name }}</b>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title:</strong>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Body:</strong>

                                </div>
                            </div>
                        </div>
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
