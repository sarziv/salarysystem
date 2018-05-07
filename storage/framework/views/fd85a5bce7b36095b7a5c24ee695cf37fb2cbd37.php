

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <br>
                <?php echo $__env->make('flash-message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="card">
                    <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>"/>
                    <div class="card-header text-center" style="background-color: #e3f2fd;">
                       <b>
                           Istorija
                       </b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <div class="form-group">

                                    <table class="table table-bordered text-center">
                                        <thead>
                                    <tr>
                                        <th>Pal.</th>
                                        <th>Eil.</th>
                                        <th>Uždirbta
                                            <br>
                                            Data</th>
                                        <th>Ištrinti</th>
                                    </tr>
                                        </thead>
                                        <tbody>
                                    <?php $__currentLoopData = $trackers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tracker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($tracker['eilutes']); ?></td>
                                            <td><?php echo e($tracker['pallet']); ?></td>
                                            <td>
                                                <?php echo e(($tracker['pallet'] * 0.11) + ($tracker['eilutes'] * 0.09)); ?>€
                                            <br>
                                               <b><?php echo e($tracker['created_at']->format('y/m/d')); ?></b>
                                            </td>

                                            <td>
                                                <?php echo $__env->make('layouts.showModal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>