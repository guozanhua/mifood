<?php
namespace Home\Controller;

use Think\Controller;
use Vendor\ThinkImage\ThinkImage;

class UserController extends Controller {

   public function home(){
      $this->display('home');
   }
	//初始化页面
	//上传头像
	public function uploadImg(){
		$upload = new  \Think\Upload(C('UPLOAD_CONFIG'));	// 实例化上传类
		//头像目录地址
		$path = './Avatar/';
		if(!$upload->upload()) {						// 上传错误提示错误信息
			$this->ajaxReturn(array('status'=>0,'info'=>$upload->getErrorMsg()));
		}else{											// 上传成功 获取上传文件信息
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
		D('User')->cropImg();
	}


	//登陆，注册，退出，注销
	public function login(){
      $this->display('login');
    }
    public function register(){
       $login=D('Login')->register($_POST['name'],md5($_POST['password']));
    }
   public function loings(){
      $loings=D('Login')->login($_POST['name'],md5($_POST['password']));
  }
  public function log_out(){
  	$log_out=D('Login')->log_out();
  }
    public function log_off(){
  	$log_off=D('Login')->log_off();
  }
//个人信息
  public function user(){
     $user=D('User')->user();
  }
	//修改个人信息（头像，性别）
  public function face(){
  	 $this->display('face');
  }

	//设置是否接受email


// 显示收藏的店铺
    public function show_love(){
        $data = D('User')->loves();
        $this->assign('v',$data);
        $this->display('love');
    }
//删除收藏的店铺
    public function del(){
      $del=D('User')->del_love($_GET['shop_id']);
      $this->show_love();
    }
//批量删除店铺
    public function dels($shop_id){
        $dels=D('User')->del_loves($shop_id);
        $this->show_love();
    }

    public function delss($shop_id){
        $dels=D('User')->del_loves($shop_id);
        $this->show_love();
    }
}