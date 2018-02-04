
<?php include_once './header.php'; ?>

<!DOCTYPE>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 2px solid;
    text-align: center;
    padding: 10px;
}

</style>
</head>

<body>

<?php 

$state = $_POST['State'];
$gender = $_POST['Gender'];
$beneficiary = $_POST['Beneficiary'];
$disability = $_POST['Disability'];
$salary = $_POST['Salary'];

$query=("SELECT * FROM scheme WHERE State = '".$state."' AND Gender = '".$gender."' AND Beneficiary = '".$beneficiary."' AND Disability = '".$disability."' AND Salary = '".$salary."';");
$r =run_sql($query); 

if(!$r)
{
echo "Error:".(mysqli_error($con));
}
?>
<table border="5">
  <tr>
      <th><u>Ministry</u></th>
    <th><u>State</u></th>
    <th><u>Gender</u></th>
    <th><u>Name</u></th>
    <th><u>Beneficiary</u></th>
    <th><u>Disability</u></th>
    <th><u>Salary</u></th>
    <th><u>Aim</u></th>
  </tr>
  
<?php
while($data=mysqli_fetch_row($r))  
    {
    echo ("<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td><td>$data[7]</td></tr>");
    }
?>
</body>
</html>
