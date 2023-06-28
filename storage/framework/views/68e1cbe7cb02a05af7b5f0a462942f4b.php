<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Todo List App in JavaScript tim la salope</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vanta@0.5.24/dist/vanta.net.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  </head>
  <body>
	<div id="vanta-bg"></div>
    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="position: absolute; top: 10px; right: 10px;">
        Logout
    </a>

    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
        <?php echo csrf_field(); ?>
    </form>

    <div class="wrapper">
      <div class="task-input">
        <img src="<?php echo e(asset('images/bars-icon.svg')); ?>" alt="icon">
        <input type="text" placeholder="Add a new task">
      </div>
      <div class="controls">
        <div class="filters">
          <span class="active" id="all">All</span>
          <span id="pending">Pending</span>
          <span id="completed">Completed</span>
        </div>
        <button class="clear-btn">Clear All</button>
      </div>
      <ul class="task-box"></ul>
    </div>

    <script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>

  </body>
</html>
<?php /**PATH /var/www/html/resources/views/dashboard.blade.php ENDPATH**/ ?>