<?php
/*
* -------------------------------
* Return JSON DATA
* -------------------------------
* Desc:return json data
* User:wangjialin
* Date:2017-7-18
*/
namespace AjaxJson;

class AjaxJson
{
    /*
    * @desc:
    * @param int $status 状态 0：错误，1:正常
    */
    public static return_info($status = 1 , $data = array() , $msg = '')
    {
        $header('Content-type:application/json');
        return json_encode(array(
          'status' => $status,
          'data'   => $data,
          'msg'    => $msg
        ));
    }
}
