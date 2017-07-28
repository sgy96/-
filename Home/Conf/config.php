<?php
return array(
	//'配置项'=>'配置值'
    
    'SESSION_OPTIONS'         =>  array(
        'name'                =>  'UID',                    //设置session名
        'expire'              =>  600,                      //SESSION过期时间，单位秒
        'use_trans_sid'       =>  1,                               //跨页传递
        'use_only_cookies'    =>  0,                               //是否只开启基于cookies的session的会话方式
    ),
);