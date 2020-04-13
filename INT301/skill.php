<?php
session_start();
if(isset($_SESSION['skill'])&&trim($_SESSION['skill'])!='')
{
include"popup.php";
include"alert.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>
Skills
</title>
<style>
body
{
	font-family:sans-serif;
	margin:0;
}
#wrap_form
{
	width: 420px;
	border-radius: 10px;
	text-align: center;
	background-color: #e6e9f2;
	position: absolute;
	left:0;
	right:0;
	top: 10%;
	margin: auto;
	box-shadow: 0 10px 14px black;
}
#fn
{
	padding:10px;
	border-radius: 4px;
    width: 93%;
}
#submit
{
	padding:8px 20px 8px 20px;
	border: none;
	font-weight: 300;
	letter-spacing: 1px;
	font-size: 16px;
	box-shadow: 0 2px 4px black;
	border-radius: 3px;
	background-color:darkorange;
	color: white;
}
#welcome
{
	font-size: 28px;
	font-weight: 600;
}
#sign
{
	float: right;
	padding: 7px;
	border: none;
	border-radius: 3px;
	background-color: rgb(17, 85, 204);
	color: white;
	margin-bottom: 5px;
}
</style>
</head>
<body bgcolor="#224242">
<div id="wrap_form">
<form>
<img src="company-hiring-job-candidates_1262-19765.jpg" style="border-radius:10px 10px 0 0" width="100%"><br>
<div style="padding:20px">
<label id="welcome">Welcome to Career Point</label><br><br><br><br>
 <label style="float:left;font-size:19px;color:#333;font-weight:600">&nbsp &nbspEnter your skill</label>
<h1><input type="text" id="fn" name="skill" minlength="3" placeholder="Enter Your Skill" required></h1>
<input type="submit" id="submit" value="Submit"><br><br><br>
</form>
<input type="button" id="sign" onclick="location.href='logout.php'" value="Sign Out of your account"><br>
</div>
<script>
      $(function () {

        $('form').on('submit', function (e) {
          e.preventDefault();
          $('.loader').show();
          $.ajax({
            type: 'post',
            url: 'user-db.php',
            data: $('form').serialize(),
            success: function (data) {
            $('.loader').hide();
            $('#live').css('background-color','white');
            $('#live').fadeIn('slow');
            $('#live').html(data);
            setTimeout(function(){
            $('#live').fadeOut('slow');
            $('form').trigger('reset');
            },5000);
            }
          });

        });

      });
    </script>
</div>
</body>
<?php }
else
{
echo"<script>alert('Please Register First!')</script>";
echo'<script>location.href="newform.php"</script>';
}?>