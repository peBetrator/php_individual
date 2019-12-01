<?php function write_logs($action)
{
    $fileName =
        "F:/OpenServer/OSPanel/domains/localhost/logs.txt";
    $fieldsSeparator = "\t\t";
    $logLine = date("d/m/yH:i:s") . $fieldsSeparator .
        $_SERVER['PHP_SELF'] . $fieldsSeparator .
        SESSION_ID() . $fieldsSeparator . (("" . $_SESSION['id_user'] != "") ? $_SESSION['id_user'] : "[-]") . $fieldsSeparator . (("" . $_SESSION['id_rol'] != "") ? $_SESSION['id_rol'] : "[-]") . $fieldsSeparator .
        $action;

    if (!file_exists($fileName)) {
        $fileO = fopen($fileName, "a+") or die("Eroare!");
        $antet = "DateTime" . $fieldsSeparator .
            "File" . $fieldsSeparator .
            "SESSION_ID" . $fieldsSeparator .
            "SESSION_USER" . $fieldsSeparator .
            "SESSION_AUTH" . $fieldsSeparator .
            "ACTION";

        fwrite($fileO, $antet . "\r\n");
        fclose($fileO);
    }

    $fileO = fopen($fileName, "a") or die("Eroare!");
    fwrite($fileO, $logLine . "\r\n");
    fclose($fileO);
}
