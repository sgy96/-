<?php
namespace Component;

class fenYe{
        public $pageSize;  //每页几个数据
        public $resArray;  //数据信息
        public $rowCount;  //数据总数
        public $pageNow;   //当前页
        public $pageCount;  //总页
        public $fenYekuang;   //分页框
    
    
        
        
        //输出分页栏
        public function setFenYePage($url){
            $this->fenYekuang="";
            if($this->pageNow!=1){
                $this->fenYekuang.="<a href='?pageNow=1'>首页</a>&nbsp;";
            }
            if($this->pageNow!=1){
                $this->fenYekuang.="<a href='?pageNow=".($this->pageNow-1)."'>上一页</a>&nbsp;";
            }
            if($this->pageNow!=$this->pageCount){
                $this->fenYekuang.="<a href='?pageNow=".($this->pageNow+1)."'>下一页</a>&nbsp;";
            }
            if($this->pageNow!=$this->pageCount){
                $this->fenYekuang.="<a href='?pageNow=".$this->pageCount."'>尾页</a>&nbsp;";
            }
            $this->fenYekuang.="当前第".$this->pageNow."页/共".$this->pageCount."页";
            $this->fenYekuang.="<form action='' method='get'>".
                 "跳转到第<input type='text'size='2' name='pageNow'/>页<input id='su' type='submit' value='GO'/>".
                 "</form>";
        }
}
    
?>
