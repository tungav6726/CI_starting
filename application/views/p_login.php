<!DOCTYPE>
<html>
	<head>
	<link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.css" ?>" type="text/css">
	 <link rel="stylesheet" href="<?php echo base_url(). "assets" ?> /dist/css/AdminLTE.min.css">
	 <link rel="stylesheet" href="<?php echo base_url(). "assets" ?> /dist/css/AdminLTE.css">
	 <style>
	 	.loginbox{
	 		margin: 180px auto;
	 		width: 450px;
	 		position: relative;
	 		border-radius: 15px;
	 		background: #ffffff;
	 	}
	 	body{
	 		background-color: rgb(209,209,209);
	 	}
	 </style>
	</head>
	<body>
<div class="box box-info loginbox">
            <div class="box-header with-border">
              <h3 class="box-title">Login Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php 
              if(isset($_POST['mask'])){
                  $name = $this->input->post('in_name');
                  $pass = $this->input->post('in_pass');
                  if($name=='admin' && $pass='123456'){
                    header('location:'.base_url().'admin');
                  } elseif($name=='user' && $pass='123456'){
                     header('location:'.base_url().'user');
                  } else {
                     header('location:'.base_url().'login');
                  }
                 // $this->db_model->getLoginData($name, $pass);
              }
            ?>
            <form class="form-horizontal" method="post" action=''>
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="text" name="in_name" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" name="in_pass" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="mask" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
	</body>
</html>