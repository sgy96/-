<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class MemberController extends CommonController {
	

    //会员列表
    public function mem_list(){
        $member=new \Model\MemberModel;
        //录入分页参数
        $fenYePage=new \Component\fenYe();
        $fenYePage->pageSize=10;
        if(!isset($_GET['pageNow'])){
            $fenYePage->pageNow=1;
        }else{
            $fenYePage->pageNow=$_GET['pageNow'];
        }       
        $fenYePage->rowCount=$member->count('ID');
        $fenYePage->pageCount=ceil($fenYePage->rowCount/$fenYePage->pageSize);

        $fenYePage->resArray=$member->field('ID,name,cell,Time,Superior,Untreated,treated')->limit(($fenYePage->pageNow-1)*$fenYePage->pageSize,$fenYePage->pageSize)->select();
        //获取分页框
        $url="__MODULE__/mem_list";
        $fenYePage->setFenYePage($url);

        $this->assign("resArray",$fenYePage->resArray);
        $this->assign("fenYekuang",$fenYePage->fenYekuang);
        $this->display();
            
        
        
    }

    //添加会员
    public function mem_add(){

       if(!isset($_POST['name'])){

            $this->display();
        }else{
            $user=new \Model\UserModel;
            $pw=$_POST['password'];
            $ID=1;
            $res=$user->find($ID);
            if($pw!=$res['password']){
               $this->error('密码错误', U('Member/mem_list'), 1);
            }
            $name=$_POST["name"];
            $cell=$_POST["cell"];
            $Superior=$_POST["Superior"];
            $describe=$_POST["describe"];
            $password=$cell;
            $frequency=0;
            if($Superior!=""){
                $frequency=1;
            }
            header("Contert-type:text/html;charset=utf-8");
            date_default_timezone_set("PRC");
            $Time=date('Y').'年'.date('m').'月'.date('d').'日'.date('H').'时'.date('i').'分';
            
            $data['name']=$name;
            $data['cell']=$cell;
            $data['password']=$password;
            $data['Superior']=$Superior;
            $data['describe']=$describe;
            $data['frequency']=$frequency;
            $data['Time']=$Time;
            $data['distance']=$_POST["distance"];
            $data['left']=$_POST["left"];
            $data['right']=$_POST["right"];
            $data['Doctor']=$_POST["Doctor"];
            $data['staff']=$_POST["staff"];
            $data['address']=$_POST["address"];

            $member=new \Model\MemberModel;
            
            $res=$member->add($data);
            if ($res) {
                if($Superior!=""){
                    $feedBack=new \Model\feedBackModel;
                    $fb=$feedBack->find($ID);
                    //查找父
                    $ce['cell']=$Superior;
                    $member->where($ce)->setInc('Untreated',$fb['first']);
                    $ech=$Superior."返现".$fb['first']."元"; 
                    $p=$member->where($ce)->field('Superior,frequency')->find();
                    
                    if($p['Superior']!=""&&$p['frequency']==1){
                        $da['frequency'] = 2;
                        $da['Grand']=$res;
                        $member->where($ce)->save($da);
                        $cd['cell']=$p['Superior'];
                        $member->where($cd)->setInc('Untreated',$fb['Second']);
                        $ech=$ech.",".$p['Superior']."返现".$fb['Second']."元"; 
                    }
                    $p2=$member->where($cd)->field('Superior,frequency,Grand')->find();
                    if($p2['Superior']!=""&&$p2['frequency']==2){
                        $dat['Grand']=$p2['Grand'].",".$res;
                        $dat['frequency'] = 3;
                        $member->where($cd)->save($dat);
                        $cc['cell']=$p2['Superior'];
                        $member->where($cc)->setInc('Untreated',$fb['Third']); 
                        $ech=$ech.",".$p2['Superior']."返现".$fb['Third']."元";
                    }
                    $ech=$ech."。";
                }
                echo "注册成功。".$ech;
                echo "<br/><a href='mem_list'>返回列表</a>";
            }else{
                $this->error('注册失败', U('Member/mem_list'), 1);
            }
        }
    }
 
    //返现管理
    public function mem_reg(){
        $feedBack=new \Model\feedBackModel;
        if(!isset($_POST['first'])){
            
            $ID=1;
            $res=$feedBack->find($ID);
            
            $this->assign('res',$res);
            $this->display();
        }else{
            $password=$_POST['password'];
            $user=new \Model\UserModel;
            $ID=1;
            $res=$user->find($ID);
            if($password!=$res['password']){
               $this->error('密码错误', U('Member/mem_reg'), 1);
            }
            $ce['ID']=$ID;
            $ce['first']=$_POST['first'];
            $ce['Second']=$_POST['Second'];
            $ce['Third']=$_POST['Third'];
            $r=$feedBack->save($ce);
            if($r!==false){
                $this->success('设置成功', U('Member/mem_reg'), 1);
            }else{
                $this->error('设置失败', U('Member/mem_reg'), 1);
            }
        }
        
    }
    
    //详情  
    public function mem_details(){
        if(isset($_GET['row'])){
            $ID=$_GET["row"];
            $member=new \Model\MemberModel;   
            $res=$member->find($ID);

            //录入分页参数
            $pageSize=3;
            if(!isset($_GET['pageNow'])){
                $pageNow=1;
            }else{
                $pageNow=$_GET['pageNow'];
            }   
            $con['Superior']=$res['cell'];    
            $rowCount=$member->where($con)->count('ID');
            $pageCount=ceil($rowCount/$pageSize);
            
            $resArray=$member->where($con)->field('name,cell,Time,Grand')->limit(($pageNow-1)*$pageSize,$pageSize)->select();
            //获取分页框
           
            $fenYekuang="";
                if($pageNow!=1){
                    $fenYekuang.="<a href='?row=".$ID."&pageNow=1'>首页</a>&nbsp;";
                }
                if($pageNow!=1){
                    $fenYekuang.="<a href='?row=".$ID."&pageNow=".($pageNow-1)."'>上一页</a>&nbsp;";
                }
                if($pageNow!=$pageCount){
                    $fenYekuang.="<a href='?row=".$ID."&pageNow=".($pageNow+1)."'>下一页</a>&nbsp;";
                }
                if($pageNow!=$pageCount){
                    $fenYekuang.="<a href='?row=".$ID."&pageNow=".$pageCount."'>尾页</a>&nbsp;";
                }
                $fenYekuang.="当前第".$pageNow."页/共".$pageCount."页";
                
            
            $this->assign("resArray",$resArray);
            $this->assign("fenYekuang",$fenYekuang);
            $this->assign('res',$res);
            $this->display();
        }
    }

    public function grand(){
        if(isset($_POST['Grand'])) {
            $Grand = $_POST['Grand'];
            $Grands = explode(",", $Grand);
            $member=new \Model\MemberModel;   
            
           if(count($Grands)==1){
                $res=$member->field('name,cell,Time')->find($Grands[0]);
                if($res){
                    $one="  <td width='2%'>&nbsp;</td>                                                               
                            <td width='6%'>姓名：</td>
                            <td width='16%'>
                            <input class='text' type='text'  value='".$res['name']."'' readonly='true'> 
                            </td>
                            <td width='8%'>联系电话：</td>
                            <td width='16%'>
                            <input class='text' type='text'  value='".$res['cell']."'' readonly='true'>
                            </td>
                            <td width='8%'>介绍时间：</td>
                            <td width='16%'>
                            <input class='text' type='text'  value='".$res['Time']."'' readonly='true'> 
                            </td>
                            <td colspan='2'>二级推荐人</td>
                            <td width='2%'>&nbsp;</td> ";
                    $arr = array ('num'=>'1','one'=>$one,'two'=>" ");
                }else{
                    $arr=array('num'=>'0');
                }
                
           }

           if(count($Grands)==2){
                $res=$member->field('name,cell,Time')->find($Grands[0]);
                $res1=$member->field('name,cell,Time')->find($Grands[1]);
                if($res&&$res1){
                   $one="  <td width='2%'>&nbsp;</td>                                                               
                            <td width='6%'>姓名：</td>
                            <td width='16%'>
                            <input class='text' type='text'  value='".$res['name']."'' readonly='true'> 
                            </td>
                            <td width='8%'>联系电话：</td>
                            <td width='16%'>
                            <input class='text' type='text'  value='".$res['cell']."'' readonly='true'>
                            </td>
                            <td width='8%'>介绍时间：</td>
                            <td width='16%'>
                            <input class='text' type='text'  value='".$res['Time']."'' readonly='true'> 
                            </td>
                            <td colspan='2'>二级推荐人</td>
                            <td width='2%'>&nbsp;</td> ";

                    $two="  <td width='2%'>&nbsp;</td>                                                               
                            <td width='6%'>姓名：</td>
                            <td width='16%'>
                            <input class='text' type='text'  value='".$res1['name']."'' readonly='true'> 
                            </td>
                            <td width='8%'>联系电话：</td>
                            <td width='16%'>
                            <input class='text' type='text'  value='".$res1['cell']."'' readonly='true'>
                            </td>
                            <td width='8%'>介绍时间：</td>
                            <td width='16%'>
                            <input class='text' type='text'  value='".$res1['Time']."'' readonly='true'> 
                            </td>
                            <td colspan='2'>三级推荐人</td>
                            <td width='2%'>&nbsp;</td> ";
                    $arr = array ('num'=>'1','one'=>$one,'two'=>$two); 
                }else{
                    $arr=array('num'=>'0');
                }
                
           }


                
            echo json_encode($arr);
        }
    }

    public function mem_modify(){
        $password=$_POST['password'];
        $user=new \Model\UserModel;
        $ID=1;
        $res=$user->find($ID);
        if($password!=$res['password']){
           $this->error('密码错误');
        }

        $member=new \Model\MemberModel;
        $data['ID']= (int)$_POST['ID'];
        $data['name']=$_POST["name"];
        $data['left']=$_POST["left"];
        $data['right']=$_POST["right"];
        $data['distance']=$_POST["distance"];
        $data['Doctor']=$_POST["Doctor"];
        $data['staff']=$_POST["staff"];
        $data['address']=$_POST["address"];
        $data['describe']=$_POST["describe"];


        
        $r=$member->save($data);
        if($r!==false){
            $this->success('修改成功', U('Member/mem_list'), 1);
        
        }else{
            $this->error('修改失败',U('Member/mem_list'), 1);
        } 
    }

    public function xq(){
        if(isset($_POST['ID'])){
            $member=new \Model\MemberModel;
            $ID=$_POST['ID'];
            $password=$_POST['password'];
            $pa=$member->field('password')->find($ID);
            if($pa['password']!=$password){
                echo "false";
            }else{
                $Untreated=$_POST['Untreated'];
                $treated=$_POST['treated'];
                $ce['ID']=$ID;
                $ce['Untreated']=0;
                $ce['treated']=$Untreated+$treated;
                
                $res=$member->save($ce);
                if($res!==false){
                    echo $Untreated+$treated;
                }else{
                    echo "false";
                }
            }
            
            
        }
        
    }

    public function cz(){
        if(isset($_POST['cell'])){
            $ce['cell']=$_POST['cell'];
            $member=new \Model\MemberModel;
            $res=$member->field('ID')->where($ce)->find();
            if($res){
                //echo $res['ID'];
                $this->redirect('Member/mem_details', array('row' => $res['ID']));
            }else{
                $this->error('会员不存在', U('Member/mem_list'), 1);
            }
        }

    }


}