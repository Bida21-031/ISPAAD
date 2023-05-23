<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body {
            background-image: url("images/image\ 1.jpg");
            background-size: cover;
            background-repeat: repeat;
            background-position: center;
            }
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
  background-color: #0099cc;


}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  color: #369e3b;
  background-color: #dddddd;
  padding: 5px;
    position: sticky;
    text-align: center;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: left;
}

a {
  color: green;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}



.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: green;
  padding: 15px;
  color: white;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: grey;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body>

<div class="header">
          <h2>ISPAAD MANAGEMENT SYSTEM<br>
            Ministry Of Agriculture</h2>
           <nav>
            <ul>
              <li><a class="a" href="index.php">Home</a></li>
              <li><a class="b" href="login.php">Login</a></li>
              <li><a class="c" href="addUser.php">Add Users</a></li>
              </ul>  
          </nav>
</div>
<br>
<div class="row">

  <div class="col-3 col-s-3 aside menu">
    
  <p><b> Integrated Support Programme for Arable Agriculture Development (ISPAAD)</b></p>
  <p>The components of the Integrated Support Programme for Arable Agriculture Development include, Cluster Fencing, 
            Provision of Potable Water, Seeds and Fertilizers, Facilitation of access to Credit and Establishment of Agricultural Service Centres. 
          <br>
           </p>
  </div>

  <div class="col-6 col-s-9">
  The components of the Integrated Support Programme for Arable Agriculture Development include, Cluster Fencing, 
            Provision of Potable Water, Seeds and Fertilizers, Facilitation of access to Credit and Establishment of Agricultural Service Centres. 
         
</div>

  <div class="col-3 col-s-12">
    <div class="aside">
    <p><b> (ISPAAD)</b></p>
         
          <p>Over the past three decades substantial amount of capital was used to fund the Accelerated Rain fed Arable Programme (ARAP), 
          Arable Land Development Programme (ALDEP) and other agricultural support programs.
          <br> 
          It was envisaged that the performance of the arable sub-sector would be greatly improved by establishing Agricultural Service Centres 
            and assisting arable farmers to acquire requisite inputs and draught power to undertake field operations.
          </p>
          <br>
        </div>
  </div>
</div>

<div class="footer">

    <p>© 2023 Agriculture Management System</p>
    <p>Agricultural Department dedicated to providing innovative solutions to farmers and agricultural businesses to improve productivity, profitability, and sustainability in the agricultural industry</p>
    <p>All rights reserved | Design by BIDA21 GROUP2C></p>
    
</div>

</body>
</html>


