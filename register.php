<?php
include('includes/config.php');
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$surname=$_POST['surname'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$postalcode=$_POST['postalcode'];
$empstatus=$_POST['empstatus'];
$accneeds=$_POST['accneeds'];
$requests=$_POST['requests'];
$outcome=$_POST['outcome'];
$referrals=$_POST['referrals'];
$notes=$_POST['notes'];


$notitype='Create Account';
$reciver='Admin';
$sender=$email;

$sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
$querynoti = $dbh->prepare($sqlnoti);
$querynoti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
$querynoti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
$querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
$querynoti->execute();   

//adding requests
$sql ="insert into requests (name,requests) values (:name,:requests)";
$query= $dbh -> prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':requests',$requests,PDO::PARAM_STR);
$query->execute();


//adding reasons
$sql ="insert into reasons (name,notes) values (:name,:notes)";
$query= $dbh -> prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':notes',$requests,PDO::PARAM_STR);
$query->execute();


//adding Outcomes
$sql ="insert into outcomes (name,outcome) values (:name,:outcome)";
$query= $dbh -> prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':outcome',$requests,PDO::PARAM_STR);
$query->execute();

//adding Referrals
$sql ="insert into referrals (name,referrals) values (:name,:referrals)";
$query= $dbh -> prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':referrals',$requests,PDO::PARAM_STR);
$query->execute();

$sql ="INSERT INTO users(name,surname,gender,age,email,phone,postalcode,empstatus,accneeds,requests,outcome,referrals,notes)values(:name,:surname,:gender,:age,:email,:phone,:postalcode,:empstatus,:accneeds,:requests,:outcome,:referrals,:notes)";
$query= $dbh -> prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':surname',$surname,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':age',$age,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':postalcode',$postalcode,PDO::PARAM_STR);
$query->bindParam(':empstatus',$empstatus,PDO::PARAM_STR);
$query->bindParam(':accneeds',$accneeds,PDO::PARAM_STR);
$query->bindParam(':requests',$requests,PDO::PARAM_STR);
$query->bindParam(':outcome',$outcome,PDO::PARAM_STR);
$query->bindParam(':referrals',$referrals,PDO::PARAM_STR);
$query->bindParam(':notes',$notes,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script type='text/javascript'>alert('Registration Sucessfull!');</script>";
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
<div class="login-page bk-img">
<div class="form-content">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-bold mt-2x">Add Customer Form</h1>
        <div class="hr-dashed"></div>
        <div class="well row pt-2x pb-3x bk-light text-center">
        <form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
            <div class="form-group">
            <label class="col-sm-1 control-label">Name<span style="color:red">*</span></label>
            <div class="col-sm-5">
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
            </div><br>
            <label class="col-sm-1 control-label">SurName<span style="color:red">*</span></label>
            <div class="col-sm-5">
            <input type="text" name="surname" class="form-control" id="surname" placeholder="Surname" required>
            </div><br><br>
            <label class="col-sm-1 control-label">Gender<span style="color:red">*</span></label>
            <div class="col-sm-5">
            <select name="gender" class="form-control" required>
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Prefer not to say">Prefer not to say</option>
            </select>
            </div><br>
            <label class="col-sm-1 control-label">Age<span style="color:red">*</span></label>
            <div class="col-sm-5">
            <input type="text" name="age" class="form-control" id="age" placeholder="Age" required>
            </div><br>
            <label class="col-sm-1 control-label">Email<span style="color:red">*</span></label>
            <div class="col-sm-5">
            <input type="email" name="email" class="form-control" placeholder ="Email" required>
            </div>
            </div>

            <div class="form-group">
            <label class="col-sm-1 control-label">Phone<span style="color:red">*</span></label>
            <div class="col-sm-5">
            <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone" required>
            </div><br>
            <label class="col-sm-1 control-label">PostalCode<span style="color:red">*</span></label>
            <div class="col-sm-5">
            <input type="text" name="postalcode" class="form-control" id="postalcode" placeholder="PostalCode" required>
            </div><br><br>
            <!-- <label class="col-sm-1 control-label">Emp Status<span style="color:red">*</span></label>
            <div class="col-sm-5">
            <input type="text" name="empstatus" class="form-control" id="empstatus" placeholder="EmpStatus" required>
            </div><br> -->

            <label class="col-sm-1 control-label">Emp Status<span style="color:red">*</span></label>
            <div class="col-sm-5">
            <select name="empstatus" class="form-control" required>
            <option value="">Select</option>
            <option value="Company Employed">Company Employed</option>
            <option value="Self Employed">Self Employed</option>
            <option value="Not Employed">Not Employed</option>
            </select>
            </div><br>
            <label class="col-sm-1 control-label">Account Needs<span style="color:red">*</span></label>
            <div class="col-sm-5">
            <select name="accneeds" class="form-control" required>
            <option value="">Select</option>
            <option value="Account Updates">Account Updates</option>
            <option value="Change Information">Change Information</option>
            <option value="New user">New user</option>
            </select>
            </div><br>
            <!-- <label class="col-sm-1 control-label">Requests<span style="color:red"></span></label> -->
            <div class="col-sm-5">
            <input type="hidden" name="requests" class="form-control" id="requests" placeholder="Requests">
            </div><br>
            </div>
            <div class="form-group">
            <!-- <label class="col-sm-1 control-label">Outcomes<span style="color:red"></span></label> -->
            <div class="col-sm-5">
            <input type="hidden" name="outcome" class="form-control" id="outcome" placeholder="Outcome">
            </div><br>
            <!-- <label class="col-sm-1 control-label">Referrals<span style="color:red"></span></label> -->
            <div class="col-sm-5">
            <input type="hidden" name="referrals" class="form-control" id="referrals" placeholder="Referrals">
            </div><br>
            <!-- <label class="col-sm-1 control-label">Notes<span style="color:red"></span></label> -->
            <div class="col-sm-5">
            <input type="hidden" name="notes" class="form-control" id="notes" placeholder="Notes">
            </div>
            </div>

                <br>
                <button class="btn btn-primary" name="submit" type="submit">Add Customer</button>
                </form>
                                <br>
                                <br>
								<p>Go To Customers List<a href="userlist.php" >Manage Users</a></p>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>
</html>