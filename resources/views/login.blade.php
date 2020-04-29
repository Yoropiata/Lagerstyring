<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        <link rel="stylesheet" href="/css/app.css">

        <title>Login</title>
        <style>

            @media (min-width: 768px) {
                .omb_row-sm-offset-3 div:first-child[class*="col-"] {
                    margin-left: 25%;
                }
            }

            .omb_login .omb_loginForm  .help-block {
                color: red;
            }
                
            @media (min-width: 768px) {
                .omb_login .omb_forgotPwd {
                    text-align: right;
                    margin-top:10px;
                }		
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="omb_login">
                    <div class="row omb_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-6">	
                        <h1>Login</h1>
                        <form class="omb_loginForm" action="/login" method="POST">
                        @csrf
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="email" placeholder="Email address">
                            </div>
                            <span class="help-block"></span>
                                                
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input  type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="help-block">{{ session('error') }}</div>
                            <label class="checkbox">
                                <input type="checkbox" name="checkbox" value="1">Remember Me
                            </label>

                            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                        </form>
                    </div>
                </div>
                <div class="row omb_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-3">
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <p class="omb_forgotPwd">
                            <!--<a href="#">Forgot password?</a>-->
                        </p>
                    </div>
                </div>	    	
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
    <script>

    </script>
</html>