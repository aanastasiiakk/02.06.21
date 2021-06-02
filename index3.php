<form action="" method="POST">
	<input type="text" name="fio" placeholder="Ivanov Ivan Ivanovich"/>
	<input type="submit" value="Отправить"/>
</form>

<?php
if(isset($_POST['fio'])){
	$fio = explode(" ", $_POST['fio']);
	$family = $fio[0];
	$name = substr($fio[1], 0, 1).".";
	$otchestvo = substr($fio[2], 0, 1).".";

	echo "F.I.О: ".$family." ".$name." ".$otchestvo;
}
?>