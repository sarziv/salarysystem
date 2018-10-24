@extends('app')
@section('content')
@if(auth::check())
    <div class="container offsetForNavBar">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <br>
                @include('flash-message')
                <div class="card">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                    <div class="card-header text-center" style="background-color: #e3f2fd;">
                       <b>
                          Visa Istorija
                       </b>
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
                                                {{($tracker['pallet'] * 0.11) + ($tracker['eilutes'] * 0.09)}}€
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
                @php
                $pagination_range = 1;
                @endphp
                <nav aria-label="Page navigation ">
                    <ul class="pagination justify-content-center">

                        <li class="page-item {{ $trackers->previousPageUrl()==null ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $trackers->previousPageUrl() ?? '#' }}"> <span aria-hidden="true">&laquo;</span></a>
                        </li>


                        @if ($trackers->currentPage() > 1+$pagination_range )

                            <li class="page-item">
                                <a class="page-link" href="{{ $trackers->url(1) ?? '#' }}">{{ 1 }}</a>
                            </li>

                            @if ($trackers->currentPage() > 1+$pagination_range+1 )
                                <li class="page-item disabled">
                                    <span class="page-link">&hellip;</span>
                                </li>
                            @endif

                        @endif

                        @for ($i=-$pagination_range; $i<=$pagination_range; $i++)

                            @if ($trackers->currentPage()+$i > 0 && $trackers->currentPage()+$i <= $trackers->lastPage())
                                <li class="page-item {{ $i==0 ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $trackers->url($trackers->currentPage()+$i) }}">{{ $trackers->currentPage()+$i }}</a>
                                </li>
                            @endif

                        @endfor

                        @if ($trackers->currentPage() < $trackers->lastPage()-$pagination_range )

                            @if ($trackers->currentPage() < $trackers->lastPage()-$pagination_range-1 )
                                <li class="page-item disabled">
                                    <span class="page-link">&hellip;</span>
                                </li>
                            @endif

                            <li class="page-item">
                                <a class="page-link" href="{{ $trackers->url($trackers->lastPage()) ?? '#' }}">{{ $trackers->lastPage() }}</a>
                            </li>

                        @endif

                        <li class="page-item {{ $trackers->nextPageUrl()==null ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $trackers->nextPageUrl() ?? '#' }}"><span aria-hidden="true">&raquo;</span></a>
                        </li>


                    </ul>
                </nav>
            </div>
        </div>
    </div>

@else
    @include('errors.sessionEnd')
@endif
@endsection



