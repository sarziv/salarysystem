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
                                     <div class="card-header text-center" style="background-color: #e3f2fd;">
                                         Vartotojas: <b> <?php echo e(Auth::user()->name); ?></b>
                                     </div>
                                     <div class="card-body">
                                         <h5 class="card-title text-center">E-Systema tavo pinigam skaičiuoti</h5>
                                         <p class="card-text ">
                                             <ul>
                                             <p> Nauja algų skaičiavimo sistema.</p>
                                                Siūlykite pasiūlymas apie sistemos tobulinima -> Čia
                                             <a href="https://discord.gg/nEbeTFE">Discord</a>
                                         <p>
                                             Kas naujo?
                                             <ul>
                                             <li>
                                                 Naujas interface
                                             </li>
                                             <li>
                                                 Ištrynimo galimybnes
                                             </li>
                                             <li>
                                                 responcive tables
                                             </li>
                                         </ul>
                                         </p>
                                         </ul>
                                         </p>

                                     </div>
                                 </div>

                            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>