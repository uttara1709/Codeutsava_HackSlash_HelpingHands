<?php include_once './header.php'; ?>
<?php 
if(isset($_POST["ministry"])){
    if(empty ($_POST["ministry"])){
        $err = "Ministry Name is req!!";
    }
    else if(empty ($_POST["state"])){
        $err = "State name is req!!";
    } 
    else if(empty ($_POST["gender"])){
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
        $query = "INSERT INTO `scheme` 
    (`Ministry`, `State`, `Gender`, `name`, 
    `Beneficiary`, `Disability`, `Salary`, `Aim`) 
    VALUES ('$_POST[ministry]', '$_POST[state]', '$_POST[gender]', '$_POST[name]', 
    '$_POST[beneficiary]', '$_POST[disability]', '$_POST[salary]', '$_POST[aim]');";
     $r =run_sql($query);    
     
//         $msg="Name : $_POST[fname]
//          \nEMail : $_POST[email]  
//          \nPhone : $_POST[phone]  
//          \nRole : $_POST[role]  
//          ";
//    mail_it(ADMIN_EMAIL, "New user joined Helping Hands!", $msg, null);
//    mail_it($_POST["email"], "Thanks for joining!", "Thanks..." , null);

     
     redirect("index.php?msg=1");
    }
}
?>
<div class="row">    
    <div class="col-sm-10 col-sm-offset-1">    
        <h1>Add Scheme</h1>
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
      <button type="submit" class="btn btn-primary" >Add</button>
  </div>
   
</form>
        </div>
</div>    

<?php include_once './footer.php'; ?>
