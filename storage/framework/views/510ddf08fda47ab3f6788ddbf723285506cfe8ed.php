

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <br>
                <div class="card">
                    <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>"/>
                    <div class="card-header text-center" style="background-color: #e3f2fd;">
                        <b>Mėnesio alga</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th>Mėnesis</th>
                                            <th>Paletės</th>
                                            <th>Eilutės</th>
                                            <th>Uždirbta</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $manages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <?php switch($manage->month):
                                                        case (1): ?>
                                                        Sausis
                                                        <?php break; ?>

                                                        <?php case (2): ?>
                                                        Vasaris
                                                        <?php break; ?>

                                                        <?php case (3): ?>
                                                        Kovas
                                                        <?php break; ?>

                                                        <?php case (4): ?>
                                                        Balandis
                                                        <?php break; ?>

                                                        <?php case (5): ?>
                                                        Gegužė
                                                        <?php break; ?>

                                                        <?php case (6): ?>
                                                        Birželis
                                                        <?php break; ?>

                                                        <?php case (7): ?>
                                                        Liepa
                                                        <?php break; ?>

                                                        <?php case (8): ?>
                                                        Rugpjūtis
                                                        <?php break; ?>

                                                        <?php case (9): ?>
                                                        Rugsėjis
                                                        <?php break; ?>

                                                        <?php case (10): ?>
                                                        Spalis
                                                        <?php break; ?>

                                                        <?php case (11): ?>
                                                        Lapkritis
                                                        <?php break; ?>

                                                        <?php case (12): ?>
                                                        Gruodis
                                                        <?php break; ?>

                                                    <?php endswitch; ?>
                                                    </td>
                                                <td><?php echo e($manage->totalpallet); ?></td>
                                                <td><?php echo e($manage->totaleilutes); ?></td>
                                                <td><?php echo e(($manage->totaleilutes * 0.09) + ($manage->totalpallet * 0.11)); ?>€</td>
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