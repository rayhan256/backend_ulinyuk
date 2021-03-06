<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="{{ asset('assets/img/profile_small.jpg') }}"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">
                                <b id="admin"></b>
                            </span>
                            <span class="text-muted text-xs block">Administrator <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        <i class="fa fa-google-wallet"></i>
                    </div>
                </li>
                
                <li>
                    <a href="/admin"><i class="fa fa-plus"></i> <span class="nav-label">Tambah Admin</span></a>
                </li>
                <li class="dropdown-divider"></li>
                <li>
                    <a href="/dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li class="dropdown-divider"></li>
                <li>
                    <a href="/objek-wisata"><i class="fa fa-tree"></i> <span class="nav-label">Master Objek Wisata</span></a>
                </li>
                <li>
                    <a href="/hotel"><i class="fa fa-building"></i> <span class="nav-label">Master Hotel</span></a>
                </li>
                <li>
                    <a href="/restaurant"><i class="fa fa-cutlery"></i> <span class="nav-label">Master Restaurant</span></a>
                </li>
                
                <li class="dropdown-divider"></li>
                <li>
                    <a href="/data-order-objek-wisata"><i class="fa fa-database"></i> <span class="nav-label">Data Order Objek Wisata</span></a>
                </li>
                <li>
                    <a href="/data-order-hotel"><i class="fa fa-database"></i> <span class="nav-label">Data Order Hotel</span></a>
                </li>
                <li>
                    <a href="/data-order-restaurant"><i class="fa fa-database"></i> <span class="nav-label">Data Order Restaurant</span></a>
                </li>

                <li class="dropdown-divider"></li>
                <li>
                    <a href="/berita"><i class="fa fa-bullseye"></i> <span class="nav-label">Berita</span></a>
                </li>
            </ul>

        </div>
    </nav>

    <script>
        const nama = document.querySelector('#admin')
    


        fetch("{{env('APP_API_URL')}}user", {
            headers: {
                'Authorization' : `Bearer ${localStorage.getItem('token')}`
            }
        }).then(response => response.json())
        .then(data => {
            console.log(data.id)
            nama.innerHTML = data.nama_user;

        })

       
    </script>