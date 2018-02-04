<?php include_once './header.php'; ?>

<div  class="myheading">
<h1>Search your Scheme</h1>
</div>
<br>
<form name="form1" action="result.php" method="post">
<div class="row text-justify" style="font-size: 1.2em;">
    <div class="col-sm-6">
        <h1>Enter the Following Details :</h1>
        <br><br>
        
        <b>State :- </b>
        <select class="form-control" name="State">
            <option value=""> -----------ALL----------- </option>
            <?php
            $query="SELECT DISTINCT State from scheme";
            $r =run_sql($query);  
            while($row= mysqli_fetch_array($r))
            {
            ?>
            <option><?php echo $row["State"]; ?></option>
            <?php 
            }
            ?>   
        </select><br>
        <b>Gender :- </b>
        <select class="form-control" name="Gender">
            <option value=""> -----------ALL----------- </option>
            <?php
            $query="SELECT DISTINCT Gender FROM scheme";
            $r =run_sql($query);  
            while($row= mysqli_fetch_array($r))
            {
            ?>
            <option><?php echo $row["Gender"]; ?></option>
            <?php 
            }
            ?>
            </select><br>
    
       
        <b>Beneficiary :- </b>
        <select class="form-control" name="Beneficiary">
            <option value=""> -----------ALL----------- </option>
            <?php
            $query="SELECT DISTINCT Beneficiary FROM scheme";
            $r =run_sql($query);  
            while($row= mysqli_fetch_array($r))
            {
            ?>
            <option><?php echo $row["Beneficiary"]; ?></option>
            <?php 
            }
            ?>            
        </select><br>
        <b>Disability :- </b>
        <select class="form-control" name="Disability">
            <option value=""> -----------ALL----------- </option>
            <?php
            $query="SELECT DISTINCT Disability FROM scheme";
            $r =run_sql($query);  
            while($row= mysqli_fetch_array($r))
            {
            ?>
            <option><?php echo $row["Disability"]; ?></option>
            <?php 
            }
            ?>        
        </select><br>
        <b>Salary :-</b>
        <select class="form-control" name="Salary">
            <option value=""> -----------ALL----------- </option>
            <?php
            $query="SELECT DISTINCT Salary FROM scheme";
            $r =run_sql($query);  
            while($row= mysqli_fetch_array($r))
            {
            ?>
            <option><?php echo $row["Salary"]; ?></option>
            <?php 
            }
            ?>          
        </select>
        
</div>
</div>
    <br>
    <div> 
      <button type="submit" class="btn btn-primary" >Submit</button>
  </div>
</form>
    

<?php include_once './footer.php'; ?>