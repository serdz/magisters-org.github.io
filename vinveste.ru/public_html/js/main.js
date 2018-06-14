var tmp_cloud=0;
arr_cloud=[
"ѕривет, мен€ зовут ƒмитрий и сейчас € расскажу ¬ам про наш сайт!",
"ƒл€ начала ¬ам нужно зарегистрироватьс€ на нашем сайте! ѕросто нажмите красную кнопку регистраци€!",
" ак только ¬ы зарегистрировались, зайдите в ¬аш личный кабинет!",
"ƒалее ¬ам нужно пополнить свой баланс, чтобы сделать вклад!",
" ак только ¬ы пополнили баланс, нажмите —ƒ≈Ћј“№ ¬ Ћјƒ",
"¬ведите сумму вклада, к примеру 100 рублей и выберите тарифный план!",
"ƒальше ¬ам нужно подождать всего 24 часа, чтобы ¬аш вклад увеличилс€ на 10%",
"„ерез 24 часа ¬ы можете зайти в ¬аш личный кабинет и у ¬ас на балансе будет на 10% больше",
"“о есть, если ¬ы вложили 100 рублей, через 24 часа у ¬ас будет 110 рублей",
"Ќу а дальше ¬ы сами решаете - выводить эти деньги или снова открыть вклад",
"ј еще ¬ы можете заработать без вложений!",
"¬ам достаточно приглашать рефералов и получать 10% от их вклада!",
"”дачи ¬ам с нашим проектом!",
"ѕо€в€тс€ вопросы, пишите к нам на почту, мы ¬ам ответим!",
];

arr_cloud_en=[
"Hi, my name is Monica! I'm rich, beautiful and most of all want to be popular! Help me in this - and I thank you profusely. My hourly rate;)",
"Hey, good-looking! Nice to meet you =)",
"Ready to make me popular, huh?",
"Why click all over meЕ)",
"It tickles, aw!",
"Hey, stop it! Go have some juice, chillax! =)",
"Is that you again? I guess I kind of missed you...^ ^",
"You do understand I have a limited number of replies, donТt you?",
"I guess you donТt =)",
"CanТt you think of anything else to get your hands busy with? Poor boyЕ)",
"Want to touch me down there?...**",
"You know what? Start working already! What do you need the referral system for?",
"Aw, awЕ aaaaawЕ",
"Whoa, it feltЕ good =)",
"AawЕ",
"MmmmЕ",
"Keep touchingЕ",
"All right, stop!!!",
"More!!!!",
"ENOUGH!",
"StrongerЕ",
"Е....",
"Е....",
"Do you feel itТs growing? Your profitЕ ;)",
"Е............",
"http://monica24.com/wp-content/themes/monika/js/ЕЕЕЕ..aa",
"Е....................",
"ЕЕЕmmЕЕЕ..",
"You heartless bastard, stop itЕЕ..",
"ЕЕЕЕ.ooohohh",
"Е....",
"ЕЕЕ.you haveЕ",
"Еsuch a bigЕ",
"Еpotential to make moneyЕ and what are you doing instead?",
"Е...",
".............",
"wrong place again!",
"...............",
"Come on, scoutЕ keep lookingЕ",
".......",
"Yeeeeah =)",
"Е.......",
".....",
".....................",
".",
"awЕ yesЕ YEEES!!!",
"YEAHyeahAAAaaaaa!!!!!",
"..........",
"ЕЕ.whewЕ..",
"ЕЕ.all rightЕЕ",
" zZzZzzzzzzZZzzzzzz",
"Е..........",
"How are you, by the way? =)",
"I personally liked it =)",
"Go to your account, IТll give you $1,000 for what youТve done! It was awesome!",
"AlthoughЕ.",
"I gotta thinkЕ",
"That way, you wonТt tell your friends about meЕ",
"What about a cup of coffee and youТll get to work?",
"IТm a good girl, am I not? ^ ^",
"Everybody loves Monica, and Monica loves everybody!",
"Whoa-whoa, stop clicking over thereЕ ItТs enough for today =)",
"Bad boy!",
"Check out the statisticsЕ And you keep clickingЕ Try to be in my shoesЕ",
"Listen, donТt you have other things to do? Make me popular already! =)",
"By the way, youТre the first one whoТs clicked up to these words!",
"Want to make a record? Good luck!",
"By the way, right now the others are making money on the ref system! See it yourself!",
"START WORKING already! =)",
"All right, IТm leaving.",
"ZzzZZzzzzz",
"ZZzzzzzzZzzzzzz",
"zzzzzzZZZ",
"...............",
"OhЕ youТre not easy to fool! )",
"All right, I want to offer you somethingЕ",
"If you get to my 1,000th message, IТll show up on this table totally naked!!!",
"Ready?",
"Go!!!",
"1",
"2",
"3",
"4",
"5",
"6",
"7",
"8",
"9",
"WowЕ misterЕ youТre a very determined person!... =)",
"Naked? What if a kid happens to be watching?...",
"If I wanted to become famous like this, IТd be in adult movies!)",
"You ARE determined. ThatТs the kind of people I need!)",
"Pushing as you are, I will become a star quickly, and youТll earn good moneyЕ",
"Go to Photo Album, grab the posters, and weТll begin!",
"Good luck! Now youТre my partnerЕ in everything =)"
];

