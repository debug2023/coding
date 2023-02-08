<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}

img {
    width: 100%;
    height: auto;
}

[class*="col-"] {
    float: left;
    padding: 15px;
    width: 100%;
}
@media only screen and (min-width: 600px) {
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
html {
    font-family: "Lucida Sans", sans-serif;
}
.header {
    background-color: darkred;
    color: #ffffff;
    text-align: center;
    padding: 15px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color :#f08080;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: white;
}
.aside {
    background-color: pink;
    color: black;
    text-align: center;
    font-size: 12px;
	padding: 15px;
}

.active{
	color: white;
}

</style>
</head>
<body>

<div class="header">
  <h1>|     SYARIKAT MOBILE SDN. BHD.    |</h1>
</div>



<div class="col-3 col-s-3 menu">
  <ul> 			
	<li> <a href ="index.php">Home</a> </li>
	<li> <a href ="boran.php">Form</a> </li>
	<li> <a class="active" href ="contact.php">Contact</a> </li>
  </ul>
</div>

<div class="aside">
<h2>Sebarang pertanyaan boleh disalurkan melalui : </h2>
<p>E mail : aashikinfadzil@gmail.com </p>
<p>No Tel : +60173559809 (Ashikin Fadzil)</p>
<p>&nbsp &nbsp &nbsp +60173559810 (Adi Fadzil)</p>
<p>Alamat : Syarikat Mobile Sdn. Bhd, No 566, 
Jalan Pendidikan, Taman Universiti Skudai, 81300 
Skudai,Johor.</p>
</div>
  




</body>
</html>

