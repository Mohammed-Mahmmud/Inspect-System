<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'reportTitle' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'reportTitle' => false,
]); ?>
<?php foreach (array_filter(([
    'reportTitle' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div>
    <table style="margin-top:-35px;">
        <tbody>
            <tr>
                <td style="text-align: center; width: 30%">
                    <img src="<?php echo e($image); ?>" alt="" height="80" width="100%">
                </td>
                <td style="width: 35%">
                    <h4 style="text-align: center; font-size: 100%;"><?php echo e(ucwords($header['title'])); ?>

                        <br>
                        <?php echo e($reportTitle); ?>

                    </h4>
                </td>
                <td style="font-size: 70%; width: 35%">
                    <div> <?php echo e(ucwords($header['address'])); ?>- Phone: <?php echo e($header['phone1']); ?>, </div>
                    <div><?php echo e($header['phone2']); ?> - Emails: <?php echo e($header['email1']); ?>, <?php echo e($header['email2']); ?></div>
                    <div>Website: <?php echo e($header['website']); ?> - Commercial Registration No:
                        <?php echo e($header['Commercial Registration No']); ?>

                    </div>
                    <div>Fax: <?php echo e($header['fax']); ?> - EGPC Registration No:<?php echo e($header['EGPC Registration No']); ?></div>
                    <div> Tax ID Number: <?php echo e($header['Tax ID Number']); ?></div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/inspection-system/resources/views/components/dashboard/reports/layouts/header.blade.php ENDPATH**/ ?>