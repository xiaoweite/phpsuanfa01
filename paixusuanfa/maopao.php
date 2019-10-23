<?php

    header("Content-type:text/html;charset=utf-8");
    // 性能最差的冒泡排序方法
    function maopao1($arr) {
    $len = count($arr);  //计算数字长度
        for ($i = 1; $i < $len; $i++) {
          // 该层循环控制需要冒泡的轮数
            for ($k = 0; $k < $len -$i; $k++) {
                if ($arr[$k] > $arr[$k+1]) {
                    $tmp = $arr[$k];
                    $arr[$k] = $arr[$k+1];
                    $arr[$k+1] = $tmp;
                }
            }
        }
        return $arr;
    }

    // 性能最好的冒泡排序方法
    function maopao2($arr) {
        // 设置变量的初始值
        $low = 0;
        $high = count($arr) -1;
        while ($low < $high) {
            // 正向冒泡,找到最大值
            for ($j = $low; $j < $high; ++$j) {
                if ($arr[$j] > $arr[$j+1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $tmp;
                }
            }
            --$high;
            // 放向冒泡,找到最小值
            for ($j = $high; $j > $low; --$j) {
                if ($arr[$j] < $arr[$j-1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j-1];
                    $arr[$j-1] = $tmp;
                }
            }
            ++$low;
        }
        return $arr;
    }
    echo "冒泡排序法:<br/>";
    $arr = array(121,656,8997,11,56456,778,65454,314354,1121);
    echo "排序前:";
    foreach ($arr as $k => $val) {
        echo $val.' ';
    }
    echo "<br>方法一排序后:";
    $arr = maopao1($arr);
    foreach ($arr as $k => $val) {
        echo $val.' ';

    }
    echo "<br>方法二排序后:";
    $arr = maopao2($arr);
    foreach ($arr as $k => $val) {
        echo $val.' ';

    }

