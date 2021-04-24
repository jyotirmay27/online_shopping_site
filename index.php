<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.image {
  background-image: url("about.jpg");
  height: 100%;
  background-position: center;
  
  background-size: cover;
  
}

.image-text {
  text-align: center;
  position: absolute;
  top: 20%;
  left: 50%;
  
  color: white;
}

.image-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 20px 35px;
  color: #fff;
  background-color:peru;
  
  text-align: center;
  cursor: pointer;
  border-radius: 50px;
}

.image-text button:hover {
  background-color: paleturquoise;
  color: white;
  border-radius: 50px;
}


</style>
</head>
<body>


<div class="image">
  <div class="image-text">
    <h1 style="font-size:60px;font-family:courier; color:rgb(243, 6, 65)">Summers Are Getting Binod!!</h1>
    <h1 style="font-size:50px;font-family:Brush Script MT  ; color:rgb(6, 117, 243)">What Are You Waiting For??</h1>
    <button onClick="window.location = 'login.php'" style="font-size:20px;font-family:fantasy;">GET STARTED</button>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js"></script>
<script src="app.js">
</script>
</body>
</html>