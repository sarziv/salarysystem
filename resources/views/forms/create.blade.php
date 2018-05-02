<div class="card-body text-center">
    <form name="formcalc">
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
        <div class="form-group">
            <label for="pallet" class="col-md-4 control-label">Paletes</label>

            <div class="col-md-6 mx-auto">
                <input id="pallet" type="number" class="form-control" value="" name="pallet" required>
            </div>
        </div>
        <div class="form-group">
            <label for="eilutes" class="col-md-4 control-label">Eilutes</label>

            <div class="col-md-6 mx-auto">
                <input id="eilutes" type="number" class="form-control" name="eilutes" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4 mx-auto">
                <button type="button" onclick="sumValues()" class="btn btn-primary">
                    Skaičiuoti
                </button>
            </div>
        </div>
        <div class="col-md-6 mx-auto">
            Uždirbau: <span  class="label" id="result" size="5"></span>
        </div>
        <br>
        <div class="form-group">
            <div class="col-md-6 mx-auto">
                <button type="submit" class="btn btn-danger">
                    Saugoti
                </button>
            </div>
        </div>
    </form>
</div>