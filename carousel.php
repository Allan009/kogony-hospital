<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
      .carousel-item:after {
  content:"";
  position:absolute;
  top:0;
  bottom:0;
  left:0;
  right:0;
  background:rgba(0,0,0,0.6);
}
    </style>
  </head>
  <body>
  <div id="carouselExampleCaptions" class="carousel slide" style="height: 500px;" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner"style="height: 500px;">
    <div class="carousel-item active" >
      <img src="hosia.jpg" class="d-block w-100"style="height: 500px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Kogony admininstration block</h1>
        <p>This is the new administration block</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="hosia2.jpg" class="d-block w-100"style="height: 500px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>New hospital bed</h1>
        <p>The new beds have all equipments with the latest technology</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="hosia3.jpg" class="d-block w-100"style="height: 500px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Welcome</h1>
        <p>Kogony level 5 hospital </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </body>
</html>