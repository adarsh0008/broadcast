<?php
$name= $_GET['name'];
$dname= $_GET['dname'];
$media= $_GET['med'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Dedicate a song</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script type="text/javascript">
setHeader("Set-Cookie", "HttpOnly;Secure;SameSite=Strict");
 </script>
  <style type="text/css">
  body {
  background-color: #4CAF50;
} 
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

.form
{
  
  background-color: white;
    margin-top: 6px;
        padding-top: 1px;
    padding-bottom: 1px;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
.formList {
    border:1px solid #000;
    padding:10px;
    margin:10px;
}
label {
    width:200px;
    margin-left:-200px;
    float:left;
}
input, select {
    width:100%;
}
li {
    padding-left:200px;
    margin: 10px;
}
audio
{
	margin-left: 22px;
	padding-bottom: 34px;
}
  </style>

</head>
<body>
<div class="master">
<div class="container-fluid">
  <div class="header">
  <a href="#default" class="logo">Dedicate Song</a>
  <div class="header-right">

  </div>
</div>

</div>
  <div class="form">

  	<center><h3><?php echo $name ?> Dedicated this Song to you <?php echo $dname ?>!</h3></center>
  <audio controls>
  <source src="<?php echo $media ?>">
Your browser does not support the audio element.
</audio>
 <button>Dedicate songs to Friends</button> 

  </div>
<script type="text/javascript">
	
	$("button").click(function(){
  $(".master").load("index.php", function(responseTxt, statusTxt, xhr){
    if(statusTxt == "success")
      console.log("External content loaded successfully!");
    if(statusTxt == "error")
      alert("Error: " + xhr.status + ": " + xhr.statusText);
  });
});
</script>
 </div>	
</body>
</html>