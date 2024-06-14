<?php $__env->startSection('template_title'); ?>
    <?php echo e($contact->name ?? __('Show') . " " . __('Contact')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Show')); ?> Contact</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.contacts.index')); ?>"> <?php echo e(__('Back')); ?></a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    <?php echo e($contact->user_id); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    <?php echo e($contact->name); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    <?php echo e($contact->email); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Phone:</strong>
                                    <?php echo e($contact->phone); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>City:</strong>
                                    <?php echo e($contact->city); ?>

                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\InformaticaDP-IbexCrudGenerator\resources\views/admin/contacts/show.blade.php ENDPATH**/ ?>