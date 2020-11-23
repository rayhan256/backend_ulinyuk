<div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to UlinYuk Administrator.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <button class="btn" style="border: none" onClick="sign_out()">
                        <i class="fa fa-sign-out"></i> Log out
                    </button>
                </li>
            </ul>

        </nav>
    </div>
    <script>
        if (localStorage.getItem('token') == null && localStorage.getItem('role') != "admin") {
            window.location.replace("{{env('APP_API_BASEURL')}}");
        }

        async function sign_out() {
            let message = confirm("Are You Sure Want To Logout ?")

            if (message) {
                const response = await fetch("{{env('APP_API_URL')}}logout", {
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`
                    }
                })
                const res = await response.json()
                console.log(res)
                if (response.status == 200) {
                    localStorage.clear()
                    window.location.replace("{{env('APP_API_BASEURL')}}")
                }
            }
        }
    </script>