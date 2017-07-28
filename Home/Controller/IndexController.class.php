<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){
        $goods=new \Model\GoodsModel;
        if(isset($_POST['category'])){
            $con['category'] = $_POST['category'];
            $resArray=$goods->where($con)->field('product,brand,Price,pe_img,describe')->limit(0,5)->select();
            if($resArray&&$resArray!=null){
                echo json_encode($resArray);
            }else{
                $resArray=array('er'=>'0');
                echo json_encode($resArray);
            }
        }else{
            $con['category'] = '近视镜片';
            $resArray=$goods->where($con)->field('product,brand,Price,pe_img,describe')->limit(0,5)->select();
            $this->assign("res",$resArray);
            $this->display();
        }
        
        
        
    }


    public function jz(){
        $goods=new \Model\GoodsModel;
        //录入分页参数
        $pageSize=5;
        
        $page=$_POST['page'];
        
           
        $rowCount=$goods->count('ID');
        $pageCount=ceil($rowCount/$pageSize);
        if($pageCount<$page){
            $arr=array('er'=>'0');
            echo json_encode($arr);
            
        }else{
            $con['category'] = $_POST['category'];
            $arr=$goods->where($con)->field('product,brand,Price,pe_img,describe')->limit(($page-1)*$pageSize,$pageSize)->select();
            if($arr&&$arr!=null){
                echo json_encode($arr);
            }else{
                $arr=array('er'=>'0');
            echo json_encode($arr);
            }
        }
        /*$arr=array(
            '0'=>array('title'=>'0','date'=>'0'),
            '1'=>array('title'=>'1','date'=>'1'),
            '2'=>array('title'=>'2','date'=>'2'),
            '3'=>array('title'=>'3','date'=>'3'),
            '4'=>array('title'=>'4','date'=>'4'),
            '5'=>array('title'=>'5','date'=>'5'),
            '6'=>array('title'=>'6','date'=>'6'),
            '7'=>array('title'=>'7','date'=>'7'),
            '8'=>array('title'=>'8','date'=>'8')

        );*/
        
    }
   

}