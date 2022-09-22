<?php

    $arr2 = [1,2,3,4,5];

    $arr2['dddd'] = 111;
    $arr2 = array_merge($arr2, [555, 556, 557, 558]);
    
    array_push($arr2, 555, 556, 557, 558);

    print_r($arr2);



























