
<?php $__env->startSection('content'); ?>
    <div class="container offsetForNavBar" style="margin-top: 20px">
        <div class="row justify-content-center">
            <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>"/>
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
                    <div class="card-body text-center NoMarginBottonP">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item justify-content-around  col-auto">
                                <p> Užpildyta dienų: <a class="btn btn-default btn-sm" data-toggle="collapse"
                                                        href="#collapseUzpildytaDienu" role="button"
                                                        aria-expanded="false" aria-controls="collapseExample">
                                        Kas čia?
                                    </a>
                                </p>
                                <div class="collapse" id="collapseUzpildytaDienu">
                                    Užpildytų įrašų šitą mėnesį. Skaičiuojami pagal kiek dienų užpildyta įrašų.
                                </div>
                                <span class="badge badge-dark col-3">
                                    <?php if($userData != null): ?>
                                        <?php echo e($userData->totalfilled); ?>

                                    <?php else: ?>
                                        Nėra info.
                                    <?php endif; ?>

                                </span>
                            </li>
                            <li class="list-group-item justify-content-around">
                                <p> Išdirbtos valandos: <a class="btn btn-default btn-sm" data-toggle="collapse"
                                                           href="#collapseIsdirbtosValandos" role="button"
                                                           aria-expanded="false" aria-controls="collapseExample">
                                        Kas čia?
                                    </a>
                                </p>
                                <div class="collapse" id="collapseIsdirbtosValandos">
                                    Užpildyta įrašų šitą męnesį, 8 Darbo valandos per įrašą ir Papildomos valandos.
                                </div>
                                <span class="badge badge-dark col-3">
                                     <?php if($userData != null): ?>
                                        <?php echo e($userData->totalfilled * 8 + $userData->totalvalandos); ?>

                                    <?php else: ?>
                                        Neužpildyta.
                                    <?php endif; ?>

                                </span>
                            </li>
                            <li class="list-group-item justify-content-around">
                                <p> Uždirbti pinigai: <a class="btn btn-default btn-sm" data-toggle="collapse"
                                                         href="#collapseUzdirbtiPinigai" role="button"
                                                         aria-expanded="false" aria-controls="collapseExample">
                                        Kas čia?
                                    </a>
                                </p>
                                <div class="collapse" id="collapseUzdirbtiPinigai">
                                    Šito mėnesio uždibti pinigai,
                                    <div style="color: red">be papildomų valandų jos skaičiuojamos atskirai.</div>
                                </div>
                                <span class="badge badge-dark col-3">
                                    <?php if($userData != null): ?>
                                        <?php echo e(($userData->totaleilutes * 0.09) + ($userData->totalpallet * 0.11) + ($userData->totalvip * 5)); ?>

                                    <?php else: ?>
                                        Nėra info.
                                    <?php endif; ?>
                                    €</span>
                            </li>
                            <li class="list-group-item justify-content-around">
                                <p> Papildomos valandos: <a class="btn btn-default btn-sm" data-toggle="collapse"
                                                            href="#collapsePapildomosValandos" role="button"
                                                            aria-expanded="false" aria-controls="collapseExample">
                                        Kas čia?
                                    </a>
                                </p>
                                <div class="collapse" id="collapsePapildomosValandos">
                                    Tavo pipildomos valandos , atėjimas ankščiau ir t.t.
                                </div>
                                <span class="badge badge-dark col-3">
                                    <?php if($userData != null): ?>
                                        <?php echo e($userData->totalvalandos); ?>

                                    <?php else: ?>
                                        Nėra info.
                                    <?php endif; ?>
                                </span>
                            </li>
                            <li class="list-group-item justify-content-around">
                                <p> Valandinis: <a class="btn btn-default btn-sm" data-toggle="collapse"
                                                   href="#collapseValandinis" role="button"
                                                   aria-expanded="false" aria-controls="collapseExample">
                                        Kas čia?
                                    </a>
                                </p>
                                <div class="collapse" id="collapseValandinis">
                                    Tavo uždirbti pinigai padalinus ir tavo išdirbtų valandų (8 + papildomos valandos).
                                </div>
                                <span class="badge badge-dark col-3">
                                   <?php if($userData != null): ?>
                                        <?php echo e(round((($userData->totaleilutes * 0.09) + ($userData->totalpallet * 0.11) + ($userData->totalvip * 5)) / ($userData->totalfilled * 8 + $userData->totalvalandos),2)); ?>

                                        €
                                    <?php else: ?>
                                        Nėra info.
                                    <?php endif; ?>
                                     </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>