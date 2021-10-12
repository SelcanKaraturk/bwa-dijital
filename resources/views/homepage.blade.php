<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'PT Serif', serif;

        }

        body{
            font-family: 'PT Serif', serif;
        }

        section div .col-4 {
            margin-bottom: 30px;
        }

        .navend a:hover {
            border-bottom: 2px blue solid;
        }

        input {
            background-color: #2c6dff;
            border: none;
            color: white;
        }

        input:focus {
            outline: none;
        }
        .img-cls{
            width: 100%;
            position: relative;
            height: auto;
        }
        .brd {
            border: 0px solid !important;
        }

        .slider-menu-text {
            font-size: 18px;
        }

        @media (max-width: 575.98px) {
            .slider-menu-text {
                font-size: 12px;
            }
        }


        @media (max-width: 767.98px) {
        }


        @media (max-width: 991.98px) {
        }

        @media (max-width: 1199.98px) {
        }

    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>BWA</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="row">
                <div
                    class="col-lg-6 col-md-6 col-sm-12 col-12 bg-primary text-white d-flex align-items-center justify-content-end ">
                    Blog <strong class="m-1">  template</strong>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                    <nav class="navbar navbar-expand-lg navbar-light ">

                        <div class="navbar-nav">
                            <a class="nav-link " href="#">About</a>
                            <a class="nav-link " href="#">Cooperation</a>
                            <a class="nav-link ">Contact</a>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <nav class="navbar navbar-expand-lg  ">

                <div class="navbar-nav navend" style="font-family: 'PT Serif', serif">
                    <a class="nav-link" href="#">Nature</a>
                    <a class="nav-link" href="#">People</a>
                    <a class="nav-link ">Trips</a>
                    <a class="nav-link ">Animals</a>
                    <a class="nav-link ">Fashion</a>
                    <a class="nav-link ">Tech</a>
                    <a class="nav-link ">...</a>
                </div>

            </nav>
        </div>
    </div>

    <div class="row ">
        <div class="col-12 p-0" style="max-height: 465px">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner position-relative">
                    <div class="carousel-item active">
                        <img src="{{asset('image/slider.png')}}" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/id/343/700/287" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/id/131/700/287" class="d-block w-100 h-100" alt="...">
                    </div>

                    <div
                        class="position-absolute top-0 start-0 text-white d-flex justify-content-center align-items-center h-100 w-100">
                        <div class="w-50 text-center pt-3">

                            <h2 class="slider-menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Adipisci aut ea eaque impedit inventore ipsum nam pariatur veniam. Animi, tempora!</h2>
                        </div>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <section>

        <div class="row mx-auto mt-4 " style="width: 60vw">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5">

                <div class="card brd">
                    <div class="img-cls">
                        <img src="{{asset('image/img-1.png')}}" class="card-img-top" alt="">
                        <div class="position-absolute start-1 px-3 py-1 text-white" style="bottom:9%;background-color: #58b701">
                            Lorem
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel?</p>
                    </div>

                    <div class="col-12 text-muted">
                        <small>Lorem ipsum | <a href=""> lorem</a></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">

                <div class="card brd">
                    <div class="img-cls">
                        <img src="{{asset('image/img-2.png')}}" class="card-img-top" alt="">
                        <div class="position-absolute start-1 px-3 py-1 text-white" style="bottom:9%;background-color: #1b55e7">
                            Lorem
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel?</p>
                    </div>

                    <div class="col-12 text-muted">
                        <small>Lorem ipsum | <a href=""> lorem</a></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">

                <div class="card brd">
                    <div class="img-cls">
                        <img src="{{asset('image/img-3.png')}}" class="card-img-top" alt="">
                        <div class="position-absolute start-1 px-3 py-1 text-white" style="bottom:9%;background-color: #010002">
                            Lorem
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel?</p>
                    </div>

                    <div class="col-12 text-muted">
                        <small>Lorem ipsum | <a href=""> lorem</a></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5">

                <div class="card brd">
                    <div class="img-cls">
                        <img src="{{asset('image/img-4.png')}}" class="card-img-top" alt="">
                        <div class="position-absolute start-1  px-3 py-1 text-white" style="bottom:9%;background-color:#d90444 ">
                            Lorem
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel?</p>
                    </div>

                    <div class="col-12 text-muted">
                        <small>Lorem ipsum | <a href=""> lorem</a></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                <div class="card brd">
                    <div class="img-cls">
                        <img src="{{asset('image/img-5.png')}}" class="card-img-top" alt="">
                        <div class="position-absolute start-1  px-3 py-1 text-white" style="bottom:9%;background-color: #d90444">
                            Lorem
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel?</p>
                    </div>

                    <div class="col-12 text-muted">
                        <small>Lorem ipsum | <a href=""> lorem</a></small>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                <div class="card brd">
                    <div class="img-cls">
                        <img src="{{asset('image/img-6.png')}}" class="card-img-top" alt="">
                        <div class="position-absolute start-1  px-3 py-1 text-white" style="bottom:9%;background-color: #8100b2">
                            Lorem
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel?</p>
                    </div>

                    <div class="col-12 text-muted">
                        <small>Lorem ipsum | <a href=""> lorem</a></small>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class=" row  mt-4 mb-5 border-0" style="height: 250px">
            <div class="col-12  text-white d-flex flex-column text-center justify-content-center position-relative">
                <img src="{{asset('image/footer-bg.png')}}" alt="" class="h-100">
                <div class="position-absolute  w-100" style="top: 50px">
                    <h2 class="d-block ">Lorem ipsum dolor.</h2>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, officiis!</p>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-9 mx-auto rounded-pill text-end"
                         style="background-color: #2c6dff">
                        <input type="text">
                        <button class="rounded-pill border-0 p-1 bg-white w-25 text-primary">Sign up</button>
                    </div>
                </div>

                <div class="w-100 mt-3">

                </div>


            </div>
        </div>
    </section>

    <footer>
        <div class="row mb-5" style="height: 80px">
            <div class="col-12 text-muted d-flex flex-column text-center justify-content-center">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, officiis!</p>
                <p>Lorem ipsum dolor sit amet.</p>

            </div>
        </div>
    </footer>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


</body>
</html>