$.browser = {};
$.browser.mozilla = /mozilla/.test(navigator.userAgent.toLowerCase()) && !/webkit/.test(navigator.userAgent.toLowerCase());
$.browser.webkit = /webkit/.test(navigator.userAgent.toLowerCase());
$.browser.opera = /opera/.test(navigator.userAgent.toLowerCase());
$.browser.msie = /msie/.test(navigator.userAgent.toLowerCase());
	
var check_login_form=false;
var tmp_check_form_edit_user=false;
var tmp_check_form_add_vklad=false;
var tmp_check_reg_form=false;

$(document).ready(function(){

	$('#header .menu li a').each(function(i){
		$(this).parent().append("<br>"+$(this).attr("title"));
		$(this).attr("title","");
	});
	
	$(window).resize();


	$( "#calc #slider" ).slider({
		min: 100,
		max: 10000,
		value: 100,
		step: 1,
		slide: function( event, ui ){
			$( "#calc .left .summa" ).html( ui.value+'руб' );
			$( "#calc .left .amount" ).val(ui.value);
			$("#calc .right .time .t24").html(ui.value*1.1);
			$("#calc .right .time .t48").html(ui.value*1.2);
			$("#calc .right .time .t72").html(ui.value*1.3);
		}
    });
	$( "#calc .left .summa" ).html($("#calc #slider").slider("value")+"руб");
	$( "#calc .left .amount" ).val($("#calc #slider").slider("value"));
	
	$("#calc .left .amount").keyup(function() {
		var tmp=parseInt($(this).val());

		if (tmp>1000){
			tmp=1000;
		}
		if (tmp<10){
			tmp=10;
		}
		
		$( "#calc #slider" ).slider("value",tmp);
		$( "#calc .left .summa" ).html( tmp+'рублей' );
		$( "#calc .left .amount" ).val(tmp);
		$("#calc .right .time .t24").html(tmp*1.1+'рублей');
		$("#calc .right .time .t48").html(tmp*1.2+'рублей');
		$("#calc .right .time .t72").html(tmp*1.3+'рублей');
    });
	
	$("#calc .left .amount").change(function() {
		var tmp=parseInt($(this).val());
		if (tmp>1000){
			$(this).val(1000);
		}
		if (tmp<10){
			$(this).val(10);
		}
		$("#calc .left .amount").keyup();
	});
	
	
	
	$("#stat .block1 .stat_title, #stat .block1 .top_title").click(function(){
		$("#stat .block1 .stat_title, #stat .block1 .top_title").removeClass("active");
		
		$("#stat .block1 .block_stat").css("display","none");
		$("#stat .block1 .block_top").css("display","none");
		if ($(this).attr("class")=="stat_title"){
			$("#stat .block1 .block_stat").css("display","block");
		}
		else{
			$("#stat .block1 .block_top").css("display","block");
		}
		
		$(this).addClass("active");
		return false;
	});
	
	$("#stat .block3 .prev, #stat .block3 .next").click(function(){
		return_otziv($(this).attr("idpost"));
		return false;
	});
	
	$('#popup .form .close').click(function(){
		$(this).parent().parent().css("display","none");
		return false;
	});
	
	$('#stat .block3 .otziv').click(function(){
		$("#popup.reviews").css("display","block");
		$(window).resize();
		return false;
	});
	
	$('#reg .zabil').click(function(){
		$("#popup.forgot").css("display","block");
		$(window).resize();
		return false;
	});
	
	oblako(false);
	$('#reg .monika_big').click(function(){
		oblako(true);
	});
	
	
	var tmp_get1=window.location.href.split("?");
	var url_link=tmp_get1[0];
	if (tmp_get1[1]!==undefined){
		tmp_get1=tmp_get1[1].split("=");
		if (tmp_get1[0]=="b"){
			$("#menu_lk li").removeClass("active");
			$("#menu_lk ."+tmp_get1[1]).addClass("active");
		}
	}
	
	//«аполн€ем прогресс
	var arr=[[3,3,6],[3,3,3],[3,3,2],[3,3,1],[3,2,1],[3,1,1],[2,1,1],[1,1,1]];
	$('#my_vklad_list .item .progress div').removeClass("active");
	$('#my_vklad_list .item').each(function(i){
		$(this).find(".progress div").each(function(j){
			var tt=Math.floor((parseInt($(this).parent().parent().find("#time_end").val())-parseInt($(this).parent().parent().find("#time_end2").val()))/3);
			if (
				parseInt($(this).parent().parent().find("#time_end").val())-parseInt($(this).parent().parent().find("#time_end2").val())<arr[parseInt($(this).parent().parent().find("#time_end_reinvest").val())][0]*24
				&&
				j+1<=tt
			){
				$(this).addClass("active");
			}
		});
	});
	
	
	$("#lk_partner .item a").click(function(){
		return_info_referral($(this).parent());
		return false;
	});
	
	$('form input[name=email]').change(function(){
		checkmail($(this));
	});
	
	$('form input[name=login]').keypress( function(e) {
		return isAsci(e.keyCode);
	});
	
	$('#pMethod a').click(function(){

		$("#bMethod div").css("display","none");
		var tt=$(this).attr("attr");
		$("#bMethod .bMethod_"+tt).css("display","block");
		return false;
	});
	
});

