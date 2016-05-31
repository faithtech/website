$(function(){
	var mask = document.createElement('div');
	mask.classList.add('black-mask');
	document.body.appendChild(mask);
	// nav-main-toggle
	document.getElementById('btn-menu').addEventListener('click', function(e){
		mask.classList.add('show');		
  		document.body.classList.add('nav-main-open');
  		e.stopPropagation();
 		document.addEventListener('click', function(e){
  			document.body.classList.remove('nav-main-open');
  			mask.classList.remove('show');
  		});
	});

	// btn-scroll
	$('.btn-scroll').on('click', function(){
		var target = $(this.hash).offset().top;
		$('html, body').animate({'scrollTop': target});
	});
});
