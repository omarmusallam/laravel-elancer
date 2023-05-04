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
        .nav-logo[_ngcontent-vow-c11] {
            width: 80px !important
        }

        .navbar1[_ngcontent-vow-c11] {
            background: #1382bf;
            background: linear-gradient(278deg, rgb(49, 74, 178) 0%, rgb(108, 47, 174) 65%, rgb(143, 35, 179) 100%) !important
        }
    </style>
    <style>
        .herobackground[_ngcontent-vow-c10] {
            background: #1382bf;
            background: linear-gradient(278deg, rgb(49, 74, 178) 0%, rgb(108, 47, 174) 65%, rgb(143, 35, 179) 100%)
        }

        .hero[_ngcontent-vow-c10] {
            width: 100%;
            position: relative;
            padding: 60px 0 0
        }

        #hero[_ngcontent-vow-c10] .hero-img[_ngcontent-vow-c10] img[_ngcontent-vow-c10] {
            width: 350px;
            height: 350px
        }

        #hero[_ngcontent-vow-c10] .animated[_ngcontent-vow-c10] {
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
            .hero[_ngcontent-vow-c10] {
                background-attachment: fixed
            }
        }

        .hero[_ngcontent-vow-c10] h2[_ngcontent-vow-c10] {
            font-size: 80px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.6
        }

        .hero[_ngcontent-vow-c10] p[_ngcontent-vow-c10] {
            color: #fff9;
            font-weight: 400;
            font-size: 16px;
            margin-bottom: 10px
        }

        .hero[_ngcontent-vow-c10] p[_ngcontent-vow-c10]:nth-child(3) {
            color: var(--color-secondary);
            font-weight: 400;
            font-size: 18px;
            margin-bottom: 10px
        }

        .hero[_ngcontent-vow-c10] .btn-get-started[_ngcontent-vow-c10] {
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

        .hero[_ngcontent-vow-c10] .btn-get-started[_ngcontent-vow-c10]:hover {
            border-color: var(--color-secondary);
            color: var(--color-secondary)
        }

        .hero[_ngcontent-vow-c10] .btn-watch-video[_ngcontent-vow-c10] {
            font-size: 16px;
            transition: .5s;
            margin-left: 25px;
            color: var(--color-white);
            font-weight: 600
        }

        .hero[_ngcontent-vow-c10] .btn-watch-video[_ngcontent-vow-c10] i[_ngcontent-vow-c10] {
            color: #ffffff80;
            font-size: 32px;
            transition: .3s;
            line-height: 0;
            margin-right: 8px
        }

        .hero[_ngcontent-vow-c10] .btn-watch-video[_ngcontent-vow-c10]:hover i[_ngcontent-vow-c10] {
            color: var(--color-secondary)
        }

        @media (max-width: 640px) {
            .hero[_ngcontent-vow-c10] {
                padding: 0
            }

            .hero[_ngcontent-vow-c10] h2[_ngcontent-vow-c10] {
                font-size: 25px;
                margin-bottom: 8px
            }

            #hero[_ngcontent-vow-c10] .animated[_ngcontent-vow-c10] {
                animation: none
            }

            #hero[_ngcontent-vow-c10] .hero-img[_ngcontent-vow-c10] {
                text-align: center
            }

            .heroContent[_ngcontent-vow-c10] {
                margin-top: 15px
            }

            #hero[_ngcontent-vow-c10] .hero-img[_ngcontent-vow-c10] img[_ngcontent-vow-c10] {
                margin: 10px 0 0
            }

            .hero[_ngcontent-vow-c10] .btn-get-started[_ngcontent-vow-c10],
            .hero[_ngcontent-vow-c10] .btn-watch-video[_ngcontent-vow-c10] {
                font-size: 14px
            }
        }

        .hero[_ngcontent-vow-c10] .icon-boxes[_ngcontent-vow-c10] {
            padding-bottom: 60px
        }

        @media (min-width: 1200px) {
            .hero[_ngcontent-vow-c10] .icon-boxes[_ngcontent-vow-c10]:before {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: calc(50% + 20px);
                background-color: var(--color-white)
            }
        }

        .hero[_ngcontent-vow-c10] .icon-box[_ngcontent-vow-c10] {
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

        .hero[_ngcontent-vow-c10] .icon-box[_ngcontent-vow-c10] .title[_ngcontent-vow-c10] {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 24px
        }

        .hero[_ngcontent-vow-c10] .icon-box[_ngcontent-vow-c10] .title[_ngcontent-vow-c10] a[_ngcontent-vow-c10] {
            color: var(--color-white);
            transition: .3s
        }

        .hero[_ngcontent-vow-c10] .icon-box[_ngcontent-vow-c10] .icon[_ngcontent-vow-c10] {
            margin-bottom: 20px;
            padding-top: 10px;
            display: inline-block;
            transition: all .3s ease-in-out;
            font-size: 48px;
            line-height: 1;
            color: #fff9
        }

        .hero[_ngcontent-vow-c10] .icon-box[_ngcontent-vow-c10]:hover .title[_ngcontent-vow-c10] a[_ngcontent-vow-c10],
        .hero[_ngcontent-vow-c10] .icon-box[_ngcontent-vow-c10]:hover .icon[_ngcontent-vow-c10] {
            color: var(--color-secondary);
            transform: scale(1.2);
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -ms-transform: scale(1.2);
            -o-transform: scale(1.2)
        }
    </style>
    <style>
        span[_ngcontent-vow-c6] {
            cursor: pointer
        }

        .number[_ngcontent-vow-c6] {
            margin: 10px
        }

        .minus-royal[_ngcontent-vow-c6],
        .plus-royal[_ngcontent-vow-c6],
        .minus-royal[_ngcontent-vow-c6],
        .plus-Diamond[_ngcontent-vow-c6],
        .minus-Diamond[_ngcontent-vow-c6],
        .plus-royal[_ngcontent-vow-c6],
        .minus-Platinum[_ngcontent-vow-c6],
        .plus-Platinum[_ngcontent-vow-c6],
        .minus-Gold[_ngcontent-vow-c6],
        .plus-Gold[_ngcontent-vow-c6],
        .minus-Bronze[_ngcontent-vow-c6],
        .plus-Bronze[_ngcontent-vow-c6],
        .minus-Silver[_ngcontent-vow-c6],
        .plus-Silver[_ngcontent-vow-c6] {
            width: 30px;
            height: 30px;
            background: green;
            color: #fff;
            border-radius: 4px;
            padding: 8px 5px;
            border: 1px solid #ddd;
            display: inline-block;
            vertical-align: middle;
            text-align: center
        }

        input[_ngcontent-vow-c6] {
            height: 34px;
            width: 120px;
            text-align: center;
            font-size: 13px;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: inline-block;
            vertical-align: middle
        }

        .container-fluid[_ngcontent-vow-c6] {
            background: #1382bf;
            background: linear-gradient(278deg, rgb(49, 74, 178) 0%, rgb(108, 47, 174) 65%, rgb(143, 35, 179) 100%)
        }

        .event-box[_ngcontent-vow-c6],
        .description-box[_ngcontent-vow-c6] {
            background: #1382bf;
            background: linear-gradient(278deg, rgb(49, 74, 178) 0%, rgb(108, 47, 174) 65%, rgb(143, 35, 179) 100%) !important
        }

        input[_ngcontent-vow-c6] {
            color: #000 !important
        }

        .event-box[_ngcontent-vow-c6] {
            color: #fff !important
        }

        .form[_ngcontent-vow-c6] {
            color: #000
        }

        .ticket-cart-container[_ngcontent-vow-c6] {
            color: #fff
        }
    </style>
</head>

<body data-new-gr-c-s-check-loaded="14.1107.0" data-gr-ext-installed="">
    <app-root _nghost-vow-c13="" ng-version="14.3.0">
        <app-header _ngcontent-vow-c13="" _nghost-vow-c11="">
            <div _ngcontent-vow-c11="" class="col-12 row nav-shadow px-0 mx-0 mb-3 fixed-nav navbar1">
                <div _ngcontent-vow-c11="" class="col-12 col-md-10 m-auto">
                    <nav _ngcontent-vow-c11="" class="navbar navbar-expand-lg static-navbar py-3">
                        <div _ngcontent-vow-c11="" class="container-fluid px-0"><img _ngcontent-vow-c11=""
                                src="assets/images/Enjoy Logo.svg" alt="" class="nav-logo"><button
                                _ngcontent-vow-c11="" type="button" data-bs-toggle="collapse" data-bs-target="#navBar"
                                aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation"
                                class="navbar-toggler"><span _ngcontent-vow-c11=""
                                    class="navbar-toggler-icon"></span></button>
                            <div _ngcontent-vow-c11="" id="navBar" class="collapse navbar-collapse">
                                <ul _ngcontent-vow-c11="" class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li _ngcontent-vow-c11="" class="nav-item"><a _ngcontent-vow-c11=""
                                            aria-current="page" href="" class="nav-link">الرئيسية</a></li>
                                    <li _ngcontent-vow-c11="" class="nav-item"><a _ngcontent-vow-c11="" href=""
                                            class="nav-link">الفعاليات</a></li>
                                </ul>
                                <div _ngcontent-vow-c11="" class="d-flex align-items-center"><a _ngcontent-vow-c11=""
                                        hreflang="en" href="" class="me-3"><img _ngcontent-vow-c11=""
                                            src="/assets/web/images/en.svg" width="45"></a><a _ngcontent-vow-c11=""
                                        href=""><button _ngcontent-vow-c11="" class="btn bg-white px-4">بيع
                                            تذكرتك</button></a>
                                    <div _ngcontent-vow-c11="" class="dropdown cursor-pointer ps-md-2">
                                        <div _ngcontent-vow-c11="" data-bs-toggle="dropdown" aria-expanded="false"
                                            class="dropdown-toggle user-dropdown d-flex align-items-center pt-2 pt-md-0">
                                            <div _ngcontent-vow-c11="" class="d-flex align-items-center">
                                                <div _ngcontent-vow-c11="" class="pe-4 ps-2">
                                                    <div _ngcontent-vow-c11="" class="name">jdda prties</div>
                                                    <div _ngcontent-vow-c11="" class="account">الحساب</div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul _ngcontent-vow-c11="" aria-labelledby="dropdownMenuButton1"
                                            class="dropdown-menu">
                                            <li _ngcontent-vow-c11=""><a _ngcontent-vow-c11="" href=" "
                                                    class="dropdown-item">طلباتي</a></li>
                                            <li _ngcontent-vow-c11=""><a _ngcontent-vow-c11="" href=""
                                                    class="dropdown-item">الملف الشخصي</a></li>
                                            <li _ngcontent-vow-c11=""><a _ngcontent-vow-c11="" href=""
                                                    class="dropdown-item">لوحة تحكم البائع</a></li>
                                            <li _ngcontent-vow-c11=""><a _ngcontent-vow-c11=""
                                                    onclick="event.preventDefault();document.getElementById('logoutForm').submit();"
                                                    class="dropdown-item sign-out">تسجيل الخروج</a></li>
                                        </ul>
                                    </div><span _ngcontent-vow-c11="">
                                        <form _ngcontent-vow-c11="" action="/logout" id="logoutForm" method="post">
                                            <input _ngcontent-vow-c11="" type="hidden" name="_token"
                                                value="iLA3vslCUSE83FyNNXNdfIUK8koNz9mNCpEupZMG"></form>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </app-header>
        <router-outlet _ngcontent-vow-c13=""></router-outlet>
        <app-shope _nghost-vow-c6="">
            <div _ngcontent-vow-c6="" class="container-fluid flex-1 mt-3">
                <div _ngcontent-vow-c6="" class="row">
                    <div _ngcontent-vow-c6="" class="col-12 m-auto body-padding px-0 row">
                        <div _ngcontent-vow-c6="" class="col-12 col-md-10 mx-auto">
                            <div _ngcontent-vow-c6="" class="row align-items-center">
                                <div _ngcontent-vow-c6="" class="col-12 col-md">
                                    <div _ngcontent-vow-c6="" class="section-header text-light mt-3">الشراء</div>
                                </div>
                            </div>
                            <div _ngcontent-vow-c6="" class="row pt-3">
                                <div _ngcontent-vow-c6="" class="col-md-6">
                                    <div _ngcontent-vow-c6="" class="event-box small">
                                        <div _ngcontent-vow-c6="" class="row">
                                            <div _ngcontent-vow-c6="" class="image-width"><img _ngcontent-vow-c6=""
                                                    alt="" width="140" height="100"
                                                    src="assets/images/44.png"></div>
                                            <div _ngcontent-vow-c6=""
                                                class="col ms-4 tooltip-css d-flex flex-column justify-content-around">
                                                <div _ngcontent-vow-c6="" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title=""
                                                    class="small-title tooltip-css text-light">محمد عبده</div>
                                                <div _ngcontent-vow-c6="" class="col-12 d-flex align-items-center">
                                                    <img _ngcontent-vow-c6="" src="/assets/web/images/pin.png"
                                                        alt="" class="me-2">
                                                    <div _ngcontent-vow-c6="" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        class="location text-light"> الدمام - مركز الظهران</div>
                                                </div>
                                                <div _ngcontent-vow-c6="" class="d-flex align-items-center"><img
                                                        _ngcontent-vow-c6="" src="/assets/web/images/deadline.png"
                                                        alt="" class="me-2">
                                                    <div _ngcontent-vow-c6="" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""
                                                        class="date text-light"> الإثنين 24 أبريل 2023 19:00 م </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div _ngcontent-vow-c6="" class="pt-30 ticket-cart-container"><label
                                            _ngcontent-vow-c6="">اختر العدد ونوع التذاكر ادناه </label>
                                        <div _ngcontent-vow-c6="" dir="ltr" class="number form-inline">
                                            <div _ngcontent-vow-c6="" class="text-center">
                                                <div _ngcontent-vow-c6=""
                                                    class="d-flex flex-wrap justify-content-end"><span
                                                        _ngcontent-vow-c6="" class="label mx-2">Royal - 5000 rs</span>
                                                    <div _ngcontent-vow-c6="" class="mx-2 mb-2"><span
                                                            _ngcontent-vow-c6="" class="minus-royal">-</span><input
                                                            _ngcontent-vow-c6="" type="text" name="Royal"
                                                            value="0"><span _ngcontent-vow-c6=""
                                                            class="plus-royal">+</span></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-vow-c6="" class="text-center">
                                                <div _ngcontent-vow-c6=""
                                                    class="d-flex flex-wrap justify-content-end"><span
                                                        _ngcontent-vow-c6="" class="label mx-2">Diamond - 3500
                                                        rs</span>
                                                    <div _ngcontent-vow-c6="" class="mx-2 mb-2"><span
                                                            _ngcontent-vow-c6="" class="minus-royal">-</span><input
                                                            _ngcontent-vow-c6="" type="text" name="Royal"
                                                            value="0"><span _ngcontent-vow-c6=""
                                                            class="plus-royal">+</span></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-vow-c6="" class="text-center">
                                                <div _ngcontent-vow-c6=""
                                                    class="d-flex flex-wrap justify-content-end"><span
                                                        _ngcontent-vow-c6="" class="label mx-2">Platinum - 2300
                                                        rs</span>
                                                    <div _ngcontent-vow-c6="" class="mx-2 mb-2"><span
                                                            _ngcontent-vow-c6="" class="minus-royal">-</span><input
                                                            _ngcontent-vow-c6="" type="text" name="Royal"
                                                            value="0"><span _ngcontent-vow-c6=""
                                                            class="plus-royal">+</span></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-vow-c6="" class="text-center">
                                                <div _ngcontent-vow-c6=""
                                                    class="d-flex flex-wrap justify-content-end"><span
                                                        _ngcontent-vow-c6="" class="label mx-2">Gold - 950 rs</span>
                                                    <div _ngcontent-vow-c6="" class="mx-2 mb-2"><span
                                                            _ngcontent-vow-c6="" class="minus-royal">-</span><input
                                                            _ngcontent-vow-c6="" type="text" name="Royal"
                                                            value="0"><span _ngcontent-vow-c6=""
                                                            class="plus-royal">+</span></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-vow-c6="" class="text-center">
                                                <div _ngcontent-vow-c6=""
                                                    class="d-flex flex-wrap justify-content-end"><span
                                                        _ngcontent-vow-c6="" class="label mx-2">Silver - 700 rs</span>
                                                    <div _ngcontent-vow-c6="" class="mx-2 mb-2"><span
                                                            _ngcontent-vow-c6="" class="minus-royal">-</span><input
                                                            _ngcontent-vow-c6="" type="text" name="Royal"
                                                            value="0"><span _ngcontent-vow-c6=""
                                                            class="plus-royal">+</span></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-vow-c6="" class="text-center">
                                                <div _ngcontent-vow-c6=""
                                                    class="d-flex flex-wrap justify-content-end"><span
                                                        _ngcontent-vow-c6="" class="label mx-2">Bronze - 350 rs</span>
                                                    <div _ngcontent-vow-c6="" class="mx-2 mb-2"><span
                                                            _ngcontent-vow-c6="" class="minus-royal">-</span><input
                                                            _ngcontent-vow-c6="" type="text" name="Royal"
                                                            value="0"><span _ngcontent-vow-c6=""
                                                            class="plus-royal">+</span></div>
                                                </div>
                                            </div>
                                            <!---->
                                        </div>
                                        <form _ngcontent-vow-c6="" id="form" method="post" class="mt-4">
                                            <span _ngcontent-vow-c6="" class="total-price"><input
                                                    _ngcontent-vow-c6="" dir="ltr" type="text"
                                                    readonly="" name="sum" id="sum"></span><span
                                                _ngcontent-vow-c6="" class="ps-1">ر.س</span>
                                            <div _ngcontent-vow-c6="" class="form-group mt-4"><label
                                                    _ngcontent-vow-c6="">الاسم</label><input _ngcontent-vow-c6=""
                                                    type="text" required="" name="name" id="name"
                                                    value="" placeholder="اكتب اسمك هنا"
                                                    class="form-control w-100 mt-2"></div>
                                            <div _ngcontent-vow-c6="" class="form-group mt-4"><label
                                                    _ngcontent-vow-c6="">رقم الواتس</label><input _ngcontent-vow-c6=""
                                                    type="number" required="" name="whats" id="whats"
                                                    value="" placeholder="اكتب رقم الواتس هنا"
                                                    class="form-control w-100 mt-2"></div>
                                            <div _ngcontent-vow-c6="" class="form-group mt-4"><label
                                                    _ngcontent-vow-c6="">البريد الالكتروني - سيتم ارسال التذكرة عبر
                                                    البريد الالكتروني</label><input _ngcontent-vow-c6=""
                                                    type="email" required="" name="email" id="email"
                                                    value="" placeholder="اكتب بريدك الالكتروني هنا"
                                                    class="form-control w-100 mt-2"></div><button _ngcontent-vow-c6=""
                                                type="submit" class="btn btn-20 mt-4 bg-green w-100">اكمال
                                                الطلب</button>
                                        </form>
                                    </div>
                                </div>
                                <div _ngcontent-vow-c6="" class="col-12 col-md-6 pt-3 dataBox">
                                    <div _ngcontent-vow-c6="" class="border-box">
                                        <div _ngcontent-vow-c6="" class="section-header font-24 text-light pb-4">
                                            معلومات التذكرة </div>
                                        <div _ngcontent-vow-c6="" class="d-flex align-items-center details">
                                            <div _ngcontent-vow-c6="" class="icon me-2"></div>
                                            <div _ngcontent-vow-c6="" class="text text-light">عمليات تجارية آمنة معززة
                                                بأفضل خدمة عملاء </div>
                                        </div>
                                        <div _ngcontent-vow-c6="" class="d-flex align-items-center details pt-3">
                                            <div _ngcontent-vow-c6="" class="icon me-2"></div>
                                            <div _ngcontent-vow-c6="" class="text text-light">استرجاع ١٠٠٪ من المال
                                                لأي فعالية الغيت ولم يتم إعادة جدولتها </div>
                                        </div>
                                        <div _ngcontent-vow-c6="" class="d-flex align-items-center details pt-3">
                                            <div _ngcontent-vow-c6="" class="icon me-2"></div>
                                            <div _ngcontent-vow-c6="" class="text text-light">تحتاج مساعدة في الطلب؟
                                                تواصل مع خدمة العملاء </div>
                                        </div>
                                    </div>
                                    <div _ngcontent-vow-c6="" class="pt-4">
                                        <div _ngcontent-vow-c6="" class="border-box">
                                            <div _ngcontent-vow-c6="" class="section-header font-24 text-light pb-4">
                                                عنا </div>
                                            <div _ngcontent-vow-c6="" class="d-flex align-items-center details">
                                                <div _ngcontent-vow-c6="" class="icon me-2"></div>
                                                <div _ngcontent-vow-c6="" class="text text-light">آلاف العملاء يعتمدون
                                                    علينا لتوفير تذاكرهم</div>
                                            </div>
                                            <div _ngcontent-vow-c6="" class="d-flex align-items-center details pt-3">
                                                <div _ngcontent-vow-c6="" class="icon me-2"></div>
                                                <div _ngcontent-vow-c6="" class="text text-light">خدمة عملاء جاهزون
                                                    لتقديم افضل الخدمات </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div _ngcontent-vow-c6="" class="col-md-6">
                                    <div _ngcontent-vow-c6="" class="pt-3">
                                        <div _ngcontent-vow-c6="" class="row"></div>
                                    </div>
                                </div>
                            </div>
                            <div _ngcontent-vow-c6="" id="loginModal" tabindex="-1" role="dialog"
                                aria-labelledby="loginModalText" aria-hidden="true" class="modal fade">
                                <div _ngcontent-vow-c6="" role="document" class="modal-dialog">
                                    <div _ngcontent-vow-c6="" class="modal-content">
                                        <div _ngcontent-vow-c6="" class="modal-body"><button _ngcontent-vow-c6=""
                                                type="button" data-bs-dismiss="modal" aria-label="Close"
                                                class="close"><span _ngcontent-vow-c6=""
                                                    aria-hidden="true">×</span></button>
                                            <div _ngcontent-vow-c6="" class="title text-center">تغيير كلمة المرور
                                            </div>
                                            <div _ngcontent-vow-c6="" class="row">
                                                <form _ngcontent-vow-c6="" class="change-password-form"><input
                                                        _ngcontent-vow-c6="" type="hidden" name="_token"
                                                        value="iLA3vslCUSE83FyNNXNdfIUK8koNz9mNCpEupZMG">
                                                    <div _ngcontent-vow-c6=""
                                                        class="col-12 col-md-10 col-lg-9 mx-auto">
                                                        <div _ngcontent-vow-c6="" class="pt-3">
                                                            <div _ngcontent-vow-c6="" class="input-group auth-input">
                                                                <span _ngcontent-vow-c6=""
                                                                    class="input-group-text pe-0"><i
                                                                        _ngcontent-vow-c6="" aria-hidden="true"
                                                                        class="fas fa-lock"></i></span><input
                                                                    _ngcontent-vow-c6="" type="password"
                                                                    name="current_password" id="current_password"
                                                                    value="" placeholder="كلمة المرور الحالية"
                                                                    class="form-control border-start-0 text-start">
                                                            </div><span _ngcontent-vow-c6="" id="currentPasswordMsg"
                                                                role="alert" class="invalid-feedback"><strong
                                                                    _ngcontent-vow-c6=""></strong></span>
                                                        </div>
                                                        <div _ngcontent-vow-c6="" class="pt-3">
                                                            <div _ngcontent-vow-c6="" class="input-group auth-input">
                                                                <span _ngcontent-vow-c6=""
                                                                    class="input-group-text pe-0"><i
                                                                        _ngcontent-vow-c6="" aria-hidden="true"
                                                                        class="fas fa-lock"></i></span><input
                                                                    _ngcontent-vow-c6="" type="password"
                                                                    name="new_password" id="new_password"
                                                                    value="" placeholder=" كلمة المرور الجديدة "
                                                                    class="form-control border-start-0 text-start">
                                                            </div><span _ngcontent-vow-c6="" id="newPasswordMsg"
                                                                role="alert" class="invalid-feedback"><strong
                                                                    _ngcontent-vow-c6=""></strong></span>
                                                        </div>
                                                        <div _ngcontent-vow-c6="" class="pt-3">
                                                            <div _ngcontent-vow-c6="" class="input-group auth-input">
                                                                <span _ngcontent-vow-c6=""
                                                                    class="input-group-text pe-0"><i
                                                                        _ngcontent-vow-c6="" aria-hidden="true"
                                                                        class="fas fa-lock"></i></span><input
                                                                    _ngcontent-vow-c6="" type="password"
                                                                    name="new_confirm_password"
                                                                    id="new_confirm_password" value=""
                                                                    placeholder=" تاكيد كلمة المرور"
                                                                    class="form-control border-start-0 text-start">
                                                            </div><span _ngcontent-vow-c6="" id="newConfirmationMsg"
                                                                role="alert" class="invalid-feedback"><strong
                                                                    _ngcontent-vow-c6=""></strong></span>
                                                        </div><button _ngcontent-vow-c6="" type="submit"
                                                            class="btn bg-dark btn-20 w-100 mt-3">تغيير كلمة المرور
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
        </app-shope>
        <!---->
        <app-footer _ngcontent-vow-c13="" _nghost-vow-c12="">
            <div _ngcontent-vow-c12="" class="p-0 d-flex flex-column justify-content-end">
                <div _ngcontent-vow-c12="" class="col-12 mt-3 footer row mx-0 justify-content-center">
                    <div _ngcontent-vow-c12="" class="row col-12 col-md-10 px-0 h-fit-content">
                        <div _ngcontent-vow-c12="" class="col-12 col-md-6 col-lg-3 pt-3 pt-md-0 d-flex flex-column">
                            <img _ngcontent-vow-c12="" src="assets/images/Enjoy Logo.svg" alt=""
                                width="151">
                            <div _ngcontent-vow-c12="" class="d-flex mt-3"><a _ngcontent-vow-c12="" href="#"
                                    target="_blank"><i _ngcontent-vow-c12=""
                                        class="fab fa-instagram social-links mt-2 me-3"></i></a><a
                                    _ngcontent-vow-c12="" href="#" target="_blank"><i _ngcontent-vow-c12=""
                                        class="fab fa-twitter social-links mt-2 me-3"></i></a></div>
                        </div>
                        <div _ngcontent-vow-c12="" class="col-12 col-md-6 col-lg-2 offset-lg-1 pt-3 pt-md-0">
                            <div _ngcontent-vow-c12="" class="header">الرئيسية </div>
                            <div _ngcontent-vow-c12="" class="d-flex flex-column footer-links"><a
                                    _ngcontent-vow-c12="" href="#" class="link">
                                    <div _ngcontent-vow-c12="">الفعاليات</div>
                                </a></div>
                        </div>
                        <div _ngcontent-vow-c12="" class="col-12 col-md-6 col-lg-2 offset-lg-1 pt-3 pt-md-0">
                            <div _ngcontent-vow-c12="" class="header">المساعدة </div>
                            <div _ngcontent-vow-c12="" class="d-flex flex-column footer-links"><a
                                    _ngcontent-vow-c12="" href="#" class="link">
                                    <div _ngcontent-vow-c12="">تسجيل</div>
                                </a><a _ngcontent-vow-c12="" href="#" class="link">
                                    <div _ngcontent-vow-c12="">الأسئلة المتكررة</div>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div _ngcontent-vow-c12="" class="col-12 footer-copy"> جميع الحقوق محفوظة لـ عيشها © 2023 <div
                        _ngcontent-vow-c12="" class="d-flex justify-content-center mt-2">
                        <div _ngcontent-vow-c12="" class="font-13 dir-ltr">- شركة الشغف الرياضي للاتصالات وتقنية
                            المعلومات </div>
                        <div _ngcontent-vow-c12="" class="font-13 px-3 dir-ltr">السجل التجاري 1010570873</div>
                        <div _ngcontent-vow-c12="" class="font-13 dir-ltr">310555447900003 الرقم الضريبي - </div>
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
