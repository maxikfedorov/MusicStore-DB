<?php

#1[0] - circle, 2[0] - rect, 3[0] - eclipse

$param = null;

if(!empty($_POST['param']))
{
    $param = $_POST['param'];
}

if (is_null($param))
{
    $param = 11;
}

$fill = "#".substr($param, 1,6);

$size_rect = round(substr($param, 1,6) / 1000);

$size = $size_rect / 2;

$e_size = $size / 2;

$i = substr($param, 0,1);

if ($i <=3)
    echo "<svg width=$size_rect height=$size_rect>
                   <circle cx=$size cy=$size r=$size fill=$fill>
                   </svg>";
else
    if ($i <= 6){
        $size_rect_in = $size_rect - 10;

        echo "<svg width=$size_rect height=$size_rect>
                         <rect width=$size_rect_in height=$size_rect_in fill = $fill>
                         </svg>";
    }
    else
        if ($i <= 9)
            echo " <svg height=$size_rect width=$size_rect>
                          <ellipse cx=$size cy=$size rx=$size ry=$e_size
                          style = fill:$fill>
                        </svg>";

