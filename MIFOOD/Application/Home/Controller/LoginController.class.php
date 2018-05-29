<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {


		public function register() {
		$user = D ( 'user' );
		if (! $user->create ()) {
			dump ( $user->getError () );
		}
		$login=D('Login')->register($_POST['username'],$_POST['email'],md5($_POST['password']));
          if($login){
            $this->success( '注册成功' );
           }else{
            $this->error('注册失败');
           }
	}

	public function checkName() {
		$user = D ( 'user' );
		if (! $user->create ()) {
			exit ( $user->getError () );
		} else {
			echo 0;
		}
	}

	}
?> 