<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ui page</title>

    <link rel="preload" href="fonts/Inter-Light.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/vendors.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

	<?/* Подключение библиотек (отдельно) */?>
    <script defer src="js/jquery.js"></script>    <!-- jquery -->
    <script defer src="js/jquery.maskedinput.js"></script>    <!-- maskedinput -->
    <script defer src="js/jquery.validate.js"></script>    <!-- validate -->
    <script defer src="js/messages_ru.js"></script>    <!-- validate -->
    <script defer src="js/popper.js"></script>    <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>    <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>    <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>    <!-- fancybox -->
    <script defer src="js/select2.js"></script>    <!-- select2 -->
    <script defer src="js/readmore.js"></script>    <!-- readmore -->
    <script defer src="js/flatpickr.min.js"></script>    <!-- flatpickr -->
    <script defer src="js/ru.js"></script>    <!-- flatpickr -->

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js"></script>

    <style>
        body {
            margin: 10px;
            overflow-x: hidden;
            background: #F5F5F5;
        }
        h1, h2, h3, h4, h5, h6 {
            margin-bottom: 16px;
        }
        .container-ui {
            display:flex;
            flex-wrap: wrap;
            gap: 24px;
        }
        .col-ui {
            flex: 1;
            display:flex;
            flex-direction: column;
            gap: 12px;
        }
        .row-ui {
            display:flex;
            align-items:center;
            gap: 16px;
        }
        .bg-dark {
            background-color: #b8c1f0;
        }
        .text-center {
            text-align: center;
        }
        .color-block {
            display: inline-block;
            width: 150px;
            height: 30px;
        }
        .tooltip-ui-set {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
            padding: 12px;
        }
        .tooltip-ui-set:not(:last-child) {
            margin-bottom: 20px;
        }
        .tooltip-ui-iconset {
            min-width: 320px;
            border: 1px solid var(--gray3-color);
            border-radius: 8px;
        }
        .tooltip-ui-iconset .tooltip .icon {
            min-width: 24px;
            width: 24px;
            min-height: 24px;
            height: 24px;
        }
        .tooltip-ui-iconset .tooltip .icon {
            fill: var(--text-primary);
        }
        .tooltip-ui-iconset .tooltip:hover .icon {
            fill: var(--red-color);
        }
    </style>
