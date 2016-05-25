<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>AgenteDirecto | Adquisiciones </title>
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
  
  <link rel="stylesheet" href="global/vendor/ladda-bootstrap/ladda.css">
  <link rel="stylesheet" href="assets/examples/css/uikit/buttons.css">
  
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
    <div class="page-aside">
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
              
                <a class="list-group-item active" href="adquisiciones.php"><i class="icon md-favorite" aria-hidden="true"></i>Buscar Adquisiciones</a>
                <a class="list-group-item" href="licitaciones.php"><i class="icon md-image-o" aria-hidden="true"></i>Buscar Licitaciones</a>
                <a class="list-group-item" href="empresas.php"><i class="icon md-view-dashboard" aria-hidden="true"></i>Buscar Empresas</a>
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
        <div class="media-list is-list padding-bottom-50">
          <ul class="blocks blocks-100 blocks-xlg-4 blocks-lg-3 blocks-md-3 blocks-ms-2 blocks-xs-2"
          data-plugin="animateList" data-child=">li">
      
            
            <li>
              <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">
                
                <div class="image-wrap">
				
                  <img class="image img-rounded" src="global/photos/placeholder.png"
                  alt="...">
				  
				</div>
				
                <div class="info-wrap">
			     
						<div class="title"><b>Nombre o Titulo</b> </div>
                        <div class="time">Descripción Breve de la Licitación </div>
                        <div class="time"><b>Empresa Solicitante</b></div>
                        <div class="text-info"> Caracas, Venezuela</div>
					
						<div class="time">
							<i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i> -
							Tiempo Restante
						</div>
						
						<div class="btn-group" style="margin-top: 15px;">
								<div class="btn-group" role="group">
									<button type="button" class="btn btn-icon btn-pure" data-toggle="button">
									  <i class="icon md-favorite-outline text" aria-hidden="true"></i>
									  <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
									</button>
									<button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
										data-container="body" data-placement="top" 
										type="button">
									  <i class="icon md-tag" aria-hidden="true"></i>
									</button>

								</div>
						</div>
						
                </div>
              </div>
            </li>
			
			<li>
              <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">
                
                <div class="image-wrap">
                  <img class="image img-rounded" src="global/photos/placeholder.png"
                  alt="...">
                </div>
                <div class="info-wrap">
                  
                        <div class="title"><b>Nombre o Titulo</b> </div>
                        <div class="time">Descripción Breve de la Licitación </div>
                        <div class="time"><b>Empresa Solicitante</b></div>
                       
                        <div class="text-info"> Caracas, Venezuela</div>
						<div class="time">
							<i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i> - 
							Tiempo Restante
						</div>

						  <div class="btn-group" style="margin-top: 15px;">
								<div class="btn-group" role="group">
									<button type="button" class="btn btn-icon btn-pure" data-toggle="button">
									  <i class="icon md-favorite-outline text" aria-hidden="true"></i>
									  <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
									</button>
									<button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
										data-container="body" data-placement="top" 
										type="button">
										<i class="icon md-tag" aria-hidden="true"></i>
									</button>
								</div>
						</div>
                </div>
              </div>
            </li>
			
            
          </ul>
        </div>
      </div>
    </div>
  </div>

                      <div class="modal fade" id="examplePositionCenter" aria-hidden="true" aria-labelledby="examplePositionCenter"
                        role="dialog" tabindex="-1">
                          <div class="modal-dialog modal-center">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title">Empresa</h4>
                              </div>
                              <div class="modal-body">

                                          <div class="col-md-6">
                                               <ul class="list-group list-group-full">
                                                <li class="list-group-item">
                                                  <div class="media">
                                                    <div class="media-left">
                                                      <a class="avatar" href="javascript:void(0)">
                                                        <img class="img-responsive" src="global/portraits/1.jpg" alt="...">
                                                      </a>
                                                    </div>
                                                    <div class="media-body">
                                                      <h4 class="media-heading">Bill Portones</h4>
                                                      <small>CEO</small>
                                                    </div>
                                                    
                                                  </div>
                                                </li>
                                              </ul>
                                          </div>

                                          <div class="col-md-6 text-center">
                                              
                                              <div class="list-group">
                                                <a class="list-group-item">
                                                  <h4 class="list-group-item-heading">Grado de Verificación</h4>
                                                  <p class="list-group-item-text">Nivel <b class="text-success">Premium</b></p>
                                                </a>
                                              </div>
                                          </div>


                                        <div class="col-md-12">
                                          <div class="example table-responsive">
                                                <table class="table text-center">
                                                  <tbody>
                                                    <tr>
                                                      <td><b>Website</b></td>
                                                      <td>www.google.com</td>
                                                    </tr>
                                                    <tr>
                                                      <td><b>Tamaño</b></td>
                                                      <td>1000 a 5000 empleados</td>
                                                    </tr>
                                                    <tr>
                                                      <td><b>Rubros</b></td>
                                                      <td>Rubro1, Rubro2, Rubro3</td>
                                                    </tr>
                                                    <tr>
                                                      <td><b>Sede Principal</b></td>
                                                      <td>www.google.com</td>
                                                    </tr>
                                                    <tr>
                                                      <td><b>Competencias</b></td>
                                                      <td>Microsoft, Apple</td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                            </div>
                                          </div>
                                  </div>


                              <!--div class="modal-footer">
                                <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Cerrar</button>
                              </div-->
                            </div>
                          </div>
                        </div>



                        <!-- Aqui va el de register -->
                        <div class="modal fade" id="exampleMultipleOne" aria-hidden="true" aria-labelledby="exampleMultipleOne"
                          role="dialog" tabindex="-1">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Regístrate en AgenteDirecto</h4>
                                </div>
                                <div class="modal-body">
                                  <form class="">
                                    <div class="form-group form-material row">
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="firstname" placeholder="Nombre Completo"
                                        autocomplete="off" />
                                      </div>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="lastname" placeholder="Teléfono"
                                        autocomplete="off" />
                                      </div>
                                    </div>

                                    <div class="form-group form-material row">
                                      <div class="col-sm-6">

                                        <select class="form-control" id="select">
                                          <option value="">País</option>
                                          <option value="Argentina" >Argentina</option>
                                          <option value="Bolivia" >Bolivia</option> 
                                          <option value="Brasil" >Brasil</option> 
                                          <option value="Chile" >Chile</option> 
                                          <option value="Colombia" >Colombia</option>
                                          <option value="Costa Rica" >Costa Rica</option>
                                          <option value="Cuba" >Cuba</option>
                                          <option value="Ecuador" >Ecuador</option>
                                          <option value="El Salvador" >El Salvador</option>
                                          <option value="Espana" >España</option>
                                          <option value="Guatemala" >Guatemala</option>
                                          <option value="Honduras" >Honduras</option>
                                          <option value="Mexico" >México</option>
                                          <option value="Nicaragua" >Nicaragua</option>
                                          <option value="Panama" >Panamá</option>
                                          <option value="Paraguay" >Paraguay</option>
                                          <option value="Peru" >Perú</option>
                                          <option value="Dominicana" >República Dominicana</option>
                                          <option value="Uruguay" >Uruguay</option>
                                          <option value="Venezuela" >Venezuela</option>
                                        </select>
                                        <!--input type="text" class="form-control" name="firstname" placeholder="País"
                                        autocomplete="off" /-->
                                      </div>
                                      <div class="col-sm-6">
                                        <input type="text" class="form-control" name="lastname" placeholder="Empresa"
                                        autocomplete="off" />
                                      </div>
                                    </div>
                                    
                                    <div class="form-group form-material">
                                      <input type="email" class="form-control" name="email" placeholder="Email"
                                      autocomplete="off" />
                                    </div>
                                    <div class="form-group form-material">
                                      <input type="password" class="form-control" name="password" placeholder="Password"
                                      autocomplete="off" />
                                    </div>
                                    <div class="form-group form-material">
                                      <div class="checkbox-custom checkbox-default">
                                        <input type="checkbox" id="inputCheckboxAgree" name="inputCheckboxesAgree" checked
                                        autocomplete="off" />
                                        <label for="inputCheckboxAgree">Estoy de acuerdo con las políticas y terminos - <a href="#">Ver terminos y condiciones</a></label>
                                      </div>
                                    </div>
                                    <div class="form-group form-material">
                                      <button type="button" class="btn btn-primary">Ingresar</button>
                                    </div>
                                  </form>
                                  <p>¿Ya tienes cuenta? Ingresa <a data-target="#exampleMultipleTwo"
                                  data-toggle="modal" data-dismiss="modal">acá</a></p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary btn-pure" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!--  aqui va el sign in --> 
                          <div class="modal fade" id="exampleMultipleTwo" aria-hidden="false" role="dialog"
                            tabindex="-1">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title">Iniciar Sesión</h4>
                                  </div>
                                  <div class="modal-body">
                                      
                                      <form class="">
                                          <div class="form-group form-material row">
                                            <div class="col-sm-12">
                                              <input type="text" class="form-control" name="firstname" placeholder="Email"
                                              autocomplete="off" />
                                            </div>
                                          </div>
                                          <div class="form-group form-material row">
                                            <div class="col-sm-12">
                                              <input type="password" class="form-control" name="lastname" placeholder="Password"
                                              autocomplete="off" />
                                            </div>
                                          </div>
                                          <div class="form-group form-material text-center">
                                            <button type="button" class="btn btn-primary">Iniciar Sesión</button>
                                          </div>
                                      </form>

                                      <p class="text-center">¿No tienes cuenta?  <a data-target="#exampleMultipleOne"
                                      data-toggle="modal" data-dismiss="modal">Regístrate en AgenteDirecto</a>
                                  </p>

                                  </div>
                                  <div class="modal-footer">
                                    <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)"
                                    role="button">Cerrar</a>
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
  
  <script src="global/vendor/ladda-bootstrap/spin.js"></script>
  <script src="global/vendor/ladda-bootstrap/ladda.js"></script>
  <script src="global/js/components/buttons.js"></script>
  <script src="global/js/components/ladda-bootstrap.js"></script>
  
  <script src="assets/examples/js/dashboard/v1.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>