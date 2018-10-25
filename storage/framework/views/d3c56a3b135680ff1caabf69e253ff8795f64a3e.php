
<?php $__env->startSection('content'); ?>
<?php if(auth::check()): ?>
    <div class="container offsetForNavBar">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <br>
                <?php echo $__env->make('flash-message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="card">
                    <div class="card-header text-center" style="background-color: #e3f2fd;">
                        <b>Skaičiuok kiek uždirbai!</b>
                    </div>
                    <div class="card-body">
                        <?php echo Form::open(array('route' => 'add.store','method'=>'POST')); ?>

                        <?php echo $__env->make('forms.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo Form::close(); ?>

                    </div>
                </div>

            </div>

        </div>
    </div>
<?php else: ?>
    <?php echo $__env->make('errors.sessionEnd', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>