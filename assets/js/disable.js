$('form#form').submit(function(){
    $(this).find(':input[type=submit]').prop('disabled', true);
});