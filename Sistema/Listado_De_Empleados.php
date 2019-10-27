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

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

			</ul>

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
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

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
									<i class="icon-pin font-size-sm"></i> &nbsp;Cd. Victoria
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
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Principal</div> <i class="icon-menu" title="Main"></i></li>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Empleados</span> - Listado de Empleados</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Inicio</a>
							<a href="Listado_De_Empleados.php" class="breadcrumb-item">Empleados</a>
							<span class="breadcrumb-item active">Listado de Empleados</span>
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

				<!-- Basic datatable -->
				<div class="card bg-grey-300">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Lista de Empleados</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                	</div>
	                	</div>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr class="bg-green-400">
								<th>   </th>
								<th>No. Trabajador</th>
								<th>Nombre(s)</th>
								<th>Apellidos</th>
								<th>Departamento</th>
								<th>Fecha de Nacimiento</th>
								<th>Correo Electronico</th>
								<th>País</th>
								<th>Estado</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<td><a href="Actualizar_Registro.php" class="list-icons-item" data-popup="tooltip" title="Editar" data-container="body">
					        <i class="icon-pencil7"></i></a>
					    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Borrar" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    	</td>
					    		<td>3</td>
								<td>Marth</td>
								<td>Reyes Balboa</td>
								<td>Projectos</td>
								<td>23/03/1982</td>
								<td>Math@gmail.com</td>
								<td>México</td>
								<td><span class="badge badge-success">Activo</span></td>
							</tr>
							<tr class="table-danger">
								<td><a href="Actualizar_Registro.php" class="list-icons-item" data-popup="tooltip" title="Edit" data-container="body"><i class="icon-pencil7"></i></a><a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    	    </td>
					    	    <td>5</td>
								<td>Jackelyn</td>
								<td>Martinez Aguilar</td>
								<td>Finanzas</td>
								<td>03/09/1950</td>
								<td>Jacky@gmail.com</td>
								<td>Estados Unidos</td>
								<td><span class="badge badge-secondary">Inactivo(a)</span></td>
							</tr>
							<tr>
							<td><a href="Actualizar_Registro.php" class="list-icons-item" data-popup="tooltip" title="Edit" data-container="body">
					        <i class="icon-pencil7"></i></a>
					    	<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    	</td>
					    		<td>4</td>
								<td>Aura</td>
								<td>Zafiro</td>
								<td>Mantenimiento</td>
								<td>19/10/1975</td>
								<td>Aura@gmail.com</td>
								<td>España</td>
								<td><span class="badge badge-danger">Suspendido(a)</span></td>
							</tr>
							<tr class="table-danger">
							<td><a href="Actualizar_Registro.php" class="list-icons-item" data-popup="tooltip" title="Edit" data-container="body">
					        <i class="icon-pencil7"></i></a>
					    	<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    	</td>
					    		<td>7</td>
								<td>Chrome</td>
								<td>Emblem</td>
								<td>Recepción</td>
								<td>21/06/1982</td>
								<td>Chrome@gmail.com</td>
								<td>México</td>
								<td><span class="badge badge-secondary">Inactivo(a)</span></td>
							</tr>
							<tr>
							<td><a href="Actualizar_Registro.php" class="list-icons-item" data-popup="tooltip" title="Edit" data-container="body">
					        <i class="icon-pencil7"></i></a>
					    	<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    	</td>
					    		<td>8</td>
								<td>Bruno</td>
								<td>Bucciarati</td>
								<td>Projectos</td>
								<td>21/09/1979</td>
								<td>Bucciarati@gmail.com</td>
								<td>Italia</td>
								<td><span class="badge badge-success">Activo(a)</span></td>
							</tr>
							<tr class="table-danger">
							<td><a href="Actualizar_Registro.php" class="list-icons-item" data-popup="tooltip" title="Edit" data-container="body">
					        <i class="icon-pencil7"></i></a>
					    	<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    	</td>
					    		<td>9</td>
								<td>Jotaro</td>
								<td>Kujo</td>
								<td>Finanzas</td>
								<td>30/12/1980</td>
								<td>Jojo@gmail.com</td>
								<td>Japón</td>
								<td><span class="badge badge-success">Activo(a)</span></td>
							</tr>
							<tr>
							<td><a href="Actualizar_Registro.php" class="list-icons-item" data-popup="tooltip" title="Edit" data-container="body">
					        <i class="icon-pencil7"></i></a>
					    	<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    	</td>
					    		<td>10</td>
								<td>Mohamed</td>
								<td>Abdul</td>
								<td>Recepción</td>
								<td>17/08/1962</td>
								<td>Abdul@gmail.com</td>
								<td>Egipto</td>
								<td><span class="badge badge-danger">Suspendido(a)</span></td>
							</tr>
							<tr class="table-danger">
							<td><a href="Actualizar_Registro.php" class="list-icons-item" data-popup="tooltip" title="Edit" data-container="body">
					        <i class="icon-pencil7"></i></a>
					    	<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i>
					    	</td>
					    		<td>2</td>
								<td>DIO</td>
								<td>Brando</td>
								<td>Projectos</td>
								<td>12/05/1982</td>
								<td>Dio@gmail.com</td>
								<td>Inglaterra</td>
								<td><span class="badge badge-success">Activo(a)</span></td>
							</tr>
						</tbody>
					</table>
			</div>
			<!-- /content area -->

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
