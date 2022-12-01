<?php
        if($_POST){
        $km = $_POST["distance"];
        $person = $_POST["guests"];
        $fuelcar = $km*5*$person;
        $fuelbus = $km*4*$person;
        $fueltrain = $km*2*$person;
        $fuelflight  =$km*10*$person;
        }
        
        ?>