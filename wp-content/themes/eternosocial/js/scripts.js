jQuery(document).ready(function($) {
    let videos = {
        'gutters' : '<iframe width="100%" height="315" src="https://www.youtube.com/embed/ivEChbiz0j4?rel=0;&autoplay=1&mute=1&loop=1&version=3&playlist=ivEChbiz0j4" frameborder="0" allowfullscreen="" include=""></iframe>',
        'taekwon' : '<iframe width="100%" height="315" src="https://www.youtube.com/embed/2OOm-aOhv5s?rel=0;&autoplay=1&mute=1&loop=1&version=3&playlist=2OOm-aOhv5s" frameborder="0" allowfullscreen="" include=""></iframe>',
        'ipsi' :    '<iframe width="100%" height="315" src="https://www.youtube.com/embed/JkzrAQTsX_I?rel=0;&autoplay=1&mute=1&loop=1&version=3&playlist=JkzrAQTsX_I" frameborder="0" allowfullscreen="" include=""></iframe>',
    }
    $(document).on("click", ".video_load", function(){
        let video = $(this).data('video');
        console.log(video);
        
        $(this).css({"display":"none"});
        $(this).next(".thevideo").css({"display":"block"}).html(videos[video]);
    });

    $(document).ready(function() {
        $('.dosamidus').click(function() {
        $('.kovadsamilad').addClass('is-open');
    })
    $('.poyavled-nuseokna, .send').click(function() {
        $('.kovadsamilad').removeClass('is-open');
    });
    
});
    
});
