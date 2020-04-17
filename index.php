<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Dedicate a song</title>
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
            Report Number
        </label>
        <input id="input_1" name="input_1" type="text" />
    </li>
    <li>
        <label for="input_2">
            Report Type
        </label>
        <select id="input_2" name="input_2"></select>
    </li>
</ul>
  </div>
</body>
</html>