$(window).resize(function(){
	$('#popup.reviews .form').css({
		"margin-left": -($('#popup.reviews .form').outerWidth()/2),
		"margin-top": -($('#popup.reviews .form').outerHeight()/2)
	});
	
	$('#popup.forgot .form').css({
		"margin-left": -($('#popup.forgot .form').outerWidth()/2),
		"margin-top": -($('#popup.forgot .form').outerHeight()/2)
	});
	
	var tmp_width=0;
	$('#header .menu li').each(function(i){
		tmp_width=tmp_width+$(this).outerWidth();
	});
	tmp_width=tmp_width+10;
	
	tmp_width=1029;
	$('#header .menu').css({
		"width": tmp_width,
		"left":(1000-tmp_width)/2
	});
});

function isAsci(cCode){
    return /[a-zA-Z0-9@\.]/.test(String.fromCharCode(cCode))
}

function checkmail(obj){
	var value=obj.val();
	reg = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
	if (!value.match(reg)){
		obj.val("");
		obj.focus();
		return false;
	}
}

function set_cookie( name, value){
	var cookie_string = name + "=" + escape ( value );
	var expires = new Date();
	expires.setTime(expires.getTime()+(1000*60*60*365));
	cookie_string += "; expires=" + expires.toGMTString();
	cookie_string += "; path=" + escape ("/");
	cookie_string += "; domain=" + escape (document.domain);
	document.cookie = cookie_string;
}

function deleteCookie(name) {
	var cookie_string = name + "=" + escape ( null );
	var expires = new Date(0);
	expires.setTime(expires.getTime());
	cookie_string += "; expires=" + expires.toGMTString();
	cookie_string += "; path=" + escape ("/");
	cookie_string += "; domain=" + escape (document.domain);
	document.cookie = cookie_string;
    return true;
}

function get_cookie( cookie_name ){
  var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
 
  if ( results )
    return ( unescape ( results[2] ) );
  else
    return null;
}

function oblako(flag){
	if ($("body").attr("id")=="en"){
		if (tmp_cloud>=arr_cloud_en.length){
			tmp_cloud=arr_cloud_en.length-1;
		}
		$("#header .center .oblako div").html(arr_cloud_en[tmp_cloud]);
	}
	else{
		if (tmp_cloud>=arr_cloud.length){
			tmp_cloud=arr_cloud.length-1;
		}
		$("#header .center .oblako div").html(arr_cloud[tmp_cloud]);
	}
	tmp_cloud++;
}

function return_otziv(idpost){
	$.ajax({
		type:"POST",
		url: '/',
		data: {
			ajax:'return_otziv',
			post:idpost,
			idcat:10
		},
		success:function(msg){
			var tmp_msg=msg.split('<-|->');
			$("#stat .block3 .prev").attr("idpost",tmp_msg[0]);
			$("#stat .block3 .next").attr("idpost",tmp_msg[1]);
			$("#stat .block3 .text .nik").html(tmp_msg[2]);
			$("#stat .block3 .text .content").html(tmp_msg[3]);
		}
	});
}

function Add_Reviews(){
	if ($("#popup .form #name").val()==""){
		$("#popup .form #name").focus();
		return false;
	}
	
	if ($("#popup .form #text").val()==""){
		$("#popup .form #text").focus();
		return false;
	}
	
	$.ajax({
		type:"POST",
		url: '/',
		data: {
			ajax:'add_otziv',
			name:$("#popup .form #name").val(),
			text:$("#popup .form #text").val()
		},
		success:function(msg){
			var tmp_otziv=msg.split(":");
			if (tmp_otziv[0]!=="Error"){
				$("#popup .form #name").val("");
				$("#popup .form #text").val("");
				$("#popup").css("display","none");
			}
			
			alert(tmp_otziv[1]);
		}
	});
}


