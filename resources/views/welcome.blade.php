@extends('layouts.app')
@section('content')
        <div >
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Play Station 4</a></li>
                                <li><a href="#">Xbox One</a></li>
                                <li><a href="#">Nintendo Switch</a></li>
                                <li><a href="#">Play Station 3</a></li>
                                <li><a href="#">Xbox 360</a></li>
                                <li><a href="#">Nintendo 3DS</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Accessories</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Deals</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="#">New Offers</a></li>
                        <li><a href="#">Promotions</a></li>
                        <li><a href="#">Promotions</a></li>
                    </ul>
                    <form class="navbar-form pull-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
        </div>

        <div id="carousel-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/img/console.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="/img/console2.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="/img/console3.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="/img/controllers.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <div class="main">

            <div class="row">
                <div>
                <div class="col-md-2">
                    <div class="ps4-left-content-out">
                        <h3 align="center">PS4</h3>
                        <h4>Deals and new content</h4>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/nature.jpg">
                            <img src="/img/ps4-console.jpg" >
                            <div class="caption">
                                <p align="center">Consoles</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/img/ps4-videogame.jpg">
                            <div class="caption">
                                <p align="center">Video Games</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p align="center">Pre-Orders</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p align="center">New releases</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p align="center">Deals</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            </div>
            <div class="row">
                <div>
                <div class="col-md-2">
                    <div class="xbox-one-left-content-out">
                        <h3 align="center">Xbox One</h3>
                        <h4>Deals and new content</h4>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/nature.jpg">
                            <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <p>Consoles</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>Video Games</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>Pre-orders</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>New releases</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>Deals</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            </div>
            <div class="row">
                <div>
                <div class="col-md-2">
                    <div class="nintendo-switch-left-content-out">
                        <h3 align="center">Nintendo Switch</h3>
                        <h4>Deals and new content</h4>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/nature.jpg">
                            <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <p>Consoles</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>Video Games</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>Pre-orders</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>New releases</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>Deals</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            </div>
            <div class="row">
                <div>
                <div class="col-md-2">
                    <div class="3ds-left-content-out">
                        <h3 align="center">Nintendo 3DS & 2DS</h3>
                        <h4>Deals and new content</h4>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/nature.jpg">
                            <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <p>Consoles</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>Video Games</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>Pre-orders</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>New releases</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>Deals</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            </div>
            <div class="row">
                <div>
                <div class="col-md-2">
                    <div class="accessories-left-content-out">
                        <h3 align="center">Accessories</h3>
                        <h4>Deals and new content</h4>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/nature.jpg">
                            <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <p>PS4 Accessories</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>Xbox One Accessories</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>Switch Accessories</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>3DS & 2DS Accessories</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>PC Accessories</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            </div>
            <div class="row">
                <div>
                <div class="col-md-2">
                    <div class="offers-left-content-out">
                        <h3 align="center">New Offers</h3>

                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/nature.jpg">
                            <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
                            <div class="caption">
                                <p>Nintendo Switch Case</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>VicTsing 2.4G Slim Wireless</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>Nintendo Joy-Con(L/R)</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>8Bitdo NES30 Arcade Stick</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg">
                            <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                            <div class="caption">
                                <p>SADES SA-807 Green</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            </div>

        </div>




       <div class="footer" align="center">
           <h6>Techno Games</h6>
       </div>

@endsection