<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalCenter">
    Saugoti
</button>

<!-- Modal -->
<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Norite išsaugoti?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="d-inlines bg-success">
                        Paletės
                    </div>
                    <div class="d-inline">
                       <b><span  class="label" id="palletSecond"></span></b>
                    </div>

                <div class="d-inlines bg-success">
                    Eilutės
                </div>
                <div class="d-inline ">
                    <b><span  class="label" id="eilutesSecond"></span></b>
                </div>

                <div class="d-inlines bg-success">
                   Uždirbta
                </div>
                <div class="d-inline ">
                    <b><span  class="label" id="resultSecond"></span></b> €
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Atgal</button>
                        <button type="submit" class="btn btn-success">
                            Saugoti
                        </button>

            </div>

        </div>
    </div>
</div>
