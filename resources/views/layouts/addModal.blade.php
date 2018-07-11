<!-- Button trigger modal -->
<button type="button" id="sendButton" class="btn btn-warning" data-toggle="modal" data-target="#ModalCenter" >
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
                    <div class="">
                        Paletės:
                       <b><span  class="label" id="palletSecond"></span></b>
                    </div>

                <div class="">
                    Eilutės:
                    <b><span  class="label" id="eilutesSecond"></span></b>
                </div>

                <div class="">
                    Vip:
                    <b><span  class="label" id="vipSecond"></span></b>
                </div>

                <div class="">
                   Uždirbta:
                    <b><span  class="label" id="resultSecond"></span></b> €
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Atgal</button>
                        <button id="sendModal" type="submit" class="btn btn-success" onclick="modalDisabledAfterClick()">
                            Saugoti
                        </button>

            </div>

        </div>
    </div>
</div>
