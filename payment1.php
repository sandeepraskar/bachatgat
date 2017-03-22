<?php
include('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>*Janseva Parivar*</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/vendor/formvalidation/dist/js/formValidation.min.js"></script>
  <script src="/vendor/formvalidation/dist/js/framework/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/account-opening-form.css"/>
</head>
<body>
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
          <li><a href="home.php" ><span>Home</span></a></li>
          <li><a href="viewmemberdetails.php"><span>View Bachat Gat</span></a></li>
           <li><a href="openUpdate.html" ><span>Create Member</span></a></li>
          <li><a href="#" ><span>View Members</span></a></li>
          <li><a href="payment1.php" class="current"><span>Payments</span></a></li>
          <li><a href="#"><span>About Us</span></a></li>
          <li><a href="#"><span>Profile</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

    <br><br>
    <form class="form-horizontal" action ="payment1.php" method="post">
    <div>
    <div class="container padding-top-10">
<div class="panel panel-default">
<div class="panel-heading">
<br> <br>
          Payment Details
        </div>
        <div class="panel-body">
        <!  <form class="form-horizontal" action ="openUpdate.php" method="post">
            <div class="form-group" border="solid">
              <label class="control-label col-md-2 col-md-offset-2" for="mid">Member Id :</label>

              <div class="col-md-2">    
                <input id="mid" name="mid" type="text" placeholder="Member Id" class="form-control " required=""/>
              </div>
              </div>
            <div class="form-group">
              <label class="control-label padding-top-10 col-md-2 col-md-offset-2" for="father/husband_name">Member Name:</label>

              <div class="col-md-2">    
                <input id="mname" name="mname" type="text" placeholder="Member Name" class="form-control " required=""/>
              </div>
              
            </div>
            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="recno">Receipt No.:</label>

              <div class="col-md-4">    
                <input id="recno" name="recno" type="text"  class="form-control " required=""/>
              </div>
            </div>


            <script type="application/javascript">

              function isNumberKey(evt)
              {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
              }

          </script>


            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="Share">Share Amount:</label>

              <div class="col-md-4">    
                <input id="share" name="share" type="text" onkeypress="return isNumberKey(event)" class="form-control " required=""/>
              </div>
            </div>
              <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="rdate">Receipt Date:</label>

              <div class="col-md-4">    
                <input id="rdate" name="rdate" type="date"  class="form-control " required=""/>
              </div>
            </div>
            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="Total Share Amount to be paid">Total Share Amount to be paid:</label>

              <div class="col-md-4">    
                <input id="tshare" name="tshare" type="text"  class="form-control " required=""/>
              </div>
            </div>

            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="Total Penalty Amount to be paid">Total Penalty Amount to be paid:</label>

              <div class="col-md-4">    
                <input id="tpen" name="tpen" type="text"  class="form-control " required=""/>
              </div>
            </div>
            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="Pay Share ">Pay Share Amount:</label>

              <div class="col-md-4">    
                <input id="payshare" name="payshare" type="text"  class="form-control " required=""/>
              </div>
            </div>
            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="Pay Penalty Amount ">Pay Penalty Amount:</label>

              <div class="col-md-4">    
                <input id="payshare" name="payshare" type="text"  class="form-control " required=""/>
              </div>
            </div>
            
            </div>
            </div>
     </div>
     </div>

    <input type="submit" value="View Account Details" name="View Account"> <input type="submit" value="    OK    " name="Ok">
    

    <input type="Reset" value=" Reset " name="Reset">
    </div>
  
   
</div>
  <div id="footer"> 
   <a href="Link">homepage</a> | <a href="mailto:ksuresh005@gmail.com">contact</a> | <a href="http://validator.w3.org/check?uri=referer">html</a> 
</div>
<div align=center>Janseva </div></body>
</form>
</html>
