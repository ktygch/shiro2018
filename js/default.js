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
});