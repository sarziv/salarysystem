@extends('app')
@section('content')
    @if(auth::check())
        <div class="container offsetForNavBar">
            <div class="row justify-content-center">
                <div class="col-md-8 col-md-offset-2">
                    <br>
                    @include('flash-message')
                    <div class="card">
                        <div class="card-header text-center" style="background-color: #e3f2fd;">
                            <b>Priminimai</b>
                        </div>
                        <div class="card-body">
Testot

                        </div>
                    </div>

                </div>

            </div>
        </div>
    @else
        @include('errors.sessionEnd')
    @endif
@endsection