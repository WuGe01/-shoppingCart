// JavaScript Document
function lof(x)
{
	location.href=x
}
//index
function loading(e){
	$.get(`./before/${e}.php`,{},(k)=>{
		 $('#right').html(k)
	})
 
}
function getNewsTitle() {
	$.get("./api/getNewsTitle.php",{},(e)=>{
		$("#marqueeNews").html(e)
	})
}
//news
function getNews(e) {
	
	$("#newsContext").hide();
	$(`#newsTable${e}`).show();
}
function backToNews(e) {
	
	$(`#newsTable${e}`).hide();
	$("#newsContext").show();
}