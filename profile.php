<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>AgenteDirecto | Perfil Empresas </title>
  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="global/css/bootstrap.min.css">
  <link rel="stylesheet" href="global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="global/vendor/waves/waves.css">
  <link rel="stylesheet" href="global/vendor/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/examples/css/pages/profile.css">
  <link rel="stylesheet" href="global/vendor/slick-carousel/slick.css">
  <link rel="stylesheet" href="assets/examples/css/structure/ribbon.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js"></script>
    <script src="global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="global/vendor/modernizr/modernizr.js"></script>
  <script src="global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
</head>

<body class="page-profile">
 
    <!-- user nav -->
    <?php include('layouts/user.php');?>

    <?php //include('layouts/menu.php');?>

    <?php //include('layouts/menu-sup.php'); ?>

  <!-- Page -->
  <div class="page animsition">
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">

        <div class="col-md-3">
          <!-- Page Widget -->
          <div class="widget widget-shadow text-center">
            <div class="widget-header">
              <div class="widget-header-content">
                <a class="avatar avatar-lg" href="javascript:void(0)">
                  <img src="global/portraits/5.jpg" alt="...">
                </a>
                <h4 class="profile-user">Nombre de la Empresa</h4>
                <p class="profile-job">Rubro</p>
                <p class="profile-job">Nivel de Verificación: <b class="text-success">Alto</b></p>
                <div class="profile-social">
                  <a class="icon bd-twitter" href="javascript:void(0)"></a>
                  <a class="icon bd-facebook" href="javascript:void(0)"></a>
                  <!--a class="icon bd-dribbble" href="javascript:void(0)"></a>
                  <a class="icon bd-github" href="javascript:void(0)"></a-->
                </div>
                <button type="button" class="btn btn-success">Trabaja con Nosotros</button>
                <button type="button" class="btn btn-info">Envía un mensaje</button>
              </div>
            </div>
            <!--div class="widget-footer">
              <div class="row no-space">
                <div class="col-xs-4">
                  <strong class="profile-stat-count">260</strong>
                  <span>Est #1</span>
                </div>
                <div class="col-xs-4">
                  <strong class="profile-stat-count">180</strong>
                  <span>Est #2</span>
                </div>
                <div class="col-xs-4">
                  <strong class="profile-stat-count">2000</strong>
                  <span>Est #3</span>
                </div>
              </div>
            </div-->
          </div>
          <!-- End Page Widget -->
        </div>
        <div class="col-md-9">
          <!-- Panel -->
          <div class="panel">
            <div class="panel-body nav-tabs-animate nav-tabs-horizontal">
              <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation"><a data-toggle="tab" href="#activities" aria-controls="activities"
                  role="tab">Información General <!--span class="badge badge-danger">5</span--></a>
                </li>
                <li role="presentation"><a data-toggle="tab" href="#profile" aria-controls="profile" role="tab">Licitaciones</a></li>
                <li role="presentation"><a data-toggle="tab" href="#messages" aria-controls="messages"
                  role="tab">Adquisiciones</a></li>
                <!--li class="dropdown" role="presentation">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <span class="caret"></span>Menu </a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="active" role="presentation"><a data-toggle="tab" href="#activities" aria-controls="activities"
                      role="tab">Activities <span class="badge badge-danger">5</span></a></li>
                    <li role="presentation"><a data-toggle="tab" href="#profile" aria-controls="profile"
                      role="tab">Profile</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#messages" aria-controls="messages"
                      role="tab">Messages</a></li>
                  </ul>
                </li-->
              </ul>
              <div class="tab-content">
                <div class="tab-pane active animation-slide-left" id="activities" role="tabpanel">

                  <br><br>
                  <div class="widget">
                    <div class="widget-content">
                      <div class="row no-space">
                        <div class="col-sm-4">
                          <div class="counter counter-lg counter-inverse bg-blue-600 vertical-align height-150">
                            <div class="vertical-align-middle">
                              <div class="counter-icon margin-bottom-5"><i class="icon md-image" aria-hidden="true"></i></div>
                              <span class="counter-number">1,286</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="counter counter-lg counter-inverse bg-red-600 vertical-align height-150">
                            <div class="vertical-align-middle">
                              <div class="counter-icon margin-bottom-5"><i class="icon md-tv-play" aria-hidden="true"></i></div>
                              <span class="counter-number">620</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="counter counter-lg counter-inverse bg-purple-600 vertical-align height-150">
                            <div class="vertical-align-middle">
                              <div class="counter-icon margin-bottom-5"><i class="icon md-email" aria-hidden="true"></i></div>
                              <span class="counter-number">2,860</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                  <div class="col-md-8">

                   <h3 class="panel-title">Overview de la Empresa</h3>
                    
                    <div class="panel-body">
                      <p>Descripción de la Empresa
                      </p>
                    </div>

                    <div class="col-md-6">
                      <div class="example">
                        <div class="ribbon ribbon-corner ribbon-warning">
                          <span class="ribbon-inner"><i class="icon md-favorite" aria-hidden="true"></i></span>
                        </div>
                        <p>Dato relevante
                          diam.
                        </p>
                      </div>

                       <div class="example">
                        <div class="ribbon ribbon-corner ribbon-warning">
                          <span class="ribbon-inner"><i class="icon md-favorite" aria-hidden="true"></i></span>
                        </div>
                        <p>Dato relevante
                          diam.
                        </p>
                      </div>

                       <div class="example">
                        <div class="ribbon ribbon-corner ribbon-warning">
                          <span class="ribbon-inner"><i class="icon md-favorite" aria-hidden="true"></i></span>
                        </div>
                        <p>Dato relevante
                          diam.
                        </p>
                      </div>

                    </div>


                    <div class="col-md-6">
                       <div class="example">
                        <div class="ribbon ribbon-corner ribbon-warning">
                          <span class="ribbon-inner"><i class="icon md-favorite" aria-hidden="true"></i></span>
                        </div>
                        <p>Dato relevante
                          diam.
                        </p>
                      </div>
                       <div class="example">
                        <div class="ribbon ribbon-corner ribbon-warning">
                          <span class="ribbon-inner"><i class="icon md-favorite" aria-hidden="true"></i></span>
                        </div>
                        <p>Dato relevante
                          diam.
                        </p>
                      </div>
                       <div class="example">
                        <div class="ribbon ribbon-corner ribbon-warning">
                          <span class="ribbon-inner"><i class="icon md-favorite" aria-hidden="true"></i></span>
                        </div>
                        <p>Dato relevante
                          diam.
                        </p>
                      </div>
                     
                    </div>
                   

                  </div>  

                <div class="col-md-4">

                    <h3 class="panel-title">Desde que usa AgenteDirecto</h3>

                   <div class="widget">
                    <div class="widget-content padding-30 bg-white">
                      <div class="counter counter-lg">
                        <div class="counter-label text-uppercase">Dato Relevante</div>
                        <div class="counter-number-group">
                          <span class="counter-icon margin-right-10 green-600">
                            <i class="md-chart"></i>
                          </span>
                          <span class="counter-number">2.8</span>
                          <span class="counter-number-related">%</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="widget">
                    <div class="widget-content padding-30 bg-white">
                      <div class="counter counter-lg">
                        <div class="counter-label text-uppercase">Dato Relevante</div>
                        <div class="counter-number-group">
                          <span class="counter-icon margin-right-10 green-600">
                            <i class="md-chart"></i>
                          </span>
                          <span class="counter-number">2.8</span>
                          <span class="counter-number-related">%</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="widget">
                    <div class="widget-content padding-30 bg-white">
                      <div class="counter counter-lg">
                        <div class="counter-label text-uppercase">Dato Relevante</div>
                        <div class="counter-number-group">
                          <span class="counter-icon margin-right-10 green-600">
                            <i class="md-chart"></i>
                          </span>
                          <span class="counter-number">2.8</span>
                          <span class="counter-number-related">%</span>
                        </div>
                      </div>
                    </div>
                  </div>

                

                  </div>  

                  <!--a class="btn btn-block btn-default profile-readMore" href="javascript:void(0)"
                  role="button">Show more</a-->
                </div>
                <div class="tab-pane animation-slide-left" id="profile" role="tabpanel">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="media media-lg">
                        <div class="media-left">
                          <a class="avatar" href="javascript:void(0)">
                            <img class="img-responsive" src="global/portraits/5.jpg" alt="...">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">Nombre de la empresa
                            <span class="text-danger">Nueva Licitación</span>
                          </h4>
                          <small>hace 14 minutos</small>
                          <div class="profile-brief">
                            <div class="media">
                              <a class="media-left">
                                <img class="media-object" src="global/photos/placeholder.png" alt="...">
                              </a>
                              <div class="media-body padding-left-20">
                                <h4 class="media-heading">Titulo de la Licitación</h4>
                                <p>Cuando la licitación viene con un archivo / foto adjunto, va a tener esta característica</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="media-left">
                          <a class="avatar" href="javascript:void(0)">
                            <img class="img-responsive" src="global/portraits/2.jpg" alt="...">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">Nombre de la Empresa
                            <span>actualización de Licitación</span>
                          </h4>
                          <small>hace 14 minutos</small>
                          <div class="profile-brief">De lo contrario, viene con este formato</div>
                        </div>
                      </div>
                    </li>
                    
                  </ul>
                </div>
                <div class="tab-pane animation-slide-left" id="messages" role="tabpanel">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="media media-lg">
                        <div class="media-left">
                          <a class="avatar" href="javascript:void(0)">
                            <img class="img-responsive" src="global/portraits/5.jpg" alt="...">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">Nombre de la empresa
                            <span class="text-danger">Nueva Licitación</span>
                          </h4>
                          <small>hace 14 minutos</small>
                          <div class="profile-brief">
                            <div class="media">
                              <a class="media-left">
                                <img class="media-object" src="global/photos/placeholder.png" alt="...">
                              </a>
                              <div class="media-body padding-left-20">
                                <h4 class="media-heading">Titulo de la Licitación</h4>
                                <p>Cuando la licitación viene con un archivo / foto adjunto, va a tener esta característica</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="media-left">
                          <a class="avatar" href="javascript:void(0)">
                            <img class="img-responsive" src="global/portraits/2.jpg" alt="...">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">Nombre de la Empresa
                            <span>actualización de Licitación</span>
                          </h4>
                          <small>hace 14 minutos</small>
                          <div class="profile-brief">De lo contrario, viene con este formato</div>
                        </div>
                      </div>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- End Panel -->
        </div>
    <!-- Media Content -->
    </div>
  </div>
       
      </div>
    </div>
  </div>
  <!-- End Page -->
  <!-- Footer -->
  <?php include('layouts/footer.php') ?>
  <!-- Core  -->
  <script src="global/vendor/jquery/jquery.js"></script>
  <script src="global/vendor/bootstrap/bootstrap.js"></script>
  <script src="global/vendor/animsition/animsition.js"></script>
  <script src="global/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="global/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
  <script src="global/vendor/waves/waves.js"></script>
  <!-- Plugins -->
  <script src="global/vendor/switchery/switchery.min.js"></script>
  <script src="global/vendor/intro-js/intro.js"></script>
  <script src="global/vendor/screenfull/screenfull.js"></script>
  <script src="global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="global/vendor/slick-carousel/slick.js"></script>
 
  <!-- Scripts -->
  <script src="global/js/core.js"></script>
  <script src="assets/js/site.js"></script>
  <script src="assets/js/sections/menu.js"></script>
  <script src="assets/js/sections/menubar.js"></script>
  <script src="assets/js/sections/gridmenu.js"></script>
  <script src="assets/js/sections/sidebar.js"></script>
  <script src="global/js/configs/config-colors.js"></script>
  <script src="assets/js/configs/config-tour.js"></script>
  <script src="global/js/components/asscrollable.js"></script>
  <script src="global/js/components/animsition.js"></script>
  <script src="global/js/components/slidepanel.js"></script>
  <script src="global/js/components/switchery.js"></script>
  <script src="global/js/components/tabs.js"></script>
  <script src="global/js/components/matchheight.js"></script>
  <script src="global/js/components/jvectormap.js"></script>
  <script src="global/js/components/peity.js"></script>
  <script src="global/js/components/owl-carousel.js"></script>
  <script src="assets/examples/js/uikit/carousel.js"></script>
  
</body>
</html>