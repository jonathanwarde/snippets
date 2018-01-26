
// add a nice fade in to body


window.onload = function() {
                $('body').addClass('loaded');
            };


/*

body::before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #fff;
    z-index: 3;
    transition:background 1.2s ease;
}
body.loaded::before {
    background: rgba(255,255,255,0);
    pointer-events: none;
}
*/