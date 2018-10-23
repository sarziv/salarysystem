@extends('app')
@section('content')

@php
//password placed to env file
$password = $_POST['password'];
if($password ==  env('ADMIN_PASSWORD') ) {
@endphp
<div class="container offsetForNavBar" style="margin-top: 20px">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="card">
                <div class="card-header text-center" style="background-color: #e3f2fd;">
                    Visi Darbuotojai
                    <p>Paskutiniai 3 mėnesiai</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 table-responsive">
                            <div class="form-group">
                                <table class="table  table-bordered text-center">
                                    <thead>
                                    <th>Darbuotojas</th>
                                    <th>Data</th>
                                    <th>Paletės</th>
                                    <th>Eilutės</th>
                                    <th>VIP</th>
                                    <th>Uždirbta</th>
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($admindata as $data)

                                        <tr>
                                            <td>{{$data->name}}</td>
                                            <td>
                                                @switch($data->month)
                                                    @case(1)
                                                    Sausis
                                                    @break

                                                    @case(2)
                                                    Vasaris
                                                    @break

                                                    @case(3)
                                                    Kovas
                                                    @break

                                                    @case(4)
                                                    Balandis
                                                    @break

                                                    @case(5)
                                                    Gegužė
                                                    @break

                                                    @case(6)
                                                    Birželis
                                                    @break

                                                    @case(7)
                                                    Liepa
                                                    @break

                                                    @case(8)
                                                    Rugpjūtis
                                                    @break

                                                    @case(9)
                                                    Rugsėjis
                                                    @break

                                                    @case(10)
                                                    Spalis
                                                    @break

                                                    @case(11)
                                                    Lapkritis
                                                    @break

                                                    @case(12)
                                                    Gruodis
                                                    @break

                                                @endswitch
                                                {{ $data->year }}
                                            </td>

                                            <td>{{$data->totalpallet}}</td>
                                            <td>{{$data->totaleilutes}}</td>
                                            <td>{{$data->totalvip}}</td>
                                            <td>{{($data->totaleilutes * 0.09) + ($data->totalpallet * 0.11) + ($data->totalvip * 5)}}€</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@php
}else{
@endphp
<div class="container" style="margin-top: 20px">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="card">
                <div class="card-header text-center" style="background-color: #e3f2fd;">
                   Administracija
                </div>
                <div class="card-body text-center">
                    <h3>Prisijungti nepavyko!</h3>

                    <button class="btn btn-primary" onclick="goBack()">Atgal</button>

                    <script>
                        function goBack() {
                            window.history.back();
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@php
    }
@endphp
@endsection