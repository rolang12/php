<?php
require_once '..\..\Models\User.php';
require_once '..\..\Models\Conexion.php';
// require_once './autoload.php';

if (isset($_GET) == 'users-index.php?' && $_GET['log'] == 1 )  {

?>

	<!DOCTYPE html>
	<html lang="es" class="antialiased">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>DataTables </title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
		<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/6628fdf66e.js" crossorigin="anonymous"></script>
		<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

		<style>
			/*Overrides for Tailwind CSS */

			/*Form fields*/
			.dataTables_wrapper select,
			.dataTables_wrapper .dataTables_filter input {
				color: #4a5568;
				/*text-gray-700*/
				padding-left: 1rem;
				/*pl-4*/
				padding-right: 1rem;
				/*pl-4*/
				padding-top: .5rem;
				/*pl-2*/
				padding-bottom: .5rem;
				/*pl-2*/
				line-height: 1.25;
				/*leading-tight*/
				border-width: 2px;
				/*border-2*/
				border-radius: .25rem;
				border-color: #edf2f7;
				/*border-gray-200*/
				background-color: #edf2f7;
				/*bg-gray-200*/
			}

			/*Row Hover*/
			table.dataTable.hover tbody tr:hover,
			table.dataTable.display tbody tr:hover {
				background-color: #ebf4ff;
				/*bg-indigo-100*/
			}

			/*Pagination Buttons*/
			.dataTables_wrapper .dataTables_paginate .paginate_button {
				font-weight: 700;
				/*font-bold*/
				border-radius: .25rem;
				/*rounded*/
				/*border border-transparent*/
			}

			/*Pagination Buttons - Current selected */
			.dataTables_wrapper .dataTables_paginate .paginate_button.current {
				color: #fff !important;
				/*text-white*/
				box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
				/*shadow*/
				font-weight: 700;
				/*font-bold*/
				border-radius: .25rem;
				/*rounded*/
				background: #000 !important;
				/*bg-indigo-500*/
				transform: perspective();
				transition-duration: 500ms;
				/*border border-transparent*/
			}

			/*Pagination Buttons - Hover */
			.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
				color: #fff !important;
				/*text-white*/
				box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
				/*shadow*/
				font-weight: 700;
				/*font-bold*/
				border-radius: .25rem;
				/*rounded*/
				background: #FFF !important;
				/*bg-indigo-500*/
				/*border border-transparent*/
			}

			/*Add padding to bottom border */
			table.dataTable.no-footer {
				border-bottom: 1px solid #fff;
				/*border-b-1 border-gray-300*/
				margin-top: 0.75em;
				margin-bottom: 0.75em;
			}

			/*Change colour of responsive icon*/
			table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
			table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
				background-color: #667eea !important;
				/*bg-indigo-500*/
			}
		</style>

	</head>

	<body class="bg-black text-gray-900 tracking-wider  leading-normal">


		<!--Container-->
		<div class="container w-full  m-auto ">

			<!--Title-->

			<h1 class="flex items-center text-gray-300 font-sans font-bold break-normaltext-indigo-500 px-2 py-8 text-2xl md:text-4xl">Users</h1>

			<!--Card-->
			<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-gray-200">
				<div class="font-light text-lg text-white bg-black p-2 w-2/5 rounded-lg "> <?php echo ($hoy = date("F j, Y, g:i a"));  ?> </div>
				<div> <a href="<?php echo '../../Controllers/CrudController.php?action=create' ?>">Create </div>
				<? if (session_status() == 2) : ?>
					<div class="bg-black text-white -mt-12 float-right rounded-lg mb-3  text-center px-1 text-lg "><a href="/Controllers/AuthController.php?out=1"><button class="p-3 font-bold inline">Logout</button></a></div>
				<? endif; ?>
				<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>

						<tr class="bg-black text-white ">
							<th data-priority="1">ID</th>
							<th class="text-left" data-priority="2">Nickname</th>
							<th data-priority="3">E-mail</th>
							<th class="text-left" data-priority="4">Country</th>
							<th data-priority="6">View</th>
							<th data-priority="7">Edit</th>
							<th data-priority="8">Delete</th>
						</tr>

					</thead>
					<tbody>
						<tr>

							<?php
							$users = new User();
							$Datausers = $users->listing();

							foreach ($Datausers as $usuario) :

							?>

								<td class="text-center font-bold "><?php echo $usuario->idUser; ?></td>
								<td><?php echo $usuario->nickName; ?></td>
								<td><?php echo $usuario->email; ?></td>
								<td><?php echo $usuario->name; ?></td>
								<td class="text-center hover-text-green-600 text-green-300"><a href="<?php echo '../../Controllers/CrudController.php?action=show&iduser=' . $usuario->idUser ?> "><button><i class="far fa-eye"></i></button> </td>
								<td class="text-center hover-text-blue-600 text-blue-300 "><a href="<?php echo '../../Controllers/CrudController.php?action=edit&iduser=' . $usuario->idUser ?> "> <button><i class="far  fa-edit"></i></button></a> </td>
								<td class="text-center hover-text-red-600 font-bold "><a href="<?php echo '../../Controllers/CrudController.php?action=delete&iduser=' . $usuario->idUser ?> "><button><i class="fas text-red-600 fa-trash"></i></button> </td>

						</tr>

					<?php

							endforeach;

					?>

					</tbody>

				</table>


			</div>


		</div>


		<!-- jQuery -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

		<!--Datatables -->
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
		<script>
			$(document).ready(function() {

				var table = $('#example').DataTable({
						responsive: true
					})
					.columns.adjust()
					.responsive.recalc();
			});
		</script>

	</body>


	</html>
<?php

 }else{
 	include ('../login.php');
 }
?>