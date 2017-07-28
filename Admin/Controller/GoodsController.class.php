<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends CommonController {
	

    //产品分类
    public function goods_sort(){
        $goods=new \Model\GoodsModel;
        $list=array();
        $list[0] = $goods->where(array("category"=>"近视镜片"))->count();
        $list[1] = $goods->where(array("category"=>"太阳镜"))->count();
        $list[2] = $goods->where(array("category"=>"隐形眼镜"))->count();
        $list[3] = $goods->where(array("category"=>"老花镜"))->count();
        $list[4] = $goods->where(array("category"=>"隐形眼镜护理液"))->count();
        $list[5] = $goods->where(array("category"=>"眼镜架"))->count();
        
        
        $this->assign("list",$list);
        
        $this->display();
            
        
        
    }

    //添加产品
    public function goods_add(){
        if(!isset($_POST['password'])){
            
            $this->display();
        }else{
            $password=$_POST['password'];
            $user=new \Model\UserModel;
            $ID=$_SESSION['ID'];
            $res=$user->find($ID);
            if($password!=$res['password']){
               $this->error('密码错误', U('Goods/goods_sort'), 1);
            }


            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
            $upload->autoSub   =      true;
            
            $category=$_POST['category'];
            switch ($category) {
                case '近视镜片':
                    $upload->subName = 'jinshi';
                    break;
                case '太阳镜':
                    $upload->subName = 'taiyang';
                    break;
                case '隐形眼镜':
                    $upload->subName = 'yinxing';
                    break;
                case '老花镜':
                    $upload->subName = 'laohua';
                    break;
                case '隐形眼镜护理液':
                    $upload->subName = 'huliye';
                    break;
                case '眼镜架':
                    $upload->subName = 'jingjia';
                    break;
                default:
                    $this->error("类别不正确");
                    break;
            }
            
            
            $upload->saveName = time().'_'.mt_rand();
            // 上传文件 
            $info   =   $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }
            
            
            
            $goods=new \Model\GoodsModel;
            $data['product']=$_POST["product"];
            $data['category']=$category;
            $data['brand']=$_POST["brand"];
            $data['Price']=$_POST["Price"];
            $data['pe_img']=$upload->subName."/".$info['pe_img']['savename'];
            $data['describe']=$_POST['describe'];
            $data['Maker']=$_SESSION['ID'];
            
            $res=$goods->add($data);
            

            if($res){
                $this->success('添加成功', U('Goods/goods_sort'), 1);
            }else{
                $this->error('添加失败');
            }
        }
    }

    public function goods_list(){
       if(isset($_GET['category'])){
            
            $goods=new \Model\GoodsModel;
            //录入分页参数
            $pageSize=4;
            if(!isset($_GET['pageNow'])){
                $pageNow=1;
            }else{
                $pageNow=$_GET['pageNow'];
            }   
            $con['category'] = $_GET['category'];
            $rowCount=$goods->where($con)->count('ID');
            $pageCount=ceil($rowCount/$pageSize);
            
            $resArray=$goods->where($con)->field('ID,product,brand,Price,pe_img')->limit(($pageNow-1)*$pageSize,$pageSize)->select();
            //获取分页框
           
            $fenYekuang="";
                if($pageNow!=1){
                    $fenYekuang.="<a href='?category=".$_GET['category']."&pageNow=1'>首页</a>&nbsp;";
                }
                if($pageNow!=1){
                    $fenYekuang.="<a href='?category=".$_GET['category']."&pageNow=".($pageNow-1)."'>上一页</a>&nbsp;";
                }
                if($pageNow!=$pageCount){
                    $fenYekuang.="<a href='?category=".$_GET['category']."&pageNow=".($pageNow+1)."'>下一页</a>&nbsp;";
                }
                if($pageNow!=$pageCount){
                    $fenYekuang.="<a href='?category=".$_GET['category']."&pageNow=".$pageCount."'>尾页</a>&nbsp;";
                }
                $fenYekuang.="当前第".$pageNow."页/共".$pageCount."页";
            
            $this->assign("category",$_GET['category']);
            $this->assign("res",$resArray);
            $this->assign("fenYekuang",$fenYekuang);
            $this->display();  
        }
        
    }


     //详情  
    public function goods_details(){
        if(isset($_GET['row'])){
            $ID=$_GET["row"];
            $goods=new \Model\GoodsModel;
            $res=$goods->find($ID);
            $user=new \Model\UserModel;
            $ret=$user->field('manu')->find($res['Maker']);
            $res['Maker']=$ret['manu'];
            $this->assign('res',$res);
            $this->display();
        }
        if (isset($_POST['password'])) {
            $password=$_POST['password'];
            $user=new \Model\UserModel;
            $ID=$_SESSION['ID'];
            $res=$user->find($ID);
            if($password!=$res['password']){
               $this->error('密码错误');
            }

            if(isset($_POST['1'])){
                if($_POST['pi']=="0"){
                    $goods=new \Model\GoodsModel;
                    $data['ID']= (int)$_POST['ID'];
                    $data['product']=$_POST["product"];
                    $data['brand']=$_POST["brand"];
                    $data['Price']=$_POST["Price"];
                    $data['describe']=$_POST['describe'];
                   
                    $r=$goods->save($data);
                    if($r!==false){
                        $this->success('修改成功', U('Goods/goods_list?category='.$_POST["category"]), 1);
                    
                    }else{
                        $this->error('修改失败');
                    } 
                }elseif ($_POST['pi']=="1") {
                    $upload = new \Think\Upload();// 实例化上传类
                    $upload->maxSize   =     3145728 ;// 设置附件上传大小
                    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
                    $upload->autoSub   =      true;
                    
                    $category=$_POST['category'];
                    switch ($category) {
                        case '近视镜片':
                            $upload->subName = 'jinshi';
                            break;
                        case '太阳镜':
                            $upload->subName = 'taiyang';
                            break;
                        case '隐形眼镜':
                            $upload->subName = 'yinxing';
                            break;
                        case '老花镜':
                            $upload->subName = 'laohua';
                            break;
                        case '隐形眼镜护理液':
                            $upload->subName = 'huliye';
                            break;
                        case '眼镜架':
                            $upload->subName = 'jingjia';
                            break;
                        default:
                            $this->error("类别不正确");
                            break;
                    }
                    
                    
                    $upload->saveName = time().'_'.mt_rand();
                    // 上传文件 
                    $info   =   $upload->upload();
                    if(!$info) {// 上传错误提示错误信息
                        $this->error($upload->getError());
                    }
                    $goods=new \Model\GoodsModel;
                    $ID= (int)$_POST['ID'];
                    $data['ID']= $ID;
                    $data['product']=$_POST["product"];
                    $data['brand']=$_POST["brand"];
                    $data['Price']=$_POST["Price"];
                    $data['pe_img']=$upload->subName."/".$info['pe_img']['savename'];
                    $data['describe']=$_POST['describe'];
                    $reu=$goods->field('pe_img')->find($ID);
                    $r=$goods->save($data);
                    if($r!==false){
                        
                         unlink('./Uploads/'.$reu['pe_img']);
                        $this->success('修改成功', U('Goods/goods_list?category='.$_POST["category"]), 1);
                    
                    }else{
                        $this->error('修改失败');
                    } 
                }
            }elseif (isset($_POST['2'])) {
                $ID= (int)$_POST['ID'];
                $goods=new \Model\GoodsModel;
                $res=$goods->field('pe_img')->find($ID);
                if($res){
                    $ret=$goods->where("ID=$ID")->delete();
                    if($ret){
                        unlink('./Uploads/'.$res['pe_img']);
                        $this->success('删除成功', U('Goods/goods_list?category='.$_POST["category"]), 1);
                    }else{
                        $this->error('删除失败');
                    }
                }else{
                    $this->error('删除失败');
                }
                
                
                
            }
        }
    }

    
    
   

}

