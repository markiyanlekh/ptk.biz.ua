   function item_redirect(id)
   {                       
                                var locale= $('html').attr("lang");
                                var domain = window.location.origin;
                                window.location.replace(domain+"/"+locale+"/public/product/"+id);
                              }
      function dload(id)
      {
          var locale= $('html').attr("lang");
          var domain = window.location.origin;
          window.location.replace(domain+"/"+locale+"/public/"+id+"/doc");
      }
     function prev()
      {
         var locale= $('html').attr("lang");
                                      var domain = window.location.origin;
                                      window.location.replace(domain+"/"+locale+"/public");
      }
            function openSearch() {
                document.getElementById("myOverlay").style.display = "block";
                    document.getElementById("s_input").focus();

              }

      function closeSearch() {
                document.getElementById("myOverlay").style.display = "none";
              }
      
$(function(){

           
               
                    $(location).attr('href');
                    var pathname = window.location.pathname;
                    strFine =pathname.split('/').pop();

                    if($.isNumeric(strFine))
                    strFine='product';

                    switch (strFine) 
                              {
                                case 'public':
                                var old_class=$('.nav-link').eq(0).attr("class");
                                $('.nav-link').eq(0).attr("class",old_class+=' active');
                                break;
                              case 'product':
                                var old_class=$('.nav-link').eq(1).attr("class");
                                $('.nav-link').eq(1).attr("class",old_class+=' active');
                                break;
                              case 'about':
                                var old_class=$('.nav-link').eq(2).attr("class");
                                $('.nav-link').eq(2).attr("class",old_class+=' active');
                                break;
                              case 'contact':
                                var old_class=$('.nav-link').eq(3).attr("class");
                                $('.nav-link').eq(3).attr("class",old_class+=' active');
                                break;
                              }
                    
    
                $('.maincard').mouseenter(function()
                {
                  $(this).children().eq(0).css({'transform' : 'rotateX(180deg)'});
                });
                 $('.maincard').mouseleave(function()
                {
                  $(this).children().eq(0).css({'transform' : 'rotateX(360deg)'});
                            });

                      $(".card").mouseenter(function()
                      {
                        var old_class=$(this).children().eq(0).attr("class");
                      
                        old_class=old_class.replace('text-dark','bg-dark border-light text-white');
                           $(this).children().eq(0).attr("class",old_class);
                      });
                      $(".card").mouseleave(function()
                        {
                          var old_class=$(this).children().eq(0).attr("class");

                          old_class=old_class.replace('bg-dark border-light text-white','text-dark');
                       

                          $(this).children().eq(0).attr("class",old_class);
                        });
                            $("li[class~='current']").click(function()
                            {
                              var lang=$('html').attr("lang");
                              
                                  $('.lang-li').each(function(){
                                    if(lang==$(this).attr("value"))
                                    {
                                      $(this).remove();
                                    }
                                  });
                                 $(".lang-hidden").slideToggle();
                            });

                      $('.lang-li').click(function(){
                        $(location).attr('href');
                         var pathname = window.location.pathname;
                         var domain =window.location.origin;
                         strFine = pathname.split('/');
                          var lang= $(this).attr("value");

                          var d= strFine[0].length+strFine[1].length;
                          var done_url=domain+"/"+lang+pathname.substr(d+1,pathname.length);
                          window.location.replace(done_url);
                        
                      })
                    
                 $("#find ").hover(function()
                {
                     $("#search-input").slideToggle();
                });

})