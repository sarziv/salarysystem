<div class="card-body text-center">
    <form name="formcalc">
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
        <div class="form-group">
            <label for="pallet" class="col-md-4 control-label"><b>Paletės</b></label>
            <div class="col-md-6 mx-auto">
                <input id="pallet" type="number" class="form-control"   onkeyup="sumValues(), populateSecondTextBox() " name="pallet" required>
            </div>
        </div>
        <div class="form-group">
            <label for="eilutes" class="col-md-4 control-label"><b>Eilutės</b></label>
            <div class="col-md-6 mx-auto">
                <input id="eilutes" type="number" class="form-control"  onkeyup="sumValues(), populateSecondTextBox() "  name="eilutes" required>
            </div>
        </div>
        <div class="col-md-6 mx-auto">
            Uždirbau: <b><span  class="label" id="result" size="5"></span></b> €
        </div>
        <br>
        @include('layouts.addModal')
    </form>
</div>