function check_login(){
	if (check_login_form==false){
		$.ajax({
			type:"POST",
			url: '/',
			data: {
				ajax:'check_login',
				user:$("#reg form #login").val(),
				pass:$("#reg form #passwd").val()
			},
			success:function(msg){
				if (msg=="ok"){
					check_login_form=true;
					login_form.submit();
				}
				else{
					alert(msg);
				}
			}
		});
		return false;
	}
	else{
		return true;
	}
}

function check_form_edit_user(){
	if (tmp_check_form_edit_user==false){
		if ($("#account_form #email").val()==""){
			$("#account_form #email").focus();
		}
		else
		if ($("#account_form #old_pass").val()==""){
			$("#account_form #old_pass").focus();
		}
		else{
			tmp_check_form_edit_user=true;
			account_form.submit();
		}
		return false;
	}
	else{
		return true;
	}
}

function check_form_add_vklad(){
	if (tmp_check_form_add_vklad==false){
		if ($("#add_vklad form #account_text input").val()==""){
			$("#add_vklad form #account_text input").focus();
		}
		else{
			tmp_check_form_add_vklad=true;
			add_vklad.submit();
		}
		return false;
	}
	else{
		return true;
	}
}

function check_reg_form(){
	if ($("#reg_form #login").val()==""){
		$("#reg_form #login").focus();
	}
	else
	if ($("#reg_form #email").val()==""){
		$("#reg_form #email").focus();
	}
	else
	if ($("#reg_form #pass1").val()==""){
		$("#reg_form #pass1").focus();
	}
	else
	if ($("#reg_form #pass2").val()==""){
		$("#reg_form #pass2").focus();
	}
	else
	if ($("#reg_form #pass1").val()!==$("#reg_form #pass2").val()){
		$("#reg_form #pass2").focus();
		$("#reg_form #pass2").select();
	}
	else
	if (!$("#reg_form input[name=rules]").is(':checked')){
		alert($("#reg_form #rules2_alert").html());
	}
	else{
		$.ajax({
			type:"POST",
			url: '/',
			data: {
				registration:'true',
				login:$("#reg_form input[name=login]").val(),
				email:$("#reg_form input[name=email]").val(),
				first_name:$("#reg_form input[name=first_name]").val(),
				referral_code:$("#reg_form input[name=referral_code]").val(),
				pass1:$("#reg_form input[name=pass1]").val(),
				pass2:$("#reg_form input[name=pass2]").val()
			},
			success:function(msg){
				var tmp=msg.split('<->');
				if (tmp[0]=='error'){
					if (tmp[1]=='login'){
						$("#reg_form #login").focus();
					}
					else
					if (tmp[1]=='email'){
						$("#reg_form #email").focus();
					}
					else
					if (tmp[1]=='pass1'){
						$("#reg_form #pass1").val('');
						$("#reg_form #pass2").val('');
						$("#reg_form #pass1").focus();
					}
					else{
						alert(tmp[1]);
					}
				}
				else
				if (tmp[0]=='ok'){
					alert(tmp[1]);
					window.location.href="../../../../lk.htm"/*tpa=http://monica24.com/lk*/;
				}
				else{
					alert(msg);
				}
			}
		});
	}
	
	return false;
}

function return_info_referral(obj){
	if (obj.find(".result").html()!==''){
		$("#lk_partner .item").removeClass("active");
		obj.find(".result").html('');
		return false;
	}
	
	$.ajax({
		type:"POST",
		url: '/',
		data: {
			ajax:'return_info_referral',
			level:obj.attr("level")
		},
		success:function(msg){
			$("#lk_partner .item .result").html('');
			$("#lk_partner .item").removeClass("active");
			obj.addClass("active");
			obj.find(".result").html(msg);
		}
	});
}


function forgot_your_password(){
	$.ajax({
		type:"POST",
		url: '/',
		data: {
			ajax:'forgot_your_password',
			email:$("#popup.forgot .form #email").val()
		},
		success:function(msg){
			var tmp=msg.split('<->');
			if (tmp[0]=='error'){
				alert(tmp[1]);
			}
			else
			if (tmp[0]=='ok'){
				$("#popup.forgot .form #emial").val("");
				$("#popup.forgot").css("display","none");
				alert(tmp[1]);
			}
			else{
				alert(msg);
			}
		}
	});
	return false;
}