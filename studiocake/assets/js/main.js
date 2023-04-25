function iOS() {
    return [
    'iPad Simulator',
    'iPhone Simulator',
    'iPod Simulator',
    'iPad',
    'iPhone',
    'iPod'
    ].includes(navigator.platform)
    // iPad on iOS 13 detection
    || (navigator.userAgent.includes("Mac") && "ontouchend" in document)
}

$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        //loop: true,
        margin: 10,
        nav: true,
        navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });

    window.onload= function() {
    document.getElementById('toggler').onclick = function() {
        openbox('box', this);
        return false;
    };
    };
    function openbox(id, toggler) {
        var div = document.getElementById(id);
        if(div.style.display == 'block') {
            div.style.display = 'none';
        }
        else {
            div.style.display = 'block';
        }
    }
});
