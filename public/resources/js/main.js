$(function(){

                     $("div[class~='maincard']").click(function(){

                          var current_class=$(this).attr("class");
                          if(current_class.search('selected')=="-1")
                          {
                            current_class+="selected";
                          

                          var category_name=$(this).find("div[class~='cc']").html();
                          category_name=category_name.replace("<br>"," ");
                          $(".lead-category").each(function(){
                            var title=$(this).html(); 
                            if($.trim(title)!=$.trim(category_name))
                            {
                              $(this).hide(500);
                              $(this).next().hide(500);

                            }else{
                                  $(this).show(500);
                              $(this).next().show(500);
                            }
                          });
                          }
                          else{
                            current_class=current_class.replace('selected','');
                            $(".lead-category").each(function(){
                              var title=$(this).html(); 
                            if($.trim(title)!=$.trim(category_name))
                            {
                              $(this).show(500);
                              $(this).next().show(500);
                            }
                            });
                          }
                          $(this).attr("class",current_class);
                           $("html, body").animate({ scrollTop: 500 },600);

                        });

                  
                        $(window).scroll(function() {
                          if ($(document).scrollTop() > 150) {
                            $(".top-btn").show();
                          } else {
                            $(".top-btn").hide();
                          }
                        });
                        $(".top-btn").click(function(){
                          $("html, body").animate({ scrollTop: 0 }, 800);
                        });
                });