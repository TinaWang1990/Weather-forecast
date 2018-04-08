<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Weather</title>
  </head>
  <body>
   
   <img src="http://static.tumblr.com/pty6xao/bFVmysg5i/weatherreportlogo.png" style="width: 70vw; height: 20vh; margin-left:12vw; margin-bottom: 3rem">

   <div class="container">
    <div class="row">
        <div class="col">

        <div class="card" style="width: 18rem; ">
            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgHkQOdM8VS1CVryxxt_XN6VEI1G3kzDE8O-aTJx7n7FiC4kWOdQ" alt="Card image cap">
        <div class="card-body">
         <div class="form-group">
       
            <input type="text" class="form-control" id="city" aria-describedby="emailHelp" placeholder="Enter City"> 
        </div>
         <button type="submit" class="btn btn-primary " onclick="searchCurrentWeather()">Current Weather</button>
         <button type="submit" class="btn btn-primary my-3" onclick="searchFutureWeather()">Future Weather</button>
         </div>
         </div>
         </div>
         <div class="col">
         <div id='info' style="font-size: 20px"></div>
         </div>
    </div>
    </div>

  

	



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
    	function searchCurrentWeather(){
    		var search=$('#city').val();
    		var apiKey="d4935a841eab12e1b107f033a386da66";
    		$.get(
    			"http://api.openweathermap.org/data/2.5/weather?q="+search+"&appid="+apiKey,
    			function(data){
    				$('#info').html(
                        '<p class="text-primary">Weather:'+data.weather.icon+'<br>Temperature:'+data.main.temp+'<br>Humidity:'+data.main.humidity+'</hp>');
    			}
    		);
    		
    	}
        function searchFutureWeather(){
            var search=$('#city').val();
            var apiKey="d4935a841eab12e1b107f033a386da66";
            $.get(
                "http://api.openweathermap.org/data/2.5/forecast?q="+search+"&mode=json&appid="+apiKey,
                function(data){
                    $.each(data.list,function(){
                         $('#info').html(
                          this.main.temp
                        );
                       })
                   
                    
                }
            );
            
        }
    </script>
  </body>
</html>

