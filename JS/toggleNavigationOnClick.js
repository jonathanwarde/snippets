// based on Duncan Macleods work

toggleNavigationOpen = function()

{

    $('#hamburger').toggleClass('open');

    $('header').toggleClass('opaque');

    $('#main-nav').toggleClass('open');


    if($('#main-nav-mobile').hasClass('mobile-nav-opening-animation'))

    {

        $('#main-nav-mobile').addClass('mobile-nav-closing-animation');

    }

    else

    {

        $('#main-nav-mobile').removeClass('mobile-nav-closing-animation');

    }

    $('#main-nav-mobile').toggleClass('mobile-nav-opening-animation');



    if($('#main-nav-mobile').hasClass('mobile-nav-opening-animation'))

    {

        setTimeout(function()

        {

            y = $(window).scrollTop();

            $(document.body).toggleClass('no-scroll');



        }, 500);

    }

    else

    {

        $(document.body).toggleClass('no-scroll');

        

        var mq = window.matchMedia( "(max-width: 767px)" );

        if(mq.matches)

        {

           $(window).scrollTop(y);

        }

    }

    

    

    setTimeout(function()

    {

    	$('#main-nav').toggleClass('opaque');

	}, 1);

};