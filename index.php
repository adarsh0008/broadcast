<!DOCTYPE html>
<html>
<head>
	<title>Dedicate song</title>
	<style type="text/css">
		/* Style the form element with a border around it */
form {
  border: 4px solid #f1f1f1;
}

/* Add some padding and a grey background color to containers */
.container {
  padding: 20px;
  background-color: #f1f1f1;
}

/* Style the input elements and the submit button */
input[type=text], input[type=submit] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Add margins to the checkbox */
input[type=checkbox] {
  margin-top: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
	</style>
</head>
<body>
<form action="action_page.php">
  <div class="container">
    <h2>Dedicate Song</h2>
    <p>Dedicate songs to your loved ones.</p>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder=" Your Name" name="name" required>
    <input type="text" placeholder="His/Her name" name="mail" required>
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
    </label>
  </div>

  <div class="container">
    <input type="submit" value="Subscribe">
  </div>
</form>
</body>
</html>
