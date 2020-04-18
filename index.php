<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Dedicate a song</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
img {
    max-height: 50px;
    
}
.player
{
      padding-left: 219px;
    padding-top: 4px;;
    border: solid 1px;
    margin: 9px;

}
.share
{
      padding-left: 219px;
    padding-top: 4px;
    border: solid 1px;
    margin: 9px;
}
audio
{
  background-color:#4caf50;
      max-width: 100px;
    border: solid 1px;

}
  </style>



</head>
<body>
<div class="container-fluid">
  <div class="header">
  <a href="#default" class="logo">Dedicate Song</a>
  <div class="header-right">

  </div>
</div>

</div>
  <div class="form">
<ul class="formList">
    <li>
        <label for="input_1">
            Your Name
        </label>
        <input id="input_1" name="input_1" type="text" />
    </li>
        <li>
        <label for="input_2">
            His/Her Name
        </label>
        <input id="input_2" name="input_1" type="text" />
    </li>
    <li>
        <label for="input_3">
            Choose Song
        </label>
        <select id="input_3" name="input_2">
          <option value="default">select Song</option>
  <option value="a.mp3">Saas me teri saas mili</option>
  <option value="b.mp3">Sun mere humsafar</option>
  <option value="c.mp3">Dushman na kare </option>
        </select>
    </li>
    </ul>
    <div class="player">
      <label for="input_3">
     Song Preview :
        </label>
        <audio controls id='audio_core'>
</audio>
</div>

 <script type="text/javascript">
   // Script to get the form values
   $(document).ready(function()
   {
    $("#wshare").click(function(){
    var name = $("#input_1").val();
    var dname = $("#input_2").val();

   $("#wshare").attr( { href:"whatsapp://send?text=Dear "+dname+", "+name+" Dedicate a song to you.", data-action:"share/whatsapp/share" } );
   alert(Link changed);
    });
   });

 </script>
    <div class="share">
      <label for="input_4">
      Send to whatsapp
        </label>
   <a id="wshare" href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share"><img src="1.jpg"></a>
</div>


  </div>
  <script type="text/javascript">
  // function to change songs on selection 

  $(function() {
    $("#input_3").change(function() {
       
        var sourceUrl = $('option:selected', this).val();
      var src=sourceUrl;
    var audio_core=$('#audio_core').attr('src', src);

    });
    });
  </script>
</body>
</html>