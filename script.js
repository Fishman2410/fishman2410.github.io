/*jslint browser: true*/
/*global $, jQuery, alert*/
$(document).ready(function () {
    
    //Menu
    $('.MenuTrigger').click(function () {
        $('nav ul').slideToggle(500);
    });
    
    $(window).resize(function () {
        if ($(window).width() > 500) {
            $('nav ul').removeAttr('style');
        }
    });
    
    //Wrapper
    $('.wrapper>article').hide();
    
    $('.wrapper>h1').click(function () {
        var findArr = $(this).next('article'), findwrapper = $(this).closest('.wrapper');
        if (findArr.is(':visible')) {
            findArr.slideUp('Medium');
        } else {
            findwrapper.find('>article').slideUp();
            findArr.slideDown();
        }
    });
    
    //Tabs
    var $wrapper = $('.wrapper-tab'),
        $allTabs = $wrapper.find('.content-tab > div'),
        $tabMenu = $wrapper.find('.tab-menu li');
  
    $allTabs.not(':first-of-type').hide();  
    $tabMenu.filter(':first-of-type').find(':first').width('100%')

    $tabMenu.each(function(i) {
        $(this).attr('data-tab', 'tab'+i);
    });

    $allTabs.each(function(i) {
        $(this).attr('data-tab', 'tab'+i);
    });

    $tabMenu.on('click', function() {
        var dataTab = $(this).data('tab'),
            $getWrapper = $(this).closest($wrapper);

        $getWrapper.find($tabMenu).removeClass('active');
        $(this).addClass('active');

        $getWrapper.find($allTabs).hide();
        $getWrapper.find($allTabs).filter('[data-tab='+dataTab+']').show();
    });
    
    //Clay
    var navPos, winPos, navHeight;
    
    function refreshVar() {
        navPos = $('nav').offset().top;
        navHeight = $('nav').outerHeight(true);
    }
    
    refreshVar();
    $(window).resize(refreshVar);
    
    $('<div class="clone-nav"></div>').insertBefore('nav').css('height', navHeight).hide();
    
    $(window).scroll(function () {
        winPos = $(window).scrollTop();
    
        if (winPos > navPos) {
            $('nav').addClass('fixed shadow');
            $('.clone-nav').show();
        } else {
            $('nav').removeClass('fixed shadow');
            $('.clone-nav').hide();
        }
    });
});