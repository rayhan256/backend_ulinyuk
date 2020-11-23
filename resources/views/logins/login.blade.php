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
            
                            <h1 class="logo-name"><i class="fa fa-sign-in"></i></h1>
            
                        </div>
                        <h3>Welcome to UlinYuk</h3> <br>                    
                            <div>
                                <p>Please login your account.</p>
                            <form class="m-t" id="form-login">
                                    @csrf
                                    <div class="form-group">
                                        <input name="email" id="email" type="email" class="form-control" placeholder="example@gmail.com" required="">
                                    </div>
                                    <div class="form-group">
                                        <input name="password" id="password" type="password" class="form-control" placeholder="Password" required="">
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
            <script>
                const form = document.getElementById('form-login')    

                form.addEventListener('submit', (e) => {
                    e.preventDefault()
                    const emailAdmin = document.querySelector('#email').value;
                    const passwordAdmin = document.querySelector('#password').value;
                    const loginData = {
                    email : emailAdmin,
                    password : passwordAdmin
                }
                    fetch("{{env('APP_API_URL')}}login", {
                        method: 'POST',
                        headers: {
                                'Content-Type': 'application/json'
                                },
                        body: JSON.stringify(loginData)
                     })
                    .then(response => response.json())
                    .then(data => {
                        localStorage.setItem('token', data.token)
                        localStorage.setItem('role', data.role)
                        window.location.replace("{{env('APP_API_BASEURL')}}/dashboard");
                        //console.log(localStorage.getItem('role'))
                    }) 
                })
            </script>
@include('layouts/js')