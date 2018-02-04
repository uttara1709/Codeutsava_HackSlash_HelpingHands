<?php include_once './header.php'; ?>
<?php 
/*if(!isset($_REQUEST["id"])){
    redirect("event.php");
}*/
$query="select * from app_users where name = $_REQUEST[name]";
$r = run_sql($query);
$orow = mysqli_fetch_array($r);

if(isset($_POST["ministry"])){
    if(empty ($_POST["ministry"])){
        $err = "Ministry Name is req!!";
    }
    else if(empty ($_POST["state"])){
        $err = "State name is req!!";
    } 
    else if(empty ($_POST["Gender"])){
        $err = "Gender is req!!";
    }
    else if(empty ($_POST["name"])){
        $err = "Scheme Name is req!!";
    }
    else if(is_exist($_POST["name"])){
        $err = "Scheme Name Already exist!!";
    }  
    else if(empty ($_POST["beneficiary"])){
        $err = "Beneficiary Name is req!!";
    }
    else if(empty ($_POST["disability"])){
        $err = "Disability is req!!";
    }
    else if(empty ($_POST["salary"])){
        $err = "Salary is req!!";
    }
    else if(empty ($_POST["aim"])){
        $err = "Aim is req!!";
    }
    else {
        $query = "update `scheme` set 
    `Ministry`='$_POST[ministry]', `State`='$_POST[state]', 
       `Gender`='$_POST[gender]', `name` = '$_POST[name]' , `Beneficiary` = '$_POST[beneficiary]'
           , `Disability` = '$_POST[disability]' , `Salary` = '$_POST[salary]' , `Aim` = '$_POST[aim]'
           where id = $_REQUEST[name]
        ";
     $r =run_sql($query);    
     redirect("users.php?msg=3");
    }
}
?>
<div class="row">    
    <div class="col-sm-10 col-sm-offset-1">    
        <h1>Join</h1>
    <form method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="ministry" name="ministry" type="text"  placeholder="Ministry" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="state" name="state" type="text" placeholder="state" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="gender" name="gender" type="text"  placeholder="gender" class="form-control">
                            </div>
                        </div>   
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="name" name="name" type="text"  placeholder="name" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="beneficiary" name="beneficiary" type="text"  placeholder="beneficiary" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="disability" name="disability" type="text"  placeholder="disability" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="salary" name="salary" type="text"  placeholder="salary" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="aim" name="aim" type="text"  placeholder="aim" class="form-control">
                            </div>
                        </div>       
                               
        
    <div  class="form-group">
       <h4 style="color: red;"><?php echo $err;?></h4>
    </div>    
  <div class="form-group"> 
      <button type="submit" class="btn btn-primary" >Update</button>
  </div>
  <div class="form-group"> 
      <a class="btn btn-primary" href="doc_add.php">Reset</a>
  </div>    
</form>
        </div>
</div>    

<?php include_once './footer.php'; ?>
