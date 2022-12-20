<form id="form_mahasiswa">
	<label for="prodi">
		Prodi
	</label>
		<select name="prodi" id="prodi">
		<option value=""> Pilih program studi </option>
		<option value="IF"> Teknik Informatika </option>
		<option value="EL"> Teknik Elektro </option>
		<option value="RK"> Rekayasa Kehutanan </option>
		<option value="TG"> Teknik Geofisika </option>
		<option value="GL"> Teknik Geologi </option>
		<option value="SI"> Teknik Sipil </option>
	</select>
</form>

<br>
<div id="tampil_data"></div>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
	integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
	crossorigin = "anonymous">
</script>
<script>
	$(document).ready(function () {
		$("#tampil_data").load("tampilan.php");
		$("#prodi").change(function(){
			var prodi = $(this).val();
			$("#tampil_data").load("table.php",{prodi: prodi});
		});
	});
</script>