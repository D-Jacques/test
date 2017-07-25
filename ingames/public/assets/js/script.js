var bloc = $('.box');

bloc.mouseenter(function(){

    var dataBloc = $(this).attr('data-bloc');
    bloc = $('.box[data-bloc="'+dataBloc+'"]');
    bloc.animate({
       width: "550px",
       height: "210px"
    });
    if(dataBloc % 2 == 0){
        var selectedBloc = parseInt(dataBloc) - 1;
    } else {
        var selectedBloc = parseInt(dataBloc) + 1;
    }
    bloc2 = $('.box[data-bloc="'+(selectedBloc)+'"]');
    bloc2.animate({
       width: "530px"
    });
});

bloc.mouseleave(function(){
    
    var dataBloc = $(this).attr('data-bloc');
    bloc = $('.box[data-bloc="'+dataBloc+'"]');
    bloc.animate({
        width: "540px",
        height: "200px"
    });
    if(dataBloc % 2 == 0){
        var selectedBloc = parseInt(dataBloc) - 1;
    } else {
        var selectedBloc = parseInt(dataBloc) + 1;
    }
    bloc2 = $('.box[data-bloc="'+(selectedBloc)+'"]');
    bloc2.animate({
       width: "540px" 
    });
});

//bloc.click(function(){
//   $(location).attr('href', "<?= $this->url('default_view',  ['id' =>$article['id']])?>"); 
//});