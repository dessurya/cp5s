var win = $(window);

// for dekstop
if(win.width() > 960){
var initNavbar = 168;
    win.scroll(function () {
        if (win.scrollTop() >= initNavbar) {
            $( "#navigasi" ).addClass( "in-scroll" );
        }
        else if (win.scrollTop() <= initNavbar) {
            $( "#navigasi" ).removeClass( "in-scroll" );
        }
    });
}
// end for dekstop

// for mobile
if(win.width() < 512){
	$('#navigasi #detail.wrapper #name.bar #burger-icon').click(function(){
		$('#navigasi').toggleClass("aktif");;
	});
}
// for mobile