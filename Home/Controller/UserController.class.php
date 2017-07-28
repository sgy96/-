<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
	
    
    public function my(){

    	if (!isset($_SESSION['UID'])) {
        	$this->redirect('User/logo');
    	}
    	$_SESSION['Uname']=$_SESSION['Uname'];
        $_SESSION['UID']=$_SESSION['UID'];
    	$this->display();
      
    }

    public function logo(){

        if(!isset($_POST['cell'])){
        	$this->display();
        }else{

        	if($_POST['cell']==''||$_POST['password']==''){
        		echo "1";
        		exit();
        	}
        	$member=new \Model\MemberModel;
        	$condition['cell'] = $_POST['cell'];
            $res=$member->where($condition)->field('password,ID,name')->select();
            if($res==null){
                    
                    echo "2";
                    exit();
            }else{
                    
                $password=$res[0]['password'];
                if($_POST['password']==$password){
                    $_SESSION['Uname']=$res[0]['name'];
                    $_SESSION['UID']=$res[0]['ID'];
                    echo $res[0]['ID'];
                }else{
                    echo "2";
                }
            }   
        }	
        
        
            
        
                
    }

    public function reset(){
    	
    	if(!isset($_POST['cell'])){
        	$this->display();
        }else{
        	if($_POST['cell']==''){
        		echo "1";
        		exit();
        	}
        	$member=new \Model\MemberModel;
        	$condition['cell'] = $_POST['cell'];
            $res=$member->where($condition)->field('ID')->select();
            if($res==null){
                    
                echo "2";
                exit();
            }else{
                    
                $data['ID']= $res[0]['ID'];
                $data['password']=$_POST["cell"];
                $r=$member->save($data);
                if($r!==false){
                   	echo "3";
                	exit();
                
                }else{
                    echo "2";
                	exit();
                }
            }   
        }
    	    
        
                
    }
    

    public function tc(){

    	session('Uname',null);
        session('UID',null);
        $this->redirect('User/logo');
      
    }


    public function details(){
    	if (!isset($_SESSION['UID'])) {
        	$this->redirect('User/logo');
    	}
    	$_SESSION['Uname']=$_SESSION['Uname'];
        $_SESSION['UID']=$_SESSION['UID'];
    	$ID=$_SESSION['UID'];
    	$member=new \Model\MemberModel;
    	$res=$member->find($ID);
    	if($res){
    		
        	
    	}else{
    		$this->error('获取失败');
    	}
    	if($res['Superior']==""){
    		$res['Superior']="无";
    	}else{
    		$condition['cell'] = $res['Superior'];
            $rey=$member->where($condition)->field('name')->find();
    		$res['Superior']=$rey['name'];    		
    	}
    	if($res['address']==""){
    		$res['address']="无";
    	}
    	if($res['describe']==""){
    		$res['describe']="无";
    	}
    	
    	if($res['Doctor']==""){
    		$res['Doctor']="无";
    	}
    	if($res['staff']==""){
    		$res['staff']="无";
    	}
    	
    	$this->assign("res",$res);
    	$con['Superior'] = $res['cell'];

    	$ret=$member->where($con)->field('name,Time')->select();
    	
    	$this->assign("ret",$ret);
    	
    	$this->display();
    	
    }


    public function modify(){
    	if (!isset($_SESSION['UID'])) {
        	$this->redirect('User/logo');
    	}
    	$_SESSION['Uname']=$_SESSION['Uname'];
        $_SESSION['UID']=$_SESSION['UID'];
    	$ID=$_SESSION['UID'];
    	if(!isset($_POST['cell'])){
    		$member=new \Model\MemberModel;
    		$res=$member->field('cell,address')->find($ID);
    		$this->assign("res",$res);
        	$this->display();
        }else{
        	if($_POST['cell']==''){
        		echo "1";
        		exit();
        	}
        	$member=new \Model\MemberModel;
            $res=$member->field('cell')->find($ID);
            $con['Superior'] = $res['cell'];
    
            $re=$member-> where($con)->setField('Superior',$_POST['cell']);
            if($r!==false){
                $condition['ID'] = $ID;
                $condition['cell'] = $_POST['cell'];
                $condition['address'] = $_POST['address'];
                $r=$member->save($condition);
                if($r!==false){
                    echo "3";
                    exit();
                
                }else{
                    echo "2";
                    exit();
                }
            
            }else{
                echo "2";
                exit();
            }

        	
        }
    	    
        
                
    }



    public function password(){
    	if (!isset($_SESSION['UID'])) {
        	$this->redirect('User/logo');
    	}
    	$_SESSION['Uname']=$_SESSION['Uname'];
        $_SESSION['UID']=$_SESSION['UID'];
    	$ID=$_SESSION['UID'];
    	if(!isset($_POST['password'])){
			$this->display();
        }else{
        	if($_POST['password']==''){
        		echo "1";
        		exit();
        	}
        	$member=new \Model\MemberModel;
        	$res=$member->field('password')->find($ID);
        	if($res['password']!=$_POST['password']||$_POST['pw']!=$_POST['paw']){
        		echo "1";
        		exit();
        	}else{
        		$condition['ID'] = $ID;
	        	$condition['password'] = $_POST['pw'];
	            $r=$member->save($condition);
	            if($r!==false){
	               	echo "3";
	            	exit();
	            
	            }else{
	                echo "2";
	            	exit();
	            }
        	}
        	
        }
    	    
        
                
    }
}