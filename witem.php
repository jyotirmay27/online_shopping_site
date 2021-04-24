<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
</head>

<style>
       body, html {
        
    margin:0px;
    background-image: linear-gradient(to right,rgb(243, 243, 243), rgba(176, 255, 229, 0.979));
}
   .imgcontainer{
       margin-top: 40px;
       margin-left: 40px;

   }

   .split {
    
  height: 100%;
  width: 30%;
  position: absolute;
  z-index: 1;
  top: 140px;
  
}

.left {
    left:0;
    margin-left: 40px;
  
  
}

.right {
    
  right: 450px;
  margin-right: 40px;
 
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
#submit-btn3 {
    margin: 18px 0;
    
    font-size: 20px;
    background-color: #dad607;
    color: #fff;
    border-radius: 50px;
    padding: 8px 25px;
    border: none;
    
}
#submit-btn3:hover {
  background-color: rgb(230, 248, 149);
    color: #000000;
}
#submit-btn4 {
    margin: 18px 0;
    
    
    font-size: 20px;
    background-color: #dad607;
    color: #fff;
    border-radius: 50px;
    padding: 8px 25px;
    border: none;
    
}
#submit-btn4:hover {
  background-color: rgb(230, 248, 149);
    color: #000000;
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
      

        <div class="split left">
    <div class="image">
        <img  src="assets/watch2.jpg" alt="" width="500" height="300">
          
        </div>
    </div>
    <div class="split right">
        <div class="image">
            
            <h1>Levis</h1>
            <h3>Men Black Printed Sneakers</h3>
            <h1>Rs. 2000 <s> Rs. 3999</s>(50% OFF)</h1>
            <button  type="submit" id="submit-btn3">Wish List</button>
            <button  type="submit" id="submit-btn4">Add To Cart</button>
           <div style="color:rgb(117, 125, 134)">
            <p>  100% Original Products</p>
            <p>  Free Delivery on order above Rs. 799</p>
            <p>  Pay on delivery might be available</p>
            <p>  Easy 30 days returns and exchanges</p>
            <p>  Try & Buy might be available</p>
        </div>
        <h3>PRODUCT DETAILS</h3>
           <div style="color:rgb(117, 125, 134)">
                
            <p>A pair of round-toe black sneakers, has regular styling, lace-up detail</p>
            <p>   Synthetic Leather upper</p>
            <p> Cushioned footbed</p>
            <p>  Textured and patterned outsole</p>
            <p>  Warranty: 3 months</p>
            <p>   Warranty provided by brand/manufacturer</p>
        </div>
            </div>
        </div>
    
</body>
</html>