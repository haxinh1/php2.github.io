<?php

namespace Admin\Xuong\Commons;
// k tiến hành khởi tạo đối tượng
 class Helper{
    public static function debug($data)
    {
        echo"<pre>";

        print_r($data);

        die;


    }


    

}