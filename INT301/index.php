<?php 
include"popup.php";
include"alert.php";
?>
<html>
<head>
<title>
Career Point
</title>
<style type="text/css">
body
{
	font-family: sans-serif;
	background-image:url(bg.png);
	background-repeat: no-repeat;
  background-position: -350% 0;
}
div
{
	color: #333;
	font-size: 18px;
	font-weight: 600;

}
input[type="text"],input[type="password"],select
{
	width: 90%;
	padding: 10px;
	border-radius: 4px;
	border: none;
  font-weight: 600;
  color: #333;
  border: 1px solid silver;
	font-size: 17px;
  margin: 0 20px 0 20px;
}
input[type="submit"],input[type="reset"]
{
width: 100px;
text-align: center;
border: none;
font-weight: 600;
border-radius: 4px;
padding: 7px;
color: white;
font-size: 17px;
box-shadow: 0 0px 12px black;
}
</style>
</head>
<body>
<center><label style="font-size:60px;color:#193f63;font-weight:700;float:right;margin-right:100px">Career Point</label><br><br><br><br><br>
	<div style="text-align:left;width:400px;background-color:white;box-shadow:0 0 10px grey;border-radius:5px;float:right;margin-right:50px">
<center>
<form>
<label style="color:#333;font-size:25px;float:left">  &nbsp &nbspRegister &nbsp </label></center><br><br>
<div style="width:auto;border-top:1px solid silver"></div><br>
<input type="text" name="a" placeholder="Enter Your First Name" minlength="3" maxlength="30" required><br><br>
<input type="text" placeholder="Enter Your Last Name" maxlength="30" minlength="2" name="b" required><br><br>
 &nbsp &nbsp Gender &nbsp &nbsp
<input type="radio" name="c" required>Male &nbsp 
<input type="radio" name="c" required>Female<br><br>

<input type="text" name="d" minlength="10" maxlength="10"  placeholder="Enter Your Contact Number" required><br><br>

<select name="e">
	<option selected disabled>Select State</option>
<option value="punjab">Punjab</option>
<option value="Haryana">Haryana</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Delhi">Delhi</option>
</select><br><br>

<input type="password" name="f" minlength="6" maxlength="10" placeholder="Enter Password ******" required><br><br><br>
<center><input style="background-color:orange" type="submit" value="Submit"><br>
<input style="background-color:rgb(17, 85, 204);float:right;margin-right:20px" type="reset" value="Reset"><br><br>
</form></center>
</div>
</center>
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
            $('#live').fadeIn('slow');
            $('#live').html(data);
            setTimeout(function(){
            $('#live').fadeOut('slow');
            location.href='skill.php';
            },2000);
            }
          });

        });

      });
    </script>
</body>
</html>