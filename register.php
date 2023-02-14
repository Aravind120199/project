<!DOCTYPE html>
<html>
<head>
   <title> Registration page </title>
 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.5/dist/bootstrap-validate.js" ></script>
   <script src ="bootstrap-validate.js"></script>
</head>
<body>
 
<form class="form-horizontal" method="POST" action="registration.php" id="FORM_ID">
<div class="wrapper login">
        <div class="container">
        <link rel="stylesheet" href="register.css">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome Back</h2>
                    <p>Login your account.<br>It's totally free.</p>
                    <a href="login.php" class="btn">sign in</a>
                </div>
            </div>

            <div class="col-right">
                <div class="login-form">
                <div class="">
                  <div>
    <input type="text" name="Name" placeholder="First name"id= "fname" required  ><br>
</div>
<div>
    <input type="text" name="Lastname" placeholder="last  name" id = "lname" required><br>

                
    </div>
               <div>
   
               <input type="text" id="txtDate" name="Date" value="Date"   placeholder="date of birth" readonly="readonly" />
    <br />
<span id="lblError" style = "color:Red"></span>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
    type="text/javascript"></script>
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
    rel="Stylesheet" type="text/css" />


</div>
<br>


   </div>
   <div>
    <input type="batch" name="batch" placeholder="batch" id="batch" required ><br>

              
  <div>
    <input type="email" name="Email_id" placeholder="Email id" id="semail" required ><br>
</div>
<div>
    <input type="password" name="Password" placeholder="password" id = "pass" required><br>
</div>
   

     <div>          
    <input type="password" name="cpassword" placeholder="confirm password" id = "cpass" required><br>
</div>
               
         

               <div>
    <input type ="submit"  value="Regiser" name="save"   class="btn2"  id="btn-register">
  
    </div></form>


<!-- <script src="./bootstrap-validate.js"></script> -->
    <script>

      
    
    //    bootstrapValidate('#pemail', 'email:Enter a valid E-Mail!');
       bootstrapValidate('#semail', 'email:Enter a valid E-Mail!');
       bootstrapValidate('#fname', 'alpha:You can only input alphabetic characters');
       bootstrapValidate('#lname', 'alpha:You can only input alphabetic characters');
    //    bootstrapValidate('#num', 'numeric:Please only enter numeric characters!');
    //    bootstrapValidate('#num', 'max:10:Please dont enter more than 10 characters!');
    //    bootstrapValidate('#num', 'min:10:Enter at least 10 characters!');
    //    bootstrapValidate('#occ', 'alpha:You can only input alphabetic characters');
       bootstrapValidate('#cpass', 'matches:#pass:incorrect password')
       
    </script>

    
    
<script type="text/javascript">
    $(function () {
        $("#txtDate").datepicker({
            changeMonth: true,
            changeYear: true,
            showOn: 'button',
            buttonImageOnly: true,
            buttonImage: 'images/calendar.gif',
            dateFormat: 'dd/mm/yy',
            yearRange: '1900:+0',
            onSelect: function (dateString, txtDate) {
                ValidateDOB(dateString);
            }
        });
    });
    function ValidateDOB(dateString) {
        var lblError = $("#lblError");
        var parts = dateString.split("/");
        var dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);
        var dtCurrent = new Date();
        lblError.html("Eligibility 18 years ONLY.")
        if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) {
            document.getElementById('btn-register').disabled=true;
            return false;

        }
 
        if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {
 
            //CD: 11/06/2018 and DB: 15/07/2000. Will turned 18 on 15/07/2018.
            if (dtCurrent.getMonth() < dtDOB.getMonth()) {
                return false;
            }
            if (dtCurrent.getMonth() == dtDOB.getMonth()) {
                //CD: 11/06/2018 and DB: 15/06/2000. Will turned 18 on 15/06/2018.
                if (dtCurrent.getDate() < dtDOB.getDate()) {
                    return false;
                }
            }
        }
        lblError.html("");
        document.getElementById('btn-register').disabled=false;
        return true;
    }
</script>
 
</body>
</html>

