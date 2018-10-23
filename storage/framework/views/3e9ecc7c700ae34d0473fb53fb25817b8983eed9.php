<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalCenter<?php echo e($tracker['id']); ?>">
    Ištrinti
</button>

<!-- Modal -->

<div class="modal fade" id="ModalCenter<?php echo e($tracker['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ar tikrai norite ištrinti?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-inline "><b class="modalbodyfontwidth">Paletes</b>: <?php echo e($tracker['pallet']); ?></div>
                <br>
                <div class="d-inline "><b class="modalbodyfontwidth">Eilutes</b>: <?php echo e($tracker['eilutes']); ?></div>
                <br>
                <div class="d-inline "><b class="modalbodyfontwidth">Vip</b>: <?php echo e($tracker['vip']); ?></div>
                <br>
                <div class="d-inline bg-warning"><b>Išsaugota</b>: <?php echo e($tracker['created_at']); ?> </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Atgal</button>
                <?php echo Form::open([
'method' => 'DELETE',
'route' => ['add.destroy', $tracker['id']]]); ?>

                <?php echo Form::submit('Ištrinti', ['class' => 'btn btn-danger']); ?>

                <?php echo Form::close(); ?>

            </div>

        </div>
    </div>
</div>
