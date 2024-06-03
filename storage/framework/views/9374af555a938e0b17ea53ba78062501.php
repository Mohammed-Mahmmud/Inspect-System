 <div class="row">
     <?php if($type =="Edit"): ?>
     <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','value' => ''.e($tools->report_num ?? '').'','label' => 'Report Number :','type' => 'text','name' => 'report_num','id' => 'report_num','readonly' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => ''.e($tools->report_num ?? '').'','label' => 'Report Number :','type' => 'text','name' => 'report_num','id' => 'report_num','readonly' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
     <?php if (isset($component)) { $__componentOriginalda007bd9ac2faaa013619214ac23c7b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda007bd9ac2faaa013619214ac23c7b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.dropdown','data' => ['class' => 'col-6','label' => ''.e(trans('Dashboard/Tublar/tools.JobTicketNumber')).'','name' => 'order_id','id' => 'order_id','disabledOption' => 'Job Ticket Numbers','data' => $orders,'selectedData' => ''.e(optional($tools->getOrders)->id).'','span' => ''.e(trans('Dashboard/Tublar/tools.JobTicketNumber')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','label' => ''.e(trans('Dashboard/Tublar/tools.JobTicketNumber')).'','name' => 'order_id','id' => 'order_id','disabledOption' => 'Job Ticket Numbers','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orders),'selectedData' => ''.e(optional($tools->getOrders)->id).'','span' => ''.e(trans('Dashboard/Tublar/tools.JobTicketNumber')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda007bd9ac2faaa013619214ac23c7b9)): ?>
<?php $attributes = $__attributesOriginalda007bd9ac2faaa013619214ac23c7b9; ?>
<?php unset($__attributesOriginalda007bd9ac2faaa013619214ac23c7b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda007bd9ac2faaa013619214ac23c7b9)): ?>
<?php $component = $__componentOriginalda007bd9ac2faaa013619214ac23c7b9; ?>
<?php unset($__componentOriginalda007bd9ac2faaa013619214ac23c7b9); ?>
<?php endif; ?>
     <br>
     <?php else: ?>
     <?php if (isset($component)) { $__componentOriginalda007bd9ac2faaa013619214ac23c7b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda007bd9ac2faaa013619214ac23c7b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.dropdown','data' => ['class' => 'col-12','label' => ''.e(trans('Dashboard/Tublar/tools.JobTicketNumber')).'','name' => 'order_id','id' => 'order_id','disabledOption' => 'Job Ticket Numbers','data' => $orders,'selectedData' => ''.e(optional($tools->getOrders)->id).'','span' => ''.e(trans('Dashboard/Tublar/tools.JobTicketNumber')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','label' => ''.e(trans('Dashboard/Tublar/tools.JobTicketNumber')).'','name' => 'order_id','id' => 'order_id','disabledOption' => 'Job Ticket Numbers','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orders),'selectedData' => ''.e(optional($tools->getOrders)->id).'','span' => ''.e(trans('Dashboard/Tublar/tools.JobTicketNumber')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda007bd9ac2faaa013619214ac23c7b9)): ?>
<?php $attributes = $__attributesOriginalda007bd9ac2faaa013619214ac23c7b9; ?>
<?php unset($__attributesOriginalda007bd9ac2faaa013619214ac23c7b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda007bd9ac2faaa013619214ac23c7b9)): ?>
<?php $component = $__componentOriginalda007bd9ac2faaa013619214ac23c7b9; ?>
<?php unset($__componentOriginalda007bd9ac2faaa013619214ac23c7b9); ?>
<?php endif; ?>
     <br>
     <?php endif; ?>
     <hr>
     <br>
     <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','placeholder' => 'Enter Work Order','value' => ''.e($tools->work_order ?? '').'','label' => 'Work Order :','type' => 'text','name' => 'work_order','id' => 'work_order']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','placeholder' => 'Enter Work Order','value' => ''.e($tools->work_order ?? '').'','label' => 'Work Order :','type' => 'text','name' => 'work_order','id' => 'work_order']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
     <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','placeholder' => 'Enter Status ','value' => ''.e($tools->status ?? '').'','label' => 'Status :','type' => 'text','name' => 'status','id' => 'reportStatus']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','placeholder' => 'Enter Status ','value' => ''.e($tools->status ?? '').'','label' => 'Status :','type' => 'text','name' => 'status','id' => 'reportStatus']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
     <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-12','placeholder' => 'Enter Procedure','value' => ''.e($tools->procedure ?? '').'','label' => 'Procedure :','type' => 'text','name' => 'procedure','id' => 'procedure']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','placeholder' => 'Enter Procedure','value' => ''.e($tools->procedure ?? '').'','label' => 'Procedure :','type' => 'text','name' => 'procedure','id' => 'procedure']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
     <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-8','placeholder' => 'Enter Specification','value' => ''.e($tools->spec ?? '').'','label' => 'Specification :','type' => 'text','name' => 'spec','id' => 'spec']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-8','placeholder' => 'Enter Specification','value' => ''.e($tools->spec ?? '').'','label' => 'Specification :','type' => 'text','name' => 'spec','id' => 'spec']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>

     <?php if (isset($component)) { $__componentOriginal6b7a0e2af2a74f90351a11108c77d72a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6b7a0e2af2a74f90351a11108c77d72a = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Tools\Methods::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.tools.methods'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Tools\Methods::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','value' => ''.e($tools->methods ?? '').'','label' => 'inspection methods: ','name' => 'methods','span' => 'please Choose Inspection Methods']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6b7a0e2af2a74f90351a11108c77d72a)): ?>
