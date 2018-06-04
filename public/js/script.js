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





    $(document).ready(function(){
        $('.menulink').click( function(){ // ловим клик по ссылке с классом
            var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
            if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
                $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 1500); // анимируем скроолинг к элементу scroll_el
            }
            return false; // выключаем стандартное действие
        });
    });
});