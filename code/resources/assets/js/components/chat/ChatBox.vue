<template>
<div class="card direct-chat direct-chat-primary">
  <div class="card-header">
    <h3 class="card-title">Direct Chat</h3>

    <div class="card-tools">
      <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
      <button type="button" class="btn btn-tool" data-widget="collapse">
        <i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
              data-widget="chat-pane-toggle">
        <i class="fa fa-comments"></i>
      </button>
      <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
      </button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <!-- Conversations are loaded here -->
    <div class="direct-chat-messages">
      <!-- Message. Default to the left -->
      <left-message></left-message>
      <!-- /.direct-chat-msg -->

      <!-- Message to the right -->
      <right-message></right-message>
      <!-- /.direct-chat-msg -->

      <!-- Message. Default to the left -->
      <left-message></left-message>
      <!-- /.direct-chat-msg -->

      <!-- Message to the right -->
      <right-message></right-message>
      <!-- /.direct-chat-msg -->

    </div>
    <!--/.direct-chat-messages-->

    <!-- Contacts are loaded here --> 
    <!-- /.direct-chat-pane -->
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <form action="#" method="post">
      <div class="input-group">
        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
        <span class="input-group-append">
          <button type="button" class="btn btn-primary">Send</button>
        </span>
      </div>
    </form>
  </div>
  <!-- /.card-footer-->
</div>
</template>

<script>
  import LeftMessage from './LeftMessage'
  import RightMessage from './RightMessage'

  export default {
    name: 'ChatBox',
    components: {LeftMessage, RightMessage}
  }
</script>