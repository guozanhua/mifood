<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

   public function index(){
    $sumLoves=D('Shop')->sumLoves();
    $this->assign('sumLoves',$sumLoves);
   
    $timeShops=D('Shop')->timeShops();
    $this->assign('timeShops',$timeShops);

	   $this->display('index');
   }
   public function top(){
    //根据收藏数量top显示（16）
    $topLoves=D('Shop')->topLoves();
    $this->assign('topLoves',$topLoves);
    //最新的店铺（4）
     $timeShops=D('Shop')->timeShops();
    $this->assign('timeShops',$timeShops);
    $this->display('top');
   }


    public function classify(){

      $where['category_id']=$_GET['category_id'];
      $where['state']=0;
      $count=M('shop')->where($where)->count();
      $page=new \Org\Util\Page($count,12);
      $list=M('shop')->where($where)->order('shop_id desc')->limit($page->firstRow.','.$page->listRows)->select();
      $this->assign('list',$list);
      $this->assign('page',$page->show());

      $category=D('Shop')->showCategory();
      $this->assign('category',$category);

       $oneCategory=D('Shop')->oneCategory($_GET['category_id']);
      $this->assign('oneCategory',$oneCategory);
    $this->display('classify');
   }

   
   public function email(){
    $this->display('email');
   }

    public function health(){
    $this->display('health');
   }

    public function showHealth(){
      $health=D('Recomment')->health($_GET['article_id']);
      $this->assign('health',$health);
     
    $this->display('health-details');
   }


   public function search(){
    $where['state']=0;
    $where['shop_name']=array('like','%'.$_GET['search'].'%');
    $count=M('shop')->where($where)->count();
    $page=new \Org\Util\Page($count,16);
    $list=M('shop')->where($where)->order('shop_id desc')->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign('shop',$list);
    $this->assign('page',$page->show());

  
    $this->display('search');
   }




    //登陆，注册，退出，注销
    public function register(){ 
    $user = D ( 'User' );
    if (! $user->create ()) {
     dump ( $user->getError () );
      }else {
          $login=D('Login')->register($_POST['user_name'],$_POST['email'],md5($_POST['password']));
          if($login){
            $this->success( '注册成功' );
           }else{
            $this->error('注册失败');
           }
        }
    }

    //ajax
      public function checkName() {
    $user = D ( 'user' );
    if (! $user->create ()) {
      exit ( $user->getError () );
    } else {
      echo 0;
    }
  }


   public function logins(){
      $logins=D('Login')->login($_POST['username'],md5($_POST['password']));
      if($logins){
        $this->success('登录成功');
       }else{
         $this->error('登录失败');
      
       }
  }
  public function log_out(){
    $log_out=D('Login')->log_out();
   if($log_out){
        $this->success('退出成功','Index/index');
       }else{
         $this->error('退出失败');
      
       }
  }
    public function log_off(){
    $log_off=D('Login')->log_off();
   if(!$logins){
        $this->success('注销成功','Index/index');
       }else{
         $this->error('注销失败');
      
       }
  }

   public function details(){
    //ajax
      $where['shop_id']=$_GET['shop_id'];
      $where['state']=0;
      $count=M('comment')->where($where)->count();
      $page=new \Org\Util\Page($count,12);
      $comment=M('comment')->where($where)->limit($page->firstRow.','.$page->listRows)->select();
      $location=$_GET['p'];
      $this->assign('location',$location);
      $this->assign('comment',$comment);
      $this->assign('page',$page->show());
      //低分评论

      $where1['shop_id']=$_GET['shop_id'];
      $where1['state']=0;
      $where1['level']=array('lt',3);
      $count=M('comment')->where($where1)->count();
      $lowPage=new \Org\Util\Page($count,12);
      $lowComment=M('comment')->where($where1)->limit($page->firstRow.','.$page->listRows)->select();
      $this->assign('lowComment',$lowComment);
      $this->assign('lowPage',$lowPage->show());

      //晒图评论
      $where2['shop_id']=$_GET['shop_id'];
      $where2['state']=0;
      $where2['nophoto']=0;
      $count=M('comment')->where($where2)->count();
      $photoPage=new \Org\Util\Page($count,12);
      $photoComment=M('comment')->where($where2)->limit($page->firstRow.','.$page->listRows)->select();
      //晒图评论的图片
       for($i=0;$i<$count;$i++){
           $where3['comment_id']=$photoComment[$i]['comment_id'];
           $where3['state']=0;
           $photos[$i]=M('photo')->where($where3)->select();
      }
       // $photos=M('photo')->where(array('comment_id'=>161))->select();
      // print_r($photos);
       //var_dump($photos);
      $this->assign('photos',$photos);
      $this->assign('photoComment',$photoComment);
      $this->assign('photoPage',$photoPage->show());

//分类的显示
      $showType=D('Shop')->showType($_GET['type_id']);
      $this->assign('showType',$showType);

//是否收藏
      $no_love=D('Shop')->no_love($_GET['shop_id']);
      $this->assign('no_love',$no_love);
 //收藏
      
   	$shop=D('Shop')->shop($_GET['shop_id']);
    $food=D('Shop')->food($_GET['shop_id']);
    $foods=D('Shop')->food($_GET['shop_id']);
    $numType=D('Shop')->numType($_GET['shop_id']);
    $this->assign('numType',$numType);
    $this->assign('food',$food);
    $this->assign('foods',$foods);
   	$this->assign('shop',$shop);
    //数据可视化
    $ave_comment=D('Shop')->ave_comment($_GET['shop_id']);
    $this->assign('ave_comment',$ave_comment);

   	$this->display('details');

  }


