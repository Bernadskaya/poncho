/**
 * Created by nevada on 24.09.15.
 */
//Center circle
// divider for InsideFortuna.html.twig
$(document).ready(function($){

    var divs = $('div.divider'),
        k = 0,
        cntInGroup = 3; // по сколько элементов в группе

    divs.each(function(i){
        if(i % cntInGroup == 0){
            k++;
        }
        $(this).addClass('tmp' + k);
    });

    for(i = 1; i <= divs.length + 1 / cntInGroup; i++)
    {
        $('.tmp' + i).wrapAll('<div class="row"></div>');
    }

});