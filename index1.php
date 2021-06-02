<form method="post">
    <label>
        Введите градус:
        <input type="number" name="count">
    </label>
    <button type="submit" name="time">Узнать время</button>
</form>
 
<?php
if (isset($_POST['time']) && $_POST['count'] !== '') {
    $count = $_POST['count'];
    $hour = floor(12 / 360 * $count);
    switch ($hour) {
        case 1:
            $msg = "Прошел %d час";
            break;
        case 2:
        case 3:
        case 4:
            $msg = "Прошло %d часа";
        break;
        default:
            $msg = "Прошло %d часов";
        break;
    }
    echo sprintf($msg, $hour);
}
?>