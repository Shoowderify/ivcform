MIS REGISTROS
<table>
	<tr>
		<th>equipo</th>
		<th>turno</th>
                <th>nro equipo</th>
		<th>Fecha</th>
		<th>Hora</th>
	</tr>
	<?php
	while ($ped = $pedidos->fetch_object()):
		?>

		<tr>
			<td>
				<a><?= $ped->id ?></a>
			</td>
			<td>
				<?= $ped->turno ?> 
			</td>
                        <td>
				<?= $ped->equipo ?> 
			</td>
			<td>
				<?= $ped->fecha ?>
			</td>
			<td>
				<?=($ped->hora)?>
			</td>
		</tr>

	<?php endwhile; ?>
</table>
