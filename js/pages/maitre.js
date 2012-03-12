$(function () {

    $('#menu li').hover(
        function () {
            //show its submenu
            $('ul', this).slideDown(300);

        },
        function () {
            //hide its submenu
            $('ul', this).slideUp(150);
        }
    );
     
});
























