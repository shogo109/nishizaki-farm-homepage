"use strict";

jQuery(function ($) {
    // hamburger
    $("#hamburger").click(function () {
        $(this).toggleClass("is-active");
        $("#header-nav").fadeToggle();
        $("body").toggleClass("is-active");
    });

    // mvのスライドショー
    // $('.js-mv-slide').slick({
    //     fade: true,
    //     arrows: false,
    //     // dots: true,
    //     autoplay: true,
    //     autoplaySpeed: 4000,
    //     speed: 1000,
    // });

    function handleProgressbar() {
        const dotActiveItem = document.querySelector('.slider-dot .slick-active button');
        const progressCircleBar = new ProgressBar.Circle(dotActiveItem, {
            strokeWidth: 6,
            duration: 3000,
            color: '#fff',
            trailColor: '#000',
            trailWidth: 2,
            svgStyle: null
        });
        progressCircleBar.animate(1);
    }
    
    $('.js-mv-slide').slick({
        pauseOnHover: false,
        dots: true,
        fade: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 3000,
        appendDots: $('.slider-dot-box'),
        dotsClass: 'slider-dot',
        arrows: null,
    });
    
    const dotEl = `<span class="slider-inner-dot"></span>`;
    $('.slider-dot button').html(dotEl);
    handleProgressbar();
    
    $('.js-mv-slide').on('beforeChange', (_event, _slick, _currentSlide, _nextSlide) => {
        $('.slider-dot .slick-active button').html(dotEl);
    });
    
    $('.js-mv-slide').on('afterChange', (_event, _slick, _currentSlide, _nextSlide) => {
        handleProgressbar();
    });


    // こだわりの商品紹介 スライドショー
    var $status_current = $('.js-slide-status-current');
    var $status_total = $('.js-slide-status-total');

    $('.slick-slideshow').on('init', function (event, slick) {
        $status_current.text(slick.currentSlide + 1);
        $status_total.text(slick.slideCount);
    }).slick({
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 2,
        responsive: [
            {
                breakpoint: 519,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
            ]
    }).on('afterChange', function (event, slick, currentIndex) {
        $status_current.text(currentIndex + 1);
    });

    // ローディングアニメーション
    function end_loader() {
        $('.loader').fadeOut(800);
        $("body").removeClass("is-active");
    };
    function show_txt() {
        $('.loader .loader-logo .loader-name').fadeIn(400);
        $("body").addClass("is-active");
    };
    function hide_txt() {
        $('.loader .loader-logo .loader-name').fadeOut(400);
    };

    // $(window).on('load', function () {
    //     setTimeout(function () {
    //         show_txt();
    //     }, 1000)
    //     setTimeout(function () {
    //         hide_txt();
    //     }, 3500)
    //     setTimeout(function () {
    //         end_loader();
    //     }, 4500)
    // });

    var flg = null;
    var check_access = function () {
      // ★sessionStorageの値を判定
      if (sessionStorage.getItem('access_flg')) {
        // 2回目以降
        flg = 1;
      } else {
        // 1回目
        sessionStorage.setItem('access_flg', true);
        flg = 0
      }
      return flg;
    }
   
    var $i = check_access();
    if($i == 0){
      // 1回目アクセスの処理
      function end_loader() {
        $('.loader').fadeOut(800);
        $("body").removeClass("is-active");
    };
    function show_txt() {
        $('.loader .loader-logo .loader-name').fadeIn(400);
        $("body").addClass("is-active");
    };
    function hide_txt() {
        $('.loader .loader-logo .loader-name').fadeOut(400);
    };

    $(window).on('load', function () {
        setTimeout(function () {
            show_txt();
        }, 1000)
        setTimeout(function () {
            hide_txt();
        }, 3500)
        setTimeout(function () {
            end_loader();
        }, 4500)
    });
    }else{
      // 2回目アクセスの処理
        $('.loader').remove();
    }
    





});





