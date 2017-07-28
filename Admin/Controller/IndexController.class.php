<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	

    //登陆
    public function login(){
        
        session('username',null);
        session('ID',null);
        if(!isset($_POST['name'])){
            $this->display();
        }else{
            if (isset($_SESSION['authnum_session'])) {
                $yzm=strtolower($_POST["yzm"]);
                if($yzm!=$_SESSION['authnum_session']){
                    if($yzm==""){
                        $cs='1';
                        $this->assign("error",$cs);
                        $this->display();
                        
                        
                    }else{
                        $cs='2';
                        $this->assign("error",$cs);
                        $this->display();
                        
                    }
                    exit();
                }

                $name=$_POST["name"];
                if($name==""){
                        $cs='3';
                        $this->assign("error",$cs);
                        $this->display();
                         exit();
                        
                }
                $pw=$_POST["password"];
                if($pw==""){
                        $cs='4';
                        $this->assign("error",$cs);
                        $this->display();
                         exit();
                        
                }
                $User=new \Model\UserModel;
                $condition['name'] = $name;
                $res=$User->where($condition)->field('password,ID')->select();
                if($res==null){
                    
                    $cs='3';
                    $this->assign("error",$cs);
                    $this->display();
                     exit();
                }else{
                    
                    $password=$res[0]['password'];
                    if($pw==$password){
                        $_SESSION['name']=$name;
                        $_SESSION['ID']=$res[0]['ID'];
                        $this->redirect('Index/platform');
                    }else{
                        $cs='4';
                        $this->assign("error",$cs);
                        $this->display();
                         exit();
                    }
                }   
     
            }
           
            
        }
        
    }

    //主页
    public function platform(){
         //判断用户是否已经登录
        if (!isset($_SESSION['name'])) {
            $this->error('请先登录再进行浏览', U('Index/login'), 1);
        }
        $this->display();
    }
    public function top(){
        //判断用户是否已经登录
        if (!isset($_SESSION['name'])) {
            $this->error('请先登录再进行浏览', U('Index/login'), 1);
        }
        $name=$_SESSION['name'];
        $this->assign('name',$name);
        $this->display();
    }
    public function left(){
        //判断用户是否已经登录
        if (!isset($_SESSION['name'])) {
            $this->error('请先登录再进行浏览', U('Index/login'), 1);
        }
        $this->display();
    }
   

}