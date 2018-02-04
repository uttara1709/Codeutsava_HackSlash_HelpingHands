<?php include_once './header.php'; ?>

<?php include_once './car1.php'; ?>
<br>
<?php
$msg="";
if(isset($_REQUEST["msg"])){
    if($_REQUEST["msg"]==1){
        $msg = "Scheme Added Successfully!!!";
    }
}
echo "<h1 style='color: red'>$msg</h1>";
?>  
<br>
<div class="row">
    <div class="col-sm-6 text-justify">        
        <h1 class="mybg text-center">Helping Hands</h1>
        <p>Indian Government, at all levels, announces Welfare Schemes for a cross section of the society from time to time. These schemes could be either Central, State specific or a joint collaboration between the Centre and the States.</p><br>
        <p>In this section, we have attempted to provide you an easy and single point access to information about several welfare schemes of the Government and their various aspects including eligible beneficiaries, types of benefits, scheme details etc.</p> 
        


    </div>
    <div class="col-sm-6"> 
        <br>
        <img src="img/home.jpg"  height="300">
    </div>
</div>
<div class="row">
    <div class="col-sm-6 text-justify">
        <h1>Mission</h1> 
        <p>Provide care, love and development for all beneficiaries.</p>
        <p>We strive to help as many as possible and focus on those in most urgent need.</p>
    </div>
    <div class="col-sm-6 text-justify">
        <h1>Philosphy</h1> 
        <p>We try to help as many children as possible</p>
        <p>We focus on those in greatest need</p>
        <p>We do not discriminate or avoid difficult cases</p>
        </div>
</div>
<?php include_once './footer.php'; ?>
