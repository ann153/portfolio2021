$(function(){

// Header color change
    'use strict';
    jQuery(window).on('scroll', function () {
     if (jQuery('.header').height() < jQuery(this).scrollTop()) {
    jQuery('.header').addClass('change-color'); }
     else {
     jQuery('.header').removeClass('change-color'); } });

    jQuery(window).on('scroll', function () {
     if (jQuery('.mobile-fixed-header').height() < jQuery(this).scrollTop()) {
    jQuery('.mobile-fixed-header').addClass('change-color'); }
     else {
     jQuery('.mobile-fixed-header').removeClass('change-color'); } });



// Top Slideshow
    $('.full').slick({
      arrows: false,
      dots: true,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 4000,
      fade: true,
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false,
    });







// Swiper ====================================================
var swiper = new Swiper('.swiper-container', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,
});


// Mini Slider
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

// skill 偶数番目の順序入れ替え
// $('.mini-slider-section:odd .swiper-container').before($('.mini-slider-section:odd .mss-textarea'));




// GALLERY ================================================
/* 要素を取得(ボタンと要素) */
var btnList = $('#filterBtnList *'),
btnAll = $('#filterAll'),
btnBlue = $('#filterBlue'),
box = $('.box');

/* ボタンのいずれかをクリックした場合 */
btnList.click(function(){

  // ALL以外をくりっくしたなら
  if(!($(this).hasClass('is_active'))){
     // クリックしたボタンのクラスを取得
     var filterClass = $(this).attr('class');
     // 全部のボタンから下線を取る
     btnList.removeClass('is_active');
     // クリックしたボタンにだけ下線をつける
     $(this).addClass('is_active');


     // 要素のそれぞれに対してのfunction
     box.each(function() {
        // まず全要素を消す
        $(this).fadeOut(0);

          // クリックしたボタンと同じクラスもってたら
          if($(this).hasClass(filterClass)){
            // アニメーションをストップし、表示する
            $(this).stop().fadeIn(300);
            // allボタンをクリックしたら
          }else if(filterClass === 'all'){
            // 全ての要素表示する
            box.stop().fadeIn(300);
          }
     });s
  }
});

$('#filterBtnList .animal').not(':first').remove();
$('#filterBtnList .sports').not(':first').remove();
$('#filterBtnList .human').not(':first').remove();
$('#filterBtnList .art').not(':first').remove();
$('#filterBtnList .others').not(':first').remove();
$('#filterBtnList li').css('display','block');


  // $('#filterBtnList').html(
  //   $('#filterBlue').sort(function(a, b) {
  //     if ($(a).text() > $(b).text()) {
  //       return 1;
  //     } else {
  //       return -1;
  //     }
  //   })
  // );


// var prev;
// $('#filterBtnList').children().each(function() {
//   var text = $(this).text().trim();
//   if (prev == text)
//     $(this).remove();

//   prev = text;
// });


// Hobby filter =======================================================

$(".extraction").change(function() {
  var extraction_val = $(".extraction").val();
  if(extraction_val == "all") {
    $('.hobby-item').css('display', 'block');

  }else if(extraction_val == "sports") {
    $('.sports').css('display', 'block');
    $('.music').css('display', 'none');
    $('.indoor').css('display', 'none');

  }else if(extraction_val == "music") {
    $('.sports').css('display', 'none');
    $('.music').css('display', 'block');
    $('.indoor').css('display', 'none');

  }else if(extraction_val == "indoor") {
    $('.sports').css('display', 'none');
    $('.music').css('display', 'none');
    $('.indoor').css('display', 'block');
  }
});

// Header Drawer
$(document).ready(function() {
   $('.drawer').drawer();
});



// Read more

$(function () {
    $('.rm-button').prevAll().hide();
    $('.rm-button').click(function () {
        if ($(this).prevAll().is(':hidden')) {
            $(this).prevAll().slideDown();
            $(this).text('Close').addClass('close');
        } else {
            $(this).prevAll().slideUp();
            $(this).text('Read more').removeClass('close');
        }
    });
});



// Home Features
$('.f-wrapper .container').eq(0).addClass('f-left');
$('.f-wrapper .container').eq(1).addClass('f-right-top');
$('.f-wrapper .container').eq(2).addClass('f-right-bottom');
var adddiv = $('<div class="f-right"></div>');
$('.f-wrapper .container').slice(1).wrapAll(adddiv);




// News view more button

$('.each-news:nth-child(n+4)').addClass('none');
var num = 3;

$('.n-view-more').on('click', function () {
const hiddenTags = $('.each-news-wrapper .each-news.none');
// noneクラスがついている要素を指定

var hiddenTagsNum = hiddenTags.length;
// noneクラスがついている要素の個数を取得

if(num > hiddenTagsNum) {
// noneクラスがついている要素の個数より、3の方が大きい場合。つまりview moreで出す要素が3個に満たない場合
num = hiddenTagsNum;
// 表示させる数を残りの要素数に変更。つまり全部表示させる
}

hiddenTags.slice(0, num).slideToggle(500);
// noneクラスがついてる要素のうち、最初からnum個目まで表示

hiddenTags.slice(0,num).removeClass('none');
// 表示させた要素はnoneクラスを削除

if (num == hiddenTagsNum) {
$('.n-view-more').fadeOut();
// 表示させるものがなくなったら、ボタンをフェードアウト
}

});



// Contact =======================================================
$(".wpcf7-form-control").parent().css('text-align','center');











  });




