<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>AgenteDirecto |  Empresas </title>
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
  <link rel="stylesheet" href="assets/examples/css/apps/media.css">
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

<body class="app-media">
 
  	<!-- user nav -->
  	<?php include('layouts/user.php');?>

  	<?php //include('layouts/menu.php');?>

  	<?php //include('layouts/menu-sup.php'); ?>

  <!-- Page -->
  <div class="page animsition">
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        
        <div class="clearfix"></div>

        <div class="page bg-white animsition">
    <!-- Media Sidebar -->
    <div class="page-aside" style="height: 400px;">
      <div class="page-aside-switch">
        <i class="icon md-chevron-left" aria-hidden="true"></i>
        <i class="icon md-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="page-aside-inner" data-plugin="pageAsideScroll">
        <div data-role="container">
          <div data-role="content">
            <section class="page-aside-section">
              <h5 class="page-aside-title">Buscar</h5>
              <div class="list-group">
                <a class="list-group-item" href="adquisiciones.php"><i class="icon md-favorite" aria-hidden="true"></i>Buscar Adquisiciones</a>
                <a class="list-group-item" href="licitaciones.php"><i class="icon md-image-o" aria-hidden="true"></i>Buscar Licitaciones</a>
                <a class="list-group-item active" href="empresas.php"><i class="icon md-view-dashboard" aria-hidden="true"></i>Buscar Empresas</a>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <!-- Media Content -->
    <div class="page-main">
      <!-- Media Content Header -->
      <div class="page-header">
        <h1 class="page-title">Resultados de Búsqueda</h1>

        <div class="page-header-actions">
          <form>
            <div class="input-search input-search-dark">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="" placeholder="Buscar...">
            </div>
          </form>
        </div>
        
      </div>
      <!-- Media Content -->
      <div class="page-content page-content-table">
        <!-- Actions -->
        <div class="page-content-actions">
          
            
         	<div class="pull-right filter">
	            <span>Buscar :</span>
	            <div class="dropdown">
	              <button type="button" class="btn btn-pure dropdown-toggle" data-toggle="dropdown"
	              aria-expanded="false">
	                Todas
	                <span class="icon md-chevron-down" aria-hidden="true"></span>
	              </button>
	              <ul class="dropdown-menu dropdown-menu-right animation-scale-up animation-top-right animation-duration-250"
	              role="menu">
	                <li><a href="javascript:void(0)">Agregadas Recientemente</a></li>
	                <li><a href="javascript:void(0)">Mas populares</a></li>
	                <li><a href="javascript:void(0)">Mejor Ranking</a></li>
                  <li><a href="javascript:void(0)">Rubro</a></li>
	              </ul>
	            </div>
          	</div>
        
          
          
        </div>
        <!-- Media -->
        <div class="media-list is-grid padding-bottom-50">
          <ul class="blocks blocks-100 blocks-xlg-4 blocks-lg-3 blocks-md-3 blocks-ms-2 blocks-xs-2"
          data-plugin="animateList" data-child=">li">
      
            
            <li>
              <div class="media-item" data-toggle="slidePanel" data-url="panel-empresas.tpl">
                <!--div class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="selectable-item" id="media_5" />
                  <label for="media_5"></label>
                </div-->
                <div class="image-wrap">
                  <img class="image img-rounded" src="global/photos/placeholder.png"
                  alt="...">
                </div>
                <div class="info-wrap">
                  
                  <div class="title">Nombre de Empresa </div>
                  <div class="time">Caracas, Venezuela</div>
                  <div class="time"><a href="#">Ir a Website</a></div>
                  <div class="media-item-actions btn-group">
                    <button class="btn btn-icon btn-pure btn-default" data-original-title="Edit" data-toggle="tooltip"
                    data-container="body" data-placement="top" data-trigger="hover"
                    type="button">
                      <i class="icon md-edit" aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-icon btn-pure btn-default" data-original-title="Download"
                    data-toggle="tooltip" data-container="body" data-placement="top"
                    data-trigger="hover" type="button">
                      <i class="icon md-download" aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-icon btn-pure btn-default" data-original-title="Delete"
                    data-toggle="tooltip" data-container="body" data-placement="top"
                    data-trigger="hover" type="button">
                      <i class="icon md-delete" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="media-item" data-toggle="slidePanel" data-url="panel-empresas.tpl">
                <!--div class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="selectable-item" id="media_5" />
                  <label for="media_5"></label>
                </div-->
                <div class="image-wrap">
                  <img class="image img-rounded" src="global/photos/placeholder.png"
                  alt="...">
                </div>
                <div class="info-wrap">
                  
                  <div class="title">Nombre de Empresa </div>
                  <div class="time">Caracas, Venezuela</div>
                  <div class="time"><a href="#">Ir a Website</a></div>
                  <div class="media-item-actions btn-group">
                    <button class="btn btn-icon btn-pure btn-default" data-original-title="Edit" data-toggle="tooltip"
                    data-container="body" data-placement="top" data-trigger="hover"
                    type="button">
                      <i class="icon md-edit" aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-icon btn-pure btn-default" data-original-title="Download"
                    data-toggle="tooltip" data-container="body" data-placement="top"
                    data-trigger="hover" type="button">
                      <i class="icon md-download" aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-icon btn-pure btn-default" data-original-title="Delete"
                    data-toggle="tooltip" data-container="body" data-placement="top"
                    data-trigger="hover" type="button">
                      <i class="icon md-delete" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="media-item" data-toggle="slidePanel" data-url="panel-empresas.tpl">
                <!--div class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="selectable-item" id="media_6" />
                  <label for="media_6"></label>
                </div-->
                <div class="image-wrap">
                  <img class="image img-rounded" src="global/photos/placeholder.png"
                  alt="...">
                </div>
                <div class="info-wrap">
                  
                  <div class="title">Nombre de Empresa </div>
                  <div class="time">Caracas, Venezuela</div>
                  <div class="time"><a href="#">Ir a Website</a></div>
                  <div class="media-item-actions btn-group">
                    <button class="btn btn-icon btn-pure btn-default" data-original-title="Edit" data-toggle="tooltip"
                    data-container="body" data-placement="top" data-trigger="hover"
                    type="button">
                      <i class="icon md-edit" aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-icon btn-pure btn-default" data-original-title="Download"
                    data-toggle="tooltip" data-container="body" data-placement="top"
                    data-trigger="hover" type="button">
                      <i class="icon md-download" aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-icon btn-pure btn-default" data-original-title="Delete"
                    data-toggle="tooltip" data-container="body" data-placement="top"
                    data-trigger="hover" type="button">
                      <i class="icon md-delete" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="media-item" data-toggle="slidePanel" data-url="panel-empresas.tpl">
                <!--div class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="selectable-item" id="media_7" />
                  <label for="media_7"></label>
                </div-->
                <div class="image-wrap">
                  <img class="image img-rounded" src="global/photos/placeholder.png"
                  alt="...">
                </div>
                <div class="info-wrap">
                  
                  <div class="title">Nombre de Empresa </div>
                  <div class="time">Caracas, Venezuela</div>
                  <div class="time"><a href="#">Ir a Website</a></div>
                  <div class="media-item-actions btn-group">
                    <button class="btn btn-icon btn-pure btn-default" data-original-title="Edit" data-toggle="tooltip"
                    data-container="body" data-placement="top" data-trigger="hover"
                    type="button">
                      <i class="icon md-edit" aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-icon btn-pure btn-default" data-original-title="Download"
                    data-toggle="tooltip" data-container="body" data-placement="top"
                    data-trigger="hover" type="button">
                      <i class="icon md-download" aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-icon btn-pure btn-default" data-original-title="Delete"
                    data-toggle="tooltip" data-container="body" data-placement="top"
                    data-trigger="hover" type="button">
                      <i class="icon md-delete" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            
          </ul>
        </div>
      </div>
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
  <script src="assets/examples/js/dashboard/v1.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>