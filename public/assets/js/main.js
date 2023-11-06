(function ($) {
  "user strict";
  /*[ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });

    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
  // Preloader Js
  $(window).on('load', function () {
    $('#overlayer').fadeOut(1000);
    var img = $('.bg_img');
    img.css('background-image', function () {
      var bg = ('url(' + $(this).data('background') + ')');
      return bg;
    });
  });
  $(document).ready(function () {
    // Nice Select
    $('.select-bar').niceSelect();
    // PoPuP 
    $('.popup').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false,
      disableOn: 300
    });
    $("body").each(function () {
      $(this).find(".img-pop").magnificPopup({
        type: "image",
        gallery: {
          enabled: true
        }
      });
    })
    //Faq
    $('.faq--area .faq-title').on('click', function (e) {
      var element = $(this).parent('.faq--item');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('.faq-content').removeClass('open');
        element.find('.faq-content').slideUp(300, "swing");
      } else {
        element.addClass('open');
        element.children('.faq-content').slideDown(300, "swing");
        element.siblings('.faq--item').children('.faq-content').slideUp(300, "swing");
        element.siblings('.faq--item').removeClass('open');
        element.siblings('.faq--item').find('.faq-title').removeClass('open');
        element.siblings('.faq--item').find('.faq-content').slideUp(300, "swing");
      }
    });
    //Menu Dropdown Icon Adding
    $("ul>li>.submenu").parent("li").addClass("menu-item-has-children");
    // drop down menu width overflow problem fix
    $('.submenu').parent('li').hover(function () {
      var menu = $(this).find("ul");
      var menupos = $(menu).offset();
      if (menupos.left + menu.width() > $(window).width()) {
        var newpos = -$(menu).width();
        menu.css({
          left: newpos
        });
      }
    });
    $('.menu li a').on('click', function (e) {
      var element = $(this).parent('li');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('li').removeClass('open');
        element.find('ul').slideUp(300, "swing");
      } else {
        element.addClass('open');
        element.children('ul').slideDown(300, "swing");
        element.siblings('li').children('ul').slideUp(300, "swing");
        element.siblings('li').removeClass('open');
        element.siblings('li').find('li').removeClass('open');
        element.siblings('li').find('ul').slideUp(300, "swing");
      }
    })
    // Scroll To Top 
    var scrollTop = $(".scrollToTop");
    $(window).on('scroll', function () {
      if ($(this).scrollTop() < 500) {
        scrollTop.removeClass("active");
      } else {
        scrollTop.addClass("active");
      }
    });
    //Click event to scroll to top
    $('.scrollToTop').on('click', function () {
      $('html, body').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
    //Header Bar
    $('.header-bar').on('click', function () {
      $(this).toggleClass('active');
      $('.overlay').toggleClass('active');
      $('.menu').toggleClass('active');
    })
    $('.overlay').on('click', function () {
      $(this).removeClass('active');
      $('.header-bar').removeClass('active');
      $('.menu').removeClass('active');
    })
    // Header Sticky Herevar prevScrollpos = window.pageYOffset;
    var scrollPosition = window.scrollY;
    if (scrollPosition >= 1) {
      $(".header-section").addClass('active');
    }
    var header = $(".header-section");
    $(window).on('scroll', function () {
      if ($(this).scrollTop() < 1) {
        header.removeClass("active");
      } else {
        header.addClass("active");
      }
    });
    $('.tab ul.tab-menu li').on('click', function (g) {
      var tab = $(this).closest('.tab'),
        index = $(this).closest('li').index();
      tab.find('li').siblings('li').removeClass('active');
      $(this).closest('li').addClass('active');
      tab.find('.tab-area').find('div.tab-item').not('div.tab-item:eq(' + index + ')').hide(10);
      tab.find('.tab-area').find('div.tab-item:eq(' + index + ')').fadeIn(10);
      g.preventDefault();
    });
  });
})(jQuery);


// Script
    
// Mengambil inputan keyboard yang hanya angka tanpa huruf & karakter
function hanyaAngka(event) {
  var angka = (event.which) ? event.which : event.keyCode
  if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
      return false;
  return true;
}

// Validasi Mencocokkan Form Password Baru dengan Konfirmasi Password Baru
window.onload = function () {
    document.getElementById("pw_baru").onchange = validatePassword;
    document.getElementById("kpw_baru").onchange = validatePassword;
}
function validatePassword(){
    var pass2=document.getElementById("kpw_baru").value;
    var pass1=document.getElementById("pw_baru").value;
    if(pass1!=pass2)
        document.getElementById("kpw_baru").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
    else
        document.getElementById("kpw_baru").setCustomValidity('');
}

// Halaman Login
// ID PW
// membuat fungsi change icon mata untuk show/hide password
function change() {
    // membuat variabel berisi tipe input dari id='pw', id='pw' adalah form input password 
    var x = document.getElementById('pw').type;
    //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
    if (x == 'password') {
        //ubah form input password menjadi text
        document.getElementById('pw').type = 'text';
        //ubah icon mata terbuka menjadi tertutup
        document.getElementById('eyebutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
        </svg>`;
    }
    else {
        //ubah form input password menjadi text
        document.getElementById('pw').type = 'password';
        //ubah icon mata terbuka menjadi tertutup
        document.getElementById('eyebutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
        </svg>`;
    }
}

// Halaman Registrasi
// ID PW_REGIST
// membuat fungsi change icon mata untuk show/hide password
function changeR() {
    // membuat variabel berisi tipe input dari id='pw_regist', id='pw_regist' adalah form input password 
    var x = document.getElementById('pw_regist').type;
    //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
    if (x == 'password') {
        //ubah form input password menjadi text
        document.getElementById('pw_regist').type = 'text';
        //ubah icon mata terbuka menjadi tertutup
        document.getElementById('eyebuttonR').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
        </svg>`;
    }
    else {
        //ubah form input password menjadi text
        document.getElementById('pw_regist').type = 'password';
        //ubah icon mata terbuka menjadi tertutup
        document.getElementById('eyebuttonR').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
        </svg>`;
    }
}

// Halaman Update Password
// ID PW_BARU & KPW_BARU
// membuat fungsi change icon checklist untuk show/hide password
function changeBaru() {
    // membuat variabel berisi tipe input dari id='pw_baru dan kpw_baru', id='pw_baru dan kpw_baru' adalah form input password 
    var y = document.getElementById('pw_baru').type;
    var z = document.getElementById('kpw_baru').type;
    //membuat if kondisi, jika tipe y adalah password maka jalankan perintah di bawahnya
    if (y == 'password') {
        //ubah form input password menjadi text
        document.getElementById('pw_baru').type = 'text';
        document.getElementById('kpw_baru').type = 'text';
        //ubah icon checklist terisi
        document.getElementById('checkbutton').innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018Zm.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="currentColor" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5Zm11.95 6.796a1 1 0 0 0-1.414-1.415l-4.95 4.95l-2.121-2.121a1 1 0 1 0-1.415 1.414l2.758 2.758a1.1 1.1 0 0 0 1.556 0l5.586-5.586Z"/></g></svg>
        </svg>`;
    }
    else {
        //ubah form input password menjadi text
        document.getElementById('pw_baru').type = 'password';
        document.getElementById('kpw_baru').type = 'password';
        //ubah icon checklist tidak terisi
        document.getElementById('checkbutton').innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018Zm.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="currentColor" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5Zm0 2h14v14H5V5Zm11.95 4.795a1 1 0 1 0-1.414-1.414l-4.95 4.95l-2.121-2.121a1 1 0 0 0-1.415 1.414l2.758 2.758a1.1 1.1 0 0 0 1.556 0l5.586-5.587Z"/></g></svg>
        </svg>`;
    }
}