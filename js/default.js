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
        
        var footer = $('footer');

        if(menu.hasClass('active')){
            $this.removeClass('on');
            $this.html('<span>MENU</span><br>次回公演');
            menu.removeClass('active');
            cntnts.removeClass('dark');
            footer.css({
                'z-index': '0',
                'filter': 'none'
            });
            $('html').off('click', closeItem);
        }else{
            $this.addClass('on');
            $this.html('<span class="closebtn">閉じる</span>');
            menu.addClass('active');
            cntnts.addClass('dark');
            footer.css({
                'z-index': '-1',
                'filter': 'blur(5px)'
            });
            $('html').on('click', closeItem);
        }

        function closeItem(){
            $this.removeClass('on');
            $this.html('<span>MENU</span><br>次回公演')
            menu.removeClass('active');
            cntnts.removeClass('dark');
            footer.css({
                'z-index': '0',
                'filter': 'none'
            });
        }

    });
    
});