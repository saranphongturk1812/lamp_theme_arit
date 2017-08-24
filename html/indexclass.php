<?php

        function __autoload($classname) {
            $folder_name = "classes";
            require_once($folder_name . "/" . $classname . ".php");
        }

        $obj = new class2;
        $obj->show();
?>
