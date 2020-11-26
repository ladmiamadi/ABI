$(document).ready(function(){
    $('.picture').mouseenter(function(){
        $(this).next().children().toggleClass('invisible');
       
    })
    $('.picture').mouseleave(function(){
        $(this).next().children().toggleClass('invisible');
       
    })
    

    $('.modify').click(function(e){
        $("input").prop('disabled', false);
        $('.modify').hide();
        $('.valider, .supprimer').removeClass('d-none');
        e.preventDefault();
        
    })
    
})