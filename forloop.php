<style>
    .product_box{
float:left;
display: inline-block;
width: 200px;
height: 300px;
background-color: pink;
margin: 10px;
    }

    .row{
        overflow:hidden;
    }
</style>


<?php

for ($a = 1; $a <= 17; $a++)
{
    if ($a % 4 == 1)
    {
        echo "<div class='row'>";
    }

    if ($a % 4 == 0)
    {
        echo "<div class='product_box'>" . $a, "</div>";
        echo "</div>";
    }
    else
    {
        echo "<div class='product_box'>" . $a, "</div>";
    }
}
