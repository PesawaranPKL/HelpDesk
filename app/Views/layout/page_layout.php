<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Helpdesk Kabupaten Pesawaran</title>

    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/owl.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/main1.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo1.png" type="image/x-icon">
    <!-- Library Emoticon -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"> -->
</head>

<body>
    <!--============= Header Section Starts Here =============-->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-area">
                    <div class="logo">
                        <a href="<?= base_url() ?>">
                            <img src="<?php base_url()?>/assets/images/logo/logo_bannerw.png" alt="logo">
                        </a>
                    </div>
                    <div class="support">
                        <a href="<?= base_url() ?>">HelpDesk</a>
                    </div>
                </div>
                <ul class="menu">
                    <li>
                        <a href="<?php base_url()?>/tracking_ticket">Cek Status Tiket</a>
                    </li>
                    <li>
                        <a href="<?php base_url()?>/artikel">Artikel</a>
                    </li>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                    <li class="d-md-none text-center">
                        <a href="<?php base_url()?>/pengaduan" class="m-0 header-button">Adukan Sekarang</a>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="header-right">
                    <a href="<?php base_url()?>/pengaduan" class="header-button d-none d-md-inline-block">Adukan Sekarang</a>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

    <!--============= Chatbot Section Starts Here =============-->
    <section class="chatbot">
        <button class="chat-btn"> 
            <div class="badge">2</div>
            <iconify-icon icon="humbleicons:chat"></iconify-icon>
        </button>

        <div class="chat-popup">
            <div class="chat-area">
             <div class="income-msg">
                 <img src="<?= base_url()?>assets/images/team/team1.png" class="avatar" alt="">
                 <span class="msg"> Hi, Ada yang Bisa Kami Bantu?
                    <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action">Jaringan</button>
                        <button type="button" class="list-group-item list-group-item-action">Domain</button>
                        <button type="button" class="list-group-item list-group-item-action">Sub Domain</button>
                    </div>
                 </span>
             </div>   
             <div class="out-msg">
                <span class="my-msg">Jaringan</span>
                <img src="<?= base_url()?>assets/images/team/team2.png" class="avatar">
            </div>
             <div class="income-msg">
                 <img src="<?= base_url()?>assets/images/team/team1.png" class="avatar" alt="">
                 <span class="msg"> Jaringan Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
             </div>   
             <div class="out-msg">
                <span class="my-msg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, delectus voluptate dolore error labore dolor? Nam illum vitae dolores, quod corporis numquam maxime eaque voluptatum magni blanditiis? Aliquid, perferendis non?</span>
                <img src="<?= base_url()?>assets/images/team/team2.png" class="avatar">
            </div>
            </div>

            <div class="input-area">
                <input type="text">
                <button class="submit"> 
                    <iconify-icon icon="fluent:send-16-filled"></iconify-icon>
                </button>
            </div>
        </div>
    </section>
    <!--============= Chatbot Section Ends Here =============-->

    <?= $this->renderSection('content') ?>

    <!--============= Footer Section Starts Here =============-->
    <footer class="footer-section">
        <div class="dot-slider bg_img" data-background="<?= base_url() ?>/assets/css/img/footer-dots.png"></div>
        <div class="container">
            <div class="footer-bottom cl-white" style="border-top:none;">
                <p>Copyright &copy; 2023 <a href="#0">Helpdesk</a> - Develop by <a href="#0">Syntax Scrumptious</a></p>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->

    <script src="<?= base_url() ?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/plugins.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/wow.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/waypoints.js"></script>
    <script src="<?= base_url() ?>/assets/js/nice-select.js"></script>
    <script src="<?= base_url() ?>/assets/js/owl.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/main.js"></script>
    <!-- Chat Button Toggler  -->
    <script>
        const chatBtn = document.querySelector('.chat-btn');
        const popup = document.querySelector('.chat-popup');

        chatBtn.addEventListener('click', ()=>{
            popup.classList.toggle('show');
        })
    </script>
    <!-- Icon -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>