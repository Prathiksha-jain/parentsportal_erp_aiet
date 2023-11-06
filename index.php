<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="navi">
<?php include 'navigation.php'; ?>
</div>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="aiet.jpg" alt="">
      <div class="carousel-caption">
        <h4>Welcome to AIET Parents Portal</h4>
        <p>We are here connecting you digitaly to your child!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="aiet.jpg" alt="" width="1100" height="500">
      <div class="carousel-caption">
        <h4>Welcome to AIET Parents Portal</h4>
        <p>We are here connecting you digitaly to your child!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div>
<div class="card_container">
  <div class="card">
    <img src="faculty.jpg" alt="">
    <div class="card_content">
      <h3>
        View Attendance
      </h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam fugiat doloremque, vitae possimus nulla, e
        st natus neque quia soluta nostrum recusandae, veritatis eos nesciunt perspiciatis fugit! Inventore exercitationem nemo vero!</p>
        <a href="" class="btn">Read More</a>
    </div>
  </div>

  <div class="card">
    <img src="faculty.jpg" alt="">
    <div class="card_content">
      <h3>
        View Marks
      </h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam fugiat doloremque, vitae possimus nulla, e
        st natus neque quia soluta nostrum recusandae, veritatis eos nesciunt perspiciatis fugit! Inventore exercitationem nemo vero!</p>
        <a href="" class="btn">Read More</a>
    </div>
  </div>

  <div class="card">
    <img src="faculty.jpg" alt="">
    <div class="card_content">
      <h3>
       Conatact Faculty
      </h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam fugiat doloremque, vitae possimus nulla, e
        st natus neque quia soluta nostrum recusandae, veritatis eos nesciunt perspiciatis fugit! Inventore exercitationem nemo vero!</p>
        <a href="" class="btn">Read More</a>
    </div>
  </div>
</div>
</body>
</html>
