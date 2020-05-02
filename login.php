<!doctype html>
<html lang="en">

<head>
    <title>Covid-19-@Jayanta_Ghosh</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="my.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="animate.min.css">
    <?php
    include 'style1.php';
    include 'animate.php';
    include 'animate_min.php';

    ?>

</head>

<body style="background-color:rgb(161, 240, 14)">


    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light fixed-top  bart">
            <a class="navbar-brand text-white"><b>Invisible Monster</b><br class="text-center">
                <b>COVID-19</b>
                </br></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-white   my-2 my-sm-0" href="home.php"><b>Home</b> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white  my-2 my-sm-0" href="introduction.php"><b>About COVID-19</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white my-2 my-sm-0" href="interactive.php"><b>Corona in India</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white my-2 my-sm-0" href="model.php"><b>Corona & Society</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white my-2 my-sm-0" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Corona : Economic Impact</b></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item text-danger" href="indiaEco.php"><b>India</b></a>
                            <a class="dropdown-item text-danger" href="worldEco.php"><b>World</b></a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white my-2 my-sm-0" href="login.php"><b>Login-Signup</b></a>
                    </li>

                </ul>

            </div>
        </nav>

    </div>


    <br></br>
    <br></br>



    <div class="justify-content-center align-content-center d-flex ">

        <!-- required bootstrap js -->
        <button type="submit" name="commit" class="btn btn-outline-primary btn-lm" data-toggle="modal" data-target="#login">
            Login/Signup
        </button>
        <div class="modal fade" id="login" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
                            <span>Login <i class="fa fa-sign-in"></i></span>
                        </button>
                        <div class="text-center">
                            <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#signup">Signup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="signup" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Signup</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Password confirmation" aria-label="Password confirmation" aria-describedby="basic-addon1">
                        </div>
                        <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
                            <span>Signup <i class="fa fa-sign-in"></i></span>
                        </button>
                        <div class="text-center">
                            <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#login">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div class="justify-content-center align-content-center d-flex">

        <img class="img-fluid rounded-pill pb-5" src="bg.jpg" alt="Card image cap">

    </div>

    <!-- add 'footer' snippet in css -->
    <div class="footer-v1 bg-img p-5 " style=" background: #ffc107;">
        <div class="footer no-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="headline">
                            <p>Desiged By: Jayanta Ghosh</p>
                        </div>
                        <ul class="list-unstyled link-list">
                            <li><a href="https://en.wikipedia.org/wiki/ECE">Electronics & Communicaton Engineering</a></li>
                            <li><a href="https://nitdgp.ac.in/">National Institute of Technology Durgapur</a></li>

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="headline">
                            <p>Resources</p>
                        </div>
                        <ul class="list-unstyled link-list">
                            <li><a href="https://jg16u10555.wixsite.com/jayantaghosh">Personal Website: Jayanta Ghosh</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="headline">
                            <p>Support</p>
                        </div>
                        <address>
                            <ul class="list-unstyled link-list">
                                <li><a href="https://jg16u10555.wixsite.com/jayantaghosh">Contact Me</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </li>
                            </ul>
                        </address>
                    </div>
                    <div class="col-md-3">
                        <div class="headline">
                            <p>Company</p>
                        </div>
                        <ul class="list-unstyled link-list">
                            <li><a href="https://jg16u10555.wixsite.com/jayantaghosh">About Me</a></li>
                            <li> <a>Privacy Policy : CopyRight to Jayanta Ghosh</a></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>