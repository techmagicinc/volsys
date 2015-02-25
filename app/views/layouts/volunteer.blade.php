<html>

    <head>
        <meta charset="utf-8">

       <!-- <link rel="stylesheet" href="<?php echo asset('css/style.css');?>" type="text/css" >

       <!-- Latest compiled and minified CSS -->

        <script src="<?php echo asset('js/jquery.js');?>"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

        <!-- Optional theme -->
     <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

        <nav class="navbar navbar-default" role="navigation">

            <div class="container-fluid">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   {{ HTML:: image('img/wayfree.png') }}
                    <!--    <a class="navbar-brand" href="#">Brand</a> -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/SignIn">Volunteer Sign In<span class="sr-only">(current)</span></a></li>
                        <li><a href="/">Admin Login</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Volunteer Services <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/NewProfile">New User Registration</a></li>

                                <li><a href="/ContactForm">Contact Administrator</a></li>

                                <!-- <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li> -->
                            </ul>
                        </li>
                    </ul>


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


    </head>

    <body>

        @yield('body')

    </body>

</html>