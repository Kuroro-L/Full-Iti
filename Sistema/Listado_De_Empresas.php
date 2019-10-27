<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Introducción a las Tecnologías de la Información</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark bg-brown-700">
		<div class="navbar-brand">
			<a href="index.php" class="d-inline-block">
				<img src="global_assets/images/logo_light.png" alt="">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-mobile">

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Kuroro</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> Mi perfil</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> Balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Mensajes <span class="badge badge-pill bg-blue ml-auto">0</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Configurar cuenta</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Cerrar Sesión</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md bg-brown">
			<body class="sidebar-xs">
			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			</body>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content ">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Angel Balboa</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Cd.Victoria
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Principal</div> <i class="icon-menu" title="Inicio"></i></li>
						<li class="nav-item">
							<a href="index.php" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Pagina Principal
								</span>
							</a>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Empleados</div> <i class="icon-menu" title="Datos y Formularios"></i></li>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-briefcase"></i> <span>Empleados</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Empleados">
								<li class="nav-item"><a href="Listado_De_Empleados.php" class="nav-link">Listado de Empleados</a></li>
							<li class="nav-item"><a href="form_inputs.php" class="nav-link active">Registro de Empleados</a></li>
							<li class="nav-item"><a href="Actualizar_Registro.php" class="nav-link active">Actualizar Empleados</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-airplane3"></i> <span>Vacaciones</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Vacaciones">
								<li class="nav-item"><a href="Lista_De_Vacaciones.php" class="nav-link active">Lista de Vacaciones/Editar</a></li>
								<li class="nav-item"><a href="Solicitud_Vac.php" class="nav-link active">Solicitar Vacaciones</a></li>
							</ul>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Departamentos</div> <i class="icon-mi-domain" title="Extensions"></i></li>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cube4"></i> <span>Listado de Departamentos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Departamentos">
								<li class="nav-item"><a href="Listado_De_Departamentos.php" class="nav-link">Listado de Departamentos</a></li>
							</ul>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Empresas</div> <i class="icon-mi-domain" title="Extensions"></i></li>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-office"></i> <span>Empresas</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Empresas">
								<li class="nav-item"><a href="Listado_De_Empresas.php" class="nav-link">Lista de Empresas/Editar Empresa</a></li>
								<li class="nav-item"><a href="AgregarDep.php" class="nav-link">Agregar Empresa</a></li>
							</ul>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Boletos</div> <i class="icon-mi-domain" title="Extensions"></i></li>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-map5"></i> <span>Boletos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Empresas">
								<li class="nav-item"><a href="Boletos.php" class="nav-link">Pagar Boleto</a></li>
							</ul>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Alumnos</div> <i class="icon-mi-domain" title="Extensions"></i></li>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-map5"></i> <span>Alumnos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Alumnos">
								<li class="nav-item"><a href="Listado_De_Alumnos.php" class="nav-link">Añadir Alumno</a></li>
								<li class="nav-item"><a href="Añadir_Alumno.php" class="nav-link">Lista/Editar Alumno</a></li>
							</ul>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Turorias</div> <i class="icon-mi-domain" title="Extensions"></i></li>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-map5"></i> <span>Tutorias</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Tutorias">
								<li class="nav-item"><a href="Listado_De_Tutorias.php" class="nav-link">Lista de Tutorias</a></li>
								<li class="nav-item"><a href="Añadir_Tutoria.php" class="nav-link">Añadir Tutorias</a></li>
							</ul>
						</li>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Empresas</span> - Listado de Empresas</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Inicio</a>
							<a href="Listado_De_Empresas.php" class="breadcrumb-item">Empresas</a>
							<span class="breadcrumb-item active">Listado de Empresas</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
								<i class="icon-comment-discussion mr-2"></i>
								Soporte
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Ayuda no disponible por el momento</a>
							</div>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Configuración
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Seguridad de la Cuenta</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analisis</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accesibilidad</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<div class="card bg-grey-300">
					<div class="card-header header-elements-inline">
						<h5 class="card-title font-weight-bold">Lista de Empresas</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                	</div>
	                	</div>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr class="bg-indigo">
								<th>   </th>
								<th>Clave</th>
								<th>Nombre</th>
								<th>RFC</th>
								<th>Representante</th>
								<th>Correo Electronico</th>
								<th>Seguro Social</th>
								<th>País</th>
								<th>Estado</th>
								<th>Ciudad</th>
								<th>Codigo Postal</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg-slate-300">
							<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Emp1_modal"><i class="icon-pencil7"></i></a>
					    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Borrar" data-toggle="modal" data-target="#Borrar_modal"><i class="icon-trash"></i></a></td>
								<td>500</td>
								<td>Ventas Galaxia</td>
								<td>REBA191011CS2</td>
								<td>Angel Martin Reyes Balboa</td>
								<td>angelbal@gmail.com</td>
								<td>IMSS</td>
								<td>México</td>
								<td>Tamaulipas</td>
								<td>Cd. Victoria</td>
								<td>87089</td>
							</tr>
							<tr class="bg-orange-300">
								<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Emp2_modal"><i class="icon-pencil7"></i></a>
								<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a></td>
								<td>501</td>
								<td>Geek Celulares</td>
								<td>HEMJ871002PP6</td>
								<td>Jose Hernandez Mata</td>
								<td>Geek@gmail.com</td>
								<td>IMSS</td>
								<td>México</td>
								<td>Nuevo León</td>
								<td>Monterrey</td>
								<td>64105</td>	
							</tr>
							<tr class="bg-slate-300">
							<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Emp3_modal"><i class="icon-pencil7"></i></a>
					    	<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a></td>
								<td>502</td>
								<td>Ciberseguridad Tech</td>
								<td>PEGF650309UB5</td>
								<td>Felix Perez Guzman</td>
								<td>Cbtech@hotmail.com</td>
								<td>ISSSTE</td>
								<td>México</td>
								<td>Veracruz</td>
								<td>Veracruz</td>
								<td>91715</td>
							</tr>
							<tr class="bg-orange-300">
							<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Emp4_modal"><i class="icon-pencil7"></i></a>
					    	<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a>
					    	</td>
								<td>503</td>
								<td>Energy Crafter</td>
								<td>XEXX010101000</td>
								<td>Sophia Walter Smith</td>
								<td>Sophy@hotmail.com</td>
								<td>IMSS</td>
								<td>México</td>
								<td>Jalisco</td>
								<td>Guadalajara</td>
								<td>44970</td>
							</tr>
							<tr class="bg-slate-300">
							<td><a href="#" class="list-icons-item" data-toggle="modal" data-target="#Emp5_modal"><i class="icon-pencil7"></i></a>
					    	<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a>
					    	</td>
								<td>504</td>
								<td>Auto GreenStar</td>
								<td>AUT130626CP7</td>
								<td>Miguel Lopez Ortiz</td>
								<td>GreenAu@gmail.com</td>
								<td>ISSSTE</td>
								<td>México</td>
								<td>Yucatan</td>
								<td>Merida</td>
								<td>97088</td>
							</tr>
				</tbody>
			</table>
		</div>
							<div class="text-center">
								<button type="submit" class="btn bg-grey">Añadir Departamento <i class="icon-plus2 ml-2"></i><a href="area></a></button>
							</div>	
			</div>
			<!-- /content area -->
			<!--Modal de Editar-->
				<div id="Emp1_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-blue">
								<h5 class="modal-title font-weight-bold">Editar Empresa</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Clave</label>
												<input type="text" value="500" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Nombre</label>
												<input type="text" value="Ventas Galaxia" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>RFC</label>
												<input type="text" value="REBA191011CS2" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Representante</label>
												<input type="text" value="Angel Martin Reyes Balboa" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Correo Electronico</label>
												<input type="text" value="angelbal@gmail.com" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Seguro Social</label>
			                           				<select class="form-control">
			                                			<option value="opt1"><span class="badge badge-success">IMSS</span></option>
			                                			<option value="opt2"><span class="badge badge-secondary">ISSTE</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>País</label>
												<input type="text" value="México" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Estado</label>
												<input type="text" value="Tamaulipas" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Ciudad</label>
												<input type="text" value="Cd. Victoria" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Codigo Postal</label>
												<input type="text" value="87089" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-primary" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!--Fin del Modal Editar-->
				<!--Modal de Editar-->
				<div id="Emp2_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-blue">
								<h5 class="modal-title font-weight-bold">Editar Empresa</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Clave</label>
												<input type="text" value="501" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Nombre</label>
												<input type="text" value="Geek Celulares" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>RFC</label>
												<input type="text" value="HEMJ871002PP6" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Representante</label>
												<input type="text" value="Jose Hernandez Mata" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Correo Electronico</label>
												<input type="text" value="Geek@gmail.com" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Seguro Social</label>
			                           				<select class="form-control">
			                                			<option value="opt1"><span class="badge badge-success">IMSS</span></option>
			                                			<option value="opt2"><span class="badge badge-secondary">ISSTE</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>País</label>
												<input type="text" value="México" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Estado</label>
												<input type="text" value="Nuevo León" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Ciudad</label>
												<input type="text" value="Monterrey" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Codigo Postal</label>
												<input type="text" value="64105" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-primary" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!--Fin del Modal Editar-->
				<!--Modal de Editar-->
				<div id="Emp3_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-blue">
								<h5 class="modal-title font-weight-bold">Editar Empresa</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Clave</label>
												<input type="text" value="502" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Nombre</label>
												<input type="text" value="Ciberseguridad Tech" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>RFC</label>
												<input type="text" value="PEGF650309UB5" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Representante</label>
												<input type="text" value="Felix Perez Guzman" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Correo Electronico</label>
												<input type="text" value="Cbtech@hotmail.com" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Seguro Social</label>
			                           				<select class="form-control">
			                                			<option value="opt1"><span class="badge badge-success">ISSTE</span></option>
			                                			<option value="opt2"><span class="badge badge-secondary">IMSS</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>País</label>
												<input type="text" value="México" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Estado</label>
												<input type="text" value="Veracruz" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Ciudad</label>
												<input type="text" value="Veracruz" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Codigo Postal</label>
												<input type="text" value="91715" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-primary" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!--Fin del Modal Editar-->
				<!--Modal de Editar-->
				<div id="Emp4_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-blue">
								<h5 class="modal-title font-weight-bold">Editar Empresa</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Clave</label>
												<input type="text" value="503" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Nombre</label>
												<input type="text" value="Energy Crafter" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>RFC</label>
												<input type="text" value="XEXX010101000" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Representante</label>
												<input type="text" value="Sophia Walter Smith" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Correo Electronico</label>
												<input type="text" value="Sophy@hotmail.com" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Seguro Social</label>
			                           				<select class="form-control">
			                                			<option value="opt1"><span class="badge badge-success">IMSS</span></option>
			                                			<option value="opt2"><span class="badge badge-secondary">ISSTE</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>País</label>
												<input type="text" value="México" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Estado</label>
												<input type="text" value="Jalisco" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Ciudad</label>
												<input type="text" value="Guadalajara" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Codigo Postal</label>
												<input type="text" value="44970" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-primary" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!--Fin del Modal Editar-->
				<div id="Emp5_modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3 bg-blue">
								<h5 class="modal-title font-weight-bold">Editar Empresa</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Clave</label>
												<input type="text" value="504" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Nombre</label>
												<input type="text" value="Auto GreenStar" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>RFC</label>
												<input type="text" value="AUT130626CP7" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Representante</label>
												<input type="text" value="Miguel Lopez Ortiz" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Correo Electronico</label>
												<input type="text" value="GreenAu@gmail.com" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Seguro Social</label>
			                           				<select class="form-control">
			                                			<option value="opt1"><span class="badge badge-success">ISSSTE</span></option>
			                                			<option value="opt2"><span class="badge badge-secondary">IMSS</span></option>
			                            			</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>País</label>
												<input type="text" value="México" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Estado</label>
												<input type="text" value="Yucatan" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Ciudad</label>
												<input type="text" value="Merida" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-5">
												<label>Codigo Postal</label>
												<input type="text" value="97088" class="form-control">
											</div>
										</div>
									</div>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn bg-primary" data-dismiss="modal">Guardar Cambios</button>
							</div>
						</div>
					</div>
				</div>
				<!--Modal de Editar-->
				<!--Fin del Modal Editar-->
				<!--Modal de Eliminar-->
				<div id="remove_modal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Confirmar Acción</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								¿Estás seguro de eliminar el Registro?
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Sí, borralo</button>
								<button type="button" class="btn btn-light" data-dismiss="modal">No borrar</button>
							</div>
						</div>
					</div>
				</div>
				<!--Fin del Modal-->

			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2019 - 2019. <a href="#">Introducción a las Tecnologías de la Información</a> hecho por <a href="http://themeforest.net/user/Kopyov" target="_blank">Angel Balboa</a>
					</span>

					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
