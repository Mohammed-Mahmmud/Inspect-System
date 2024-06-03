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
                    <h4 style="text-align: center; font-size: 100%;"><?php echo e(ucwords($title)); ?>

                        <br>
                        <?php echo e($reportTitle); ?>

                    </h4>
                </td>
                <td style="font-size: 70%; width: 35%">
                    <div> <?php echo e(ucwords($address)); ?>- Phone: <?php echo e($phone1); ?>, </div>
                    <div><?php echo e($phone2); ?> - Emails: khaled.soliman@stc-eg.com, abbas@stc-eg.com</div>
                    <div>Website: www.stc-eg.com - Commercial Registration No: 76451</div>
                    <div>Fax: +20225175939 - EGPC Registration No:122 / Dec 2022</div>
                    <div> Tax ID Number: 479-427-860 - Ref.No:</div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/components/dashboard/reports/layouts/header.blade.php ENDPATH**/ ?>