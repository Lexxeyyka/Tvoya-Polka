jQuery('document').ready(function () {
    $('.ChooseTown, .choosetown_slide, #closeDrop').click(function(){
        $('.DropListTown').slideToggle('slow', function() {
        });
    });


    $('.btn_news_making').click(function(){
        $('.news_layout').slideToggle('slow', function() {
        });
    });


    $('.SlideMenu__link').click(function(){
        $(".MenuBar").animate({
            width: "show"
        });
    });
    $('.MenuBar__link__iconClose, .LogIn, .LogIn__menu, .menu__item__link').click(function(){
        $(".MenuBar").animate({
            width: "hide"
        });
    });





    $('.btn_close').click(function(){
        $(".fail-auth").animate({
            opacity: "hide"
        });
    });





    $('.popup .close_window, .overlay, .btn_again').click(function (){
        $('.popup, .overlay, .fail-auth').css({'opacity':'0', 'visibility':'hidden'});
    });
    $('a[href="#login"]').click(function (e){
        e.preventDefault();
        $('.popup, .overlay').css({'opacity':'1', 'visibility':'visible'});
    });



    $('input[type=number]').on('mouseup keyup', function () {
        $(this).val(Math.min(50000, Math.max(0, $(this).val())));
    });


    function handler(event) {
        var hash = event.target.hash;


        if (hash) {
            event.preventDefault();

            var tag = $(hash);

            if ($(hash).length) {
                var offset = tag.offset().top;
                $('html, body').stop().animate({scrollTop: offset},'slow');
            }

            if(this.href.indexOf('/#')!= -1){
                location.href = this.href;
            }
        }
    }

    $('.menulink').on( "click", handler );

    $('.btn_news_making').click(function(e) {
        e.preventDefault();
        $(this).find('.i_icon').toggleClass('active');
    });
});