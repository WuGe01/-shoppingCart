// JavaScript Document
function lof(x)
{
	location.href=x
}
function loading(e){
	console.log(e)
	$.get(`./before/${e}.php`,{},(k)=>{
		 $('#right').html(k)
		 console.log(k)
	})
 
 }