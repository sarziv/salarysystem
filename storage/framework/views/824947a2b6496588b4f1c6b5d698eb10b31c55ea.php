<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<body>
<div id="app">
    <nav class="navbar navbar-expand-sm" style="background-color: #e3f2fd;">
        <div class="container">
            <!-- Branding Image -->
            <a class="navbar-brand" href="<?php echo e(url('/home')); ?>">
                <?php echo e(config('app.name', 'Laravel')); ?>

            </a>

            <!-- Collapsed Hamburger -->
            <button class="navbar-toggler togglerColor" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="fas fa-angle-double-down"></i>
             </button>

            <div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
                <!-- Left Side Of Navbar -->
                <?php if(!Auth::guest()): ?>
                <hr>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/home"><i class="fas fa-home"></i> Pagrindinis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/add"><i class="fas fa-plus"></i> Pridėti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tracker"><i class="fab fa-stack-overflow"></i> Istorija</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/manage"><i class="far fa-list-alt"></i> Mėnesio alga</a>
                    </li>
                </ul>
                <?php endif; ?>
                <hr>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>"><i class="fas fa-sign-in-alt"></i> Prisijungti</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>"><i class="fas fa-user-plus"></i> Registruotis</a></li>
                    <?php else: ?>
                        <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Atsijungti
                                </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>
</div>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="<?php echo e(asset('js/addCalc.js')); ?>"></script>
</body>
</html>