//个人主页
  public function person(){
    $user=D('Login')->no_login();
    if(!$user){
       $this->error('你还未登录');
    }
    //ajax
      $where2['user_id']=$_SESSION['user_id'];
      $where2['state']=0;
      $count=M('love')->where($where2)->count();
      $page=new \Org\Util\Page($count,4);
      $love=M('love')->where($where2)->limit($page->firstRow.','.$page->listRows)->select();
      for($i=0;$i<$count;$i++){
           $where1['shop_id']=$love[$i]['shop_id'];
           $where1['state']=0;
           $shop[$i]=M('shop')->where($where1)->limit(4)->select();
      }
      $this->assign('love',$love);
      $this->assign('page',$page->show());
      $this->assign('loves',$shop);

    $topLoves=D('Shop')->topLoves();
    $this->assign('topLoves',$topLoves);
      $this->display('person');
  }
//添加收藏
  public function addLove(){
  $user=D('Login')->no_login();
    if(!$user){
       $this->error('你还未登录');
    }
    $loves=D('Shop')->no_love($_GET['shop_id']);
    if($loves){
      $this->error('你已收藏');
    }else{
    $addLove=D('User')->addLove($_GET['shop_id']);
    if(!$addLove){
      $this->success('收藏成功');
    }else{
      $this->error('收藏失败');
    }
  }
  }
  //删除收藏
  public function delLove(){
    $delLove=D('User')->delLove($_GET['shop_id']);
    if(!$delLove){
      $this->success('删除成功');
    }else{
      $this->error('删除失败');
    }
  }

   public function upload(){
     $this->display('face');

 }
  public function uping(){
      $face=D('User')->upload();
  }

