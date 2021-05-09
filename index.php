<?php 
 session_start();
    session_destroy();
 
?>
<html>

<!-- Mirrored from codervent.com/rocker/white-version/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 14:41:38 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>NCA</title>
  
  <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

</head>

<body>

  <form>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname">
    <h3 id="channel">-</h3><br>
    <h3 id="frequency">-</h3><br>
    <input type ="submit" value ="Log" id="submit" class="success">
   
  </form>

  <script>
 $(document).ready(function(){
  $("#submit").click(function(e){
    e.preventDefault();
    var details={
      deviceId:$("#fname").val()
    }
    $.ajax({
		url:('https://tvwsgeolocationdb.herokuapp.com/api/spectrum_use'),
		method:'post',
		dataType: 'json',
		data:details,
		    success:function(response){	
          console.log(response.databaseChange.channel) 
          $('#channel').html(response.databaseChange.channel);
          $('#frequency').html(response.databaseChange.frequency);
		    },error:function(jqXhr, textStatus, errorThrown){
						 console.log(errorThrown)
					 }
	});
   
  });
});



  </script>
  
</body>

<!-- Mirrored from codervent.com/rocker/white-version/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 14:43:13 GMT -->
</html>
