<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <title>Admin panel</title>
        <style>
	.table-wrapper {
        margin: 30px 0;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
		padding-bottom: 15px;
		background: #e9ecef;
		color: #000;
		padding: 16px 30px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn {
		color: #566787;
		float: right;
		font-size: 13px;
		background: #fff;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a.settings {
        color: #2196F3;
    }
    table.table td a.delete {
        color: #F44336;
    }

    /*
     * Form
     */
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
    <body class="bg-light">
    @include('navbar')
        <div class="container">
          <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title2">Opret Bruger</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="omb_login">
                                <form class="omb_loginForm" action="/bruger/opret" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="name" placeholder="Navn">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="Email address">
                                    </div>
                                    <br>                                                        
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input  type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input  type="password" class="form-control" name="c_password" placeholder="Confirm Password">
                                    </div>
                                    <div class="help-block">{{ session('error') }}</div>
                                    <br>
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Opret</button>
                                </form>
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
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2><b>Brugere</b></h2>
                        </div>
                        <div class="col-sm-7">
                            <a data-toggle="modal" data-target="#myModal" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Opret bruger</span></a>					
                        </div>
                    </div>
                </div>
                <table class="table table-light table-striped table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Navn</th>						
                            <th>Opretted</th>
                            <th>Rolle</th>
                            <th>Email</th>
                            <th>Handling</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->created_at}}</td>                        
                            <td>Admin</td>
                            <td>{{$user->email}}</td> 
                            <td>
                                <a href="/bruger/ret?id={{$user->id}}" class="settings" title="Ret" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                <a href="/bruger/slet?id={{$user->id}}" class="delete" title="Slet" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
    <script>

    </script>
    <?php if(null !== session('error')) { ?>
        <script type="text/javascript">
        $(window).on('load',function(){
            $('#myModal').modal('show');
        });
        </script>
    <?php } ?>
</html>