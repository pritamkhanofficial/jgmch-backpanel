<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- App favicon -->
<link rel="shortcut icon" href="<?=base_url('')?>logofav.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.2.1/darkly/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url('front')?>/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('front')?>/css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('front')?>/css/style.css?v=<?=time()?>" />
    <style type="text/css">
        .height-178 {
            height: 178px;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, 0.5) !important;
            border-color: rgba(255, 255, 255, 0.1);
            font-size: 2rem;
        }

        .all-justify-content-start {
            justify-content: start !important;
        }

        .all-justify-content-end {
            justify-content: end !important;
        }

        .dropdown-menu {
            margin-top: 0;
            border-color: transparent !important;
        }

        .dropdown-menu .dropdown-toggle::after {
            vertical-align: middle;
            border-left: 4px solid;
            border-bottom: 4px solid transparent;
            border-top: 4px solid transparent;
        }

        .dropdown-menu .dropdown .dropdown-menu {
            left: 100%;
            top: 0%;
            margin: 0 -10px;

        }

        .dropdown-menu .dropdown .dropdown-menu.left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu>li a:hover,
        .dropdown-menu>li.show {
            background: #007bff;
            color: white;
        }

        .dropdown-menu>li.show>a {
            color: white;
        }

        @media (max-width: 768px) {
            .dropdown-menu .dropdown .dropdown-menu {
                margin: 0;
                border-width: 1px;
            }

            .all-justify-content-start {
                justify-content: center !important;
            }

            .all-justify-content-end {
                justify-content: center !important;
            }

            .text-meadle {
                text-align: center;
            }

            .overflow-tab-mob {
                overflow-x: scroll !important;
            }
        }

        .ticker__viewport {
            /* background: #0067E5; */
            color: #fff;
            overflow: hidden;
            padding: 10px 0;
            display: inline-block;
            flex-grow: 1
        }

        .ticker__viewport a {
            cursor: context-menu;
            color: #fff;
            text-decoration: none;
        }

        .ticker__viewport a:hover {
            color: yellow;
            font-weight: bold;
        }

        .ticker__list {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .ticker__item {
            display: inline-block;
            white-space: nowrap;
            padding-right: 40px;
        }

        .ticker__item:before {
            content: "";
            font-weight: bold;
        }

        /* NEW CSS ADD 31/03/23 */
        .lb-loader,
        .lightbox {
            text-align: center;
            line-height: 0;
            position: absolute;
            left: 0
        }

        body.lb-disable-scrolling {
            overflow: hidden
        }

        .lightboxOverlay {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 9999;
            background-color: #000;
            filter: alpha(Opacity=80);
            opacity: .8;
            display: none
        }

        .lightbox {
            width: 100%;
            z-index: 10000;
            font-weight: 400;
            outline: 0
        }

        .lightbox .lb-image {
            display: block;
            height: auto;
            max-width: inherit;
            max-height: none;
            border-radius: 3px;
            border: 4px solid #fff
        }

        .lightbox a img {
            border: none
        }

        .lb-outerContainer {
            position: relative;
            width: 250px;
            height: 250px;
            margin: 0 auto;
            border-radius: 4px;
            background-color: #fff
        }

        .lb-outerContainer:after {
            content: "";
            display: table;
            clear: both
        }

        .lb-loader {
            top: 43%;
            height: 25%;
            width: 100%
        }

        .lb-cancel {
            display: block;
            width: 32px;
            height: 32px;
            margin: 0 auto;
            background: url(../images/loading.gif) no-repeat
        }

        .lb-nav {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 10
        }

        .lb-container>.nav {
            left: 0
        }

        .lb-nav a {
            outline: 0;
            background-image: url(data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==)
        }

        .lb-next,
        .lb-prev {
            height: 100%;
            cursor: pointer;
            display: block
        }

        .lb-nav a.lb-prev {
            width: 34%;
            left: 0;
            float: left;
            background: url(../image/icons8-chevron-left-100.png) left 48% no-repeat;
            filter: alpha(Opacity=0);
            opacity: 0;
            -webkit-transition: opacity .6s;
            -moz-transition: opacity .6s;
            -o-transition: opacity .6s;
            transition: opacity .6s
        }

        .lb-nav a.lb-prev:hover {
            filter: alpha(Opacity=100);
            opacity: 1
        }

        .lb-nav a.lb-next {
            width: 64%;
            right: 0;
            float: right;
            background: url(../images/next.png) right 48% no-repeat;
            filter: alpha(Opacity=0);
            opacity: 0;
            -webkit-transition: opacity .6s;
            -moz-transition: opacity .6s;
            -o-transition: opacity .6s;
            transition: opacity .6s
        }

        .lb-nav a.lb-next:hover {
            filter: alpha(Opacity=100);
            opacity: 1
        }

        .lb-dataContainer {
            margin: 0 auto;
            padding-top: 5px;
            width: 100%;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px
        }

        .lb-dataContainer:after {
            content: "";
            display: table;
            clear: both
        }

        .lb-data {
            padding: 0 4px;
            color: #ccc
        }

        .lb-data .lb-details {
            width: 85%;
            float: left;
            text-align: left;
            line-height: 1.1em
        }

        .lb-data .lb-caption {
            font-size: 13px;
            font-weight: 700;
            line-height: 1em
        }

        .lb-data .lb-caption a {
            color: #4ae
        }

        .lb-data .lb-number {
            display: block;
            clear: left;
            padding-bottom: 1em;
            font-size: 12px;
            color: #999
        }

        .lb-data .lb-close {
            display: block;
            float: right;
            width: 30px;
            height: 30px;
            background: url(assets/images/close.png) top right no-repeat;
            text-align: right;
            outline: 0;
            filter: alpha(Opacity=70);
            opacity: .7;
            -webkit-transition: opacity .2s;
            -moz-transition: opacity .2s;
            -o-transition: opacity .2s;
            transition: opacity .2s
        }

        .lb-data .lb-close:hover {
            cursor: pointer;
            filter: alpha(Opacity=100);
            opacity: 1;
        }

        .bg-g {
            background: #0e849f;
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        .attention {


            animation: blink-text 0.9s linear infinite;

        }

        /* @keyframes blink-text {
 0% {
  opacity: 0;
 }
 50% {
  opacity: 1;
 }
 100% {
  opacity: 0;
 } */
    </style>