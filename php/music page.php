
<!DOCTYPE html>
<html>

<head>
    
    <title>
        MusicPage
    </title>
      
    <!-- linking the stylesheet(CSS) -->
   

  

      
    <!-- input tag -->
    <input id="searchbar" onkeyup="search_()" type="text"
        name="search" placeholder="Search ..">
        <li id="search-bar" class="pull-right">
            ...
        </li>
   
      
    <!-- linking javscript -->
    <script src="animals.js"></script>
    

<style>
  
   body {
  background-image: url("https://media.istockphoto.com/photos/guitar-picture-id473801032?k=6&m=473801032&s=612x612&w=0&h=FX6Ax6ggDBcBj1WbC5PMzE0WPgf4EjzenGBgNevnY0c=")

}

h1 {text-align: center;}
h2 {text-align: center;}
h1 {
  color: rgb(128, 0, 0);
}

  
p.one{
border-style: solid;
  border-color: red;
}

div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  font-size:20px;
  color:red;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}
.btn{
    background-color:yellow;
    height:40px
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
.title{
  width: 75%;
  height: 70px;
  color: black;
  font-size:3.5em;
  text-align: center;
  position: relative;
        border: 1px solid rgb(11, 12, 12);
        border-top-left-radius: 10px;
        background: rgba(103, 103, 104, 0.2);
        box-shadow: 0 5px 15px rgba(0,0,0,.5);
        border-bottom-right-radius: 10px;
  
}
</style>
</head>

<body >
<?php include('php/navigation.php');?>


  <div class="Albumsbg">
  <br><br><br><br><br><br><br>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="Albumstitlepage">
                  <center><div class="title">MUSIC</div></center><br>
                  </div>
              </div>
          </div>
      </div>

  </div>
  <?php
  include 'database.php';
      
  $q = "SELECT * FROM music";
  $query = mysqli_query($conn,$q);
  $check_details= mysqli_num_rows($query)> 0;
  
  if($check_details)
  {
      while($row=mysqli_fetch_assoc($query))
  {
  
?>
<div class="responsive">
  <div class="gallery">
    <a href=<a href=<?php echo $row['mname']?>> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0NPz8iC3HpiaMJELDd7TdSDW8yjs-1UQuGw&usqp=CAU" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc"><b><?php echo $row['title']?></b></div>
    
    
    <h1><?php echo $row['price']?></h1>
    <center>
    <a href="php/BUY.php?t_name='music'&id=<?php echo $row['mid']?>&title=<?php echo $row['title']?>&price=<?php echo $row['price']?>&discription=<?php echo $row['discription']?>&discount=<?php echo $row['discount']?>">
    
<button class="btn">Add to cart  <i class="fa fa-cart-plus" title="Edit"></i></button></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<a href="php/BUY.php?t_name='music'&id=<?php echo $row['mid']?>&title=<?php echo $row['title']?>&price=<?php echo $row['price']?>&discription=<?php echo $row['discription']?>&discount=<?php echo $row['discount']?>"><button type="button" class="btn btn-block btn-express-buynow"><i class="cart-icon-white m-r-sm v-middle">
</i>Buy Now</button></a>
  </center>

    
  </div>
</div>

<?php
                }
            }
            else
            {
                echo"no";
            }
            ?>
<div class="clearfix"></div>

<div style="padding:6px;">
  <p> <b>"Music gives a soul to the universe, wings to the mind, flight to the imagination and life to everything.”</b></p>

    <div class="col-6">
        <button class="w3-button w3-round-xxlarge">Show More</button>
    </div>
  
</div>




</b>
</body>
</html>
<?php include('../php/footer.php');?>