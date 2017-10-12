<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>
  <?= link_tag('assets/css/bootstrap.min.css') ?>
</head>
<body>
</br>
	
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">shweta</a>
    </div>
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">               
            <li><a href="#">WHAT'S NEW</a></li>
            <li><a href="#">CLOTHING</a></li>
            <li><a href="#">DRESSES</a></li>
            <li><a href="#">SHOES</a></li>
            <li><a href="#">ACCESSORIES</a></li>
            <li><a href="#">DRESSES</a></li>
            <li class="divider"></li>
         
            
          
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">LogIn</a></li>
      </ul>
    </div>
  </div>
</nav>