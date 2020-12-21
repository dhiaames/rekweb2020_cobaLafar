<!-- slide show foto-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/ban1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/ban2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/ban3.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- tombol cari dan kriteria -->
<nav class="navbar navbar-light bg-light justify-content-center">
    <form class="form-inline">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Location</span>
            </div>
            <input type="text" class="form-control" placeholder="Search by Location" aria-label="S-location" aria-describedby="basic-addon1">
        </div>
    </form>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search any restaurants" aria-label="S-name ">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>


<!-- grup restoran -->
<section class="daftar-grup">
    <ul class="nav justify-content-center text-dark">
        <li class="nav-item">
            <a class="nav-link " href="#">Western</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Fast Food</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Indonesian</a>
        </li>
    </ul>
</section>

tampil grup restoran
<div class="container">

    <div class="row mt-3">
        <div class="col">
            <h1>All Menu</h1>
        </div>
    </div>

    <div class="row" id="daftar-menu">

    </div>

</div>