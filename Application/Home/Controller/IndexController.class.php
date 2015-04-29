<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        
        $ip=json_decode(file_get_contents('http://apistore.baidu.com/microservice/iplookup?ip='.get_client_ip()), true);
        if(strcmp($ip['errMsg'], 'success')!=0){
            echo 'error:ip';
            exit;
        }
        $this->assign('ipData', $ip['retData']);
        $this->display('index');
    }
}