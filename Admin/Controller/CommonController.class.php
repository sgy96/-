<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	
     public function _initialize() {
        //判断用户是否已经登录
        if (!isset($_SESSION['ID'])) {
            $this->error('请先登录再进行浏览', U('Index/login'), 1);
        }

        
    }
    

}
?>