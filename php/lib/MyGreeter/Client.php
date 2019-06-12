<?php
/**
 * Created by IntelliJ IDEA.
 * User: fitch.su
 * Date: 2019/6/11
 * Time: 8:03 PM
 */

namespace MyGreeter;


class Client
{
    public function getGreeting($time = 0)
    {
        $h = APP_ENV_PROD ? date('H') :  date('H', (int) $time);

        if ($h < 12){
            return 'Good morning';
        }else if($h < 18){
            return 'Good afternoon';
        }else{
            return 'Good evening';
        }
    }


}