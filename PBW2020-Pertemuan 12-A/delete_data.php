<?php 
	require 'function.php';

	$result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE nimMhsw = '$_GET[id]'");
	echo "<script>
		alert('Data telah dihapus.');
		document.location.href = 'index.php';
    </script>";
 ?>