<?php $attributes = $__attributesOriginal6b7a0e2af2a74f90351a11108c77d72a; ?>
<?php unset($__attributesOriginal6b7a0e2af2a74f90351a11108c77d72a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6b7a0e2af2a74f90351a11108c77d72a)): ?>
<?php $component = $__componentOriginal6b7a0e2af2a74f90351a11108c77d72a; ?>
<?php unset($__componentOriginal6b7a0e2af2a74f90351a11108c77d72a); ?>
<?php endif; ?>

     <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter start date','value' => ''.e($tools->st_date ?? '').'','label' => ''.e($examType).' date of inspection :','type' => 'date','name' => 'st_date','id' => 'st_date','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter start date','value' => ''.e($tools->st_date ?? '').'','label' => ''.e($examType).' date of inspection :','type' => 'date','name' => 'st_date','id' => 'st_date','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
     <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter finished data','value' => ''.e($tools->fin_date ?? '').'','label' => ''.e($examType).' due date insp  :','type' => 'date','name' => 'fin_date','id' => 'fin_date','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter finished data','value' => ''.e($tools->fin_date ?? '').'','label' => ''.e($examType).' due date insp  :','type' => 'date','name' => 'fin_date','id' => 'fin_date','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
 <?php if (isset($component)) { $__componentOriginalda007bd9ac2faaa013619214ac23c7b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda007bd9ac2faaa013619214ac23c7b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.dropdown','data' => ['class' => 'col-4','label' => ''.e(trans('Dashboard/Tublar/mudjar.accept')).'','name' => 'accept','id' => 'accept','disabledOption' => 'choose accept contion','data' => $accept,'selectedData' => ''.e(optional($tools->getAccept)->id).'','span' => ''.e(trans('Dashboard/Tublar/mudjar.accept')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','label' => ''.e(trans('Dashboard/Tublar/mudjar.accept')).'','name' => 'accept','id' => 'accept','disabledOption' => 'choose accept contion','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($accept),'selectedData' => ''.e(optional($tools->getAccept)->id).'','span' => ''.e(trans('Dashboard/Tublar/mudjar.accept')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda007bd9ac2faaa013619214ac23c7b9)): ?>
<?php $attributes = $__attributesOriginalda007bd9ac2faaa013619214ac23c7b9; ?>
<?php unset($__attributesOriginalda007bd9ac2faaa013619214ac23c7b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda007bd9ac2faaa013619214ac23c7b9)): ?>
<?php $component = $__componentOriginalda007bd9ac2faaa013619214ac23c7b9; ?>
<?php unset($__componentOriginalda007bd9ac2faaa013619214ac23c7b9); ?>
<?php endif; ?>
     <?php if (isset($component)) { $__componentOriginal1741d654282d946d1524564d69f84501 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1741d654282d946d1524564d69f84501 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.textarea_label','data' => ['class' => 'col-12','span' => 'Enter Summary','placeholder' => 'Enter Summary','value' => ''.e($tools->summary ?? '').'','label' => 'Summary :','name' => 'summary','id' => 'summary','rows' => '4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.textarea_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','span' => 'Enter Summary','placeholder' => 'Enter Summary','value' => ''.e($tools->summary ?? '').'','label' => 'Summary :','name' => 'summary','id' => 'summary','rows' => '4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1741d654282d946d1524564d69f84501)): ?>
<?php $attributes = $__attributesOriginal1741d654282d946d1524564d69f84501; ?>
<?php unset($__attributesOriginal1741d654282d946d1524564d69f84501); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1741d654282d946d1524564d69f84501)): ?>
<?php $component = $__componentOriginal1741d654282d946d1524564d69f84501; ?>
<?php unset($__componentOriginal1741d654282d946d1524564d69f84501); ?>
<?php endif; ?>
 </div>
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/tublar/tools/modal/content.blade.php ENDPATH**/ ?>