<?php
    $stud = array(
        array(
            "name" => "John",
            "mod1" => 78,
            "mod2" => 45
        ),
        array(
            "name" => "Dave",
            "mod1" => 72,
            "mod2" => 77
        )
    );

    print_r($stud);
    print "<br><br>";

    foreach ($stud as $s) {
        print $s[name];
        print "<br>";
        print $s[mod1];
        print ", ";
        print $s[mod2];
        print "<br><br>";
    }
?>