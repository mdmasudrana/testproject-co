<!DOCTYPE html>
<head>
    <title>user --test</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">

</head>
<body>
<div class="navbar navbar-dark bg-dark">
    <div claass="container">
    
    <a href="<?php echo base_url().'index.php/user/create'?>" class="navbar-brand">Home </a>


    </div>
</div>

<div class="container" style="padding-top: 10px;">
<div class="row">
  <div class="col-md-12">
      <?php 
        $success = $this->session->userdata('success');
        if($success != "") {
        ?>
        <div class="alert alert-success"><?php echo $success;?></div> 
      <?php 
       }
       ?>

        <?php 
        $failure = $this->session->userdata('failure');
        if($failure != "") {
        ?>
        <div class="alert alert-success"><?php echo $failure;?></div> 
      <?php 
       }
       ?>
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <div class="row">
      <div class="col-6"><h3>View User</h3></div>
      <div class="col-6 text-right">
          <a href="<?php echo base_url().'index.php/user/create'?>" class="btn btn-secondary btn-lg">Create</a>
      </div>
    </div>
    <hr>
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
        <th width="50">Edit</th>
        <th width="100">Delete</th>
      </tr>

      <?php if(!empty($miu)) { foreach($miu as $miu) { ?>
        <tr>
         <td><?php echo $miu['id']?></td>
         <td><?php echo $miu['name']?></td>
         <td><?php echo $miu['email']?></td>
         <td><?php echo $miu['address']?></td>
         <td><?php echo $miu['phone']?></td>
         <td>
           <a href="<?php echo base_url().'index.php/user/edit/'.$miu['id']?>" class="btn btn-primary">Edit</a>
         </td>
         
         <td>
           <a href="<?php echo base_url().'index.php/user/delete/'.$miu['name']?>" class="btn btn-danger">Delete</a>
         </td>
        </tr>
      <?php } } else { ?>

          <tr>
            <td colspan="5">Records not found</td>
          </tr>
      <?php } ?>

    </table>
  </div>
</div>
</div>




</body>

</html>