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
                            <b>Priminimai</b>
                        </div>
                        <div class="card-body">
                            {!! Form::open(array('route' => 'memo.store','method'=>'POST')) !!}
                            @include('forms.taskCreate')
                            {!! Form::close() !!}
                        </div>
                        <div class="table-responsive " style="font-family: 'Play', sans-serif;">
                            <div class="form-group">
                        <table class="table table-bordered text-center">
                            <thead>

                            </thead>
                            <tbody>
                            
                        @foreach($taskData as $task)
                                <tr class="col-12">
                                    <td style="font-family: 'Play', sans-serif; font-size: medium" class="col-11"> {{$task->memo_text}}</td>
                                    <td class="col-2">
                                        {!! Form::open([
'method' => 'DELETE',
'route' => ['memo.destroy', $task['id']]]) !!}
                                        {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger','id'=>'deleteButton','onclick'=>'modalDisabledAfterClickDelete()'] )  }}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            </table>
                            </div>
                        </div>
                        @php
                            $pagination_range = 0;
                        @endphp
                        <nav aria-label="Page navigation ">
                            <ul class="pagination justify-content-center">

                                <li class="page-item {{ $taskData->previousPageUrl()==null ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $taskData->previousPageUrl() ?? '#' }}"> <span aria-hidden="true">&laquo;</span></a>
                                </li>


                                @if ($taskData->currentPage() > 1+$pagination_range )

                                    <li class="page-item">
                                        <a class="page-link" href="{{ $taskData->url(1) ?? '#' }}">{{ 1 }}</a>
                                    </li>

                                    @if ($taskData->currentPage() > 1+$pagination_range+1 )
                                        <li class="page-item disabled">
                                            <span class="page-link">&hellip;</span>
                                        </li>
                                    @endif

                                @endif

                                @for ($i=-$pagination_range; $i<=$pagination_range; $i++)

                                    @if ($taskData->currentPage()+$i > 0 && $taskData->currentPage()+$i <= $taskData->lastPage())
                                        <li class="page-item {{ $i==0 ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $taskData->url($taskData->currentPage()+$i) }}">{{ $taskData->currentPage()+$i }}</a>
                                        </li>
                                    @endif

                                @endfor

                                @if ($taskData->currentPage() < $taskData->lastPage()-$pagination_range )

                                    @if ($taskData->currentPage() < $taskData->lastPage()-$pagination_range-1 )
                                        <li class="page-item disabled">
                                            <span class="page-link">&hellip;</span>
                                        </li>
                                    @endif

                                    <li class="page-item">
                                        <a class="page-link" href="{{ $taskData->url($taskData->lastPage()) ?? '#' }}">{{ $taskData->lastPage() }}</a>
                                    </li>

                                @endif

                                <li class="page-item {{ $taskData->nextPageUrl()==null ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $taskData->nextPageUrl() ?? '#' }}"><span aria-hidden="true">&raquo;</span></a>
                                </li>


                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    @else
        @include('errors.sessionEnd')
    @endif
@endsection