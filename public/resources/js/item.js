

function rotate()
{
  if($('.itemcard > .front').css('display')!="none")
            $('.itemcard').css({'-webkit-transform' : 'rotateY(180deg)'});
          else             
            $('.itemcard').css({'-webkit-transform' : 'rotateY(0deg)'});
} 

$(function(){

          

                            $('.item_pic').click(function(){
                              var img_src=$(this).attr('src');
                              $("img[class$='slide']").each(function(){
                                if($(this).attr('src')==img_src)
                                {
                                  $("[class='carousel-item active']").attr('class','carousel-item');
                                  $(this).parent().attr('class',$(this).parent().attr('class')+" active");
                                }
                              });
                            });
                            
        $('#order').click(function()
        {
          $('.itemcard').css({'-webkit-transform' : 'rotateY(180deg)'});
        });
        $('#plain').on('click', function()
        {
          $('.itemcard').css({'-webkit-transform' : 'rotateY(180deg)'});
        });
        $('#return').click(function(){
         
          $('.itemcard').css({'-webkit-transform' : 'rotateY( 0deg)'});
        });
        $('#back').click(function(){
          var locale= $('html').attr("lang");
          var domain = window.location.origin;

          window.location.replace(domain+"/"+locale+"/public");
        });
      })
