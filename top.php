<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body, html {
    margin:0px;
}
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.mySlides {
    animation-name: slider;
  animation-duration: 1.5s;
  display:none;
    text-align: center;
  
  width: 100%;
  height: 50%;
  
}
/* tried to give slide animations but wasnt successful*/ 
@keyframes slider {
  from {opacity: .4} 
  to {opacity: 1}
}
.row {
  display: flex;
  
  margin-right:80px;
  margin-left:80px;
}

.column {
    
    padding: 5px;
    background-color: white;
     
    margin-bottom: 25px;
  }
  
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 30%;
  margin-right:400px;
  margin-left:400px;
    
    
    display: flex;
  width: auto;
  padding: 16px;
  
  color: skyblue;
  font-weight: bold;
  font-size: 30px;
  
  border-radius: 0 3px 3px 0;
  
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}



div.container {
  text-align: center;
  padding: 10px 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgb(255, 255, 255); 
}
/*tried giving animations*/
.zoom{
  transition: transform .2s;
}
.zoom:hover{
  transition: scale(1.2);
  opacity: 0.4;
}
div.bar {
    /*sticky is not working i dont know why*/
    position: -webkit-sticky;
  position: sticky;
    overflow: auto;
    background-color: white;
    
  }
  
  .bar a {
  
    float: left;
    color: #dad607;
    text-align: center;
    padding: 25px 30px;
    text-decoration: none;
    font-size: 24px;
  }
  
  .bar a:hover {
    background-color: #dad607;
    color: white;
  }
  
  .bar a.active {
    background-color: #dad607;
    color: white;
  }
  .footer{
    height: 50px;
    width: 100%;
   background-color: #dad607 ;
  border-color: black;
  }
  .coloumn{
    float: left;
    display: flex;
    text-align: center;
    height: 50px;
  width: 25%;
  background-color: #dad607
  }
  #input-box {
    width: 350px;
    font-size: 20px;
    margin: 20px 0;
    padding: 4px;
    border-radius: 50px;
}

#submit-btn {
    
    font-size: 20px;
    background-color: #dad607;
    color: #fff;
    border-radius: 50px;
    padding: 8px 25px;
    border: none;
    
}
#submit-btn2 {
    margin: 18px 0;
    float: right;
    font-size: 20px;
    background-color: #dad607;
    color: #fff;
    border-radius: 50px;
    padding: 8px 25px;
    border: none;
    
}
#submit-btn:hover {
  background-color: rgb(230, 248, 149);
    color: #000000;
}
#submit-btn2:hover {
  background-color: rgb(230, 248, 149);
    color: #000000;
}

</style>
</head>

  
<body>
    
    <div class="bar">
        <a class="active" href="home.php">Home</a>
        <a href="#">Men</a>
        <a href="#">Women</a>
        <a href="#">Summer</a>
        <a href="#">Winter</a>
        <a href="#">Rainy</a>
        <a   href="#">Cart
            <i class="fa fa-shopping-cart"></i>
        </a>
        <button onClick="window.location = 'signout.php'" type="submit" id="submit-btn2">Logout</button>
        <form>
            <input  type="search" placeholder="Search" id="input-box" >
            <button  type="submit" id="submit-btn">Search</button>
            
          </form>
      </div>
      

    <div class="mySlides ">
        
        <img src="assets/sale5.jpg" style="text-align:center" width="700" height="400"></br>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>

      <div class="mySlides ">
        
        <img src="assets/sale4.jpg" style="text-align:center" width="700" height="400" ></br>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <div class="mySlides ">
        
        <img src="assets/sale.jpg" style="text-align:center" width="700" height="400" ></br>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <div class="mySlides ">
        
        <img src="assets/sale6.jpg" style="text-align:center" width="700" height="400" ></br>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
<!-- Tried giving fade up while scrolling but couldnt -->

<div class="row">
<a href="Titem1.php">
    <div class="column zoom">
      <img src="assets/tshirt1.jpg"  width="424" height="210">
      <div class="container">
      <p style="font-family:Brush Script MT  ;color: blue;">₹2099 <s style="color: red;">₹3499(40% OFF)</s></p>
      </div>
    </div>
    </a>

    <a href="Titem2.php">
    <div class="column zoom">
      <img src="assets/tshirt2.jpg" alt="Norther Lights" width="424" height="210">
      <div class="container">
      <p style="font-family:Brush Script MT  ;color: blue;">₹2000 <s style="color: red;">₹4000(50% OFF)</s></p>
      </div>
    </div>
    </a>

    <a href="Titem3.php">
    <div class="column zoom">
        <img src="assets/tshirt3.jpg" alt="Norther Lights" width="424" height="210">
        <div class="container">
        <p style="font-family:Brush Script MT  ;color: blue;">₹1500 <s style="color: red;">₹3750(60% OFF)</s></p>
        </div>
      </div>
      </a>
    </div>
    
    <div class="row">
      <a href="Titem1.php">
        <div class="column zoom">
          <img src="assets/tshirt4.jpg" alt="5 Terre" width="424" height="210" >
          <div class="container">
          <p style="font-family:Brush Script MT  ;color: blue;">₹2099 <s style="color: red;">₹3499(40% OFF)</s></p>
          </div>
        </div>
        </a>
        <a href="Titem2.php">
        <div class="column zoom">
          <img src="assets/tshirt5.jpg" alt="Norther Lights" width="424" height="210" >
          <div class="container">
          <p style="font-family:Brush Script MT  ;color: blue;">₹2000 <s style="color: red;">₹4000(50% OFF)</s></p>
          </div>
        </div>
        </a>
        <a href="Titem3.php">
        <div class="column zoom">
            <img src="assets/tshirt6.jpg" alt="Norther Lights" width="424" height="210">
            <div class="container">
            <p style="font-family:Brush Script MT  ;color: blue;">₹1500 <s style="color: red;">₹3750(60% OFF)</s></p>
            </div>
          </div>
          </a>
        </div>

<footer class="footer">
    
    
    <div class="coloumn">
     <p> </p>
    </div>
    <div class="coloumn">
        <p> </p>
       </div>
       <div class="coloumn">
        <p> </p>
       </div>
       <div class="coloumn">
        <p></p>
       </div>
       <div class="coloumn">
        <p> </p>
       </div>
       <a href="#">
       <div class="coloumn">
           <p style="font-size: 25px; font-family:Arial, Helvetica, sans-serif; color:mintcream"> Contact Us</p>
          </div>
          </a>
          <a href="#">
          <div class="coloumn">
           <p style="font-size: 25px;  font-family:Arial, Helvetica, sans-serif; color:mintcream"> About Us</p>
          </div>
          </a>
          <div class="coloumn">
           <p> </p>
          </div>
          <div class="coloumn">
            <p>  </p>
           </div>
           <div class="coloumn">
               <p> </p>
              </div>
              <div class="coloumn">
               <p> </p>
              </div>
              <div class="coloumn">
               <p> Made By Jyotirmay Jain 1st Year</p>
              </div>

</footer>


    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        function currentSlide(n) {
           showSlides(slideIndex = n);
        }

        function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
 
  if (n > slides.length) {
      slideIndex = 1
    }    
  if (n < 1) {
      slideIndex = slides.length
    }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  
  slides[slideIndex-1].style.display = "block";  
  
        }
        </script>
</body>
</html>
