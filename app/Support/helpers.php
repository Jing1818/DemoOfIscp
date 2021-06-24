<?php

/*
 * 辅助函数
 */
if (!function_exists('sys_config')){
    /**
     * @param string $name
     */
    function sys_config(string $name,$defalut = ''){
        if (empty($name)) return $defalut;
        $sysConfig = app('sysConfig')->get();
    }
}
