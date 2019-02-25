<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Odyssey 2K19</title>
    <!-- Favicon -->
    <link href="/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="/css/argon-l.css?v=1.0.1" rel="stylesheet">
    <!-- Docs CSS -->
    <link type="text/css" href="/css/docs.min.css" rel="stylesheet">
    <link type="text/css" href="/css/style.css" rel="stylesheet">
</head>

<body>
    <?php include "nav.php" ?>

    <main>
        <section class="section section-shaped section-lg">
            <div class="shape shape-style-1 bg-gradient-default">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container pt-lg-md">
                @if ($errors->has('email'))
                <div class="alert alert-danger" role="alert">
                    <strong>Error!</strong> {{ $errors->first('email') }}
                </div>
                @endif
                @if ($errors->has('password'))
                <div class="alert alert-danger" role="alert">
                    <strong>Error!</strong> {{ $errors->first('password') }}
                </div>
                @endif
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-muted mb-4">
                                    <small>Sign in with credentials</small>
                                </div>
                                <form role="form" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input name="email" class="form-control" placeholder="Email" type="email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input name="password" class="form-control" placeholder="Password" type="password"
                                                required>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary my-4">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                            </div>
                            <div class="col-6 text-right">
                                <a href="/register" class="text-light">
                                    <small>Create new account</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "footer.php" ?>
    <!-- Core -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/popper/popper.min.js"></script>
    <script src="/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="/vendor/headroom/headroom.min.js"></script>
    <!-- Argon JS -->
    <script src="/js/argon-l.js?v=1.0.1"></script>
</body>

</html>
