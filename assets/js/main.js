(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.12&appId=971730649659551&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function initMap() {
    var uluru = {lat: 13.755871, lng: 100.492958};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}

$(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    if (scrollTop > 1) {
        $('#navbar').css('padding', '5px 25px')
    } else {
        $('#navbar').css('padding', '25px')
    }
})

$('.to-top').click(function (){
    $('html, body').animate({scrollTop: '0px'}, 800);
})

$('.jarallax').jarallax();