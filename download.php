<?php 
session_start();
//error_reporting(0);
session_regenerate_id(true);
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
	header("Location: index.php"); //
	}
	else{?>
<table border="1">
									<thead>
										<tr>
										<th>#</th>
                      <th>Name</th>
                      <th>Surname</th>
                      <th>Gender</th>
                      <th>Age</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Postal Code</th>
                      <th>Emp Status</th>
                      <th>Acc Needs</th>
                      <th>Requests</th>
                      <th>Outcome</th>
                      <th>Referrals</th>
                      <th>Notes</th>
					  <th>CreatedDate</th>
					</tr>
				</thead>


<?php 
$filename="Users list";
$sql = "SELECT * from Users";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				

echo '  
<tr>  
<td>'.$cnt.'</td> 
<td>'.$Name= $result->name.'</td> 
<td>'.$Surname= $result->surname.'</td> 
<td>'.$Gender= $result->gender.'</td> 
<td>'.$Age= $result->age.'</td> 
<td>'.$Email= $result->email.'</td> 
<td>'.$Phone= $result->phone.'</td> 
<td>'.$PostalCode= $result->postalcode.'</td> 
<td>'.$EmpStatus= $result->empstatus.'</td> 
<td>'.$Accneeds= $result->accneeds.'</td> 
<td>'.$Requests= $result->requests.'</td> 
<td>'.$Outcome= $result->outcome.'</td> 
<td>'.$Referrals= $result->referrals.'</td> 
<td>'.$Notes= $result->notes.'</td> 
<td>'.$CreatedDate= $result->createdDate.'</td> 	

</tr>  
';
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-report.xls");
header("Pragma: no-cache");
header("Expires: 0");
			$cnt++;
			}
	}
?>
</table>
<?php } ?>