$(function() {
    $("#slides").slides({
	crossfade: true,
        preload: false,
	effect: "fade",
	fadeSpeed: 600,
	fadeEasing: "easeOutQuad",
        play: 5000,
        generatePagination: false
    });
});
