<!doctype html>
<html lang="en">

<head>
    <title>Covid-19</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
    include 'style1.php';
    include 'animate.php';
    include 'animate_min.php';

    ?>
</head>

<body onLoad="fatch()">

    <nav class="navbar navbar-expand-md navbar-light  Nav_clr p-3 fixed-top ">
        <a class="navbar-brand pl-5 text-white" href="#">COVID-19</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto  pr-3">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#aboutid">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#sympid">Symptoms</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Precautions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contid">Contact Us</a>
                </li>


            </ul>

        </div>
    </nav>
    <div class="main">
        <div class="row w-100 h-100">
            <div class="col-12 col-md-5 order-md-1 order-2">

                <div class="left w-100 h-100 d-flex justify-content-center align-items-center ">
                    <img class="img-fluid rounded-pill p-25 animated infinite zoomIn mdelay" src="left.jpg" width="350" height="300">
                </div>


            </div>
            <div class="col-12  col-md-7 order-md-2 order-1">
                <div class="right w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1> Let's Stay Safe & Fight Together Against Cor<span class="animated infinite bounceOut"> <img src="coro.png"></span> na Virus</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- update-->
    <div class="container-fluid align-content-center justify-content-center">

        <h1 class="text-center text-danger">COVID-19 Updates</h1>







    </div>
    <div class="container-fluid justify-content-center bg-warning">

        <?php

        $data = file_get_contents('https://api.covid19india.org/data.json');
        $coranalive = json_decode($data, true);

        $statescount = count($coranalive['statewise']);



        $i = 1;
        while ($i < $statescount) {



            echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>";
            echo $coranalive['statewise'][$i]['state'] . "<br>";
            echo $coranalive['statewise'][$i]['confirmed'] . "<br>";
            echo $coranalive['statewise'][$i]['active'] . "<br>";
            echo $coranalive['statewise'][$i]['recovered'] . "<br>";
            echo $coranalive['statewise'][$i]['deaths'] . "<br>";

            $i++;
        }
        ?>
    </div>


    <div class="justify-content-around align-content-center d-flex mt-5">
        <div>
            <h4 class="count text-center text-primary">COVID-19 in India</h4>
            <img class="img-fluid" src="dd.jpg" alt="">
        </div>

    </div>



    <div class="container" id="sympid">

        <section class="mb-5 container-fluid justify-content-center align-content-center">
            <h3 class="text-danger text-center mt-5 p-5">Symptoms of COVID-19</h3>
            <div class="row mt-5 p-5 ml-5 ">
                <div class="col-12 col-md-6 col-lg-6 mt-5">
                    <img class="img-fluid" src="head.png" alt="">

                </div>
                <div class="col-12 col-md-6 col-lg-6 mt-5">
                    <img class="img-fluid" src="caugh.png" alt="">
                </div>

            </div>
            <div class='row mt-5 p-5 ml-5'>
                <div class="col-12 col-md-6 col-lg-6 mt-5">
                    <img class="img-fluid" src="cold.png" alt="">
                </div>
                <div class="col-12 col-md-6 col-lg-6 mt-5">
                    <img class="img-fluid width-120 height-120" src="ss.PNG" alt="">
                </div>
            </div>
        </section>
    </div>
    <div class="container justify-content-center align-content-center ">
        <div class="mb-3">
            <h3 class="text-center text-danger" id="contid">Contact Us</h3>
        </div>

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
    <div class="footer-v1 bg-img">
        <div class="footer no-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="headline">
                            <p>Exams</p>
                        </div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">Exam1</a></li>
                            <li><a href="#">Exam2</a></li>
                            <li><a href="#">Exam3/a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="headline">
                            <p>Resources</p>
                        </div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="headline">
                            <p>Support</p>
                        </div>
                        <address>
                            <ul class="list-unstyled link-list">
                                <li><a href="#">Contact Us</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope"></i>support@company.com</a>
                                </li>
                            </ul>
                        </address>
                    </div>
                    <div class="col-md-3">
                        <div class="headline">
                            <p>Company</p>
                        </div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">About Us</a></li>
                            <li> <a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Cancellation/Rescheduling policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <!-- Optional JavaScript -->
    <script>
        function fatch() {
            $.get("https://api.covid19api.com/summary",
                function(data) {
                    var tbval = document.getElementById('tbval');
                    for (var i = 1; i < (data['Country'].length); i++) {
                        var x = tbval.insertRow();
                        x.insertCell(0);
                        tbval.rows[i].cells[0].innerHTML = data['Countries'][i - 1]['Country'];
                        tbval.rows[i].cells[0].style.background = "#7a4a91";
                        tbval.rows[i].cells[0].style.color = "#fff";

                        x.insertCell(1);
                        tbval.rows[i].cells[1].innerHTML = data['Countries'][i - 1]['TotalConfirmed'];
                        tbval.rows[i].cells[1].style.background = "#7a4a91";

                        x.insertCell(2);
                        tbval.rows[i].cells[2].innerHTML = data['Countries'][i - 1]['TotalRecovered'];
                        tbval.rows[i].cells[2].style.background = "#f36e23";

                        x.insertCell(3);
                        tbval.rows[i].cells[3].innerHTML = data['Countries'][i - 1]['TotalDeaths'];
                        tbval.rows[i].cells[3].style.background = "#7a4a91";
                        x.insertCell(4);
                        tbval.rows[i].cells[4].innerHTML = data['Countries'][i - 1]['NewConfirmed'];
                        tbval.rows[i].cells[4].style.background = "#4bb7d8";

                        x.insertCell(5);
                        tbval.rows[i].cells[5].innerHTML = data['Countries'][i - 1]['NewDeaths'];
                        tbval.rows[i].cells[5].style.background = "#9cc850";


                    }
                });
        }
    </script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
https://www.who.int/emergencies/diseases/novel-coronavirus-2019/global-research-on-novel-coronavirus-2019-ncov
</html>