</head>
<body>
    <h3 class="text-center">Variables css</h3>
    <h4>Fonts</h4>
    <div style="font-family: var(--font-family-inter);">Inter &#8212; var(--font-family-inter)</div>

    <br>
    <h4>Colors</h4>
    <div class="container-ui">
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--black-color);"
                ></span>&nbsp;&#8212; var(--black-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--white-color);"
                ></span>&nbsp;&#8212; var(--white-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--gray1-color);"
                ></span>&nbsp;&#8212; var(--gray1-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--gray2-color);"
                ></span>&nbsp;&#8212; var(--gray2-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--gray3-color);"
                ></span>&nbsp;&#8212; var(--gray3-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--gray4-color);"
                ></span>&nbsp;&#8212; var(--gray4-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--gray5-color);"
                ></span>&nbsp;&#8212; var(--gray5-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--gray6-color);"
                ></span>&nbsp;&#8212; var(--gray6-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--yellow-color);"
                ></span>&nbsp;&#8212; var(--yellow-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--yellow2-color);"
                ></span>&nbsp;&#8212; var(--yellow2-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--red-color);"
                ></span>&nbsp;&#8212; var(--red-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--orange-color);"
                ></span>&nbsp;&#8212; var(--orange-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--green-color);"
                ></span>&nbsp;&#8212; var(--green-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text-primary);"
                ></span>&nbsp;&#8212; var(--text-primary)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text-secondary);"
                ></span>&nbsp;&#8212; var(--text-secondary)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text-caption);"
                ></span>&nbsp;&#8212; var(--text-caption)
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Icons</h3>
    <div class="container-ui">
        <h4>
            .icon-fill - строго запрещает свойство "stroke"
            <br>
            .icon-stroke - строго запрещает свойство "fill"
        </h4>
        <div>
            <h4 class="text-center">sprite.svg#id_из_тултип</h4>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#search"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#search"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#shopping-cart-2"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#shopping-cart-2"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#inbox-filled"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#inbox-filled"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#inbox-in"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#inbox-in"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#barchart"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#barchart"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#burger"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#burger"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#star"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#star"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#question"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#question"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#new-release"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#new-release"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#history"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#history"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#filter"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#filter"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#log-out"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#log-out"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#share"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#share"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#truck"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#truck"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#pos"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#pos"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#lightning"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#lightning"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#bookmark"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#bookmark"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#bookmark-plus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#bookmark-plus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#bookmarks"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#bookmarks"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#pin"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#pin"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#user-square"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#user-square"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#trash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#trash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#box-2"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#box-2"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#briefcase"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#briefcase"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#slash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#slash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#timer"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#timer"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#printer"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#printer"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#call-calling"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#call-calling"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#bulb"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#bulb"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#copy"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#copy"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#procent-circle"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#procent-circle"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#sliders-horiz"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#sliders-horiz"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#image-plus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#image-plus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#sort-ascending"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#sort-ascending"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#sort-decending"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#sort-decending"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#comment-text"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#comment-text"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#info"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#info"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#alert-triangle"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#alert-triangle"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#alert-octagon"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#alert-octagon"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#arrow-up"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#arrow-up"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#arrow-down"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#arrow-down"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#arrow-left"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#arrow-left"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#arrow-right"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#arrow-right"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#chevron-up"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#chevron-up"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#chevron-down"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#chevron-down"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#chevron-left"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#chevron-left"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#chevron-right"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#plus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#plus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#minus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#minus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#cross"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#cross"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#check"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#check"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#check-circle"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#check-circle"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#checkbox-rec"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#checkbox-rec"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#excel"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#excel"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#word"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#word"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#pdf"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#pdf"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#image"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#image"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#file-download"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#file-download"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#catalog-cable"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-cable"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-cable-systems"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-cable-systems"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-connectors"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-connectors"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-electric-motors"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-electric-motors"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-grounding"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-grounding"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-lighting"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-lighting"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-low-voltage"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-low-voltage"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-miscellaneous"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-miscellaneous"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-power-devices"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-power-devices"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-shields-cabinets"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-shields-cabinets"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-smart-house"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-smart-house"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-tools"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-tools"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-ventilation"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-ventilation"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-wiring"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-wiring"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-wiring-products"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-wiring-products"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#menu-box-2"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-box-2"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-checkbox-rec"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-checkbox-rec"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-comment-plus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-comment-plus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-comment-slash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-comment-slash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-layers"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-layers"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-lock-2-opened"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-lock-2-opened"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-refresh-ccw"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-refresh-ccw"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-repeat"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-repeat"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-shopping-cart-2"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-shopping-cart-2"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-star-slash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-star-slash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-truck-2 (проблемный)"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-truck-2"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#fill-bookmark-check"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-check-rec"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-check-rec"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-cross-rec"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-cross-rec"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-eye"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-eye"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-eye-slash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-eye-slash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-grid"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-grid"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-list"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-list"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-more-horiz"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-more-horiz"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-more-vert"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-more-vert"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-star"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-star"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-table"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-table"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-bonus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-bonus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#soc-logo-ok"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-ok"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#soc-logo-tg"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-tg"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#soc-logo-vk"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-vk"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#soc-logo-ya"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-ya"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#soc-logo-yt"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-yt"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Buttons</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">default</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">primary</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-primary'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-primary">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-primary active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-primary active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">secondary</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-secondary'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-secondary">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-secondary active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-secondary active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">light</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-light'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-light">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-light active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-light active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">mini</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-mini btn-primary'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-mini btn-primary">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-mini btn-primary active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-mini btn-primary active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-ui">
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">light border</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-b-light'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-b-light">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-b-light active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-b-light active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">dark border</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-b-dark'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-b-dark">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-b-dark active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-b-dark active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">active lightgray</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-active-lightgray active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-active-lightgray active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">btn-link</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-link'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-link">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-link active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-link active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Links</h3>
    <div class="container-ui bg-dark">
        <div class="col-ui">
            <div>
                <h4 class="text-center flex-1" style="max-width: 148px">default</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 148px">link-light</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-light">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 148px">link-dark</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-dark">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-ui">
            <div>
                <h4 class="text-center flex-1" style="max-width: 148px">link-red</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-red">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 148px">link-gray</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-gray">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 148px">link-dashed</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-dashed link-red">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Checkbox / Radio buttons (для примера состояний стоит type=checkbox)</h3>
    <div>
        <div class="container-ui">
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <div class="custom-checkbox">
                            <input class="custom-checkbox__input" type="checkbox">
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <div class="custom-checkbox">
                            <input class="custom-checkbox__input disabled" type="checkbox" disabled>
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="checked"
                    >
                        <!--start ui content-->
                        <div class="custom-checkbox">
                            <input class="custom-checkbox__input custom-checkbox__input--checkline" type="checkbox" checked>
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="checked"
                    >
                        <!--start ui content-->
                        <div class="custom-checkbox">
                            <input class="custom-checkbox__input" type="checkbox" checked>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <div class="custom-radio">
                            <input class="custom-radio__input" type="checkbox">
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <div class="custom-radio">
                            <input class="custom-radio__input disabled" type="checkbox" disabled>
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="checked"
                    >
                        <!--start ui content-->
                        <div class="custom-radio">
                            <input class="custom-radio__input" type="checkbox" checked>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h4 class="text-center flex-1" style="max-width: 320px">checkbox label</h4>
        <div class="container-ui">
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-1" class="custom-checkbox__input" type="checkbox">
                            <label for="checkbox-ui-1" class="custom-checkbox__label-for">Label</label>
                        </span>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-2" class="custom-checkbox__input disabled" type="checkbox" disabled>
                            <label for="checkbox-ui-2" class="custom-checkbox__label-for">Label</label>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <span class="custom-radio">
                            <input id="radio-ui-1" class="custom-radio__input" type="checkbox">
                            <label for="radio-ui-1" class="custom-radio__label-for">Label</label>
                        </span>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <span class="custom-radio">
                            <input id="radio-ui-2" class="custom-radio__input disabled" type="checkbox" disabled>
                            <label for="radio-ui-2" class="custom-radio__label-for">Label</label>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h4 class="text-center flex-1" style="max-width: 320px">checkbox label + brand</h4>
        <div class="container-ui">
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-3" class="custom-checkbox__input" type="checkbox" checked>
                            <label for="checkbox-ui-3" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <svg class="icon">
                                    <use href="img/sprite.svg#burger"></use>
                                </svg>
                            </span>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-4" class="custom-checkbox__input disabled" type="checkbox" disabled>
                            <label for="checkbox-ui-4" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <svg class="icon">
                                    <use href="img/sprite.svg#burger"></use>
                                </svg>
                            </span>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container-ui">
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-5" class="custom-checkbox__input" type="checkbox">
                            <label for="checkbox-ui-5" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <img
                                    loading="lazy"
                                    src="img/test.png"
                                    class="image"
                                    width=""
                                    height=""
                                    alt="Изображение блока"
                                >
                            </span>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-5" class="custom-checkbox__input disabled" type="checkbox" disabled>
                            <label for="checkbox-ui-5" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <img
                                        loading="lazy"
                                        src="img/test.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </span>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Tabs</h3>
    <div class="container-ui">
        <div class="col-ui">
            class="tabs"
            <div class="row-ui ">
                <div>
                    <!--start ui content-->
                    <div class="tabs">
                        <div class="tabs-container" data-tab="tab-ui-1">
                            <div class="tabs-wrapper">
                                <div class="tabs-item">
                                    <button class="btn-reset tabs-trigger selected" type="button" data-target="0">
                                        <span class="tabs-trigger__text">Tab 1</span>
                                    </button>
                                </div>
                                <div class="tabs-item">
                                    <a class="btn-reset tabs-trigger" href="javascript:;" data-target="1">
                                        <span class="tabs-trigger__text">Tab 2</span>
                                    </a>
                                </div>
                                <div class="tabs-item">
                                    <button class="btn-reset tabs-trigger" type="button" data-target="2">
                                        <span class="tabs-trigger__text">Tab 3</span>
                                    </button>
                                </div>
                                <div class="tabs-item">
                                    <a class="btn-reset tabs-trigger" href="javascript:;" data-target="3">
                                        <span class="tabs-trigger__text">Tab 4</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?/* ".tabs-content" должен располагаться за пределами ".tabs-wrapper" */?>
                    <div class="tabs-content" data-tab-content="tab-ui-1">
                        <div class="tabs-content__panel active" data-id="0">
                            Tabs 1 content
                        </div>
                        <div class="tabs-content__panel" data-id="1">
                            Tabs 2 content
                        </div>
                        <div class="tabs-content__panel" data-id="2">
                            Tabs 3 content
                        </div>
                        <div class="tabs-content__panel" data-id="3">
                            Tabs 4 content
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
            <br>
            class="tabs slider"
            <div class="row-ui ">
                <div>
                    <!--start ui content-->
                    <div class="tabs">
                        <div class="tabs-container swiper" data-tab="tab-ui-2">
                            <div class="tabs-wrapper swiper-wrapper">
                                <div class="tabs-item swiper-slide">
                                    <button class="btn-reset tabs-trigger selected" type="button" data-target="0">
                                        <span class="tabs-trigger__text">Tab 1</span>
                                    </button>
                                </div>
                                <div class="tabs-item swiper-slide">
                                    <a class="btn-reset tabs-trigger" href="javascript:;" data-target="1">
                                        <span class="tabs-trigger__text">Tab 2</span>
                                    </a>
                                </div>
                                <div class="tabs-item swiper-slide">
                                    <button class="btn-reset tabs-trigger" type="button" data-target="2">
                                        <span class="tabs-trigger__text">Tab 3</span>
                                    </button>
                                </div>
                                <div class="tabs-item swiper-slide">
                                    <a class="btn-reset tabs-trigger" href="javascript:;" data-target="3">
                                        <span class="tabs-trigger__text">Tab 4</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?/* ".tabs-content" должен располагаться за пределами ".tabs-wrapper" */?>
                    <div class="tabs-content" data-tab-content="tab-ui-2">
                        <div class="tabs-content__panel active" data-id="0">
                            Tabs 1 content
                        </div>
                        <div class="tabs-content__panel" data-id="1">
                            Tabs 2 content
                        </div>
                        <div class="tabs-content__panel" data-id="2">
                            Tabs 3 content
                        </div>
                        <div class="tabs-content__panel" data-id="3">
                            Tabs 4 content
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Select (select2)</h3>
    <div class="container-ui">
        <div class="col-ui">
            select class="input-reset form__input form__input--select js-select2"
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <form id="" class="form authreg-form" method="POST" action="">
                        <div class="page-content__section">
                            <div class="page-content__section-item">
                                <div class="page-content__section-item-title">
                                    <span>Селект <span class="required-star">*</span></span>
                                </div>
                                <div class="form__field">
                                    <select
                                            id=""
                                            name=""
                                            class="input-reset form__input form__input--select2 js-select2"
                                            required
                                    >
                                        <option value="0">Селект 1</option>
                                        <option value="1">Селект 2</option>
                                        <option value="2">Селект 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Modal</h3>
    <div class="container-ui">
        <div class="col-ui">
            <a href="https://fancyapps.com/" target="_blank">Using plugin fancybox</a>
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill fancy-modal" type="button" data-fancybox="dialog" data-src="#modal-test111">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#pencil"></use>
                        </svg>
                        <span class="btn__text">Вызов модалки fancy</span>
                    </button>

                    <div id="modal-test111" class="modal modal-request" style="display:none;">
                        <div class="modal__content">
                            <div class="modal__title">Учет времени волонтера</div>
                            <div class="modal-fields">
                                <div class="modal-fields__item modal-request__employee">
                                    <div class="modal-request__employee-view">
                                        <picture>
                                            <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/card-photo-volunteer.png"
                                                    class="image"
                                                    width="42"
                                                    height="42"
                                                    alt="Фото карточки"
                                            >
                                        </picture>
                                    </div>
                                    <div class="modal-request__employee-descr">
                                        <div class="modal-request__employee-descr-status">ФИО</div>
                                        <div class="modal-request__employee-descr-name">Трофимов Тимофей Арсеньевич</div>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="page-content__section-item-title">
                                        <span>
                                            <span class="custom-checkbox">
                                                <input id="checkboxui-3" class="custom-checkbox__input" type="checkbox">
                                                <label for="checkboxui-3" class="custom-checkbox__label-for"></label>
                                            </span>
                                            <span class="text5-color">Удаленная работа</span>
                                        </span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id44">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id44">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="page-content__section-item">
                                        <div class="page-content__section-item-title">
                                            <span>Указать время вручную</span>
                                        </div>
                                        <div class="form__field">
                                            <input
                                                    id=""
                                                    class="input-reset form__input"
                                                    type="text"
                                                    name=""
                                                    placeholder=""
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="page-content__section-item-title">
                                        <span>Оценка</span>
                                    </div>
                                    <div class="form__field">
                                        <div class="page-content__intro-rate">
                                            <div class="page-content__intro-rate-stars">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="page-content__section-item-title">
                                        <span>Оставить отзыв</span>
                                    </div>
                                    <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Расскажите об опыте работы с волонтером"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="form__field form__field-btn">
                                        <button class="btn-reset btn btn--fill">
                                            <span class="btn__text">Сохранить</span>
                                        </button>
                                        <button class="btn-reset btn btn--fill btn--gray flex-1">
                                            <span class="btn__text">Сохранить и создать новую задачу</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Check all</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%; gap: 15px;">
                    <!--start ui content-->
                    <div class="custom-checkbox">
                        <input
                                class="custom-checkbox__input custom-checkbox__input--checkline checkall-for"
                                type="checkbox"
                                data-checkall-for="checkallTest"
                        >
                        all
                    </div>

                    <div class="custom-checkbox">
                        <input
                                class="custom-checkbox__input checkall-group"
                                type="checkbox"
                                data-checkall-group="checkallTest"
                        >
                        single
                    </div>
                    <div class="custom-checkbox">
                        <input
                                class="custom-checkbox__input checkall-group"
                                type="checkbox"
                                data-checkall-group="checkallTest"
                        >
                        single
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Tooltip</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    tooltip -&nbsp;
                    <!--start ui content-->
                    <span class="tooltip"
                          data-tippy-content="<div class='tooltip-content'>
                                                    <p>Принимает <a href='javascript:;'>HTML</a></p>
                                                    <p>Можно изменить trigger на 'click' в initTooltips() ->
                                                        <a href='javascript:;' style='color: red;'>trigger: 'click'</a>
                                                    </p>
                                                </div>"
                    >
                        <svg class="icon">
                            <use href="img/sprite.svg#info"></use>
                        </svg>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Обёртка для input flatpickr</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%; max-width: 500px;">
                    <!--start ui content-->
                    <div class="form__field form__field--flatpickr">
                        <input
                                id=""
                                class="input-reset form__input flatpickr"
                                type="text"
                                name=""
                                placeholder="дата"
                        >
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Star rating (input)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating star-rating--max">
                        <form class="star-rating__container" action="" method="post">
                            <input
                                    id="starrateTestOne"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="5"
                            >
                            <label for="starrateTestOne">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestTwo"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="4"
                            >
                            <label for="starrateTestTwo">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestThree"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="3"
                            >
                            <label for="starrateTestThree">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestFour"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="2"
                            >
                            <label for="starrateTestFour">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestFive"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="1"
                            >
                            <label for="starrateTestFive">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>
                        </form>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Star rating (static: desk - 5stars/ mob - 5stars)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating-wrapper js-star-rating">
                        <span class="star-rating-value" data-value="4.8">4.8</span> <!-- visually-hidden -->
                        <span class="star-rating">
                            <span class="star-rating__container">
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                            </span>
                        </span>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Star rating (static: desk - 5stars/ mob - 1stars)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating-wrapper star-rating-wrapper--mobile-frame js-star-rating">
                        <span class="star-rating-value" data-value="2.2">2.2</span> <!-- visually-hidden -->
                        <span class="star-rating">
                            <span class="star-rating__container">
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                            </span>
                        </span>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Star rating (static: desk - 1stars/ mob - 1stars)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating-wrapper star-rating-wrapper--frame">
                        <span class="star-rating-value" data-value="3.5">3.5</span> <!-- visually-hidden -->
                        <span class="star-rating">
                            <span class="star-rating__container">
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                            </span>
                        </span>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>
    <br>
    <br>
    <br>

</body>
</html>