<div class="nav-side-menu">
    <div class="brand" style="font-size: large; font-family: 'Titan One', cursive;"><b><?php echo e(config('app.name', 'Laravel')); ?></b></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list text-center">
        <?php if(!Auth::guest()): ?>
        <ul id="menu-content" class="menu-content collapse out">
            <li style="border-top: 1px solid #23282e;">
                <a class="dblock" href="/home">
                    <i class="fa fa-home fa-lg"></i> Pagrindinis
                </a>
            </li>

            <li>
                <a class="dblock" href="/add">
                    <i class="fa fa-plus fa-lg"></i> Pridėti
                </a>
            </li>
            <li>
                <a class="dblock" href="/tracker">
                    <i class="fab fa-stack-overflow fa-lg"></i> Istorija
                </a>
            </li>
            <li>
                <a class="dblock" href="/manage">
                    <i class="fa fa-list-alt fa-lg"></i> Mėnesio alga
                </a>
            </li>
            <?php endif; ?>

            <?php if(Auth::guest()): ?>
            <li style="border-top: 1px solid #23282e;">
                <a class="dblock" href="<?php echo e(route('login')); ?>">
                    <i class="fa fa-sign-in-alt fa-lg"></i> Prisijungti
                </a>
            </li>
            <li>
                <a class="dblock"  href="<?php echo e(route('register')); ?>">
                    <i class="fa fa-user-plus fa-lg"></i> Registruotis
                </a>
            </li>
            <?php else: ?>
                <li>
                    <a class="dblock" href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-user-plus fa-lg"></i> Atsijungti
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>