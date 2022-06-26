
$(function() {
	$('.main-sidebar .with-sub').on('click', function(e) {
			e.preventDefault();
			$(this).parent().toggleClass('show');
			$(this).parent().siblings().removeClass('show');
		})	
	});
	
	 $(document).scroll(function() {
		var url = window.location; 
		// var element = $('.menu.main-sidebar .list .nav-item a').filter(function() {
		// 	console.log(this.href, url.href);
		// return this.href == url.href || url.href.indexOf(this.href) == 0; 
		// }).parent().addClass('active');
		let elem = $('.menu.main-sidebar .list .nav-item a');
		// if()
		elem.map((ind, el)=>{
			if(el.href !== url.href){
				el.classList.remove('active')
			}
			else{
				el.classList.add('active')
			}
		})
		// if (element.is('li a')) { 
		// 	 element.addClass('active').parent().parent('li').addClass('active')
		//  }
		//  else{
		// 	element.addClass('remove').parent().parent('li').addClass('remove')
		// }
	});
	
	// Toggle Sidebar
	$('[data-toggle="sidebar"]').click(function(event) { 
		event.preventDefault();
		$('body').toggleClass('ls-closed');
	});
	
	
	
	
	
	
	