<?php
include('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>*Janseva Parivar*</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body >

<div id="wrap">
  <div id="masthead">
    <h2>Janseva Parivar Bachat Gat</h2>
    <div  align="right">
      <b  id="welcome"> Welcome : <i><?php echo $login_session; ?></i></b>
      <b id="logout"><a href="logout.php" > Log Out</a></b>
    </div>
  <div id="menucontainer">
      <div id="menunav">
        <ul>
          <li><a href="home.php" class="current" ><span>Home</span></a></li>
          <li><a href="viewmemberdetails.php"><span>View Bachat Gat</span></a></li>
          <li><a href="openUpdate.html" ><span>Create Member</span></a></li>
          <li><a href="#" ><span>View Members</span></a></li>
          <li><a href="payment1.php" ><span>Payments</span></a></li>
          <li><a href="#"><span>About Us</span></a></li>
          <li><a href="#"><span>Profile</span></a></li>
        </ul>
      </div>
    </div>
  </div>
 
</div>
     
<div id="content" >
  <h2><span style="font-weight:bold; color:red;">Welcome to Janseva Paraivar,Mumbai</span></h2>
  

</div>
  
<div id="footer"> <a href="Link">homepage</a> | <a href="mailto:ksuresh005@gmail.com">contact</a> | <a href="http://validator.w3.org/check?uri=referer">html</a> 
</div>

</html>
