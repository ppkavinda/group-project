<template>
    <div class="card bg-success-gradient">
      <div class="card-header no-border">

        <h3 class="card-title">
          <i class="fa fa-calendar"></i>
          Calendar
        </h3>
        <!-- tools card -->
        <div class="card-tools">
          <!-- button with a dropdown -->
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bars"></i></button>
            <div class="dropdown-menu float-right" role="menu">
              <a href="#" class="dropdown-item">Add new event</a>
              <a href="#" class="dropdown-item">Clear events</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">View calendar</a>
            </div>
          </div>
          <button type="button" class="btn btn-success btn-sm" data-widget="collapse">
            <i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-success btn-sm" data-widget="remove">
            <i class="fa fa-times"></i>
          </button>
        </div>
        <!-- /. tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <!--The calendar -->
        <div id="calendar" style="width: 100%"></div>
      </div>
      <!-- /.card-body -->
    </div>
</template>

<script>
	export default {
		name: 'Calendar',
	}
</script>