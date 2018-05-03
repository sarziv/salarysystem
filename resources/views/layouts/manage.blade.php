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
                                    <table class="table table-striped text-center">
                                        <thead>
                                        <tr>
                                            <th>Mėnesis</th>
                                            <th>Paletės</th>
                                            <th>Eilutės</th>
                                            <th>Uždirbta</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($manages as $manage)
                                            <tr>
                                                <td>
                                                    @switch($manage->month)
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
                                                    </td>
                                                <td>{{$manage->totalpallet}}</td>
                                                <td>{{$manage->totaleilutes}}</td>
                                                <td>{{($manage->totaleilutes * 0.09) + ($manage->totalpallet * 0.11)}}</td>
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
