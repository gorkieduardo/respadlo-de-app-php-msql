<?php
$usuarios = ControladorFormularios::ctrSeleccionarRegistros();
echo '<pre>';
print_r($usuarios);
echo '</pre>';

?>


<table class="table table-striped">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Email</th>
			<th>Fecha</th>
			<th>Acciones</th>
		</tr>
	</thead>


	<tbody>

		<tr>
			<td>John Gómez</td>
			<td>doge@gmail.com</td>
			<td>23/10/2019</td>
			<td>
				<div class="btn-group">

					<button class="btn btn-warning "><i class="fas fa-pencil-alt"></i></button>
					<button class="btn btn-warning "><i class="fas fa-trash-alt"></i></button>
				</div>
			</td>
		</tr>
	</tbody>
</table>