<?php
namespace App\Admin\Controllers;
use App\Utils\Captcha;
use Jiannei\Response\Laravel\Support\Facades\Response;
class LoginController{
    public function index(){
       return  Response::success();
    }
}
