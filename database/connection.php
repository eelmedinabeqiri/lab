<?php

    $DB = new mysqli('localhost', 'root', '', 'inxhinierieweb');


    if($DB -> connect_error){
    die("Lidhja nuk u realizua.." . $DB -> connect_error);
}
echo "Lidhja u realizua me sukses";

?>