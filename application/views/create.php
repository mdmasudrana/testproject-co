<!DOCTYPE html>
<head>
    <title>create --test</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">

</head>
<body>
<div class="navbar navbar-dark bg-dark">
    <div claass="container">
    <a href="#" class="navbar-brand">Test Project</a>
    </div>
</div>

<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create';?>">
<div class="container" style="padding-top: 10px;">
  <h3>Create account</h3>  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="email" value="<?php echo set_value('email');?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputname">Full name</label>
    <input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control" id="exampleInputEmail1" aria-describedby="name" placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label for="exampleInputname">Phone</label>
    <input type="text" name="phone" value="<?php echo set_value('phone');?>" class="form-control" id="exampleInputAddress" aria-describedby="name" placeholder="phone">
  </div>
  

  <div class="form-group">
    <label for="exampleInputname">Address</label>
    <input type="text" name="address" value="<?php echo set_value('address');?>" class="form-control" id="exampleInputAddress" aria-describedby="name" placeholder="phone">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" name="password" value="<?php echo set_value('password');?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

</html>