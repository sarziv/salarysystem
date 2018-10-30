<div class="card-body text-center col-12">
    <div class="row">
    <form class="form-inline">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                <div class="form-group col-10">
                    <input id="memo_text" type="text" class="form-control" max="255" name="memo_text"
                           placeholder="Naujas priminimas">
                </div>
    </form>
        <button id="sendMemo" type="submit" class="btn btn-success col-2" onclick="modalDisabledAfterClickMemo()">
            <i class="fa fa-plus"></i>

        </button>
    </div>
    </div>