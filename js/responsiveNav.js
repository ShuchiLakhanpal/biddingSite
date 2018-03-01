 $(document).ready(function()
       {
        //  $(".desktop").css('display','none');
        $(".opennav").css('display','block');
        $(".closeNav").css('display','none');
         
           $(".openNav").click(function()
           {
            $(".desktop").show().css({'margin-left':'0px','position':'absolute'});;
             $(".searchMobile").css({'margin-top':'0px','position':'absolute'});
            $(".closeNav").show();
             $(".searchMobile").css({'margin-top':'-57px','position':'absolute'});
            $(".openNav").hide();

           });
           $(".closeNav").click(function()
           {
            $(".desktop").hide();
             $(".searchMobile").css({'margin-top':'0px','position':'absolute'});
            $(".openNav").show();
            $(".closeNav").hide();
        });

         $(" nav.fixed-nav.opennav ").css('display','block');
      
        
       });