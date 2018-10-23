@extends('app')
@section('content')
    <div class="container offsetForNavBar" style="margin-top: 20px">
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
                    <div class="card-body text-center">
                        <h5 >Mano Statistika</h5>
                        <ul class="list-group list-group-flush col-12">
                            <li class="list-group-item justify-content-around col-auto">
                                Užpildyta dienų:<br>
                                <span class="badge badge-dark col-3">14</span>
                            </li>
                            <li class="list-group-item justify-content-around">
                                Išdirbtos valandos:<br>
                                <span class="badge badge-dark col-3">14</span>
                            </li>
                            <li class="list-group-item justify-content-around">
                                Uždirbti pinigai:<br>
                                <span class="badge badge-dark col-3">1441,7</span>
                            </li>
                            <li class="list-group-item justify-content-around">
                                Papildomos valandos:<br>
                                <span class="badge badge-dark col-3">4,6</span>
                            </li>
                            <li class="list-group-item justify-content-around">
                                Valandinis:<br>
                                <span class="badge badge-dark col-3">14</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
