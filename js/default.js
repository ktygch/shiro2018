jQuery(function($){
    //hiddenWin開く
    $(function(){
        $('#wrapper').on('click', '.showbtn1', function(event){
            event.preventDefault();
            var $this = $('#hiddenWin');
            $this.css({
                'top': '0'
            });
        });

        //hiddenWin閉じる
        $('#hiddenWin').on('click', function(event){
            var $this = $('#hiddenWin');
            $this.css({
                'top': '-100%'
            });
        });
    });
    
    //fixedmenu
    $(function(){
        $(window).on('scroll',function(){
            var scrollValue = $(this).scrollTop();
            $('.fixedmenu')
            .trigger('customScroll', {posY: scrollValue});
        });

        $('.fixedmenu')
        .each(function(){
            var $this = $(this);
            $this.data('initial', $this.offset().top);
        })
        .on('customScroll', function(event, object){
            var $this = $(this);
            if($this.data('initial') <= object.posY){
                //要素を固定
                if(!$this.hasClass('fixed')){
                    var $substitute = $('<div></div>');
                    $substitute
                    .css({
                        'margin':'0',
                        'padding':'0',
                        'font-size':'0',
                        'height':'0'
                    })
                    .addClass('substitute')
                    .height($this.outerHeight(true))
                    .width($this.outerWidth(true));

                    $this
                    .after($substitute)
                    .addClass('fixed');
                }
            }else{
                //要素の固定を解除
                $this.next('.substitute').remove();
                $this.removeClass('fixed');
            }
        });
    });
    
});