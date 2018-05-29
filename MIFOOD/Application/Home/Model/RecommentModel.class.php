<?php
namespace Home\Model;
use Think\Model;
class RecommentModel extends Model {


	public function ajaxchuli()
    {
        $n = D("city");//造一个nation表的模型对象
        $attr = $n->select();
        
        $this->ajaxReturn($attr);//ajax返回数据的方式，用ajaxReturn。
    }

	//显示地区
		public function show_area(){
		$show_provice=M('provice')->select();
		dump($show_provice);
		$where['provice_id']=$_POST['provice'];
		$show_city=M('city')->where($where)->select();
		dump($show_city);
	}


	//地区
	// public function __construct(){
	// 	if($_POST['city']){
 //             $city=$_POST['city'];
 //         }else{
 //             $city='';
 //         }
	// }
	
	//地区id
	public function area(){
		$where['city_name']=$city;
        $area=M('city')->where($where)->select();
        $area=$area['0']['city_id'];
        return $area;
	}

	//特色推荐
	public function featured(){
		$where['city_id']=$this->area();
		$featured=M('shop')->where($where)->order('level desc')->limit(20)->select();
		dump($featured);
	}

	//用户推荐
	public function user_love(){
		$where['city_id']=$this->area();
		$user_love=M('shop')->where($where)->order('loves desc')->limit(20)->select();
		dump($user_love);
	}

	//显示分类
	public function show_category(){
		$show_category=M('category')->select();
		dump($show_category);
	} 

	//分类
    public function category(){
        $where['category_id']=$_POST['id'];
        $shop=M('shop')->where($where)->select();//分页
        dump($shop);
   }
   //更新情报
   public function news(){
   	$where['state']=0;
   	$new=M('shop')->where($where)->limit(9)->select();
    return $new;
   }
   //健康信息
   public function health($id){
   	$where['state']=0;
   	$where['article_id']=$id;
   	$health=M('articles')->where($where)->select();
   	return $health;
   }



}
?>