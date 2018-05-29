
$(function() {
	$('#pro').blur(
			function() {
				var pro_id = $(this).val();

				$.post("index.php/Home/Index/city", {
					'pro_id' : pro_id
				}, function(data) {
					if (data == 0) {
						 $('#city').html('暂无城市信息');
					} else {
						 $('#city').html(data);
					}
				})
			});
        

}