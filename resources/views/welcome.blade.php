<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ship&Keep</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
 
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="index.html">
                <strong>Ship&Keep</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="navbar-toggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-2"><a href="#" class="btn btn-outline-secondary">Login</a></li>
                    <li class="nav-item"><a href="#" class="btn btn-outline-primary">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- content -->
    <div class="py-5 bg-white">
        <div class="px-4 my-5 text-center">
            <h1 class="display-5 fw-bold mt-4"><a href="{{route('products.index')}}">Ship&Keep</a></h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">ShipKeep app gives u everything u need for organisation of your Warehouse.</p>
                <div class="d-flex justify-content-sm-center">
                    <a href="#" class="btn btn-primary btn-lg mr-2">Sign up</a>
                    <a href="#" class="btn btn-outline-secondary btn-lg">Sign in</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <h3>Data Protection</h3>
                <p>In the event of product-data deletion or corruption, keep your product-data secure and unharmed across all of
                    your stores</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <h3>Products & Categories</h3>
                <p>Group, search, and filter your products.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <h3>Suppliers & Orders</h3>
                <p>Make your Inbound & Outbound movements with your selected suppliers and track every order.</p>
            </div><!-- /.col-lg-4 -->
        </div>
    </div>
    <section class="bg-white">
        <div class="container py-5">
            <h2 class="text-center my-5">Easy to try. Fair pricing to upgrade.</h2>
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Free</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="pricing-card-title">$0 <small class="text-muted">/ mo</small></h3>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>100 Products</li>
                            <li>3 Workers</li>
                            <li>1 Manager</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Company</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="pricing-card-title">$30 <small class="text-muted">/ mo</small></h3>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>2500 Products</li>
                            <li>Up to 20 workers & managers</li>
                            <li>Pro Features</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="pricing-card-title">$50 <small class="text-muted">/ mo</small></h3>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>50,000 Products</li>
                            <li>Up to 100 Accounts</li>
                            <li>Advance Features</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5 footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <strong>ShipKeep</strong>
                    <small class="d-block mb-3">© 2021-2022</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a href="#">Inbound</a></li>
                        <li><a href="#">Outbound</a></li>
                        <li><a href="#">E-mail marketing</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Locations</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/jquery.min.js' )}}"></script>
    <script src="{{ asset('js/popper.min.js' )}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  </body>

</html>