<!DOCTYPE html>
<html lang="ar" dir="rtl">
<script id="allow-copy_script">
    (function agent() {
        let unlock = false
        document.addEventListener('allow_copy', (event) => {
            unlock = event.detail.unlock
        })

        const copyEvents = [
            'copy',
            'cut',
            'contextmenu',
            'selectstart',
            'mousedown',
            'mouseup',
            'mousemove',
            'keydown',
            'keypress',
            'keyup',
        ]
        const rejectOtherHandlers = (e) => {
            if (unlock) {
                e.stopPropagation()
                if (e.stopImmediatePropagation) e.stopImmediatePropagation()
            }
        }
        copyEvents.forEach((evt) => {
            document.documentElement.addEventListener(evt, rejectOtherHandlers, {
                capture: true,
            })
        })
    })()
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/web/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="/assets/web/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/web/css/style.css?v=2.2">
    <link rel="stylesheet" href="/assets/web/css/style.rtl.css">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/Enjoy Logo.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/Enjoy Logo.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/Enjoy Logo.svg">
    <link rel="mask-icon" href="/assets/web/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="description"
        content="منصة Grinta Hub هي إحدى المنصات الإلكترونية التي تتيح للأفراد شراء وبيع التذاكر لمختلف الأحداث والحفلات الموسيقية ، لأن بعض الأشخاص يجدون صعوبة في شراء التذاكر من المواقع الرسمية نظرًا لصلاحيتها ، لذا تتيح منصة Grinta Hub للأشخاص الشراء والشراء التذاكر ، كلها متاحة&nbsp;من&nbsp;خلال&nbsp;المنصة">
    <meta property="og:image" content="https://grintahup.com/assets/images/Enjoy Logo.svg">
    <meta property="og:description"
        content="منصة Grinta Hub هي إحدى المنصات الإلكترونية التي تتيح للأفراد شراء وبيع التذاكر لمختلف الأحداث والحفلات الموسيقية ، لأن بعض الأشخاص يجدون صعوبة في شراء التذاكر من المواقع الرسمية نظرًا لصلاحيتها ، لذا تتيح منصة Grinta Hub للأشخاص الشراء والشراء التذاكر ، كلها متاحة&nbsp;من&nbsp;خلال&nbsp;المنصة">
    <meta property="og:image:secure_url" content="https://grintahup.com/assets/images/Enjoy Logo.svg">
    <meta property="og:image:type" content="image/png">
    <title>حفلة عبدالمجيد عبدالله في الأتحاد أرينا | عيشها
    </title>


    <link rel="stylesheet" href="/assets/css/lightbox.css">
    <link rel="stylesheet" href="/assets/web/css/datatable.css">
    <link rel="stylesheet" href="/assets/web/css/table.css">
    <link rel="stylesheet" href="styles.ef46db3751d8e999.css">
    <style>
        .nav-logo[_ngcontent-xoo-c11] {
            width: 80px !important
        }

        .navbar1[_ngcontent-xoo-c11] {
            background: #1382bf;
            background: linear-gradient(278deg, rgb(49, 74, 178) 0%, rgb(108, 47, 174) 65%, rgb(143, 35, 179) 100%) !important
        }
    </style>
    <style>
        .herobackground[_ngcontent-xoo-c10] {
            background: #1382bf;
            background: linear-gradient(278deg, rgb(49, 74, 178) 0%, rgb(108, 47, 174) 65%, rgb(143, 35, 179) 100%)
        }

        .hero[_ngcontent-xoo-c10] {
            width: 100%;
            position: relative;
            padding: 60px 0 0
        }

        #hero[_ngcontent-xoo-c10] .hero-img[_ngcontent-xoo-c10] img[_ngcontent-xoo-c10] {
            width: 350px;
            height: 350px
        }

        #hero[_ngcontent-xoo-c10] .animated[_ngcontent-xoo-c10] {
            animation: up-down 2s ease-in-out infinite alternate-reverse both;
            -webkit-animation: up-down 2s ease-in-out infinite alternate-reverse both
        }

        @keyframes up-down {
            0% {
                transform: translateY(10px)
            }

            to {
                transform: translateY(-10px)
            }
        }

        @media (min-width: 1365px) {
            .hero[_ngcontent-xoo-c10] {
                background-attachment: fixed
            }
        }

        .hero[_ngcontent-xoo-c10] h2[_ngcontent-xoo-c10] {
            font-size: 80px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.6
        }

        .hero[_ngcontent-xoo-c10] p[_ngcontent-xoo-c10] {
            color: #fff9;
            font-weight: 400;
            font-size: 16px;
            margin-bottom: 10px
        }

        .hero[_ngcontent-xoo-c10] p[_ngcontent-xoo-c10]:nth-child(3) {
            color: var(--color-secondary);
            font-weight: 400;
            font-size: 18px;
            margin-bottom: 10px
        }

        .hero[_ngcontent-xoo-c10] .btn-get-started[_ngcontent-xoo-c10] {
            letter-spacing: 1px;
            display: inline-block;
            padding: 14px 40px;
            border-radius: 50px;
            transition: .5s;
            background: rgba(255, 255, 255, .1);
            box-shadow: 0 0 15px #00000014;
            border: 2px solid rgba(255, 255, 255, .1);
            -webkit-transition: .5s;
            -moz-transition: .5s;
            -ms-transition: .5s;
            -o-transition: .5s
        }

        .hero[_ngcontent-xoo-c10] .btn-get-started[_ngcontent-xoo-c10]:hover {
            border-color: var(--color-secondary);
            color: var(--color-secondary)
        }

        .hero[_ngcontent-xoo-c10] .btn-watch-video[_ngcontent-xoo-c10] {
            font-size: 16px;
            transition: .5s;
            margin-left: 25px;
            color: var(--color-white);
            font-weight: 600
        }

        .hero[_ngcontent-xoo-c10] .btn-watch-video[_ngcontent-xoo-c10] i[_ngcontent-xoo-c10] {
            color: #ffffff80;
            font-size: 32px;
            transition: .3s;
            line-height: 0;
            margin-right: 8px
        }

        .hero[_ngcontent-xoo-c10] .btn-watch-video[_ngcontent-xoo-c10]:hover i[_ngcontent-xoo-c10] {
            color: var(--color-secondary)
        }

        @media (max-width: 640px) {
            .hero[_ngcontent-xoo-c10] {
                padding: 0
            }

            .hero[_ngcontent-xoo-c10] h2[_ngcontent-xoo-c10] {
                font-size: 25px;
                margin-bottom: 8px
            }

            #hero[_ngcontent-xoo-c10] .animated[_ngcontent-xoo-c10] {
                animation: none
            }

            #hero[_ngcontent-xoo-c10] .hero-img[_ngcontent-xoo-c10] {
                text-align: center
            }

            .heroContent[_ngcontent-xoo-c10] {
                margin-top: 15px
            }

            #hero[_ngcontent-xoo-c10] .hero-img[_ngcontent-xoo-c10] img[_ngcontent-xoo-c10] {
                margin: 10px 0 0
            }

            .hero[_ngcontent-xoo-c10] .btn-get-started[_ngcontent-xoo-c10],
            .hero[_ngcontent-xoo-c10] .btn-watch-video[_ngcontent-xoo-c10] {
                font-size: 14px
            }
        }

        .hero[_ngcontent-xoo-c10] .icon-boxes[_ngcontent-xoo-c10] {
            padding-bottom: 60px
        }

        @media (min-width: 1200px) {
            .hero[_ngcontent-xoo-c10] .icon-boxes[_ngcontent-xoo-c10]:before {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: calc(50% + 20px);
                background-color: var(--color-white)
            }
        }

        .hero[_ngcontent-xoo-c10] .icon-box[_ngcontent-xoo-c10] {
            padding: 60px 30px;
            position: relative;
            overflow: hidden;
            background: linear-gradient(243deg, var(--color-background-gradiant1) 0%, var(--color-background-gradiant2) 65%, var(--color-background-gradiant3) 100%);
            border: 2px solid var(--color-white);
            box-shadow: 0 0 29px #00000014;
            transition: all .3s !important;
            border-radius: 8px;
            z-index: 1;
            height: 100%;
            width: 100%;
            text-align: center;
            -webkit-transition: all .3s !important;
            -moz-transition: all .3s !important;
            -ms-transition: all .3s !important;
            -o-transition: all .3s !important
        }

        .hero[_ngcontent-xoo-c10] .icon-box[_ngcontent-xoo-c10] .title[_ngcontent-xoo-c10] {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 24px
        }

        .hero[_ngcontent-xoo-c10] .icon-box[_ngcontent-xoo-c10] .title[_ngcontent-xoo-c10] a[_ngcontent-xoo-c10] {
            color: var(--color-white);
            transition: .3s
        }

        .hero[_ngcontent-xoo-c10] .icon-box[_ngcontent-xoo-c10] .icon[_ngcontent-xoo-c10] {
            margin-bottom: 20px;
            padding-top: 10px;
            display: inline-block;
            transition: all .3s ease-in-out;
            font-size: 48px;
            line-height: 1;
            color: #fff9
        }

        .hero[_ngcontent-xoo-c10] .icon-box[_ngcontent-xoo-c10]:hover .title[_ngcontent-xoo-c10] a[_ngcontent-xoo-c10],
        .hero[_ngcontent-xoo-c10] .icon-box[_ngcontent-xoo-c10]:hover .icon[_ngcontent-xoo-c10] {
            color: var(--color-secondary);
            transform: scale(1.2);
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -ms-transform: scale(1.2);
            -o-transform: scale(1.2)
        }
    </style>
