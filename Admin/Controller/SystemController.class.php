<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class SystemController extends CommonController {
	

    //密码修改
    public function password(){
    	if(isset($_POST['password'])){
    		$password=$_POST['password'];
    		$pw=$_POST['pw'];
    		$security=$_POST['security'];
    		 if($password!=$pw){
               $this->error('两次密码输入不一致', U('System/password'), 1);
            }
            $user=new \Model\UserModel;
            $ID=$_SESSION['ID'];
            $res=$user->find($ID);
            if($res&&$security==$res['security']){
                $ce['ID']=$ID;
	            $ce['password']=$password;
	            $r=$user->save($ce);
	            if($r!==false){
	                $this->success('修改成功，请重新登录', U('System/lg'), 1);
	                
	            }else{
	                $this->error('修改失败', U('System/password'), 1);
	            }
            }else{
            	$this->error('修改失败', U('System/password'), 1);
            }
    	}else{
    		$this->display();
    	}
        
        
            
        
        
    }

    //密保修改
    public function security(){
        if(isset($_POST['oldsecurity'])){
    		$oldsecurity=$_POST['oldsecurity'];
    		$se=$_POST['se'];
    		$security=$_POST['security'];
    		 if($se!=$security){
               $this->error('两次密保输入不一致', U('System/security'), 1);
            }
            $user=new \Model\UserModel;
            $ID=$_SESSION['ID'];
            $res=$user->find($ID);
            if($res&&$oldsecurity==$res['security']){
                $ce['ID']=$ID; 
	            $ce['security']=$security;
	            $r=$user->save($ce);
	            if($r!==false){
	                $this->success('修改成功，请重新登录', U('System/lg'), 1);
	                
	            }else{
	                $this->error('修改失败', U('System/password'), 1);
	            }
            }else{
            	$this->error('修改失败', U('System/password'), 1);
            }
    	}else{
    		$this->display();
    	}
    }

    public function lg(){
    	echo("<script language='javascript'>window.top.location.href='../Index/login'</script>");
    }
    
    
   

}