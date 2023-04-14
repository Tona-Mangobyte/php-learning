<?php
function countList()
{
    // print_r(func_num_args());
    var_dump(func_get_args());
    // var_dump(func_get_arg(0));
    if (func_num_args() == 0) {
        return false;
    }
    else {
        $count = 0;

        for ($i = 0; $i < func_num_args(); $i++) {
            if (is_numeric(func_get_arg($i))) {
                $count += func_get_arg($i);
            }
        }

        return $count;
    }
}

echo countList(1, 5, 9.5, "simple"). "<br/>"; // outputs "15.5"

function takesTwo($a = null, $b = null)
{
    echo "Start function<br/>";
    if (isset($a) && !empty($b)) {
        echo " a is set<br/>";
    }

    if (isset($b) && !empty($b)) {
        echo " b is set<br/>";
    }
    echo "The end function<br/>";
}
echo "Missing Parameters <br/>";
takesTwo(1, 2);
takesTwo(1, "");