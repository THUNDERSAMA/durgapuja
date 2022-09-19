<!DOCTYPE html>
<html>
<head>
	<title>PUJA 2021</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta property="og:url"           content="https://bongnity.000webhostapp.com/" />
<!-- <meta property="og:type"          content="website" />
<meta property="og:title"         content="DURGA PUJA 2021" />
<meta property="og:description"   content="Pandal Hopping Map now Pandal hopping easy" /> -->
<meta property="og:image"         content="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPAZrsyDnznRykzp2JKIwHwPSPQspCY1r7UQ&usqp=CAU" />
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 
 <style type="text/css">
   .jumbotron
{
  background-color: #FBAB7E;
background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);

}
.jo
{
font-family: 'Gloria Hallelujah', cursive,bold;
font-weight: bolder;
color:#FFE53B;
background: -webkit-linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
 </style>
</head>
<body onload="getLocation()"><!-- onload="getLocation()" -->
	<div class="jumbotron text-center" >
  <h1 class="jo">DURGA PUJA 2021</h1>

   
</div>
 
 <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="fEJWElSt"></script>
       
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SHARING IS CARING</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->
<script type="text/javascript">
        var t=0;
       $(document).ready(function(){
          // alert("E1");
              
              setInterval(pop,1000);

            
           
                });
                 function pop()
                {
                   t=t+1;
                   //console.log(t);
                   if (t==10) {
                     //document.getElementById("exampleModal").target();
                   $("#exampleModal").modal('show');
                   }
                }

       </script>
 <!-- <img src=""> -->
<div class="container">
	<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">PINCODE</span>
  </div>
  <input type="text" class="form-control" id="pin" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <button type="button" id="SEARCH" class="btn btn-warning">SEARCH</button>
</div>
<p id="demo"></p>
<br>
<div class="card mb-3" >
<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1s8bLnZQxhkxpCDyjPCQKNMaqJO8f7tzW"  height="480"></iframe>
</div>
<br>
<div class="row" id="PIX" >
   <?php
  include 'dbfr.php';
  
            //echo $reg_uid;

            
                            $ql="SELECT * FROM pandal WHERE VERIFY='1' ";
                            // echo "\n".$ql."\n";
                            if($query_run=mysqli_query($con,$ql))
                            {
                                   // $query_run=mysqli_query($con,$ql);
                                    $count=mysqli_num_rows($query_run);
                                    if($count>0)
                                    {
                                            while($row= mysqli_fetch_assoc($query_run))
                                            {
                          
                                                         
                                                        // echo $res;
                                                       // echo $res;
                                   echo '<div class="col-sm-6"> <div class="card" style="width: 18rem;"><img src="'.$row["IMAGE"].'" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">'.$row["PANDAL NAME"].'</h5><p class="card-text">'.$row["ADDRESS"].'<br><h4>'.$row["COMMENT"].'</h4></p><h3><i class="fas fa-heart"></i><h4>'.$row["RATING"].'</h4></h3><a href="'.$row["MAP"].'" class="btn btn-primary">View Adress in Map</a></div></div></div>';
                                     }
                        
                                    }
                                    else
                                    {
                                    echo "<script>swal('SORRY', 'Seems ERROR', 'info');</script>";
                                             

                                    }
                      }
                            else
                            {
                                echo ("error 2");
                                                        
                            }
                    
  ?>

</div>
<br>
<br>
<a href="contribute.html">
<button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-edit" style="font-size:36px"></i>CONTRIBUTE</button></a>
</div>

</div>
<br>
<br>
<footer class="py-4 bg-dark flex-shrink-0">
    <div class="container text-center">
      <a href="#" class="text-muted">© DESIGNED BY THUNDERSLASH</a>
    </div>
  </footer>
 
	<script>
		var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
//https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=37.42159&longitude=-122.0837&localityLanguage=en
    var pk="https://us1.locationiq.com/v1/reverse.php?key=pk.4336fbd8c7bbaff3544f1a7a5f4ccb40&lat="+position.coords.latitude+"&lon="+position.coords.longitude+"&format=json";
    //https://apis.mapmyindia.com/advancedmaps/v1/33OkryzDZsKXRccAr6j0TXGYGK154NssOb7tcaUs377t9shQRUBrVIDhiaZqXDodVi6UxBNxgbqbazzuUuyIzw==/rev_geocode?lat=26.5645&lng=85.9914
     $.ajax({
                                                type: "GET",
                                                url: pk,
                                                
                                                dataType: "json",
                                                cache: false,
                                              success: function(address)
                                            {
                                              console.log(address);
                                              console.log(address.address.postcode);
                                              document.getElementById("pin").value=address.address.postcode;

                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
}
function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
	</script>

  <!--  search pandal -->
  <script type="text/javascript">
    var xp = document.getElementById("demo");
    $(document).ready(function(){
     $("#SEARCH").click(function(){
      //alert("SUCESS1");
      var PINCODE=document.getElementById("pin").value;
      if (PINCODE.length==6) {

    var data = {
                                            cmd: 'register',
                                            pin:PINCODE,
                                           
                            
                                              };
                                                 $.ajax({
                                                type: "POST",
                                                url: "pandal.php",
                                                data: data,
                                                dataType: "json",
                                                cache: false,
                                              success: function(result)
                                            {
                                    
                                            if(result[0].MAP!='nothing')
                                          {
                                            console.log(result);
                                            //alert("D1");
                                            var xL = document.getElementById("PIX");
                                            xL.innerHTML ="";
                                          var lent=result.length;
                                   //var peri_uid=peri_id.substring(13,0);
                                   
                                      for (var i = 0; i< lent; i++) {
                                     $("#PIX").append('<div class="col-sm-6"> <div class="card" style="width: 18rem;"><img src="'+result[i].IMAGE+'" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">'+result[i].PANDAL_NAME+'</h5><p class="card-text">'+result[i].ADDRESS+'<br><h4>'+result[i].COMMENT+'</h4></p><h3><i class="fas fa-heart"></i><h4>'+result[i].RATING+'</h4></h3><a href="'+result[i].MAP+'" class="btn btn-primary">View Adress in Map</a></div></div></div>')   
                                     
                                    }
                                    // mdiv.scrollTop=mdiv.scrollHeight;
                                         }
                                  
                                    else
                                    {
                                      xp.innerHTML="No nearby pandals found";
                                     // alert("SUCESS");
                                       //swal(result, "seems you do not have any message", "error");
                                    }
                                                                     
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
                                               }
                                               else
                                                {
                                                  alert("ENTER VALID PINCODE");
                                                }

                                                  });
     });
                                               
  </script>
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-612a861291b94921"></script>

</body>
</html>