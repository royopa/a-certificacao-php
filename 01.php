<?php
    $name = 'John';

    $str = <<<EOF
Hello $name
    EOF;

    echo trim($str);
