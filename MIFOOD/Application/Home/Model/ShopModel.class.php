<?php
namespace Home\Model;
use Think\Model;
class ShopModel extends Model {
	public function search($shop){
		$where['state']=0;
		$where['shop_name']=array('like','%'.$shop.'%');
		$search=M('shop')->where($where)->select();
		
		return $search;
		//调用Shop模型
		
	}

	//显示商铺信息
	public function shop($id){
		$where['shop_id']=$id;
		$where['state']=0;
		$shop=M('shop')->where($where)->select();
        return $shop;
	}

	//显示菜品信息
	public function food($id){
		$where['shop_id']=$id;
		$where['state']=0;
		$food=M('food')->where($where)->select();
		return $food;
	}

	//显示评论的平均评论水平
	public function ave_comment($id){
          $j=0;
          $ave_comment=array();
          $max=0;
		//获取该店铺的评论
		$where1['shop_id']=$id;
		$where1['state']=0;
		$comment=M('comment')->where($where1)->select();
		$shop=M('shop')->where($where1)->select();
		$level=$shop[0]['level'];
		$countComment=M('comment')->where($where1)->count();
		if($countComment > 20){

			foreach($comment as $k=>$val ){
               $i=$this->dealTime($val['create_time']);
               $arr[$i][]=$val['level'];
               $arrs[$i]=1;
               $max=$max>$i?$max:$i;
           }
           //var_dump($arr);
           // var_dump($arrs);
           for($j=0;$j<=$max;$j++){
           	if(!$arrs[$j]){$ave_comment[$j]=$level;}else{
           	// echo 'Yes';
           	// var_dump($arr[$j]);
           	   for($x=0,$ave_comment[$j]=0;$arr[$j][$x];$x++){
           	   	$ave_comment[$j]=$ave_comment[$j]+$arr[$j][$x];
           	   }
           	   $ave_comment[$j]= round($ave_comment[$j]/$x,2);
            }
       }
		}else{
			return false;
		}
	  return $ave_comment;
		}


	//日期处理函数
	public function dealTime($date){
		$Date_2="2017-02-28";
		$date=explode(" ",$date);
        $Date_List_a1=explode("-",$date[0]);
        $Date_List_a2=explode("-",$Date_2);
        $months=abs($Date_List_a2[0]-$Date_List_a1[0])*12 +$Date_List_a2[1]-$Date_List_a1[1];
        return $months;
}
	public function dealTime2($date){
		
		$date=explode(" ",$date);
       return $data[0];
}

	
	//显示评论分类数
	public function numType($id){
		$where['shop_id']=$id;
		$where['state']=0;
		$numType=M('comment')->where($where)->group('type_id')->field('count(1)')->select();
		return $numType;
	}

	//显示评论
	public function show_comment($id){
		$where['shop_id']=$id;
		$where['state']=0;
		$comment=M('comment')->where($where)->select();
        return $comment;

	}
	//低分评论
	public function showLowComment($id){
		$where['shop_id']=$id;
		$where['state']=0;
		$where['level']=array('lt',4);
		$comment=M('comment')->where($where)->select();
        return $comment;

	}
	//显示个评论的详情信息
	public function showType($id){
		$where['type_id']=$id;
		$where['state']=0;
		$showType=M('comment')->where($where)->select();
		return $showType;
	}

	//判断是否已经收藏
	public function no_love($id){
        $where['shop_id']=$id;
        $where['user_id']=$_SESSION['user_id'];
        $where['state']=0;
        $no_love=M('love')->where($where)->select();
        if($no_love){
        	return true;
        }else{
        	return false;
        }
	}

	//显示分类
	public function showCategory(){
		$where['state']=0;
		$category=M('category')->where($where)->select();
		return $category;
	}
	//根据分类显示菜品
	public function category($id){
        $where['category_id']=$id;
        $shop=M('shop')->where($where)->limit(12)->select();
        return $shop;
}
//根据分类显示总数
	public function sumCategory($id){
        $where['category_id']=$id;
        $shop=M('shop')->where($where)->limit(12)->count();
        return $shop;
}
//根据收藏数量显示
public function sumLoves(){
	$where['state']=0;
	$shop=M('shop')->where($where)->order('loves desc,level desc')->limit(9)->select();
	return $shop;
}
//根据收藏数量top显示
public function topLoves(){
	$where['state']=0;
	$shop=M('shop')->where($where)->order('level desc,shop_id desc')->limit(20)->select();
	return $shop;
}


//日期
public function timeShops(){
	$where['state']=0;
	$where['category_id']=11;
	$shop=M('shop')->where($where)->order('shop_id ,level desc')->limit(4)->select();
	return $shop;
}
//显示美食的种类
public function oneCategory($id){
	$where['state']=0;
	$where['category_id']=$id;
	$oneCategory=M('category')->where($where)->select();
	return $oneCategory;
}
} 
?>