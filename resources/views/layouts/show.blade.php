@extends('app')
@section('content')
@if(auth::check())
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <br>
                @include('flash-message')
                <div class="card">
                    <div class="card-header text-center" style="background-color: #e3f2fd;">
                       <b>
                           Istorija
                       </b>
                        <p>Paskutiniai 5 išsaugoti</p>
                        <p><button class="btn btn-dark"> <a style="color: white;" href="{{ route('trackerAll') }}">Visi mano išsaugoti <i class="fa fa-arrow-alt-circle-right"></i></a></button></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <div class="form-group">

                                    <table class="table table-bordered text-center">
                                        <thead>
                                    <tr>
                                        <th>Pal.</th>
                                        <th>Eil.</th>
                                        <th>Vip.</th>
                                        <br>
                                        <th>Val.</th>
                                        <th>Uždirbta
                                            <br>
                                            Data</th>
                                        <th>Ištrinti</th>
                                    </tr>
                                        </thead>
                                        <tbody>
                                    @foreach($trackers as $tracker)
                                        <tr>
                                            <td>{{$tracker['pallet']}}</td>
                                            <td>{{$tracker['eilutes']}}</td>
                                            <td>{{$tracker['vip']}}</td>
                                            <td>{{$tracker['valandos']}}</td>
                                            <td>
                                                {{($tracker['pallet'] * 0.11) + ($tracker['eilutes'] * 0.09)+ ($tracker['vip'] * 3)}}€
                                            <br>
                                               <b>{{$tracker['created_at']->format('y/m/d')}}</b>
                                            </td>

                                            <td>
                                                @include ('layouts.showModal')
                                            </td>
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
@else
    @include('errors.sessionEnd')
@endif
@endsection