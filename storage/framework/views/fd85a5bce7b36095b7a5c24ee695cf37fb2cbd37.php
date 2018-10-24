
<?php $__env->startSection('content'); ?>
<?php if(auth::check()): ?>
    <div class="container offsetForNavBar">
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
                        <p>Paskutiniai 5 išsaugoti</p>
                        <p><button class="btn btn-dark"> <a style="color: white;" href="<?php echo e(route('trackerAll')); ?>">Visi mano išsaugoti <i class="fa fa-arrow-alt-circle-right"></i></a></button></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <div class="form-groupto">

                                    <table class="table table-bordered text-center">
                                        <thead>
                                    <tr>
                                        <th>Pal.</th>
                                        <th>Eil.</th>
                                        <th>Vip.</th>
                                        <br>
                                        <th>Val.</th>
                                        <th>Uždirbta
                                            <br>
                                            Data</th>
                                        <th>Ištrinti</th>
                                    </tr>
                                        </thead>
                                        <tbody>
                                    <?php $__currentLoopData = $trackers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tracker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($tracker['pallet']); ?></td>
                                            <td><?php echo e($tracker['eilutes']); ?></td>
                                            <td><?php echo e($tracker['vip']); ?></td>
                                            <td><?php echo e($tracker['valandos']); ?></td>
                                            <td>
                                                <?php echo e(($tracker['pallet'] * 0.11) + ($tracker['eilutes'] * 0.09)+ ($tracker['vip'] * 5)); ?>€
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
<?php else: ?>
    <?php echo $__env->make('errors.sessionEnd', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>