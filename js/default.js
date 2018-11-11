jQuery(function($){
    //hiddenWin開く
    /*
    $(function(){
        $('.fixedmenu').on('click', '.showbtn1', function(event){
            event.preventDefault();
            var $this = $('#hiddenWin');
            $this.css({
                'left': '0'
            });
        });

        //hiddenWin閉じる
        $('#hiddenWin').on('click', function(event){
            var $this = $('#hiddenWin');
            $this.css({
                'left': '-500px'
            });
        });
    });
    */
    
    $('.showbtn1').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();

        var $this = $(this);

        var menu = $('#hiddenWin');
        
        var cntnts = $('#contents');

        if(menu.hasClass('active')){
            $this.removeClass('on');
            menu.removeClass('active');
            cntnts.removeClass('dark');
            $('html').off('click', closeItem);
        }else{
            $this.addClass('on');
            menu.addClass('active');
            cntnts.addClass('dark');
            $('html').on('click', closeItem);
        }

        function closeItem(){
            $this.removeClass('on');
            menu.removeClass('active');
            cntnts.removeClass('dark');
        }

    });
    
});