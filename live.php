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
                            <a class="dropdown-item text-danger" href="#"><b>India</b></a>
                            <a class="dropdown-item text-danger" href="#"><b>World</b></a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white my-2 my-sm-0" href="login.php"><b>Login-Signup</b></a>
                    </li>

                </ul>

            </div>
        </nav>

    </div>





    <div class="main">
        <div class="row w-100 h-100">
            <div class="col-12 col-md-5 order-md-1 order-2">

                <div class="left w-100 h-100 d-flex justify-content-center align-items-center ">
                    <img class="img-fluid rounded-pill p-25 animated infinite zoomIn mdelay" src="left.jpg" width="350" height="300">
                </div>


            </div>
            <div class="col-12  col-md-7 order-md-2 order-1">
                <div class="right w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1> Let's Stay Safe & Fight Together Against Cor<span class="animated infinite rotateIn"> <img src="z.png" width="100"></span> na Virus</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- update-->
    <div class="container-fluid align-content-center justify-content-center">

        <h1 class="text-center text-danger">COVID-19 Updates</h1>


    </div>
    <div class="container-fluid justify-content-center ">


        <table class="table table-light">


            <?php

            $data = file_get_contents('https://api.covid19india.org/data.json');
            $coranalive = json_decode($data, true);

            $statescount = count($coranalive['statewise']);




            $i = 1;
            ?>

            <tr>
                <td class="text-center" style="color:#fff; background: #2196f3;">Last-update-Date-time</td>
                <td class="text-center" style="color:#fff; background: #ffc107;">State</td>
                <td class="text-center" style="color:#fff; background: #008C76FF;">Confirmed</td>
                <td class="text-center" style="color:#fff; background: #e91e7f;">Active</td>
                <td class="text-center" style="color:#fff; background: #4caf50;">Recovered</td>
                <td class="text-center" style="color:#fff; background: #EE2737FF;">Deaths</td>
            </tr>
            <?php while ($i < $statescount) {
            ?>
                <tr>
                    <td class="text-center" style="color:#fff; background: #86a2b9;"> <?php echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"; ?></td>
                    <td class="text-center" style="color:#fff; background: #ddc786;"> <?php echo $coranalive['statewise'][$i]['state'] . "<br>"; ?></td>
                    <td class="text-center" style="color:#fff; background: rgb(135, 196, 188);"> <?php echo $coranalive['statewise'][$i]['confirmed'] . "<br>"; ?></td>
                    <td class="text-center" style="color:#fff; background: #d49eb8;"> <?php echo $coranalive['statewise'][$i]['active'] . "<br>"; ?></td>
                    <td class="text-center" style="color:#fff; background: #81c283;"><?php echo $coranalive['statewise'][$i]['recovered'] . "<br>"; ?></td>
                    <td class="text-center" style="color:#fff; background: rgb(180, 116, 122);"><?php echo $coranalive['statewise'][$i]['deaths'] . "<br>"; ?></td>
                </tr>

            <?php
                $i++;
            }
            ?>

        </table>

    </div>
    <h6>*Source:www.covid19india.org</h6>


    <div class="justify-content-around align-content-center d-flex mt-5">
        <div>
            <h4 class="count text-center text-primary p-5">Contact with your Doctors</h4>
            <img class="img-fluid animated bounce infinite" src="main.jpg" alt="">
        </div>

    </div>

    <div class="container justify-content-center align-content-center ">


        <form method="post" name="fname">
            <div class="form-group row mt-5">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Enter Your Name</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Enter Your Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Recent Foreign Trip History</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Visited from Foreign Country
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Not Visited from Foreign Country
                            </label>
                        </div>


                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <div class="col-sm-2">Symptoms Appearing</div>
                <div class="col-sm-10">
                    <div class="form-check inline">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Fevers
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Caugh
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Sneezing
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>


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