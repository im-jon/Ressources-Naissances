$(function () {
    //$("#menu").lavaLamp({startItem: 1, target:'li', container:'li', returnHome:true, includeMargins: true , fx: "easeOutElastic", speed: 700 });

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
























