<?php $__env->startSection('title', 'Tax | '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Edit Customer</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Customer</li>
                <li class="breadcrumb-item"><a href="#">Edit Customer</a></li>
            </ul>
        </div>

        <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

            </div>
        <?php endif; ?>

        <div class="row">
            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Edit Customer Form</h3>
                    <div class="tile-body">
                        <form class="row" method="POST" action="<?php echo e(route('customer.update', $customer->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group col-md-12">
                                <label class="control-label">Customer Name</label>
                                <input value="<?php echo e($customer->name); ?>" name="name" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" type="text" placeholder="Enter Unit Name">
                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Contact</label>
                                <input value="<?php echo e($customer->mobile); ?>" name="mobile" class="form-control <?php if ($errors->has('mobile')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mobile'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" type="text" placeholder="Enter Unit Name">
                                <?php if ($errors->has('mobile')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mobile'); ?>
                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Address</label>
                                <textarea name="address" class="form-control <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"><?php echo e($customer->address); ?></textarea>
                                <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?>
                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Details</label>
                                <textarea  name="details" class="form-control <?php if ($errors->has('details')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('details'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"><?php echo e($customer->details); ?></textarea>
                                <?php if ($errors->has('details')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('details'); ?>
                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>

                            <div class="form-group col-md-12">
                                <label class="control-label">Customer Credit Balance</label>
                                <input value="<?php echo e($customer->previous_balance); ?>" name="previous_balance" class="form-control <?php if ($errors->has('previous_balance')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('previous_balance'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" type="text" placeholder="Enter Unit Name">
                                <?php if ($errors->has('previous_balance')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('previous_balance'); ?>
                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="form-group col-md-4 align-self-end">
                                <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\codeastro\Laravel\SalesERP-Laravel\resources\views/customer/edit.blade.php ENDPATH**/ ?>