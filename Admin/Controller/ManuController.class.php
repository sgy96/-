<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class ManuController extends CommonController {
	

    //厂商列表
    public function manu_list(){
        
        $user=new \Model\UserModel;
        //录入分页参数
        $fenYePage=new \Component\fenYe();
        $fenYePage->pageSize=10;
        if(!isset($_GET['pageNow'])){
            $fenYePage->pageNow=1;
        }else{
            $fenYePage->pageNow=$_GET['pageNow'];
        }       
        $fenYePage->rowCount=$user->count('ID')-1;
        $fenYePage->pageCount=ceil($fenYePage->rowCount/$fenYePage->pageSize);

        $fenYePage->resArray=$user->limit(($fenYePage->pageNow-1)*$fenYePage->pageSize+1,$fenYePage->pageSize)->select();
        //获取分页框
        $url="__MODULE__/manu_list";
        $fenYePage->setFenYePage($url);

        $this->assign("resArray",$fenYePage->resArray);
        $this->assign("fenYekuang",$fenYePage->fenYekuang);
        $this->display();
            
        
        
    }

    //添加厂商
    public function manu_add(){

        if (!isset($_POST['password'])) {
            $this->display();
        }else{
            
            $user=new \Model\UserModel;
            $password=$_POST['password'];
            $ID=1;
            $res=$user->find($ID);
            if($password!=$res['password']){
               $this->error('密码错误', U('Manu/manu_list'), 1);
            }
            if($_POST["name"]==''||$_POST["cell"]==''||$_POST["pw"]==''||$_POST["security"]==''||$_POST["manu"]==''){
                $this->error('添加失败');
            }
            $data['name']=$_POST["name"];
            $data['cell']=$_POST["cell"];
            $data['password']=$_POST["pw"];
            $data['security']=$_POST["security"];
            $data['manu']=$_POST["manu"];
            $ret=$user->add($data);
            if ($ret) {
                $this->success('添加成功', U('Manu/manu_list'), 1);
            }else{
                $this->error('添加失败');
            }
        }
        
       
    }
 
    //删除厂商
    public function manu_delete(){
        if(isset($_GET['row'])){
            $ID=$_GET["row"];
            $user=new \Model\UserModel;
            $res=$user->find($ID);

           
            $this->assign('res',$res);
            $this->display();
        }
        if (isset($_POST['password'])) {
            $password=$_POST['password'];
            $user=new \Model\UserModel;
            $ID=1;
            $res=$user->find($ID);
            if($password!=$res['password']){
               $this->error('密码错误');
            }

            if(isset($_POST['1'])){
                
                $user=new \Model\UserModel;
                $data['ID']= (int)$_POST['ID'];
                $data['manu']=$_POST["manu"];
                $data['cell']=$_POST["cell"];
                
                $r=$user->save($data);
                if($r!==false){
                    $this->success('修改成功', U('Manu/manu_list'), 1);
                
                }else{
                    $this->error('修改失败', U('Manu/manu_list'), 1);
                } 
                
            }elseif (isset($_POST['2'])) {
                $ID= (int)$_POST['ID'];
                $user=new \Model\UserModel;
                
                $ret=$user->where("ID=$ID")->delete();
                if($ret){
                        
                    $this->success('删除成功', U('Manu/manu_list'), 1);
                }else{
                    $this->error('删除失败');
                }
                
                
                
                
            }
        }
    }
    
    


}