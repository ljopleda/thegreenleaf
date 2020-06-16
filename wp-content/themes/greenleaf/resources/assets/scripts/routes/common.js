export default {
  init() {
    // JavaScript to be fired on all pages
$('.menu_mobile').click(function(){
$('.menu_mobile_modal').toggleClass('active');
});
$('.close_modal').click(function(){
$('.menu_mobile_modal').toggleClass('active');
});
$(window).scroll(function () {
var scroll = $(window).scrollTop();
console.log(scroll);
if(scroll > 250){
$('header').addClass('active');
if(scroll > 600){
$('header').addClass('active_set');
}else{
$('header').removeClass('active_set');
}
}else{
$('header').removeClass('active');
}
});
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
