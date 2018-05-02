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
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                    <div class="card-header text-center" style="background-color: #e3f2fd;">
                        Vartotojas: <b> {{ Auth::user()->name }}</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <table class="table table-striped">
                                        <thead>
                                    <tr>
                                        <th>User_id</th>
                                        <th>Paletes</th>
                                        <th>Eilutes</th>
                                        <th>Data</th>
                                    </tr>
                                        </thead>
                                        <tbody>
                                    @foreach($trackers as $tracker)
                                        <tr>
                                            <td>{{$tracker['user_id']}}</td>
                                            <td>{{$tracker['eilutes']}}</td>
                                            <td>{{$tracker['pallet']}}</td>
                                            <td>{{$tracker['created_at']}}</td>
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
@endsection
