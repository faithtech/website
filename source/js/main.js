$(function(){
	// js cookie
	function setCookie(cname, cvalue, exdays) {
	    var d = new Date();
	    d.setTime(d.getTime() + (exdays*24*60*60*1000));
	    var expires = "expires="+ d.toUTCString();
	    document.cookie = cname + "=" + cvalue + "; " + expires;
	}
	function getCookie(cname) {
	    var name = cname + "=";
	    var ca = document.cookie.split(';');
	    for(var i = 0; i <ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') {
	            c = c.substring(1);
	        }
	        if (c.indexOf(name) == 0) {
	            return c.substring(name.length,c.length);
	        }
	    }
	    return "";
	}

	// jquery translate
	var lang = window.navigator.userLanguage || window.navigator.language ;
	var relang = lang.toLowerCase();
	var getCookieLang = getCookie('cookieLang');
	if(getCookieLang){
		var translator = $('body').translate({lang: getCookieLang, t: dict});
	}else if(relang === 'zh-tw' || relang === 'zh-cn'){
		var translator = $('body').translate({lang: "zhtw", t: dict});
	}else{
		var translator = $('body').translate({lang: "en", t: dict});
	}
	$('.btn-translate').on('click', function(){
		var lang = $(this).attr('id');
		translator.lang(lang);
		setCookie('cookieLang', lang, 365);
	});

	// nav-main
	var mask = document.createElement('div');
	mask.classList.add('black-mask');
	document.body.appendChild(mask);
	document.getElementById('btn-menu').addEventListener('click', function(e){
		mask.classList.add('show');		
  		document.body.classList.add('nav-main-open');
  		e.stopPropagation();
 		document.addEventListener('click', function(e){
 			if(!e.target.closest('#dropdownLang')){
	  			document.body.classList.remove('nav-main-open');
	  			mask.classList.remove('show');
	  		}
  		});
	});

	// btn-scroll
	$('.btn-scroll').on('click', function(){
		var target = $(this.hash).offset().top;
		$('html, body').animate({'scrollTop': target});
	});

	// form-booking
	$('#form-booking').on('submit', function(e){
		e.preventDefault();
		var $form = $(this),
			url = $form.attr('action'),
			name = $('#booking-name').val(),
			phone = $('#booking-phone').val(),
			email = $('#booking-email').val(),
			eventName = $('#booking-event-name').val(),
			fromYearSelect = document.getElementById('booking-from-year'),
			fromYear = fromYearSelect.options[fromYearSelect.selectedIndex].text,
			fromMonthSelect = document.getElementById('booking-from-month'),
			fromMonth = fromMonthSelect.options[fromMonthSelect.selectedIndex].text,
			fromDaySelect = document.getElementById('booking-from-day'),
			activity_start_time = fromYear+fromMonth+fromDay,

			fromDay = fromDaySelect.options[fromDaySelect.selectedIndex].text,
			toYearSelect = document.getElementById('booking-to-year'),
			toYear = toYearSelect.options[toYearSelect.selectedIndex].text,
			toMonthSelect = document.getElementById('booking-to-month'),
			toMonth = toMonthSelect.options[toMonthSelect.selectedIndex].text,
			toDaySelect = document.getElementById('booking-to-day'),
			activity_end_time = toYear+toMonth+toDay,

			toDay = toDaySelect.options[toDaySelect.selectedIndex].text,
			eventAdd = $('#booking-event-add').val(),
			eventMembers = $('#booking-event-members').val(),
			other = $('#booking-other').val();

		$.ajax({
           	type: "POST",
           	url: url,
	       	data: {
	       		name: name,
	       		telphone: phone,
	       		activity_name: eventName,
				activity_start_time: activity_start_time,
				activity_end_time: activity_end_time,
				activity_location: eventAdd,
				activity_member_count: eventMembers,
				note: other
	       	},
           	dataType: 'json',
           	success: function(data){
               	console.log(data.result);
+               $('#modal-booking').modal('hide');
               	$('#modal-success').modal('show');
           	},
           	error: function(data){
           		console.log(data.msg);
           		$('#modal-booking').modal('hide');
           		$('#modal-error').modal('show');
           	}
        });    	
	});
});
