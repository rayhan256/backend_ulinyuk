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
                            <form class="m-t" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" placeholder="example@gmail.com" required="">
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control" placeholder="Password" required="">
                                    </div>

                                    @if (session('message'))
                                        <div class="alert alert-danger show fade">
                                            <div class="alert-body">
                                                <button class="close" data-dismiss="alert">
                                                </button>
                                                {{session('message')}}
                                            </div>
                                        </div>
                                    @endif
                                    

                                    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                                </form>                                
                            </div>
                        <p class="mt-5">
                            <strong>Copyright</strong> UlinYuk © 2020
                        </p>
                    </div>
                </div>
            </body>

@include('layouts/js')