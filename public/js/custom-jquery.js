//$(document).on('ready', function(){
$('#shape').on('change', function(){
console.log($('#shape').val());
if ($('#shape').val() == 1) {

$('.squared').css('display', 'block');
$('.circle').css('display', 'none');
$('.oval').css('display', 'none');

}

if ($('#shape').val() == 2) {

$('.squared').css('display', 'none');
$('.circle').css('display', 'block');
$('.oval').css('display', 'none');

}

if ($('#shape').val() == 3) {

$('.squared').css('display', 'none');
$('.circle').css('display', 'none');
$('.oval').css('display', 'block');

}

});
//})