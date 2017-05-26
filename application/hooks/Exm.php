<?php

class Exm
{

    public function test1()
    {
        // hook이 적용될 컨트롤러와 함수
        $obj = array(
            'myblog/list',
            );

        define('OBJ', $obj);

        $CI =& get_instance();
        $status = false;
        $ctrl = $CI->router->fetch_class();
        $func = $CI->router->fetch_method();
        $uri = "${ctrl}/${func}";
        $reqData = $CI->userdata?? "";

        if ($reqData != "") {
            $status = true;
        }

        if ($status) {
            /**
            *요기서 먼가가를 처리하면됨
            */
            print ("<br/>");
            print_r ($reqData1);
            print ("<br/>");
            print ("class: ${ctrl}");
            print ("<br/>");
            print ("function: ${func}");
            print ("<br/>");
        }
    }
}
