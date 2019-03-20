
<html>
    <head>
    
   <link href="assets/css/Panel.css" rel="stylesheet">
    

  
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    

<style>


</style>


</head>  
<body>
<?php include("../Project/Helper/sideBar.php");?>


  <div  class="Panel">
     <?php require("../Project/Helper/menubar.php");?>

<div class="col-md-8 ">

                           <div class="card">
                            <div class="header">
                           <h2> Edit Profile</h2>
                            </div>
                                <div class="card-body">
                                    <form action=" " method="post">
                                        <div class="row">
                                           
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-control" placeholder="Username" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">

                                                    <label for="exampleInputEmail1">Email address </label>
                                                    <input type="email" name="email" value="" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <div >
                                                     <label>First Name</label>
                                                    <input type="text" class="form-control" placeholder="Company" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Home Address" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                 <label>City</label>
                                                    <input type="text" class="form-control" placeholder="City" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                 <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" value="Andrew">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div >
                                                <label>Postal Code</label>
                                                <input type="number" class="form-control" placeholder="ZIP Code">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button name="update" style="background-color:#414546" class="btn  btn-info  pull-right">Update Profile</button>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
</div>
<!--  CARD -->


</body>
</html>