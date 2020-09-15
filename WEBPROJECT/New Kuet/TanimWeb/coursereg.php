<?php
   include 'connect.inc.php';
?>


<?php
include 'core.inc.php';
$fullname = getuserfield('fullname');
$username = getuserfield('username');


/*
if(isset($_POST['sgpa'])&&isset($_POST['cgpa'])&&isset($_POST['core1'])&&isset($_POST['core2'])&&isset($_POST['core3'])&&isset($_POST['core4'])&&isset($_POST['challan_no'])&&isset($_POST['challan_date'])&&isset($_POST['amount'])&&(isset($_POST['opt1'])||isset($_POST['opt2'])||isset($_POST['opt3'])))
*/
if(isset($_POST['gpa'])||isset($_POST['cgpa'])||isset($_POST['core1'])||isset($_POST['core2'])||isset($_POST['core3'])||isset($_POST['core4'])||isset($_POST['core5'])||isset($_POST['challan_no'])||isset($_POST['challan_date'])||isset($_POST['amount'])||(isset($_POST['opt1'])||isset($_POST['opt2'])||isset($_POST['opt3'])))

{
	$gpa = trim($_POST['gpa']);
	$cgpa = trim($_POST['cgpa']);
	$core1 = trim($_POST['core1']);
	$core2 = trim($_POST['core2']);
	$core3 = trim($_POST['core3']);
	$core4 = trim($_POST['core4']);
	$core5 = trim($_POST['core5']);
	$challan_no = trim($_POST['challan_no']);
	$challan_date = trim($_POST['challan_date']);
	$amount = trim($_POST['amount']);
	$opt1 = 'Not taken';
	$opt2 = 'Not taken';
	$opt3 = 'Not taken';
	$count = 20;

	if(isset($_POST['opt1'])){
		$count=$count+ 1.5;
		$opt1 = trim($_POST['opt1']);
	}
	if(isset($_POST['opt2'])){
		$count=$count+1.5;
		$opt2 = trim($_POST['opt2']);
	}
	if(isset($_POST['opt3'])){
		$count=$count+1.5;
		$opt3 = trim($_POST['opt3']);
	}


	$total_credit = $count;
/*

	if(!empty($core1)&&!empty($core2)&&!empty($core3)&&!empty($core4)&&!empty($challan_no)&&!empty($challan_date)&&!empty($amount)&&!empty($sgpa)&&!empty($cgpa)&&!empty($total_credit))
	*/

	if(!empty($core1)||!empty($core2)||!empty($core3)||!empty($core4)||!empty($core5)||!empty($challan_no)||!empty($challan_date)||!empty($amount)||!empty($gpa)||!empty($cgpa)||!empty($total_credit))
	{
	
		$query1 = "UPDATE students SET gpa = '".mysqli_real_escape_string($conn, $gpa)."',
		cgpa = '".mysqli_real_escape_string($conn, $cgpa)."',
		challan_no = '".mysqli_real_escape_string($conn, $challan_no)."', 
		challan_date = '".mysqli_real_escape_string($conn, $challan_date)."',
		amount = '".mysqli_real_escape_string($conn, $amount)."'		
		WHERE username='".mysqli_real_escape_string($conn, $username)."' ";

		$query2 = "UPDATE course_registered SET core1 = '".mysqli_real_escape_string($conn, $core1)."',
		core2 = '".mysqli_real_escape_string($conn, $core2)."', 
		core3 = '".mysqli_real_escape_string($conn, $core3)."',
		core4 = '".mysqli_real_escape_string($conn, $core4)."',
		core5 = '".mysqli_real_escape_string($conn, $core5)."',
		opt1 = '".mysqli_real_escape_string($conn, $opt1)."',
		opt2 = '".mysqli_real_escape_string($conn, $opt2)."',
		opt3 = '".mysqli_real_escape_string($conn, $opt3)."',
		total_credit = '".mysqli_real_escape_string($conn, $total_credit)."' 
		WHERE username='".mysqli_real_escape_string($conn, $username)."' ";

		if($query_run1 = mysqli_query($conn, $query1) && $query_run2 = mysqli_query($conn, $query2))
		{?>
			<script>
				alert('Course Registered Succesfully...Click OK');
				window.history.go(-2);
			</script>
		<?php
		}
		else
		{
			$error = 'Something went wrong. Try again later.';
		}		
	}
	else
	{
		$error = 'All fields are required.';
	}
}




