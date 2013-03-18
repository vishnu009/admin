<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <div class="pull-right">
        <small class="navbar-text">Admin: <?=anchor('admin/profile', $this->session->userdata('admin')); ?> </small>
        <a href="<?=site_url('adminlogin/logout'); ?>" class="btn btn-primary"><i class="icon-road icon-white"></i> Logout</a>
      </div>
    </div>
  </div>
</div>
