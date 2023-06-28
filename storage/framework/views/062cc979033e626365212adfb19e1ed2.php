<?php $__env->startSection('title'); ?>
    T2P Test - Register
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="threejs-background" class="fixed top-0 left-0 w-screen h-screen z-0"></div>
    <div class="relative flex items-center justify-center h-screen z-10">
        <div class="flex justify-center items-center bg-white rounded-lg shadow-lg max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl">
            <form class="p-8" method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>
                <h2 class="text-3xl font-bold text-center mb-4">Register</h2>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input type="text" class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:border-blue-500" id="name" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-red-500 mt-2"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:border-blue-500" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-red-500 mt-2"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
                    <input type="password" class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:border-blue-500" id="password" name="password" required>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-red-500 mt-2"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirm Password:</label>
                    <input type="password" class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:border-blue-500" id="password_confirmation" name="password_confirmation" required>
                    <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-red-500 mt-2"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">Register</button>

                <div class="text-center mt-4">
                    <a href="<?php echo e(route('login')); ?>" class="text-blue-500">Login</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.root', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yanis/Desktop/test-technique-t2p-master/resources/views/register.blade.php ENDPATH**/ ?>