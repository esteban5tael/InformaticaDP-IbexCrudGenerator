<div class="row padding-1 p-1">
    <div class="col-md-12">

        <input type="hidden" name="user_id" id="user_id"value="<?php echo e(auth()->user()->id); ?>">

        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label"><?php echo e(__('Name')); ?></label>
            <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('name', $contact?->name)); ?>" id="name" placeholder="Name">
            <?php echo $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label"><?php echo e(__('Email')); ?></label>
            <input type="text" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('email', $contact?->email)); ?>" id="email" placeholder="Email">
            <?php echo $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="phone" class="form-label"><?php echo e(__('Phone')); ?></label>
            <input type="text" name="phone" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('phone', $contact?->phone)); ?>" id="phone" placeholder="Phone">
            <?php echo $errors->first('phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="city" class="form-label"><?php echo e(__('City')); ?></label>
            <input type="text" name="city" class="form-control <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('city', $contact?->city)); ?>" id="city" placeholder="City">
            <?php echo $errors->first('city', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
        <a href="<?php echo e(route('admin.contacts.index')); ?>" class="btn btn-secondary"><?php echo e(__('Cancel')); ?></a>
    </div>
</div>
<?php /**PATH D:\laragon\www\InformaticaDP-IbexCrudGenerator\resources\views/admin/contacts/form.blade.php ENDPATH**/ ?>