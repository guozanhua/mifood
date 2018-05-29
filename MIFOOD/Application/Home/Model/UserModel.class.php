<?php
namespace Home\Model;
use Think\Model;
use Vendor\ThinkImage\ThinkImage;


class UserModel extends LoginModel {
    protected $_validate=array(
        array('username','require','用户名不能为空!'),
        array('user_name','','该用户名已经被注册!',0,'unique',1), 

        array('email','require','邮箱不能为空!'),
        array('email','email','邮箱格式不正确!'),
        array('email','','该邮箱已经被注册！',0,'unique',1),
    );


	//显示个人信息(用户头像，昵称，email等)
	public function user(){
		$user=M('user')->where(array('user_id'=>$_SESSION['user_id']))->select();
        return $user;

	}

    //修改个人信息(头像，性别)
    public function user_update(){
    	$date['face']=$this->$get_url();
    	$date['sex']=$_POST['sex'];
    	$user=M('user')->add($date);

    }
    //添加收藏
    public function addLove($id){
        $data['shop_id']=$id;
        $data['user_id']=$_SESSION['user_id'];
        $where['shop_id']=$id;
        $person=M('love')->add($data);
        $shop=M('shop')->where($where)->setInc('loves');

    }
      //当一家店没有促销活动是，删除店铺？若删除则收藏夹的店铺失效
  
	//显示收藏夹
    public function loves(){
        
    	$where['user_id']=$_SESSION['user_id'];
    	$where['state']=0;
        $loves=M('love')->where($where)->select();
        $loves_num=M('love')->where($where)->count();

        for($i=0;$i<$loves_num;$i++){
           $where1['shop_id']=$loves[$i]['shop_id'];
           $where1['state']=0;
           $shop[$i]=M('shop')->where($where1)->select();
      }

return $shop;
  

    }

    //批量删除收藏店铺
    public function del_loves($id){
        $shop_id=implode(‘,’,$id);
        $where['shop_id']=array(‘in’,$shop_id);  //批量删除的正确方法
        $where['user_id']=$_SESSION['user_id'];  
        M('face')->where($where)->setField('state',1);

        $where_1['shop_id']=array(‘in’,$shop_id);
        M('shop')->where($where_1)->setDec('loves');

    } 

	//修改收藏夹
    public function delLove($id){
    	$where['shop_id']=$id;
        $where['user_id']=$_SESSION['user_id'];

        $where_1['shop_id']=$id;

    	$update['state']=1;
    	$log_off=M('love')->where($where)->save($update);
        $loves=M('shop')->where($where_1)->setDec('loves');

    }
    //是否接收email推荐
    public function email(){
        $where['state']=0;
        $where['no_email']=0;
        $send=M('user')->where($where)->select();
        if($send){
            return $send;
        }else{
            return false;
        }
        
    }
    //接收邮件提醒
        public function no_email1(){
        $where['state']=0;
        $where['user_id']=$_SESSION['user_id'];
        $update['no_email']=0;
        $send=M('user')->where($where)->save($update);
        if($send){
            return ture;
        }else{
            return false;
        }
        
    }
    //拒绝邮件提醒
        public function no_email2(){
        $where['state']=0;
        $where['user_id']=$_SESSION['user_id'];
        $update['no_email']=1;
        $send=M('user')->where($where)->save($update);
        if($send){
            return ture;
        }else{
            return false;
        }
        
    }
   
 
    //上传头像
    public function uploadImg(){
        $upload = new  \Think\Upload(C('UPLOAD_CONFIG'));   // 实例化上传类
        //头像目录地址
        $path = './Avatar/';
        if(!$upload->upload()) {                        // 上传错误提示错误信息
            $this->ajaxReturn(array('status'=>0,'info'=>$upload->getErrorMsg()));
        }else{                                          // 上传成功 获取上传文件信息
            $temp_size = getimagesize($path.'temp.jpg');
            if($temp_size[0] < 100 || $temp_size[1] < 100){//判断宽和高是否符合头像要求
                $this->ajaxReturn(array('status'=>0,'info'=>'图片宽或高不得小于100px！'));
            }
            $this->ajaxReturn(array('status'=>1,'path'=>__ROOT__.'/Avatar/'.'temp.jpg'));
        }
    }

    //裁剪并保存用户头像
    public function cropImg(){
        //图片裁剪数据
        $params = I('post.');                       //裁剪参数
        if(!isset($params) && empty($params)){
            $this->error('参数错误！');
        }

        //头像目录地址
        $path = './Avatar/';
        //要保存的图片
         $real_path=$_SESSION['user'].'.jpg';
        // //临时图片地址
         $pic_path = $path.'temp.jpg';
        //实例化裁剪类
        $Think_img = new ThinkImage(THINKIMAGE_GD);
        //裁剪原图得到选中区域
        $Think_img->open($pic_path)->crop($params['w'],$params['h'],$params['x'],$params['y'])->save($path.$real_path);
        //生成缩略图
        $Think_img->open($path.$real_path)->thumb(100,100, 1)->save($path.$real_path);
         echo '上传头像成功';
    }
}

?>

















