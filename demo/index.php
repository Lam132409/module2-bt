
<?php
    function €($price, $tax="")
    {
        $total = $price + ($price * $tax);
        echo "$total";
    }
    €(42);

    ?>