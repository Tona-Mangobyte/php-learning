<?php
$callback = function()
{
    echo "callback achieved";
};

call_user_func($callback);
?>
