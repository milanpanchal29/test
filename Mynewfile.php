<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
 function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            alert("Please enter only Numbers.");
            return false;
        }

        return true;
    }

    function ValidateNo() {
        var phoneNo = document.getElementById('txtPhoneNo');

    if (phoneNo.value == "" || phoneNo.value == null) {
            alert("Please enter your Mobile No.");
            return false;
        }
        if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
            alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
            return false;
        }

        alert("Success ");
        return true;
        }


</script>

<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name=="viewport" content="width-device-width, initial-scal-1">
		<title>Abhi K Abhi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script>
    var createAllErrors = function() {
        var form = $( this ),
            errorList = $( "ul.errorMessages", form );

        var showAllErrorMessages = function() {
            errorList.empty();

            
            var invalidFields = form.find( ":invalid" ).each( function( index, node ) {

               
                var label = $( "label[for=" + node.id + "] "),
                   
                    message = node.validationMessage || 'Invalid value.';

                errorList
                    .show()
                    .append( "<li><span>" + label.html() + "</span> " + message + "</li>" );
            });
        };

       
        form.on( "submit", function( event ) {
            if ( this.checkValidity && !this.checkValidity() ) {
                $( this ).find( ":invalid" ).first().focus();
                event.preventDefault();
            }
        });

        $( "input[type=submit], button:not([type=button])", form )
            .on( "click", showAllErrorMessages);

        $( "input", form ).on( "keypress", function( event ) {
            var type = $( this ).attr( "type" );
            if ( /date|email|month|number|search|tel|text|time|url|week/.test ( type )
              && event.keyCode == 13 ) {
                showAllErrorMessages();
            }
        });
    };
    
    $( "form" ).each( createAllErrors );
</script>

</head>
<style type='text/css' rel="stylesheet">
  @media screen and (max-width: 600px) {
	}
	#main-wrapper{
	width: 1335px;
	margin: 0 auto;
}
body{
background-color:#D3BFBD;
}
#main-content{
	height:600px;
	background:white;
	width: 1335px;
	margin: 0 auto;

	
}
label,input,select,textarea{
	display:block;
		width:300px;
		margin:auto;
}
.btn{
	width:100px;
	margin:auto;
}
h2{
	height: 50px;
	width: 70px
	margin-top:100px;
	padding-left: 30%;
	font-size: 250%;
	font-family:Bernard MT Condensed; 
	
}

h1{
	font-family:Bernard MT Condensed;
}
 .container-fluid {
      padding: 6px 50px;
	
  }
  .thumbnail img {
      width: 50%;
      height: 50%;
      margin-bottom: 10px;
	  margin-left:50px;
	  padding-top:25px;
  }
 
   .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
	  background-color:#85C1E9  ;
  }
  footer{

	 background-color: #2d2d30;
      color: #f5f5f5;
      padding: 25px;

}
.container{
	margin:0 auto;
	width:1335px;
}
 .form-control {
      border-radius: 0;
  }
  .bgcolor{
	  background-color:#85C1E9;
  }
 
</style>

<body id="myPage">

<div id="jumbotron">

				 <div class="thumbnail">
				<img src="IMG/logo4.png" alt="" height="50px" width="400px" hspace="35px" >
				<h2>A Market Place For All</h2>
				</div>
				<marquee bgcolor=white>ComingSoon....       
					ComingSoon....  
					ComingSoon....     
					ComingSoon....
					ComingSoon....  
					ComingSoon....     
					ComingSoon....</marquee>
		
</div>
 <div class="container-fluid text-left">
  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default panel-primary">
          <div class="panel-heading text-center"><img src="IMG/marketing.png" height="45px" width="38px" hspace="8px" vspace="10px">Marketing Partner</div>
	<ul class="errorMessages"></ul>
	<form name="myForm" method="POST" action="submit.php">  
	<label>Name:
  <input type="text" name="name" placeholder="Enter your Name" class="form-control" required>
 </label>
  <label>Email:
  <input type="email" name="email" placeholder="Enter your Email" class="form-control" required>
  </label>
  <label>Mobile Number: 
  <input id="txtPhoneNo" type="text" name="mobile_number" pattern="[789][0-9]{9}" placeholder="Enter your mobile number" class="form-control" maxlength="10" required>
   </label>
  <label>Intrest:  
  <textarea id="intrest" type="text" name="intrest" rows="5" cols="40" placeholder="Enter your intrest" class="form-control" required></textarea>
   </label><br>

		<div class="panel-footer text-center">
        <input type="submit" class="btn btn-info" value="submit"></input>
        </div></div></div> </form> 
		
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default panel-primary">
      	  <div class="panel-heading text-center"><img src="IMG/selling1.png" height="45px" width="45px" hspace="10px" vspace="10px">Selling Partner</div>
 <ul class="errorMessages"></ul>
 <form name="myForm" method="POST" action="submit_1.php">
  <label>Name:
  <input id= "name" type="text" name="name" placeholder="Enter your Name" class="form-control" required>
  </label>
  <label>Email: 
  <input id="email" type="email" name="email" placeholder="Enter your Email" class="form-control" required>
  </label>
  <label>Mobile Number:
  <input id="txtPhoneNo" type="text" name="mobile_number" pattern="[789][0-9]{9}" placeholder="Enter your mobile number" class="form-control" maxlength="10" required>
   </label>
  <label>Intrest:
  <textarea name="intrest" rows="5" cols="40" placeholder="Enter your intrest" placeholder="Enter your intrest" class="form-control" required></textarea>
   </label><br>
  
	<div class="panel-footer text-center">
          <input type="submit" class="btn btn-warning"  value="submit"></input>
        </div></div></div></form>
           
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default panel-primary">
        <div class="panel-heading text-center"><img src="img/shiping1.png" height="45px" width="65px" hspace="10px" vspace="10px">Shiping Partner</div>
  <ul class="errorMessages"></ul>
  <form method="POST" action="submit_2.php">
  <label>Name:
  <input type="text" name="name" placeholder="Enter your Name" class="form-control" required>
  </label>
  <label>Email: 
  <input type="email" name="email" placeholder="Enter your Email" class="form-control" required> 
  </label>
  <label>Mobile Number:
  <input id="txtPhoneNo" type="text" name="mobile_number" pattern="[789][0-9]{9}" placeholder="Enter your mobile number" class="form-control" maxlength="10" required> 
   </label>
  <label>Intrest: 
  <textarea name="intrest" rows="5" cols="40" placeholder="Enter your intrest" placeholder="Enter your intrest" class="form-control" required></textarea>
   </label><br>
 
		<div class="panel-footer text-center">
         <input type="submit" class="btn  btn-success" value="submit"></input>
        </div>
</div>
      </div> </form>      
     </div></div>
	 
	
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><a href="http://localhost/Data/Mynewfile.php#myPage" data-toggle="tooltip" title="Visit w3schools">www.abhikabhi.com</a></p> 
</footer>

</body>

</html>