</head>

<body data-new-gr-c-s-check-loaded="14.1107.0" data-gr-ext-installed="">

    <app-root _nghost-xoo-c13="" ng-version="14.3.0">
        <app-header _ngcontent-xoo-c13="" _nghost-xoo-c11="">
            <div _ngcontent-xoo-c11="" class="col-12 row nav-shadow px-0 mx-0 mb-3 fixed-nav navbar1">
                <div _ngcontent-xoo-c11="" class="col-12 col-md-10 m-auto">
                    <nav _ngcontent-xoo-c11="" class="navbar navbar-expand-lg static-navbar py-3">
                        <div _ngcontent-xoo-c11="" class="container-fluid px-0"><img _ngcontent-xoo-c11=""
                                src="assets/images/Enjoy Logo.svg" alt="" class="nav-logo"><button
                                _ngcontent-xoo-c11="" type="button" data-bs-toggle="collapse" data-bs-target="#navBar"
                                aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation"
                                class="navbar-toggler"><span _ngcontent-xoo-c11=""
                                    class="navbar-toggler-icon"></span></button>
                            <div _ngcontent-xoo-c11="" id="navBar" class="collapse navbar-collapse">
                                <ul _ngcontent-xoo-c11="" class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li _ngcontent-xoo-c11="" class="nav-item"><a _ngcontent-xoo-c11=""
                                            aria-current="page" href="" class="nav-link">الرئيسية</a></li>
                                    <li _ngcontent-xoo-c11="" class="nav-item"><a _ngcontent-xoo-c11="" href=""
                                            class="nav-link">الفعاليات</a></li>
                                </ul>
                                <div _ngcontent-xoo-c11="" class="d-flex align-items-center"><a _ngcontent-xoo-c11=""
                                        hreflang="en" href="" class="me-3"><img _ngcontent-xoo-c11=""
                                            src="/assets/web/images/en.svg" width="45"></a><a _ngcontent-xoo-c11=""
                                        href=""><button _ngcontent-xoo-c11="" class="btn bg-white px-4">بيع
                                            تذكرتك</button></a>
                                    <div _ngcontent-xoo-c11="" class="dropdown cursor-pointer ps-md-2">
                                        <div _ngcontent-xoo-c11="" data-bs-toggle="dropdown" aria-expanded="false"
                                            class="dropdown-toggle user-dropdown d-flex align-items-center pt-2 pt-md-0">
                                            <div _ngcontent-xoo-c11="" class="d-flex align-items-center">
                                                <div _ngcontent-xoo-c11="" class="pe-4 ps-2">
                                                    <div _ngcontent-xoo-c11="" class="name">jdda prties</div>
                                                    <div _ngcontent-xoo-c11="" class="account">الحساب</div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul _ngcontent-xoo-c11="" aria-labelledby="dropdownMenuButton1"
                                            class="dropdown-menu">
                                            <li _ngcontent-xoo-c11=""><a _ngcontent-xoo-c11="" href=" "
                                                    class="dropdown-item">طلباتي</a></li>
                                            <li _ngcontent-xoo-c11=""><a _ngcontent-xoo-c11="" href=""
                                                    class="dropdown-item">الملف الشخصي</a></li>
                                            <li _ngcontent-xoo-c11=""><a _ngcontent-xoo-c11="" href=""
                                                    class="dropdown-item">لوحة تحكم البائع</a></li>
                                            <li _ngcontent-xoo-c11=""><a _ngcontent-xoo-c11=""
                                                    onclick="event.preventDefault();document.getElementById('logoutForm').submit();"
                                                    class="dropdown-item sign-out">تسجيل الخروج</a></li>
                                        </ul>
                                    </div><span _ngcontent-xoo-c11="">
                                        <form _ngcontent-xoo-c11="" action="/logout" id="logoutForm" method="post">
                                            <input _ngcontent-xoo-c11="" type="hidden" name="_token"
                                                value="iLA3vslCUSE83FyNNXNdfIUK8koNz9mNCpEupZMG">
                                        </form>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </app-header>
        <router-outlet _ngcontent-xoo-c13=""></router-outlet>
        <app-index-page _nghost-xoo-c10="">
            <section _ngcontent-xoo-c10="" id="hero" class="hero herobackground mt-5">
                <div _ngcontent-xoo-c10="" class="container position-relative mt-5">
                    <div _ngcontent-xoo-c10="" data-aos="fade-in" class="row gy-5 mt-5">
                        <div _ngcontent-xoo-c10=""
                            class="heroContent col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-end">
                            <h2 _ngcontent-xoo-c10="" class="text-warning">عيدنا فرحة</h2>
                            <div _ngcontent-xoo-c10="" class="d-flex justify-content-around mt-1">
                                <p _ngcontent-xoo-c10="" class="text-warning"><strong _ngcontent-xoo-c10="">عبد
                                        المجيد</strong></p>
                            </div>
                            <p _ngcontent-xoo-c10="" class="text-warning"> الرياض 27/4/2023 </p>
                            <div _ngcontent-xoo-c10="" class="d-flex justify-content-center justify-content-lg-start">
                                <a _ngcontent-xoo-c10="" class="btn-get-started w-75 mt-3 text-light bg-success">
                                    <h3 _ngcontent-xoo-c10=""><strong _ngcontent-xoo-c10="">احجز التذكرة</strong></h3>
                                </a>
                            </div>
                        </div>
                        <div _ngcontent-xoo-c10="" class="col-lg-6 order-1 order-lg-2">
                            <h1 _ngcontent-xoo-c10="" class="mt-5 text-light">حفلات عيد الفطر المبارك 2023</h1>
                            <div _ngcontent-xoo-c10="" class="hero-img"><img _ngcontent-xoo-c10="" id="imgDarkMood"
                                    alt="صورة واجهة الموقع" data-aos="zoom-out" data-aos-delay="100"
                                    class="img-fluid animated rounded-circle" src="assets/images/66.jpg"></div>
                        </div>
                    </div>
                </div>
                <hr _ngcontent-xoo-c10="" class="mt-5 text-light">
                <div _ngcontent-xoo-c10="" class="mt-3">
                    <h1 _ngcontent-xoo-c10="" class="px-4 text-light">كل الفعاليات</h1>
                </div>
                <div _ngcontent-xoo-c10="">
                    <div _ngcontent-xoo-c10="" class="mt-3 text-center pb-3"><img _ngcontent-xoo-c10=""
                            width="300" height="300" alt="" class="rounded-3"
                            src="assets/images/44.png"></div>
                </div>
                <div _ngcontent-xoo-c10="">
                    <div _ngcontent-xoo-c10="" class="mt-3 text-center pb-3"><img _ngcontent-xoo-c10=""
                            width="300" height="300" alt="" class="rounded-3"
                            src="assets/images/2.png"></div>
                </div>
                <div _ngcontent-xoo-c10="">
                    <div _ngcontent-xoo-c10="" class="mt-3 text-center pb-3"><img _ngcontent-xoo-c10=""
                            width="300" height="300" alt="" class="rounded-3"
                            src="assets/images/33.png"></div>
                </div>
                <div _ngcontent-xoo-c10="">
                    <div _ngcontent-xoo-c10="" class="mt-3 text-center pb-3"><img _ngcontent-xoo-c10=""
                            width="300" height="300" alt="" class="rounded-3"
                            src="assets/images/66.jpg"></div>
                </div>
                <!---->
            </section>
        </app-index-page>
        <!---->
        <app-footer _ngcontent-xoo-c13="" _nghost-xoo-c12="">
            <div _ngcontent-xoo-c12="" class="p-0 d-flex flex-column justify-content-end">
                <div _ngcontent-xoo-c12="" class="col-12 mt-3 footer row mx-0 justify-content-center">
                    <div _ngcontent-xoo-c12="" class="row col-12 col-md-10 px-0 h-fit-content">
                        <div _ngcontent-xoo-c12="" class="col-12 col-md-6 col-lg-3 pt-3 pt-md-0 d-flex flex-column">
                            <img _ngcontent-xoo-c12="" src="assets/images/Enjoy Logo.svg" alt=""
                                width="151">
                            <div _ngcontent-xoo-c12="" class="d-flex mt-3"><a _ngcontent-xoo-c12="" href="#"
                                    target="_blank"><i _ngcontent-xoo-c12=""
                                        class="fab fa-instagram social-links mt-2 me-3"></i></a><a
                                    _ngcontent-xoo-c12="" href="#" target="_blank"><i _ngcontent-xoo-c12=""
                                        class="fab fa-twitter social-links mt-2 me-3"></i></a></div>
                        </div>
                        <div _ngcontent-xoo-c12="" class="col-12 col-md-6 col-lg-2 offset-lg-1 pt-3 pt-md-0">
                            <div _ngcontent-xoo-c12="" class="header">الرئيسية </div>
                            <div _ngcontent-xoo-c12="" class="d-flex flex-column footer-links"><a
                                    _ngcontent-xoo-c12="" href="#" class="link">
                                    <div _ngcontent-xoo-c12="">الفعاليات</div>
                                </a></div>
                        </div>
                        <div _ngcontent-xoo-c12="" class="col-12 col-md-6 col-lg-2 offset-lg-1 pt-3 pt-md-0">
                            <div _ngcontent-xoo-c12="" class="header">المساعدة </div>
                            <div _ngcontent-xoo-c12="" class="d-flex flex-column footer-links"><a
                                    _ngcontent-xoo-c12="" href="#" class="link">
                                    <div _ngcontent-xoo-c12="">تسجيل</div>
                                </a><a _ngcontent-xoo-c12="" href="#" class="link">
                                    <div _ngcontent-xoo-c12="">الأسئلة المتكررة</div>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div _ngcontent-xoo-c12="" class="col-12 footer-copy"> جميع الحقوق محفوظة لـ عيشها © 2023 <div
                        _ngcontent-xoo-c12="" class="d-flex justify-content-center mt-2">
                        <div _ngcontent-xoo-c12="" class="font-13 dir-ltr">- شركة الشغف الرياضي للاتصالات وتقنية
                            المعلومات </div>
                        <div _ngcontent-xoo-c12="" class="font-13 px-3 dir-ltr">السجل التجاري 1010570873</div>
                        <div _ngcontent-xoo-c12="" class="font-13 dir-ltr">310555447900003 الرقم الضريبي - </div>
                    </div>
                </div>
            </div>
        </app-footer>
    </app-root>



    <script src="/assets/web/js/jquery.min.js"></script>
    <script src="/assets/web/js/popper.min.js"></script>
    <script src="/assets/web/js/bootstrap.min.js"></script>
    <script src="/assets/web/js/owl.carousel.min.js"></script>
    <script src="/assets/web/js/datatable.js"></script>
    <script src="/assets/web/js/jquery.min.js"></script>
    <script src="runtime.fc94a681564aa2a8.js" type="module"></script>
    <script src="polyfills.770938a7d976e97b.js" type="module"></script>
    <script src="main.0347ffe2bf924452.js" type="module"></script>

</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
