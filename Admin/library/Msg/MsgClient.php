<?php

namespace Msg;

class MsgClient
{

    protected static $returnArr = [
        'code'          => '400',
        'message'       => '请求出错'
    ];

    /**
     * 直接赋值 错误信息，返回json 输出
     * @param string $message
     * @param string $code
     * @return string
     */
    public static function returnMsg($message='', $code='')
    {
        self::$returnArr['message'] = $message;
        if($code!=='') self::$returnArr['code'] = $code;

        exit(json_encode(self::$returnArr, JSON_UNESCAPED_UNICODE));
    }


}
