<table border="1">
	<tr>
		<th> No. </th>
		<th> NIM </th>
		<th> Nama </th>
		<th> Program Studi </th>
	</tr>
	<?php
		include "koneksi.php";
		$prodi = $_POST['prodi'];
		$query = "SELECT * FROM mahasiswa WHERE prodi LIKE '$prodi' ORDER BY nim ASC";
		$i = 0;
		$result = mysqli_query($connection, $query);
		while ($data = mysqli_fetch_array($result)) :
			$i++;
	?>
	<tr>
		<td> <?= $i ?> </td>
		<td> <?= $data["nim"] ?> </td>
		<td> <?= $data["nama"] ?> </td>
		<td> <?= $data["prodi"] ?> </td>
	</tr>
	<?php
		endwhile
	?>
</table>