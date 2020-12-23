
const query = (options) => {
	return fetch('data/api.php',{
		method:'POST',
		body:JSON.stringify(options),
		headers:{'content-Type':'application/json'}
	}).then(d=>d.json());
}

const templater = f => a =>
	(Array.isArray(a)?a:[a])
	.reduce((r,o,i,a)=>r+f(o,i,a),'');
	

$( document ).ready(function() {
  $('[data-toggle=search-form]').click(function() {
      $('.search-form-wrapper').toggleClass('open');
      $('.search-form-wrapper .search').focus();
      $('html').toggleClass('search-form-open');
    });
    $('[data-toggle=search-form-close]').click(function() {
      $('.search-form-wrapper').removeClass('open');
      $('html').removeClass('search-form-open');
    });
  $('.search-form-wrapper .search').keypress(function( event ) {
    if($(this).val() == "Search") $(this).val("");
  });

  $('.search-close').click(function(event) {
    $('.search-form-wrapper').removeClass('open');
    $('html').removeClass('search-form-open');
  });
});