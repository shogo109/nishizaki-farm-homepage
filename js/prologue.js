"use strict";

jQuery(function ($) {


    // タイムラインのアニメーション
    function ScrollTimelineAnime(){
        $('.timeline-li').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var startPoint = 100;
            console.log(scroll);
            if (scroll >= elemPos - windowHeight-startPoint){ 
                var H = $(this).outerHeight(true)
                var percent = (scroll+startPoint - elemPos) / (H/2) *100;
                
                if(percent  > 100){
                    percent  = 100;
                }

                $(this).children('.border-line').css({
                    height: percent + "%",
                });
            }
        });
    }

    $(window).on('scroll', function(){
        ScrollTimelineAnime();
    });

    $(window).on('load', function () {
        ScrollTimelineAnime();
    });



    // モーダルウィンドウ
    $('.js-history-box').click(function () {
        let id = $(this).data('id');
        $(".js-modal-window[data-id='modal" + id + "']").fadeIn(500);
        $('body').addClass("is-active");
    });

    $('.js-modal-window-close').click(function () {
        $('.js-modal-window').fadeOut(500);
        $('body').removeClass('is-active');
    });



});

