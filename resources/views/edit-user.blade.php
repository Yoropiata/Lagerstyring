<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        <link rel="stylesheet" href="/css/app.css">

        <title>{{$title}}</title>
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
    @include('navbar')
        <div class="container">
            <div class="omb_login">
                    <div class="row omb_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-6">	
                    <h1>{{$title}}</h1>
                        <form class="omb_loginForm" action="/bruger/ret" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            </div>    
                            <br>        
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input  type="password" class="form-control" name="password" placeholder="New Password">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input  type="password" class="form-control" name="c_password" placeholder="Confirm New Password">
                            </div>
                            <div class="help-block">{{ session('error') }}</div>
                            <br>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Opret</button>
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