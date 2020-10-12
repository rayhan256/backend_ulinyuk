<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @include('layouts/css')

</head>

<body>        
            <body class="gray-bg">

                <div class="middle-box text-center loginscreen animated fadeInDown">
                    <div>
                        <div>
            
                            <h1 class="logo-name"><i class="fa fa-google-wallet"></i></h1>
            
                        </div>
                        <h3>Welcome to UlinYuk</h3> <br>                    
                            <div>
                                <p>Please login your account.</p>
                                <form class="m-t" role="form" action="index.html">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Username" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" required="">
                                    </div>
                                    <button type="submit" class="btn block full-width m-b" style="background-color: #0096C7; color:white" class="btn">Login</button>
                                </form>                                
                            </div>
                        <p class="mt-5">
                            <strong>Copyright</strong> UlinYuk © 2020
                        </p>
                    </div>
                </div>
            </body>

@include('layouts/js')