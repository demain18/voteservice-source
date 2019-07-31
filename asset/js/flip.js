	$(document).ready(function(){

		var count = 1;

		/*$(".item").keypress(function(key) {

			if(key.keyCode == 13){//키가 13이면 실행 (엔터는 13)
			count = count + 1;
			var lastcount = count % 2;
			console.log(`count : ${count} | lastcount : ${lastcount}`)
			if(lastcount == 1) {
				$('.item').addClass('flip');
			} else if(lastcount == 0) {
				$('.item').removeClass('flip');
			}
			}

		});*/

		$(document).keypress(function(key){
			if(key.keyCode == 32) {
				count = count + 1;
			var lastcount = count % 2;
			console.log(`count : ${count} | lastcount : ${lastcount}`)
			if(lastcount == 1) {
				$('.item').addClass('flip');
			} else if(lastcount == 0) {
				$('.item').removeClass('flip');
			}
			}
		});

		/*,function(){
			$(this).removeClass('flip');
		}*/
	});
