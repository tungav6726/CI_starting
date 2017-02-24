<!DOCTYPE>
<html>
	<head>
	<link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.css" ?>" type="text/css">
	 <link rel="stylesheet" href="<?php echo base_url(). "assets" ?> /dist/css/AdminLTE.min.css">
	 <link rel="stylesheet" href="<?php echo base_url(). "assets" ?> /dist/css/AdminLTE.css">
	 <style>
	 	body{
	 		background-color: rgb(209,209,209);
	 	}
	 </style>
	</head>
	<body>
 <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        
        <section class="col-lg-5 connectedSortable ui-sortable"> 
         <button type="submit" class="btn btn-info pull-center" onclick="window.location='<?php echo base_url()."login/out";?>'">Logout</button> <hr>
         <button type="submit" class="btn btn-info pull-center" onclick="window.location='<?php echo base_url()."login/show_data";?>'">Show data</button><hr>
         <form method="post" action="<?php echo base_url()."login/delete_data/";?>">
           <button type="submit" class="btn btn-info pull-center" >Delete name</button>   
         <input type="text" name="abc" class="form-control"  >
         </form>
         
         <div class="box box-info">
            
            <form class="form-horizontal" method="post" >
               <div class="box-header with-border">
               <h3 class="box-title">Id for edit</h3>
            </div>
               <div class="form-group">
                  <label  class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-10">
                    <input type="text" name="id_update"  class="form-control" placeholder="id">
                  </div>
                </div>
               <div class="box-footer">
                 <a class="btn btn-info pull-right" href="<?php echo site_url('login/show_id/3');?>">Show</a>
              </div>
            </form>
          </div>
       <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> Form edit</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url(). "login/add_user" ?>">
              <div class="box-body">
               
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" name="" class="form-control" id="inputEmail3" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" name = "" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" value="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="add" class="btn btn-info pull-right">Add</button>
              </div>
              <!-- /.box-footer -->
            </form>
         </div>
              
            
          </div>
         
<hr>
        </section>
      </div>
             <section class="col-lg-5 connectedSortable ui-sortable">
               <?php if(isset($user)): foreach($user as $data) : ?>
               <h1><?php echo $data['name']; ?></h1><br/>
                <h1><?php echo md5($data['password']); ?></h1>
               <?php endforeach ?>
               <?php else : ?>
               <h1> No record!</h1>
               <?php endif; ?>
        </section>
    <section class="col-lg-7 connectedSortable ui-sortable">
      <?php
      if(isset($_POST['add'])){
        $name = $this->input->post('name');
        $pass = $this->input->post('pass');
        $this->db_crund->add_user($name, $pass);
      }  
      ?>
       
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> Form Add</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url(). "login/add_user" ?>">
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" name = "pass" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="add" class="btn btn-info pull-right">Add</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </section>
    </section>
    
   
	</body>
</html>