<div class="card-body text-center">
    <form name="formcalc">
        <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>"/>
        <div class="form-group">
            <label for="pallet" class="col-md-4 control-label"><b>Paletės</b></label>

            <div class="col-md-6 mx-auto">
                <input id="pallet" type="number" class="form-control" onkeyup="sumValues()" name="pallet" required>
            </div>
        </div>
        <div class="form-group">
            <label for="eilutes" class="col-md-4 control-label"><b>Eilutės</b></label>

            <div class="col-md-6 mx-auto">
                <input id="eilutes" type="number" class="form-control" onkeyup="sumValues()" name="eilutes" required>
            </div>
        </div>
        <div class="col-md-6 mx-auto">
            Uždirbau: <b><span  class="label" id="result" size="5"></span></b>
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