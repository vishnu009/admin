<? $this->load->view('includes/header'); ?>
<? $this->load->view('includes/admin_navbar'); ?>
<div class="container">
<div class="content" style="display:none">
  <div class="page-header">
    <h2>Registered Users</h2>
  </div>
  <div class="row">
    <div class="span9 ">
      <table class="table table-striped table-bordered tablesorter" id="tcontacts">
        <thead>
          <tr>
            <th><i class="icon-tags"></i> ID</th>
            <th>Name </th>
            <th> Surname</th>
            <th>Gender</th>
            <th></i> DOB</th>
            <th><i class="icon-envelope"></i> Email </th>
            <th> yoga </th>
            <th> Do yoga </th>
            <th>Other Details</th>
            <th></i> Medi Details </th>
            <th> Surgery Details </th>
            <th> Health conditons </th>
         </tr>
        </thead>
        <tbody>
        <? foreach($users as $user): ?>
          <tr>
            <td><?=$user['id']; ?></td>
            <td><?=$user['firstname']; ?></td>
            <td><?=$user['surname']; ?></td>
            <td><?=$user['gender']; ?></td>
            <td><?=$user['dob']; ?></td>
            <td><?=$user['email']; ?></td>
            <td><?=$user['yoga']; ?></td>
            <td><?=$user['pra_yoga']; ?></td>
            <td><?=$user['other_health']; ?></td>
            <td><?=$user['medical_details']; ?></td>
            <td><?=$user['surgery_details']; ?></td>
            <td><?=$user['health_condtions']; ?></td>
         </tr>
          <? endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="<?=base_url('js/jquery.js'); ?>"></script>
<script src="<?=base_url('js/jquery.tablesorter.js'); ?>"></script>
<script>
$(document).ready(function(){

  $("#tcontacts").tablesorter();

  $(".content").fadeIn(1000);
});
</script>
<? $this->load->view('includes/footer'); ?>
