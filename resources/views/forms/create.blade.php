<div class="card-body text-center">
    <form name="formcalc">
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
        <div class="form-group">
            <label for="pallet" class="col-md-4 control-label"><b>Paletės</b></label>
            <div class="col-md-6 mx-auto">
                <input id="pallet" type="number" class="form-control" min="0"  onkeyup="sumValues(), populateSecondTextBox() " name="pallet" required>
            </div>
        </div>

        <div class="form-group">
            <label for="eilutes" class="col-md-4 control-label"><b>Eilutės</b></label>
            <div class="col-md-6 mx-auto">
                <input id="eilutes" type="number" class="form-control" min="0"  onkeyup="sumValues(), populateSecondTextBox() "  name="eilutes" required>
            </div>
        </div>
        <div class="form-group">
            <label for="vip" class="col-md-4 control-label"><b>VIP</b></label>
            <div class="col-md-6 mx-auto">

                <select id="vip" type="number" class="form-control" min="0"  onchange="sumValues(), populateSecondTextBox() " value="1"  required style="width: 60px; margin:0px auto; display:block;" name="vip">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 mx-auto">
            Uždirbau: <b><span  class="label" id="result" size="5"></span></b> €
        </div>
        <br>
        @include('layouts.addModal')
    </form>
</div>