public function mail_out(){
  $mail_out=D('User')->no_email2();
  if($mail_out){
      $this->success('拒绝邮箱提醒成功');
  }else{
     $this->error('拒绝邮箱提醒失败');

  }
}
public function mail_yes(){
  $mail_out=D('User')->no_email1();
  if($mail_out){
      $this->success('接受邮箱提醒成功');
  }else{
     $this->error('接受邮箱提醒失败');

  }
}
    public function mail(){
    $user=D('User')->user();
    $email=$user[0]['email'];
    $body='<style>
    @media (max-width: 415px) {
        .eml_frame_cnt {
            width: 100% !important;
        }
        .eml_posterCnt{
            width: 100% !important;
        }
        .eml_posterWrap{
            width: 100% !important;
            height: auto!important;
        }
        .eml_poster{
            width: 100% !important;
            height: auto!important;
        }
        .eml_btnWrap{
            width: 100%!important;
        }
        .eml_btn{
            width: 47%!important;
        }
        .eml_btnWrap_link{
            font-size: 14px!important;
        }
        .eml_separator{
            width: 4% !important;
        }
        .eml_footer{
            padding: 20px 20px 30px!important;
        }
    }
</style>

<div class="qmbox">
    <table class="eml_frameWrap" style="width: 100%;background-color: #fff;" cellspacing="0" cellpadding="0" border="0">
        <tbody>
        <tr>
            <td class="eml_frame" style="text-align: center; padding:0;" align="center">
                <table class="eml_frame_cnt" style="width: 904px;table-layout:fixed;margin:0 auto;background-color:#AA8C82;" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                    <tr><td id="qqmail_cardname" class="eml_title" style="text-align: center;padding: 25px 20px 0px;font-size: 20px;font-weight: bold;" align="center">
                           Hey小伙伴们，饭点时候到了，还没get到好的地方?看看这里吧
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;padding: 18px 20px 0px;" align="center">
                            <table class="eml_posterCnt" style="margin: 0 auto;table-layout: fixed;" cellspacing="0" cellpadding="0" border="0">
                                <tbody><tr>
                                    <td class="eml_posterWrap" style="width:200px;height: 330px;border: 1px solid #E9D9C0;padding: 2px;vertical-align: top;" width="330" height="330">
                                        <img src="http://120.25.211.225/Public/images/s2.jpg" quality="high"  invokeurls="false" allownetworking="all" allowscriptaccess="samedomain" width="320" height="330">
                                    </td>
                                    <td class="eml_posterWrap" style="width:200px;height: 330px;border: 1px solid #E9D9C0;padding: 2px;vertical-align: top;" width="330" height="330">
                                        <img src="http://120.25.211.225/Public/images/s1.jpg" quality="high"  invokeurls="false" allownetworking="all" allowscriptaccess="samedomain" width="320" height="330">
                                    </td>
                                </tr>
                                     <tr>
                        <td style="text-align: center;padding: 22px 20px 0px;" align="center">
                            <table class="eml_btnWrap" style="margin: 0 auto;table-layout: fixed;" cellspacing="0" cellpadding="0" border="0">
                                <tbody><tr>
                                    
                                    <td class="eml_separator" style="width: 32px;height: 40px;" width="32" height="40"></td>
                                    <td class="eml_btn" style="width:205px;height:40px;vertical-align:middle;background-color:#AA8C82;text-align: center;border: 1px solid #642200;box-shadow: 0px 4px 12px 0px rgba(180,104,0,0.20);border-radius: 3px;" width="205" height="40">
                                        <a class="eml_btnWrap_link qqmail_card_reply_btn" name="" href="http://120.25.211.225/index.php/Home/Index/details/shop_id/999" target="_blank" style="display:inline-block;color:#FFF;text-decoration:none;width:100%;height:38px;line-height:38px;font-size:16px;outline:none;">
                                            去官网看看该店铺
                                        </a>
                                    </td>

                                </tr>
                            </tbody></table>
                        </td>
                            <td style="text-align: center;padding: 22px 20px 0px;" align="center">
                            <table class="eml_btnWrap" style="margin: 0 auto;table-layout: fixed;" cellspacing="0" cellpadding="0" border="0">
                                <tbody><tr>
                                    
                                    <td class="eml_separator" style="width: 32px;height: 40px;" width="32" height="40"></td>
                                    <td class="eml_btn" style="width:205px;height:40px;vertical-align:middle;background-color:#AA8C82;text-align: center;border: 1px solid #642200;box-shadow: 0px 4px 12px 0px rgba(180,104,0,0.20);border-radius: 3px;" width="205" height="40">
                                        <a class="eml_btnWrap_link qqmail_card_reply_btn" name="" href="http://120.25.211.225/index.php/Home/Index/details/shop_id/2" target="_blank" style="display:inline-block;color:#FFF;text-decoration:none;width:100%;height:38px;line-height:38px;font-size:16px;outline:none;">
                                            去官网看看该店铺
                                        </a>
                                    </td>
                                    
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>

                            </tbody></table>
                        </td>
                    </tr>
                       <td id="qqmail_card" class="eml_footer" style="padding: 20px 0px 30px;font-size: 14px;text-align:center;line-height: 50px;color: #000;">
                          <div style="width:904px;height:50px;background-color: #0F1215;text-align: center;"><p style="color:#bbbbbb;font-size: .9em">© 2017 Food Corner. All rights reserved | Design by MIFOOD</p></div>
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
        </tbody>
    </table></div>';
   // echo $email;
      // 发送单条邮件
      if(send_email($email,'MIFOOD',$body)){
        $this->success('发送成功');
      }else{
        $this->error('发送失败');
    }

 
    // 如果群发邮件 则传入数组即可
    // $emails=array('b1@baijunyao.com','b2@baijunyao.com');
    // send_email($emails,'邮件标题','邮件内容');
    }

}