?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>KUET</title>
		<link rel="stylesheet" type="text/css" href="resources/styles.css">
		<style>
			#sub{
				width:45%;
				padding:0px 50px 0px 20px;
				border-right:2px solid black;
				margin-top: 30px;
				margin-right: 20px;
				border-radius:8px;
				display:inline-block;
			}
			#left{
				display:inline-block;
				width:45%;
				margin:0px 10px 0px 0px;
				padding:10px 50px 10px 20px;
			}
			#right{
				float:right;
				width:45%;
				margin:0px 50px 0px 0px;
				padding:10px 40px 10px 30px;
			}
			#challan{
				margin-top: 30px;
				padding:0px 20px 0px 50px;
				border-left:2px solid black;
				border-radius:8px;
				width:45%;
				float:right;
			}
			input[type=text]{
				width: 75%;
				padding: 10px 15px;
				margin: 8px 0;
				border:none;
				height:35px;
				border-radius:6px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
			}
			input[type=submit]{
				background-color: #EFC050;
				border-radius: 8px;
				color: white;
				padding: 8px 32px;
				text-decoration: none;
				margin: 4px 530px;
				cursor: pointer;
				font-size:16px;
				font-weight:bold;
				height:40px;
			}
			input[type=submit]:hover{
				background-color: white;
				color: #EFC050;
			}
			input[type=checkbox]{
				margin-left:25px;
			}
			#total{
				display:inline;
			}
		</style>

	</head>
	
	<body>
		<div class="header">
			<img src="resources/logo2.png" alt="logo">
			<h1 style="margin-bottom:0px;"><a href="http://www.kuet.ac.bd/departments/index.php/welcome/index/41/" target="_blank">CSE Department Online Registration</a></h1>
			<h3><a href="http://www.kuet.ac.bd/" target="_blank">Khulna University Of Engineering &amp; Technology</a></h3>
		</div>

		<div class="row">
			
			<div class="col-1">
			</div>

			<div class="col-2">
				<br>
				<h3 style="display:inline-block;">Welcome <?php echo $fullname; ?></h3>

				<form action="coursereg.php" method="POST">
					<p><strong>Enter Your Last Semesters' : </strong></p>
					<div id="left">
						GPA &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="gpa">
					</div>
					<div id="right">
						CGPA &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="cgpa">
					</div>
					
					<div id="sub">
						<p><strong>Theoritical course for the semester : </strong></p>
						<input type="checkbox" name="core1" value="CSE3109" id="c1" checked> CSE3109 Database&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3-Credits<br>
  						<input type="checkbox" name="core2" value="CSE3119" id="c2" checked> CSE3119 Software Engineering &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3-Credits<br>
						<input type="checkbox" name="core3" value="CSE3103 " id="c3" checked> CSE3103 Periphereal And Interfacing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3-Credits<br>
  						<input type="checkbox" name="core4" value="CSE3101 " id="c4" checked> CSE3101 Theroy Of Computaion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3-Credits<br><br>
  						<input type="checkbox" name="core5" value="CSE3101 " id="c5" checked> CSE3101 Theroy Of Computaion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3-Credits<br><br>
					
  						<p><strong>Please Opt LAB Course : </strong></p>
  					
  						<input type="checkbox" name="opt1" value="CSE3102" id="o1" onclick="update(1.5,'o1')"> CSE3102 Database Laboratory &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.5-Credits<br>
  						<input type="checkbox" name="opt2" value=" CSE3100" id="o2" onclick="update(1.5,'o2')"> CSE3100 Web Programming Laboratory &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.5-Credits<br>
  						<input type="checkbox" name="opt3" value="CSE3120" id="o3" onclick="update(1.5,'o3')"> CSE3120 Software Engineering Labotratory &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.5-Credits<br><br><br>

  						<strong>Total Credit Selected : <p id="total"></p></strong><br>
  					</div>
  					
  					<div id="challan">
  						<p><strong>Fill Challan Details</strong></p>
  						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Journal No. <br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="challan_no"><br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Challan Date <br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="challan_date"><br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fee Paid <br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="amount"><br><br>
  					</div>
  					<br><br><br><br>
  					<input type="submit" value="Submit">
  					
				</form>
				<p><strong><?php echo ((isset($error) && $error != '') ? $error : ''); ?></strong></p>
			</div>

			<div class="col-1">
			</div>

		</div>
			
		<br>
		<div class="footer">
			<p>Khulna University Of Engineering &amp; Technology</p>
		</div>

		<script type="text/javascript">
			var total_credit = 20;

			function update(a,y){
				if(document.getElementById(y).checked == true){
					var x=total_credit;
					x=x+a;
					if(x>25)
					{
						window.alert("Total Credits Should not Exceed 25.");
						document.getElementById(y).checked = false;
					}
					else
						{
							total_credit=x;
							document.getElementById("total").innerHTML = total_credit;
						}
				}
				else if(document.getElementById(y).checked == false){
					total_credit=total_credit-a;
					document.getElementById("total").innerHTML = total_credit;
				}
				
			}
			document.getElementById("total").innerHTML = total_credit;

		</script>


	</body>
	
</html>
