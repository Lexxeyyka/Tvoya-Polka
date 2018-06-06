jQuery('document').ready(function () {
    $('.ChooseTown').click(function(){
        $('.DropListTown').slideToggle('slow', function() {
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





    $('.popup .close_window, .overlay').click(function (){
        $('.popup, .overlay').css({'opacity':'0', 'visibility':'hidden'});
    });
    $('a[href="#login"]').click(function (e){
        e.preventDefault();
        $('.popup, .overlay').css({'opacity':'1', 'visibility':'visible'});
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

});