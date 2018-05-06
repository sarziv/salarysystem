<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalCenter{{$tracker['eilutes']}}">
    Ištrinti
</button>

<!-- Modal -->
<div class="modal fade" id="ModalCenter{{$tracker['eilutes']}}" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ar tikrai norite ištrinti?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="d-inline "><b>Paletes</b> | {{$tracker['pallet']}}</div>
                <br>
                <div class="d-inline "><b>Eilutes</b> | {{$tracker['eilutes']}}</div>
                <br>
                <div class="d-inline bg-warning"><b>Išsaugota</b> | {{$tracker['created_at']}} </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Atgal</button>
                {!! Form::open([
'method' => 'DELETE',
'route' => ['add.destroy', $tracker['id']]]) !!}
                {!! Form::submit('Ištrinti', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>
