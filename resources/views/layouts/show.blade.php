@extends('app')
@section('content')
@if(auth::check())
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <br>
                @include('flash-message')
                <div class="card">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                    <div class="card-header text-center" style="background-color: #e3f2fd;">
                       <b>
                           Istorija
                       </b>
                        <p>Paskutiniai 5 išsaugoti</p>
                        <p><a href="{{ route('trackerAll') }}">Visi mano išsaugoti <i class="fa fa-arrow-alt-circle-right"></i></a></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <div class="form-groupto">

                                    <table class="table table-bordered text-center">
                                        <thead>
                                    <tr>
                                        <th>Pal.</th>
                                        <th>Eil.</th>
                                        <th>VIP</th>
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
                                            <td>
                                                {{($tracker['pallet'] * 0.11) + ($tracker['eilutes'] * 0.09)+ ($tracker['vip'] * 5)}}€
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