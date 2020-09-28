    <link rel="stylesheet" href="<?= base_url('assets/css/admin/index.css');?>">
    </head>
        <body>

<!-- admin sidebar -->
        <nav class="nav m-auto  fixed-top text-white" style="height: 70px; width:100% !important; background: #2257b3;">
            <h3 class="nav-link m-auto" style="line-height:50px;">E-pilketos</h3>
             <a href="<?= base_url('admin/logout'); ?>" class="mr-5 text-light" style="text-decoration:none; float: right; line-height: 70px;"> <i class="fas fa-sign-out-alt"></i> logout </a>
        </nav>
          
            <div class="row" >
                <div class="col-md-2">
            
                    <div class="wrapper">

                        <nav id="sidebar">
                            <!-- Sidebar Header -->
                            <div class="sidebar-header text-white text-center " style="width: 100%;">
                                <i class="fas fa-user-circle mt-4 " style="z-index : 8; font-size: 60px;"></i>
                                <h4 class="text-center " style="margin-left: -3px;"> Admin </h4>

                                <hr class="bg-white" style="width: 80%;">
                            </div>

                            <!-- Sidebar Links -->
                            <ul class="list-unstyled components">
                                <li class="active item"><a href="<?= base_url() ?>admin"> <i class="fas fa-chart-line mr-3"></i>Dashboard</a></li>
                                <li class="item"><a href="<?= base_url() ?>admin/daftar_kandidat" ><i class="fas fa-user-graduate mr-3"></i>Daftar Kandidat</a></li>
                                <!-- Link with dropdown items -->
                                
                                <li class="item"><a href="<?= base_url(); ?>admin/lihat_hasil" ><i class="fas fa-poll mr-3"></i>Lihat Hasil</a></li>
                               
                            </ul>
                        </nav>

                        <div id="content">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                    </div>
                </div>  
                

                <div class="col-md-10 ">
                    <div class="side-content ml-4" style="margin-top: 120px;" >
                   <!-- card -->
                    <h4 class="mt-4">Dashboard</h4>

                    <hr style="width: 90%; margin-left:0;">

                    <div class="card-group">
                            <div class="row">
                                <div class="col-sm-4">
                                    
                                    <div class="card border-0 shadow-1 card1 " id="card" style="background-color:#ed7537";  >
                                    <div class="card-body">
                                        <h1 class="card-title">200 murid</h1>
                                        <p class="card-text">Sudah memilih</p>
                                        
                                    </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    
                                    <div class="card border-0 shadow-1 card2 " id="card" style="background-color:#1081c1";  >
                                    <div class="card-body">
                                        <h1 class="card-title">200 murid</h1>
                                        <p class="card-text">belum memilih</p>
                                        
                                    </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    
                                    <div class="card border-0 shadow-1 card3 " id="card" style="background-color:#0ebbb2";  >
                                    <div class="card-body">
                                        <h1 class="card-title">400 murid</h1>
                                        <p class="card-text">Jumlah pemilih</p>
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                        
                    <h4 class="mt-3">Statistic</h4>
                    <hr style="width: 90%; margin-left:0;">

                        <div class="chart-container bg-white mt-4 mb-5" style="padding : 20px 30px 70px 20px; width: 680px;">
                            <canvas id="doughnutChart" class="mt-5"   ></canvas>
                        </div>

                    </div>
                </div>
            </div>

            <hr> 
            <footer class=" justify-content-center   text-center mt-4" style="padding: 0px 0px 25px 0;">
                    <h6 cl><i class="far fa-copyright"></i> Komunitas <span style="color: #2ab7ca ;"> Teknik Informatika </span> </h6>
                    <div class="social-media">
                        <a href="http://facebook.com"><i class="fab fa-facebook-square text-dark mr-3"></i></a>
                        <a href="http://instagram.com"><i class="fab fa-instagram text-dark"></i></a>
                    </div>
            </footer>

            <style>
                

            </style>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

            <script src="<?= base_url('assets/js/admin/index.js'); ?>">
            
        
            </script>