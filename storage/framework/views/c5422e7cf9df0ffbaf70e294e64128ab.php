<meta charset="utf-8">
<title><?php echo $__env->yieldContent('title'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="STC" name="description">
<!-- App favicon -->
<link rel="shortcut icon" href="<?php echo e(asset('dashboard/assets/images/stc-favicon.png')); ?>">
<link href="<?php echo e(asset('dashboard/assets/libs/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo e(asset('dashboard/assets/libs/dropzone/dropzone.css')); ?>" type="text/css">

<link type="text/css" rel="stylesheet"
    href="<?php echo e(asset('dashboard/assets/css/extensions/fontawesome-5.15.3/css/all.min.css')); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('dashboard/assets/css/extensions/css-all.min.css')); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('dashboard/assets/css/extensions/toastr.css')); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('dashboard/assets/css/extensions/toastr.min.css')); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('dashboard/assets/css/extensions/css-toastr.css')); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('dashboard/assets/css/extensions/select2.min.css')); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('dashboard/assets/css/extensions/dropzone.min.css')); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('dashboard/assets/css/extensions/font.css')); ?>">

<link type="text/css" rel="stylesheet" href="<?php echo e(asset('dashboard/assets/datatables/dataTables.min.css')); ?>">

<link id="fontsLink" href="" rel="stylesheet">

<!-- jsvectormap css -->
<link href="<?php echo e(asset('dashboard/assets/libs/jsvectormap/css/jsvectormap.min.css')); ?>" rel="stylesheet" type="text/css">
<!-- Icons Css -->
<link href="<?php echo e(asset('dashboard/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css">

<?php if(App::getLocale() == 'ar'): ?>
    <!-- App Css-->
    <link href="<?php echo e(asset('dashboard/assets/css/app-rtl.min.css')); ?>" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="<?php echo e(asset('dashboard/assets/css/custom-rtl.min.css')); ?>" rel="stylesheet" type="text/css">
    <!-- Bootstrap Css -->
<?php else: ?>
    <!-- App Css-->
    <link href="<?php echo e(asset('dashboard/assets/css/app.min.css')); ?>" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="<?php echo e(asset('dashboard/assets/css/custom.min.css')); ?>" rel="stylesheet" type="text/css">
    <!-- Bootstrap Css -->
<?php endif; ?>
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

<?php echo $__env->yieldContent('css'); ?>
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/layouts/main-head.blade.php ENDPATH**/ ?>