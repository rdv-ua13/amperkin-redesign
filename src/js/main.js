document.addEventListener("DOMContentLoaded", () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTouch();
    this.initHeaderScroll();
    this.initBurger();
    this.initOverlay();
    this.initMenu();
    this.setMenuHeightOverflow();
    this.initMenuCatalogSubmenu();
    this.initFancyBehavior();
    this.initClientTypeBehavior();
    this.initTabs();
    this.initTabsOnscroll();
    this.initCartOnscroll();
    this.initNotification();
    this.initPasswordSwitcher();
    this.initBasicSlider();
    this.initMiniSlider();
    this.initSwiperTabs();
    this.initTagbarSlider();
    this.initSliders();
    this.initSelect2();
    this.setStaticStarRating();
    this.setVisibleStarRatingGrade();
    this.setCardProductActMore();
    this.initReadmore();
    this.initCartQuantity();
    /*this.initShareLink();*/
    this.initCheckall();
    this.initTooltips();
    this.initMaskedInput();
    this.initDatepicker();
    this.initDeleteTrigger();
    this.initDropfiles();
    this.initInputSearchBehavior();
    this.initSearchResBehavior();
    this.initMobileCitySelection();
    this.initCatalogContentSort();




    /*this.initPopupMenuMobile();*/
    /*this.initHeaderActionsMobile();*/
    /*this.initNotice();*/
    /*this.initRegStepper();*/
    /*this.initValidationNumCode();*/
    /*this.initNavTabs();*/
    /*this.initPageContentTabs();*/

    /*this.initProgressBar();*/
    /*this.initFormProcessing();*/
    /*this.initMainscreenSlider();*/
    /*this.initMobileSlider();*/
    /*this.initResponsiveCardSlider();*/
    /*this.initHandlerCurrentUser();*/
    /*this.initTagSelected();*/

    /*this.initAddList();*/

    /*this.initAccordion();*/

    /*this.setSettingsBarHeight();*/
};

// Initialize device check
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
}

// Initialize header scroll
application.prototype.initHeaderScroll = function () {
    $(window).scroll(function () {
        setHeaderScroll();
    });
    setHeaderScroll();

    function setHeaderScroll() {
        if ($(window).scrollTop() > 125) {
            $('.header').addClass('scrolled');
        } else {
            $('.header').removeClass('scrolled');
        }
    }
};

// Initialize disable scroll
application.prototype.disableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    const paddingOffset = `${(window.innerWidth - body.offsetWidth)}px`;

    document.documentElement.style.scrollBehavior = 'none';
    fixBlocks.forEach(el => { el.style.paddingRight = paddingOffset; });
    body.style.paddingRight = paddingOffset;
    body.classList.add('dis-scroll');
};

// Initialize enable scroll
application.prototype.enableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    fixBlocks.forEach(el => { el.style.paddingRight = '0px'; });
    body.style.paddingRight = '0px';
    body.classList.remove('dis-scroll');
};

// Initialize burger-menu
application.prototype.initBurger = function () {
    const body = document?.querySelector('body');
    const burger = document?.querySelector('[data-menu-spoiler]');
    const menu = document?.querySelector('[data-menu]');
    const menuClose = document?.querySelector('[data-menu-close]');

    burger?.addEventListener('click', (e) => {
        burger?.classList.toggle('active');
        menu?.classList.toggle('active');

        if (menu?.classList.contains('active')) {
            burger?.setAttribute('aria-expanded', 'true');
            burger?.setAttribute('aria-label', 'Закрыть меню');
            this.disableScroll();
        } else {
            burger?.setAttribute('aria-expanded', 'false');
            burger?.setAttribute('aria-label', 'Открыть меню');
            this.enableScroll();
        }
    });

    menuClose?.addEventListener('click', () => {
        setMenuClose();
        $('.overlay').remove();
    });

    $(window).on('resize', function () {
        setMenuClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setMenuClose();
        }
    });

    $(document).on('click', function (e) {
        if ($('.overlay').is(e.target)) {
            setMenuClose();
        }
    });

    function setMenuClose() {
        burger?.setAttribute('aria-expanded', 'false');
        burger?.setAttribute('aria-label', 'Открыть меню');
        burger.classList.remove('active');
        menu.classList.remove('active');
        body?.classList.remove('overflow-hidden');
        $('.overlay').remove();
        return application.prototype.enableScroll();
    }
};

// Initialize overlay element
application.prototype.initOverlay = function () {
    if($('[data-overlay]').length) {
        const body = $('body');
        const triggerEl = $('[data-overlay]');

        $(triggerEl).on('click', function () {
            body.addClass('overflow-hidden');
            $("<div class='overlay'></div>").insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay').is(e.target)) {
                setTargetAction()
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setTargetAction()
            }
        });
        
        function setTargetAction() {
            body.removeClass('overflow-hidden');
            $('.overlay').remove();
            return application.prototype.enableScroll();
        }
    }
};

// Initialize menu call
application.prototype.initMenu = function () {
    const catalogSpoiler = $('[data-catalog-spoiler]');
    const catalog = $('[data-catalog]');
    const catalogClose = $('[data-catalog-close]');
    let overlayTrigger = $('[data-overlay-transparent]');

    catalogSpoiler.on('click', () => {
        setCatalogSwitch();
    });

    catalogClose.on('click', () => {
        setCatalogClose();
    });

    setOverlay();

    $(window).on('resize', function () {
        setCatalogClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setCatalogClose();
        }
    });

    function setCatalogSwitch() {
        if (catalog.hasClass('active') && catalogSpoiler.hasClass('active')) {
            catalogSpoiler.attr('aria-expanded', 'false');
            catalogSpoiler.attr('aria-label', 'Открыть меню');
            catalogSpoiler.removeClass('active');
            catalog.removeClass('active');
        } else {
            catalogSpoiler.attr('aria-expanded', 'true');
            catalogSpoiler.attr('aria-label', 'Закрыть меню');
            catalogSpoiler.addClass('active');
            catalog.addClass('active');
        }
    }

    function setCatalogClose() {
        catalogSpoiler.attr('aria-expanded', 'false');
        catalogSpoiler.attr('aria-label', 'Открыть меню');
        catalogSpoiler.removeClass('active');
        catalog.removeClass('active');
        $('.menu-catalog-header').removeClass('submenu');
        $('.overlay-transparent').remove();
    }

    function setOverlay() {
        overlayTrigger.on('click', function () {
            $("<div class='overlay-transparent'></div>").insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay-transparent').is(e.target)) {
                setCatalogClose();
            }
        });
    }
};

// Initialize menu height overflow
application.prototype.setMenuHeightOverflow = function () {
    defineMenuOverflow();
    $(window).on('resize', function () {
        defineMenuOverflow();
    });

    function defineMenuOverflow() {
        let windowHeight = $(window).outerHeight();
        let menuHeight = $('.menu-catalog').outerHeight();

        if (menuHeight > windowHeight) {
            $('.menu-catalog').addClass('menu-catalog-overflow');
        } else {
            $('.menu-catalog').removeClass('menu-catalog-overflow');
        }
    }
};

// Initialize menu catalog behavior
application.prototype.initMenuCatalogSubmenu = function () {
    const catalogSpoiler = $('[data-catalog-spoiler]');
    const catalogTitle = $('[data-catalog-title]');
    const rootItem = $('[data-submenu-section]');

    catalogSpoiler.on('click', function (e) {
        const currentRootItem = $(".menu-catalog-root-link[data-submenu-section='0']");
        const currentSubmenuItem = $(".menu-catalog-submenu-section[data-root-pointer='0']");
        let currentCatalogTitle = catalogTitle.data('catalog-title');

        catalogTitle.text(currentCatalogTitle);
        rootItem.closest('.menu-catalog-root').removeClass('hide');
        rootItem.closest('.menu-catalog').find('.menu-catalog-submenu').removeClass('active');
        $('.menu-catalog-root-link').removeClass('selected');
        currentRootItem.addClass('selected');
        $('.menu-catalog-submenu-section').removeClass('active');
        currentSubmenuItem.addClass('active');
    });

    if (window.matchMedia('(min-width: 992px)').matches) {
        if (!$('html').hasClass('touch')) {
            rootItem.on('mouseover', function () {
                let rootItemId = $(this).data('submenu-section');

                $('.menu-catalog-submenu-section').removeClass('active');
                $(".menu-catalog-submenu-section[data-root-pointer='" + rootItemId + "']").addClass('active');
            });
        } else {
            rootItem.on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                let rootItemId = $(this).data('submenu-section');

                $('.menu-catalog-submenu-section').removeClass('active');
                $(".menu-catalog-submenu-section[data-root-pointer='" + rootItemId + "']").addClass('active');
            });
        }
    } else if (window.matchMedia('(max-width: 991.98px)').matches) {
        rootItem.on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            let rootItemId = $(this).data('submenu-section');
            let currentCatalogTitle = $(this).text();

            catalogTitle.text(currentCatalogTitle);
            $(this).closest('.menu-catalog').find('.menu-catalog-header').addClass('submenu');
            $(this).closest('.menu-catalog-root').addClass('hide');
            $(this).closest('.menu-catalog').find('.menu-catalog-submenu').addClass('active');
            $('.menu-catalog-submenu-section').removeClass('active');
            $(".menu-catalog-submenu-section[data-root-pointer='" + rootItemId + "']").addClass('active');
        });

        $('.menu-catalog-title-back').on('click', function (e) {
            let currentCatalogTitle = catalogTitle.data('catalog-title');

            catalogTitle.text(currentCatalogTitle);
            $(this).closest('.menu-catalog-header').removeClass('submenu');
            $(this).closest('.menu-catalog').find('.menu-catalog-root').removeClass('hide');
            $(this).closest('.menu-catalog').find('.menu-catalog-submenu').removeClass('active');
        });
    }
};

// Initialize custom fancy behavior
application.prototype.initFancyBehavior = function () {
    const body = $('body');
    const fancybox = $('[data-fancybox]');
    const burger = $('[data-menu-spoiler]');
    const menu = $('[data-menu]');
    const catalog = $('[data-catalog]');
    const catalogSpoiler = $('[data-catalog-spoiler]');

    fancybox.on('click', function () {
        let currentSrc = $(this).data('src');

        menu.removeClass('active');
        burger.attr('aria-expanded', 'false');
        burger.attr('aria-label', 'Открыть меню');
        catalog.removeClass('active');
        catalogSpoiler.attr('aria-expanded', 'false');
        catalogSpoiler.attr('aria-label', 'Открыть меню');
        $('.overlay').remove();
        $('.overlay-transparent').remove();

        $('.modal').not(currentSrc).closest('.fancybox__container.is-animated').click();
    });

    $(document).on('click', function (e) {
        if ($('.fancybox__slide.is-selected.has-inline').is(e.target) || $('.fancybox__slide .carousel__button.is-close').is(e.target)) {
            body.removeClass('overflow-hidden');
            return application.prototype.enableScroll();
        }
    });
};

// Initialize custom '.client-type' behavior
application.prototype.initClientTypeBehavior = function () {
    const elem = $('[data-ct]');

    elem.on('click', function () {
        if($(this).is('#ct-entity')) {
            $('[data-ct-entity-bind]')
                .fadeIn()
                .animate({ opacity: 1 }, 200);
        } else {
            $('[data-ct-entity-bind]')
                .fadeOut(200);
        }
    });
};

// Initialize tabs
application.prototype.initTabs = function () {
    if ($('.tabs').length) {
        const tabsContainer = $('.tabs-container');
        let currentSelected = 0;
        let currentTabBlockId = null;

        setSelectedTab();
        $(window).on('resize', setSelectedTab());

        $('.tabs-item').on('click', function () {
            currentTabBlockId = $(this).closest(tabsContainer).data('tab');

            $(".tabs-container[data-tab='" + currentTabBlockId + "']").find('.tabs-trigger').removeClass('selected');
            $(this).find('.tabs-trigger').removeClass('notice').addClass('selected');

            currentSelected = $(this).find(".tabs-trigger").data("target");
            $(".tabs-content[data-tab-content='" + currentTabBlockId + "']").find('.tabs-content__panel').removeClass('active');
            $(".tabs-content[data-tab-content='" + currentTabBlockId + "']").find(".tabs-content__panel[data-id='" + currentSelected + "']").addClass('active');
        });

        function setSelectedTab () {
            if (window.matchMedia('(min-width: 992px)').matches) {
                $('.tabs-trigger').removeClass('selected');
                $('.tabs-trigger.desktop-first-elem').addClass('selected');
                $('.tabs-content__panel').removeClass('active');
                $('.tabs-content__panel.desktop-first-elem').addClass('active');
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                $('.tabs-trigger').removeClass('selected');
                $('.tabs-trigger.mobile-first-elem').addClass('selected');
                $('.tabs-content__panel').removeClass('active');
                $('.tabs-content__panel.mobile-first-elem').addClass('active');
            }
        }
    }
};

// Initialize tabs on scroll
application.prototype.initTabsOnscroll = function () {
    if ($('[data-fixed-toolbar-coord]').length) {
        const elem = $('[data-fixed-toolbar-coord]');

        setFixedToolbar();
        $(window).scroll(function() {
            setFixedToolbar();
        });

        function setFixedToolbar() {
            let scrollValue = $(window).scrollTop();

            if (window.matchMedia('(min-width: 1380px)').matches) {
                let headerHeight = elem.outerHeight();
                let elemPos = elem.offset().top - headerHeight;

                if(scrollValue > elemPos) {
                    $('.header').addClass('border-off');
                    $('.top-fixed-toolbar').addClass('active');
                } else {
                    $('.header').removeClass('border-off');
                    $('.top-fixed-toolbar').removeClass('active');
                }
            } else if (window.matchMedia('(min-width: 992px) and (max-width: 1379.98px)').matches) {
                let elemPos = elem.offset().top;

                if(scrollValue > elemPos) {
                    $('.header').addClass('border-off');
                    $('.top-fixed-toolbar').addClass('active');
                } else {
                    $('.header').removeClass('border-off');
                    $('.top-fixed-toolbar').removeClass('active');
                }
            } else {
                $('.header').removeClass('border-off');
                $('.top-fixed-toolbar').removeClass('active');
            }
        }
    }
};

// Initialize cart-buy fixed panel on scroll
application.prototype.initCartOnscroll = function () {
    if ($('[data-fixed-cart-coord]').length && $('[data-cart-coord]').length) {
        const elem = $('[data-cart-coord]');

        setFixedToolbar();
        $(window).scroll(function() {
            setFixedToolbar();
        });

        function setFixedToolbar() {
            let scrollValue = $(window).scrollTop();

            if (window.matchMedia('(max-width: 991.98px)').matches) {
                let headerHeight = elem.outerHeight();
                let elemPos = elem.offset().top + headerHeight;

                if(scrollValue > elemPos) {
                    $('[data-fixed-cart-coord]').addClass('active');
                } else {
                    $('[data-fixed-cart-coord]').removeClass('active');
                }
            } else {
                $('[data-fixed-cart-coord]').removeClass('active');
            }
        }
    }
};

// Initialize notification
application.prototype.initNotification = function () {
    const actionNotice = $('.action-notice');
    const noticeBtn = $('[data-notice]');

    noticeBtn.on('click', function () {
        let currentDataValue = noticeBtn.data('notice');

        if (!noticeBtn.hasClass('added')) {
            actionNotice.addClass('added');
        } else {
            actionNotice.removeClass('added');
        }

        if($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            $(this).addClass('selected');
        }

        // favorites
        // estimate
        // compare
        // todo - finish logic (change content onclick)
        /*switch (currentDataValue) {
            case 'favorites':
                actionNotice
                    .append(
                        `<div class='action-notice__view'>
                            <svg class='icon'>
                                <use href='img/sprite.svg#bookmarks'></use>
                            </svg>
                        </div>
                        <div class='action-notice__descr'>
                            <div class='action-notice__title'>Товар добавлен в избранное</div>
                            <div class='action-notice__text'>В списке 2 товара</div>
                        </div>`
                    );
                break;
            case 'estimate':
                break;
            case 'compare':
                break;
            default: ;
        }*/

        showNotification();
        setTimeout(hideNotification, 5000);

    });

    function showNotification() {
        $('.action-notice')
            .fadeIn()
            .animate({ opacity: 1 }, 200);
    }

    function hideNotification() {
        $('.action-notice').fadeOut('slow');
    }
};

// todo - set using
// Initialize morph
application.prototype.initMorph = function (int, array) {
    return (array = array || ['товар', 'товара', 'товаров']) && array[(int % 100 > 4 && int % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(int % 10 < 5) ? int % 10 : 5]];
};

// Initialize password-switcher
application.prototype.initPasswordSwitcher = function () {
    if ($('input[type=password]').length) {
        $(document).on('click', 'input[data-password-switcher]', function(){
            if ($(this).is(':checked')) {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'text');
                $(this).closest('.form__input-btn').addClass('show');
            } else {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'password');
                $(this).closest('.form__input-btn').removeClass('show');
            }
        });
    }
};

// Initialization basic slider
application.prototype.initBasicSlider = function () {
    if ($('.basic-slider').length) {
        const slider = $('[data-basic-slider]');

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            const basicSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: 12,
                /*loop: true,*/
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + ' .swiper-button-prev',
                },
                breakpoints: {
                    992: {
                        spaceBetween: 40,
                        /*allowTouchMove: false*/
                    },
                }
            };
            let basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider', basicSliderSetting);
        });
    }
};

// Initialization mini slider - change images on mouse movement
application.prototype.initMiniSlider = function () {
    if ($('.mini-slider').length) {
        $('.mini-slider').each(function(index, element) {
            if (!$(element).hasClass('init-slider')) {
                $(element).addClass('init-slider');
                let slideLength = $(element).find('.mini-slider__slide').length;
                for (let i = 0; i < slideLength; i++) {
                    $(element).find('.mini-slider__dots').append('<li class="mini-slider__dot"></li>');
                }
                $(element).find('.mini-slider__slide:eq(0)').find('.mini-slider__img').css('opacity', '1');
                $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(0)').addClass('mini-slider__dot--active');
                $(element).find('.mini-slider__slide').on('touchstart mouseover', function(event) {
                    if ($(window).innerWidth() > 991) {
                        let thisOp = $(element).find('.mini-slider__slide').index(this);
                        $(element).find('.mini-slider__slide').find('.mini-slider__img').css('opacity', '0');
                        $(element).find(this).find('.mini-slider__img').css('opacity', '1');

                        $(element).find('.mini-slider__dots').find('.mini-slider__dot').removeClass('mini-slider__dot--active');
                        $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(' + thisOp + ')').addClass('mini-slider__dot--active');
                        event.stopPropagation();
                        event.preventDefault();
                    }
                });
                // if has nav btns
                /*$(element).find('.mini-slider__button').on('click', function(event) {
                    event.preventDefault();
                    let $currentVisibleSlide = $(element).find('.mini-slider__img').filter(function() {
                        return $(this).css('opacity') == '1';
                    }).closest('.mini-slider__slide')
                        , slidesCount = $(element).find('.mini-slider__slide').length;

                    $(element).find('.mini-slider__img').css('opacity', '0');
                    $(element).find('.mini-slider__dots').find('.mini-slider__dot').removeClass('mini-slider__dot--active');
                    if ($(this).hasClass('mini-slider__button--prev')) {
                        let prevSlideIndex = $currentVisibleSlide.index() - 1;
                        $(element).find('.mini-slider__img:eq(' + prevSlideIndex + ')').css('opacity', '1');
                        $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(' + prevSlideIndex + ')').addClass('mini-slider__dot--active');
                    }
                    if ($(this).hasClass('mini-slider__button--next')) {
                        let nextSlideIndex = $currentVisibleSlide.index() + 1;
                        if (nextSlideIndex >= slidesCount) {
                            nextSlideIndex = 0;
                        }
                        $(element).find('.mini-slider__img:eq(' + nextSlideIndex + ')').css('opacity', '1');
                        $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(' + nextSlideIndex + ')').addClass('mini-slider__dot--active');
                    }
                });*/
            }
        });
    }
};

// Initialize swiper tabs
application.prototype.initSwiperTabs = function () {
    if ($(".tabs-container.swiper").length) {
        const swiperTabSettings = {
            slidesPerView: "auto",
        };
        let swiperTabs = new Swiper(".tabs-container.swiper", swiperTabSettings);
    }
};

// Initialization tag-bar slider
application.prototype.initTagbarSlider = function () {
    if ($('[data-tag-bar-slider]').length) {
        const slider = $('[data-tag-bar-slider]');

        slider.each(function (i) {
            const tagbarSliderSetting = {
                slidesPerView: 'auto',
                spaceBetween: 8,
                direction: 'horizontal',
            };
            let tagbarSlider = null;

            slider.eq(i).addClass('tag-bar-slider-' + i);

            setCheckedSlide();
            breakpointChecker();
            $(window).on('resize', breakpointChecker);

            function breakpointChecker() {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    if(tagbarSlider !== null) tagbarSlider.destroy(true, true);
                    tagbarSlider = null;
                }
                else if (window.matchMedia('(max-width: 991.98px)').matches) {
                    tagbarSlider = new Swiper('.tag-bar-slider-' + i, tagbarSliderSetting);
                }
            }

            function setCheckedSlide() {
                $('.tag-bar-slider-' + i + ' .tag-bar-slide-item input').on('click', function () {
                   if($(this).prop('checked')) {
                       $(this).closest('.tag-bar-slide-item').addClass('checked');
                   } else {
                       $(this).closest('.tag-bar-slide-item').removeClass('checked');
                   }
                });
            }
        });
    }
};

// Initialize sliders
application.prototype.initSliders = function () {
    if ($('.product-card-descr-slider').length) {
        let productCardDescrSliderThumb = null;
        let productCardDescrSlider = null;

        breakpointChecker();
        $(window).on('resize', breakpointChecker);

        function breakpointChecker() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                productCardDescrSlider = null;

                productCardDescrSliderThumb = new Swiper('.product-card-descr-slider-thumb', {
                    spaceBetween: 8,
                    slidesPerView: 'auto',
                    freeMode: true,
                    watchSlidesProgress: true,
                });
                productCardDescrSlider = new Swiper('.product-card-descr-desktop .product-card-descr-slider', {
                    spaceBetween: 8,
                    pagination: {
                        el: '.product-card-descr-slider .swiper-pagination',
                    },
                    thumbs: {
                        swiper: productCardDescrSliderThumb,
                    },
                });
                initStopSlideVideoOnChange();
            }
            else if (window.matchMedia('(max-width: 991.98px)').matches) {
                productCardDescrSliderThumb = null;
                productCardDescrSlider = null;

                productCardDescrSlider = new Swiper('.product-card-descr-mobile .product-card-descr-slider', {
                    spaceBetween: 8,
                    pagination: {
                        el: '.product-card-descr-slider .swiper-pagination',
                    },
                });
                initStopSlideVideoOnChange();
            }
        }

        function initStopSlideVideoOnChange() {
            let slideVideo = $('.product-card-descr-slider .swiper-slide video');
            productCardDescrSlider.on('slideChange', function () {
                slideVideo.each(function(i) {
                    this.pause();
                    this.currentTime = 0;
                    this.play();
                });
            });
        }
    }

    if ($('.nav-breadcrumbs').length) {
        const sliderNavBreadcrumbs = new Swiper('.nav-breadcrumbs', {
            spaceBetween: 0,
            slidesPerView: 'auto',
        });
    }

    if ($('.menu-catalog-submenu-banners').length) {
        $('.menu-catalog-submenu-banners').each(function (i) {
            let currentElem = $(this).find('.swiper').addClass('menu-catalog-submenu-banners-slider-' + i);

            let sliderCatalogSubmenuBanners = new Swiper('.menu-catalog-submenu-banners-slider-' + i, {
                spaceBetween: 12,
                slidesPerView: 'auto',
                breakpoints: {
                    992: {
                        spaceBetween: 40
                    },
                }
            });
        });
    }

    if ($('.mobile-search-results-hint').length) {
        const MobileSearchSliderSettings = {
            spaceBetween: 8,
            slidesPerView: 'auto',
            watchOverflow: true,
            freeMode: true,
            mousewheel: true
        };

        let sliderSearchResultsHint = new Swiper('.search-results .mobile-search-results-hint .swiper', MobileSearchSliderSettings);
        let sliderMobileCityHint = new Swiper('.mobile-city .mobile-search-results-hint .swiper', MobileSearchSliderSettings);
    }
};

// Initialize select2 plagin
application.prototype.initSelect2 = function () {
    if ($('.js-select2').length) {
        $('.js-select2').select2();
    }
};

// Set behavior static star-rating
application.prototype.setStaticStarRating = function () {
    if ($('[data-star-rate-static]').length) {
        $('[data-star-rate-static]').each(function (i) {
            const rating = $(this).find('.star-rating');
            const value = parseInt($(this).find('.star-rating-value').data("value"));

            switch (value) {
                case 0:
                    rating.addClass('star-rating-0');
                    break;
                case 1:
                    rating.addClass('star-rating-1');
                    break;
                case 2:
                    rating.addClass('star-rating-2');
                    break;
                case 3:
                    rating.addClass('star-rating-3');
                    break;
                case 4:
                    rating.addClass('star-rating-4');
                    break;
                case 5:
                    rating.addClass('star-rating-5');
                    break;
                default:
                    rating.addClass('star-rating-0');
            }
        });
    }
};

// Set caption to star rating
application.prototype.setVisibleStarRatingGrade = function () {
    if ($('.star-rating-label').length) {
        let caption = '';

        $('[data-star-grade]').hover(
            function () {
                caption = $(this).data('star-grade');

                $(this).closest('.star-rating-label').find('.star-rating-grade').text(caption);
            },
            function () {
                $(this).closest('.star-rating-label').find('.star-rating-grade').text('');
            }
        );
    }
};

// Set behavior to button "more" in card-product
application.prototype.setCardProductActMore = function () {
    if ($('[data-card-product-act-more]').length) {
        $('[data-card-product-act-more]').on('click', function () {
            if(!$(this).hasClass('active')) {
                $('[data-card-product-act-more]').not($(this)).removeClass('active');
                $('[data-card-product-act-content]').removeClass('active');
                $(this).addClass('active');
                $(this).siblings('[data-card-product-act-content]').addClass('active');
            } else {
                $(this).removeClass('active');
                $(this).siblings('[data-card-product-act-content]').removeClass('active');
            }
        });

        $(document).on('click', function (e) {
            if ($('.card-product-act').is(e.target) || $('.card-product-act').has(e.target).length === 0) {
                $('[data-card-product-act-more]').removeClass('active');
                $('[data-card-product-act-content]').removeClass('active');
            }
        });
    }
};

// Initialize readmore plugin
application.prototype.initReadmore = function () {
    if ($('[data-spoiler]').length) {
        const spoiler = $('[data-spoiler]');

        spoiler.each(function (i) {
            let currentElemHeight = spoiler.eq(i).data("collapsed-height");
            spoiler.eq(i).addClass("spoiler-" + i);

            $(".spoiler-" + i).readmore({
                collapsedHeight: currentElemHeight,
                moreLink: '<a href="javascript:;" class="link-dashed link-red spoiler-trigger">\n' +
                    '                                        <span class="btn__text">Все характеристики</span>\n' +
                    '                                    </a>',
                lessLink: '<a href="javascript:;" class="link-dashed link-red spoiler-trigger">\n' +
                    '                                        <span class="btn__text">Скрыть</span>\n' +
                    '                                    </a>'
            });
        });
    }
};

// Initialize cart quantity
application.prototype.initCartQuantity = function () {
    if ($('.cart-quantity').length) {
        $('.cart-buy .cart-in').on("click", function() {
            if(!$(this).hasClass('active')) {
                $(this).addClass('active');
                $(this).closest('.cart-buy').find('.cart-quantity').removeClass('disabled');
                $(this).closest('.cart-buy').find('.cart-quantity-btn--remove').addClass('selected');
            } else {
                $(this).removeClass('active');
                $(this).closest('.cart-buy').find('.cart-quantity').addClass('disabled');
                $(this).closest('.cart-buy').find('.cart-quantity-btn--remove').removeClass('selected');
                $(this).closest('.cart-buy').find('input.cart-quantity-input').val(1);
            }
        });

        $('.cart-quantity-btn--remove').on('click', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                $(this).closest('.cart-buy').find('.cart-in').removeClass('active');
                $(this).closest('.cart-quantity').addClass('disabled');
            }
        });

        $('.cart-quantity-btn').on('click', function(e) {
            let $button = $(this);
            let oldValue = $button.closest('.cart-quantity').find('input.cart-quantity-input').val();
            let mult = parseInt($button.closest('.cart-quantity').find('input.cart-quantity-input').data('mult'));
            let newVal = null;

            if(mult <= 0 || isNaN(mult)) {
                mult = 1;
            }

            if($button.data('value') === 'qty-add') {
                newVal = parseInt(oldValue) + mult;

                if(newVal > 1) {
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').removeClass('selected');
                } else {
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').addClass('selected');
                }
            } else {
                if (oldValue > 0) {
                    newVal = parseInt(oldValue) - mult;
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').removeClass('selected');

                    if(oldValue > 1 && oldValue < 3) {
                        $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').addClass('selected');
                    }
                } else {
                    newVal = 0;
                }
            }

            if(newVal == 0) {
                newVal = mult;
            }

            $button.closest('.cart-quantity').find('input.cart-quantity-input').val(newVal).trigger('change');
        });
    }
};

// todo - tmp don`t work
// Initialize share link
application.prototype.initShareLink = function () {
    if ($('[data-share-link]').length) {
        let copyBtn = $('[data-share-link-btn]');

        copyBtn.on('click', function () {
            let copyValue = $(this).closest('[data-share-link]').find('[data-share-link-input]');
            copyToClipboard(copyValue);
        });

        function copyToClipboard(element) {
            let temp = $('<input class="visually-hidden">');
            $(this).append(temp);
            temp.attr("contenteditable", true)
                .html(element.html()).select()
                .on("focus", function() { document.execCommand('selectAll',false,null); })
                .focus();
            document.execCommand("copy");
            temp.remove();
        }
    }
};

// Initialize check all group
application.prototype.initCheckall = function () {
    if ($(".checkall-for").length) {
        initOnloadCheckall();
        initOnclickCheckallFor();
        initOnclickCheckallGroup();

        function initOnloadCheckall() {
            $(".checkall-for").each(function () {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data("checkall-for");
                let checkallForState = false;
                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallForHandling();
                compareGroupState(checkallGroupState);

                function checkallForHandling() {
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(":checked")) {
                            checkallForState = true;
                            checkallGroupState.push(true);
                        } else if(!checkallGroupElem.is(":checked")) {
                            checkallGroupState.push(false);
                        }
                    });

                    if(checkallForState === false) {
                        checkallFor.prop("checked", false);
                    } else if(checkallForState === true) {
                        checkallFor.prop("checked", true);
                    }
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push("checked");
                        } else if(arr[i] === false) {
                            checkallGroupCheckedState.push("notChecked");
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === "checked");

                    if(allChecked) checkallFor.removeClass("custom-checkbox__input--checkline");
                }
            });
        }

        function initOnclickCheckallFor() {
            $(".checkall-for").on("click", function (e) {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data("checkall-for");

                if(checkallFor.is(":checked")) {
                    checkallFor.prop("checked", true);
                    checkallFor.removeClass("custom-checkbox__input--checkline");
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", true);
                } else if(!checkallFor.is(":checked")) {
                    checkallFor.prop("checked", false);
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", false);
                }
            });
        }

        function initOnclickCheckallGroup() {
            $(".checkall-group").on("click", function (e) {
                const checkallGroup = $(this);
                const checkallGroupData = checkallGroup.data("checkall-group");

                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallGroupHandling();
                compareGroupState(checkallGroupState);

                function checkallGroupHandling() {
                    $(".checkall-group[data-checkall-group='" + checkallGroupData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(":checked")) {
                            checkallGroupState.push(true);
                        } else if(!checkallGroupElem.is(":checked")) {
                            checkallGroupState.push(false);
                        }
                    });
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push("checked");
                        } else if(arr[i] === false) {
                            checkallGroupCheckedState.push("notChecked");
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === "checked");
                    const allNotChecked = checkallGroupCheckedState.every(elem => elem === "notChecked");

                    if(allChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop("checked", true);
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").removeClass("custom-checkbox__input--checkline");
                    } else if(allNotChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop("checked", false);
                    } else if(!allChecked && !allNotChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop("checked", true);

                        if(!$(".checkall-for[data-checkall-for='" + checkallGroupData + "']").hasClass("custom-checkbox__input--checkline")) {
                            $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").addClass("custom-checkbox__input--checkline");
                        }
                    }
                }
            });
        }
    }
};

// Initialize tooltips
application.prototype.initTooltips = function () {
    if ($(".tooltip").length) {
        tippy(".tooltip", {
            allowHTML: true,
            trigger: "mouseenter click",
        });
    }
};

// Mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7-999-999-99-99", { autoclear: false });
};

// Init datepicker
application.prototype.initDatepicker = function () {
    if ($(".flatpickr").length) {
        const dateElem = $(".flatpickr");

        let newFlatpickr = flatpickr(dateElem, {
            dateFormat: "d.m.Y",
            disableMobile: "true",
            locale: "ru"
        });
    }
};

// Initialization delete trigger
application.prototype.initDeleteTrigger = function () {
    if ($('[data-delete-trigger]').length) {
        $('[data-delete-trigger]').on("click", function () {
            $(this).closest('[data-removable]').remove();
        });
    }
};

// Initialization drop files
application.prototype.initDropfiles = function () {
    File.prototype.convertToBase64 = function (callback) {
        let reader = new FileReader();

        reader.onloadend = function (e) {
            callback(e.target.result, e.target.error);
        };
        reader.readAsDataURL(this);
    };

    File.prototype.convertToSvgHtml = function (callback) {
        let reader = new FileReader();

        reader.onloadend = function(e) {
            callback(e.target.result, e.target.error);
        };
        reader.readAsText(this);
    };

    const getDataImage = (file, callback) => {
        let filename = file.name,
            idxDot = filename.lastIndexOf(".") + 1,
            extFile = filename.substr(idxDot, filename.length).toLowerCase();

        if (extFile === "jpg" || extFile === "jpeg" || extFile === "png") {
            file.convertToBase64((base64) => {
                callback(base64, false);
            })
        } else {
            alert('Неверный формат файла (Поддерживаемые форматы: png, jpeg)');
        }
    };

    $('body').on('dragenter', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();
    });

    $('body').on('dragover', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();

        $(this).addClass('dragover');
    });

    $('body').on('dragleave', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();

        $(this).removeClass('dragover');
    });

    $('body').on('drop', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();

        $(this).removeClass('dragover');
        $(this).closest('.js-upload-photos').addClass('has-attached');

        let type = $(this).closest('.dropfile').attr('data-type');
        let countFiles = $(this).closest('.js-upload-photos').find('.dropfile-image__item').length + e.originalEvent.dataTransfer.files.length;

        if (type === 'image') {
            if (countFiles > 10) {
                return;
            }
            for (let i in e.originalEvent.dataTransfer.files) {
                if (e.originalEvent.dataTransfer.files.hasOwnProperty(i)) {
                    let file = e.originalEvent.dataTransfer.files[i];
                    getDataImage(file, (data, isSvg) => {
                        appendImage($(this), data, isSvg);
                    });
                }
            }
        }
    });

    $('.js-drop-file').on('change', '.js-change-file', function () {
        let type = $(this).closest('.dropfile').attr('data-type');
        let countFiles = $(this).closest('.js-upload-photos').find('.dropfile-image__item').length + $(this)[0].files.length;

        $(this).closest('.js-upload-photos').addClass('has-attached');

        if (type === 'image') {
            if (countFiles > 10) {
                return;
            }
            for (let i in $(this)[0].files) {
                if ($(this)[0].files.hasOwnProperty(i)) {
                    let file = $(this)[0].files[i];

                    if (type === 'image') {
                        getDataImage(file, (data, isSvg) => {
                            appendImage($(this), data, isSvg);
                        });
                    }
                }
            }
        }
    });

    function appendImage($input, data, isSvg) {
        let image = '',
            $parent = $input.closest('.dropfile');

        if(isSvg) {
            image = data;
        } else {
            image = `<img src="` + data + `" class="image">`;
        }

        let html = `
                    <div class="dropfile-image__item">
                        ` + image + `
                        <div class="dropfile-image__remove js-remove-image">
                            <svg class="icon">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                        </div>
                        <input class="js-image" type="hidden" name="` + $parent.attr('data-input-name') + `" value='` + data + `'>
                    </div>
                    `;

        if($parent.hasClass('js-upload-photos')) {
            $parent
                .find('.dropfile-gallery')
                .show()
                .append(html);
        }
    };

    $('body').on('click', '.js-remove-image', function (e) {
        e.preventDefault();
        e.stopPropagation();

        let $parent = $(this).closest('.dropfile');
        let galleryItem = $parent.find('.dropfile-image__item');

        if($parent.hasClass('js-upload-photos')) {
            $(this).closest('.dropfile-image__item').remove();

            if (galleryItem.length < 2) {
                $parent.removeClass('has-attached');
            }
        }
    });
};

// Initialization input-search behavior
application.prototype.initInputSearchBehavior = function () {
    if ($('.input-search').length) {
        $('.input-search').on('input', function () {
            if ($(this).val() === '' || $(this).val() === null) {
                $(this).removeClass('has-data');
            } else if ($(this).val() !== '' && $(this).val() !== null) {
                $(this).addClass('has-data');
            }
        });

        $('.input-delete-btn').on('click', function () {
            $(this).closest('.input-search-wrapper').find('.input-search').val('').removeClass('has-data');
        });
    }
};

// Initialization search result behavior
application.prototype.initSearchResBehavior = function () {
    if ($('[data-delete-trigger]').length) {
        $('.search-results__close').on('click', function () {
            $(this).closest('.header-search-results').removeClass('active');
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                $('.search-results__close').closest('.header-search-results').removeClass('active');
            }
        });
    }
};

// Initialization mobile city selection
application.prototype.initMobileCitySelection = function () {
    if ($('.mobile-menu-city').length) {
        $('[data-mobile-city-spoiler]').on('click', function () {
            $('.mobile-city').addClass('active');
        });

        $('.mobile-city__close').on('click', function () {
            $(this).closest('.mobile-city').removeClass('active');
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                $('.mobile-city').removeClass('active');
            }
        });
    }
};

// Initialization catalog content sort
application.prototype.initCatalogContentSort = function () {
    if ($('.catalog-content-settings__sort-options').length) {
        $('.catalog-content-settings__sort-item input[type="radio"]').on('click', function () {
            if($(this).prop('checked')) {
                $(this).closest('.catalog-content-settings__sort-options').find('.catalog-content-settings__sort-label').removeClass('active');
                $(this).siblings('.catalog-content-settings__sort-label').addClass('active');
            } else {
                $(this).siblings('.catalog-content-settings__sort-label').removeClass('active');
            }
        });

        $(window).on('resize', function () {
            if (window.matchMedia('(min-width: 992px)').matches) {
                $('.catalog-content-settings__sort-select').removeClass('active');
                $('.catalog-content-settings__sort-options').removeClass('active');
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                $('.catalog-content-settings__sort-select').on('click', function () {
                   if($(this).hasClass('active')) {
                       $(this).removeClass('active');
                       $(this).siblings('.catalog-content-settings__sort-options').removeClass('active');
                   } else if(!$(this).hasClass('active')) {
                       $(this).addClass('active');
                       $(this).siblings('.catalog-content-settings__sort-options').addClass('active');
                   }
                });

                $('.catalog-content-settings__sort-item input[type="radio"]').on('click', function () {
                    let selectPlaceholder = $('.catalog-content-settings__sort-label.active').text();
                    console.log(selectPlaceholder);
                    if($(this).prop('checked')) {
                        $(this).text();
                        $(this).siblings('.catalog-content-settings__sort-label').addClass('active');
                    } else {
                        $(this).siblings('.catalog-content-settings__sort-label').removeClass('active');
                    }
                });
            }
        });
    }
};





/*========================================*/

// Initialize popup menu mobile
application.prototype.initPopupMenuMobile = function () {
    const menuCall = $('[data-popup-menu-call]');
    const menu = $('[data-popup-menu]');

    menuCall.on('click', function () {
        $(this).siblings('[data-popup-menu]').toggleClass('popup-menu--active');

        if (!$(this).siblings('[data-popup-menu]').hasClass('popup-menu--active')) {
            application.prototype.disableScroll();
        } else {
            application.prototype.enableScroll();
        }
    });

    $(document).on("click", function (e) {
        if ($('.overlay').is(e.target)) {
            menu.removeClass('popup-menu--active');
        }
    });
};

// Initialize actions user mobile
application.prototype.initHeaderActionsMobile = function () {
    if ($(".js-header-actions-mobile-dropdown").length) {
        const mobileTrigger = $(".js-header-actions-mobile-dropdown");
        const actions = $(".header-actions");
        const actionsNoAuth = $(".header-actions-no-auth");
        const actionsCurrentUser = $(".header-actions-current-user");

        $(document).on("click", function (e) {
            if ($(".overlay").is(e.target)) {
                actionsCurrentUser.removeClass("active");
                actionsNoAuth.removeClass("active");
            }
        });

        responsiveHeaderActions();
        $(window).on("resize", responsiveHeaderActions);

        function responsiveHeaderActions() {
            if (window.matchMedia("(max-width: 991.98px)").matches) {
                $(mobileTrigger).on("click", function () {
                    if(actions.hasClass("header-actions--current-user")) {
                        actionsNoAuth.removeClass("active");
                        if(actionsCurrentUser.hasClass("active")) {
                            actionsCurrentUser.removeClass("active");
                            return application.prototype.enableScroll();
                        } else {
                            actionsCurrentUser.addClass("active");
                            return application.prototype.disableScroll();
                        }
                    } else {
                        actionsCurrentUser.removeClass("active");
                        if(actionsNoAuth.hasClass("active")) {
                            actionsNoAuth.removeClass("active");
                            return application.prototype.enableScroll();
                        } else {
                            actionsNoAuth.addClass("active");
                            return application.prototype.disableScroll();
                        }
                    }
                });
            } else {
                actionsCurrentUser.removeClass("active");
                actionsNoAuth.removeClass("active");
                return application.prototype.enableScroll();
            }
        }
    }
};

// Initialize notice
application.prototype.initNotice = function () {
    $(document).on("click", ".notice", function () {
        $(this).find(".notice-elem").removeClass("active");
    });
};

// Initialize validation num code
application.prototype.initValidationNumCode = function () {
    if($(".authreg--recovery").length) {
        let in1 = document.getElementById('recoveryFormValidationCode1'),
            ins = document.querySelectorAll('.js-forminput-recovery-num'),
            splitNumber = function (e) {
                let data = e.data || e.target.value; // Chrome doesn't get the e.data, it's always empty, fallback to value then.
                if (!data) return; // Shouldn't happen, just in case.
                if (data.length === 1) return; // Here is a normal behavior, not a paste action.

                popupNext(e.target, data);
            },
            popupNext = function (el, data) {
                el.value = data[0]; // Apply first item to first input
                data = data.substring(1); // remove the first char.
                if (el.nextElementSibling && data.length) {
                    // Do the same with the next element and next data
                    popupNext(el.nextElementSibling, data);
                }
            };

        ins.forEach(function (input) {
            /**
             * Control on keyup to catch what the user intent to do.
             * I could have check for numeric key only here, but I didn't.
             */
            input.addEventListener('keyup', function (e) {
                // Break if Shift, Tab, CMD, Option, Control.
                if (e.keyCode === 16 || e.keyCode == 9 || e.keyCode == 224 || e.keyCode == 18 || e.keyCode == 17) {
                    return;
                }

                // On Backspace or left arrow, go to the previous field.
                if ((e.keyCode === 8 || e.keyCode === 37) && this.previousElementSibling && this.previousElementSibling.tagName === "INPUT") {
                    this.previousElementSibling.select();
                } else if (e.keyCode !== 8 && this.nextElementSibling) {
                    this.nextElementSibling.select();
                }

                // If the target is populated to quickly, value length can be > 1
                if (e.target.value.length > 1) {
                    splitNumber(e);
                }
            });

            /**
             * Better control on Focus
             * - don't allow focus on other field if the first one is empty
             * - don't allow focus on field if the previous one if empty (debatable)
             * - get the focus on the first empty field
             */
            input.addEventListener('focus', function (e) {
                // If the focus element is the first one, do nothing
                if (this === in1) return;

                // If value of input 1 is empty, focus it.
                if (in1.value == '') {
                    in1.focus();
                }

                // If value of a previous input is empty, focus it.
                // To remove if you don't wanna force user respecting the fields order.
                if (this.previousElementSibling.value == '') {
                    this.previousElementSibling.focus();
                }
            });
        });

        /**
         * Handle copy/paste of a big number.
         * It catches the value pasted on the first field and spread it into the inputs.
         */
        in1.addEventListener('input', splitNumber);
    }
};

// Initialize navigation pages tabs
application.prototype.initNavTabs = function () {
    if ($(".js-main-section-tabs").length) {
        const swiperNavTabs = new Swiper(".js-main-section-tabs", {
            slidesPerView: "auto",
            spaceBetween: 0,
        });
    }
};

// Initialize page-content tabs
application.prototype.initPageContentTabs = function () {
    if ($(".js-page-content-tabs").length) {
        const swiperPageContentTabs = new Swiper(".js-page-content-tabs", {
            slidesPerView: "auto",
            spaceBetween: 32,
        });
    }
};

// Initialize cards progress bar
application.prototype.initProgressBar = function () {
    if ($(".js-progress").length) {
        $(".js-progress").each(function (i, e) {
            let curValue = $(e).find(".progress-bar-data__value").data("value");
            let curMaxValue = $(e).find(".progress-bar-data__max").data("max");
            let curIndicator = $(e).find(".progress-bar__indicator");
            let curProgressLine = $(e).find(".progress-bar__line");

            function result(curValue, curMaxValue) {
                let res = ((curValue / curMaxValue) * 100).toFixed(2);
                return res;
            }

            curIndicator.val(result(curValue, curMaxValue));
            let curProgressLineValue = curIndicator.val() * 1 + "%";
            curProgressLine.css({
                "width" : curProgressLineValue
            });
        });
    }
};

// Initialize registration stepper
application.prototype.initRegStepper = function () {
    if($(".bs-stepper").length) {
        window.steppers = {
            registration: new Stepper($('.bs-stepper')[0])
        };
    }
    // if($(".bs-stepper").length) {
    //     let stepper = new Stepper($('.bs-stepper')[0]);
    //
    //     $(".js-stepper-trigger").on("click", function () {
    //         let nextStep = $(this).data("index-next");
    //
    //         switch(nextStep) {
    //             case 2:
    //                 stepper.to(2);
    //                 break;
    //             case 3:
    //                 stepper.to(3);
    //                 break;
    //             default:
    //                 stepper.to(1);
    //         }
    //     });
    // }
};

// Initialize form processing
application.prototype.initFormProcessing = function () {
    function getFormData($form) {
        let unindexed_array = $form.serializeArray();
        let indexed_array = {};
        $.map(unindexed_array, function (n, i) {
            indexed_array[n["name"]] = n["value"];
        });
        return indexed_array;
    }

    // $(document).on("submit", ".form", function (e) {
    //   e.preventDefault();
    //   let currentForm = $(this);
    //   let formData = getFormData(currentForm);
    //
    //   // $.ajax({
    //   //   type: "POST",
    //   //   url: "forms.php",
    //   //   dataType: "json",
    //   //   data: getFormData(currentForm),
    //   //   success: function (currentForm) {
    //   //     console.log("success");
    //   //   },
    //   //   error: function () {
    //   //     console.log("error");
    //   //   }
    //   // });
    //   BX.ajax.runAction('dev:core.registration.checkPrimaryData', {
    //     data: {
    //       'post': formData,
    //     }
    //   }).then(
    //       response => {
    //         if (response.data.result === 'success') {
    //           console.log('SUCCESS! Go to the next step');
    //         } else {
    //           console.log(response.data.errors);
    //         }
    //       },
    //       error => {
    //         //сюда будут приходить все ответы, у которых status !== 'success'
    //         console.log(error);
    //       }
    //   );
    //   return false;
    // });

    $(document).on('submit', '.js-register-step-1', function (e) {
        e.preventDefault();
        let $currentForm = $(this);
        let formData = getFormData($currentForm);
        let $submitBtn = $currentForm.find('[type="submit"]');
        BX.ajax.runAction('dev:core.registration.checkPrimaryData', {
            data: {
                'post': formData,
            }
        }).then(
            response => {
                if (response.data.result === 'success') {
                    let nextStep = parseInt($submitBtn.data('index-next'));
                    window.steppers.registration.to(nextStep);
                    console.log('SUCCESS! Go to the next step');
                } else {
                    console.log(response.data.errors);
                }
            },
            error => {
                //сюда будут приходить все ответы, у которых status !== 'success'
                console.log(error);
            }
        );
        return false;
    });

    $(document).on('submit', '.js-register-final', function (e) {
        e.preventDefault();
        let $currentForm = $(this);
        let userType = $currentForm.data('user-type');


        let formData = getFormData($currentForm);
        let $submitBtn = $currentForm.find('[type="submit"]');

        let $step1form = $('.js-register-step-1[data-user-type="' + userType + '"]');
        let step1formData = getFormData($step1form);

        let merged = {...step1formData, ...formData};

        BX.ajax.runAction('dev:core.registration.checkAllAndRegister', {
            data: {
                'post': merged,
            }
        }).then(
            response => {
                console.log(response.data);
                if (response.data.result === 'success') {
                    if (response.data.redirect) {
                        window.location.href = response.data.redirect;
                    }
                } else {
                    // errors
                }
            },
            error => {
                //сюда будут приходить все ответы, у которых status !== 'success'
                console.log(error);
            }
        );
        return false;
    });
};

// Initialize mainscreen slider
application.prototype.initMainscreenSlider = function () {
    if ($(".js-mainscreen-slider").length) {
        const mainscreenSliderSettings = {
            slidesPerView: 1,
            spaceBetween: 0,
            direction: "horizontal",
            effect: "fade",
            pagination: {
                el: ".js-mainscreen-slider .swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    direction: "vertical",
                },
            }
        };
        let mainscreenSlider = new Swiper(".js-mainscreen-slider", mainscreenSliderSettings);
    }
};

// Initialize mobile slider
application.prototype.initMobileSlider = function () {
    if ($(".mobile-only-slider").length) {
        const mobilePartnersSliderSetting = {
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetween: 12,
            direction: "horizontal",
        };
        let mobilePartnersSlider = null;

        breakpointChecker();
        $(window).on("resize", breakpointChecker);

        function breakpointChecker() {
            if (window.matchMedia("(min-width: 992px)").matches) {
                if(mobilePartnersSlider !== null) mobilePartnersSlider.destroy(true, true);
                mobilePartnersSlider = null;
            }
            else if (window.matchMedia("(max-width: 991.98px)").matches) {
                mobilePartnersSlider = new Swiper(".mobile-only-slider.js-basic-slider", mobilePartnersSliderSetting);
            }
        }
    }
};

// Initialize responsive card slider
application.prototype.initResponsiveCardSlider = function () {
    if ($(".card-list-responsive").length) {
        // init slider on mobile
        if ($(".card-list-responsive.card-list-responsive--desktop-only").length) {
            const mobileCardSliderSetting = {
                slidesPerView: "auto",
                spaceBetween: 12,
                slidesPerGroup: 1,
                direction: "horizontal",
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                        spaceBetween: 24,
                    }
                }
            };
            let mobileCardSlider = null;

            breakpointChecker();
            $(window).on("resize", breakpointChecker);

            function breakpointChecker() {
                if (window.matchMedia("(min-width: 992px)").matches) {
                    if(mobileCardSlider !== null) mobileCardSlider.destroy(true, true);
                    mobileCardSlider = null;
                }
                else if (window.matchMedia("(max-width: 991.98px)").matches) {
                    mobileCardSlider = new Swiper(".card-list-responsive--desktop-only .js-basic-slider", mobileCardSliderSetting);
                }
            }
        }
        // init slider on desktop
        else if ($(".card-list-responsive.card-list-responsive--mobile-only").length) {
            const desktopCardSliderSetting = {
                slidesPerView: 3,
                slidesPerGroup: 3,
                spaceBetween: 24,
                direction: "horizontal",
                navigation: {
                    nextEl: ".card-list-responsive .swiper-button-next",
                    prevEl: ".card-list-responsive .swiper-button-prev",
                },
                breakpoints: {
                    1328: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                        spaceBetween: 24,
                    }
                }
            };
            let desktopCardSlider = null;

            breakpointChecker();
            $(window).on("resize", breakpointChecker);

            function breakpointChecker() {
                if (window.matchMedia("(min-width: 992px)").matches) {
                    desktopCardSlider = new Swiper(".card-list-responsive--mobile-only .js-basic-slider", desktopCardSliderSetting);
                }
                else if (window.matchMedia("(max-width: 991.98px)").matches) {
                    if(desktopCardSlider !== null) desktopCardSlider.destroy(true, true);
                    desktopCardSlider = null;
                }
            }
        }
    }
};

// Initialize handler for current user dropdown menu
application.prototype.initHandlerCurrentUser = function () {
    if ($(".js-current-user-menu").length) {
        $(document).on("click", function (e) {
            if (window.matchMedia("(min-width: 992px)").matches) {
                if (!$(".js-current-user-menu").hasClass("open") && $(".current-user__dropdown").is(e.target)) {
                    $(".js-current-user-menu").addClass("open");
                }
                else if ($(".js-current-user-menu").hasClass("open") && $(".current-user__dropdown").is(e.target)) {
                    $(".js-current-user-menu").removeClass("open");
                }
                else if ($(".current-user__dropdown-menu ul").has(e.target).length) {
                    $(".js-current-user-menu").removeClass("open");
                }
                else if (!$(".js-current-user-menu").is(e.target) && $(".js-current-user-menu").has(e.target).length === 0) {
                    $(".js-current-user-menu").removeClass("open");
                }
            }
        });
    }
};

// Initialize tag selected
application.prototype.initTagSelected = function () {
    if ($("label.tag").length) {
        $("label.tag").on("click", function () {
            let elemInput = $(this).find("input[type='checkbox']");
            if(!elemInput.is(":checked")) {
                $(this).removeClass("selected");
            } else if(elemInput.is(":checked")) {
                $(this).addClass("selected");
            }
        });
    }
};

// Initialize add list
application.prototype.initAddList = function () {
    if ($(".js-add-list").length) {
        $(".js-add-list .add-list__item").each(function (e) {
            $(this).find(".add-list__delete").on("click", function () {
                $(this).closest(".add-list__item").remove();
            });
        });
    }
};

// Initialize accordion
application.prototype.initAccordion = function () {
    if ($(".accordion").length) {
        initAccordionResonsive();
        $(window).on("resize", initAccordionResonsive, reloadAccordionResonsive);

        function reloadAccordionResonsive() {
            setTimeout(function () {
                location.reload();
            }, 300);
        }
        function initAccordionResonsive() {
            $(".accordion__collapse").hide();

            if (window.matchMedia("(max-width: 767.98px)").matches) {
                $(".js-accordion-btn").on("click", function () {
                    if (!$(this).hasClass("open")) {
                        $(this).closest(".accordion").find(".accordion__btn").removeClass("open");
                        $(this).closest(".accordion__item").siblings(".accordion__item").removeClass("active");
                        $(this).closest(".accordion__item").siblings(".accordion__item").find(".accordion__collapse").slideUp(160);
                        $(this).addClass("open");
                        $(this).closest(".accordion__item").addClass("active");
                        $(this).closest(".accordion__item").find(".accordion__collapse").removeClass("collapsed");
                        $(this).closest(".accordion__item").find(".accordion__collapse").slideDown(160);
                    } else if ($(this).hasClass("open")) {
                        $(this).removeClass("open");
                        $(this).closest(".accordion__item").removeClass("active");
                        $(this).closest(".accordion__item").find(".accordion__collapse").slideUp(160);
                        setTimeout(function () {
                            $(this).closest(".accordion__item").find(".accordion__collapse").addClass("collapsed");
                        }, 160);
                    }
                });
            } else if (window.matchMedia("(min-width: 768px)").matches) {
                $(".js-accordion-btn-icon").on("click", function () {
                    if (!$(this).closest(".js-accordion-btn").hasClass("open")) {
                        $(this).closest(".accordion").find(".accordion__btn").removeClass("open");
                        $(this).closest(".accordion__item").siblings(".accordion__item").removeClass("active");
                        $(this).closest(".accordion__item").siblings(".accordion__item").find(".accordion__collapse").slideUp(160);
                        $(this).closest(".accordion__btn").addClass("open");
                        $(this).closest(".accordion__item").addClass("active");
                        $(this).closest(".accordion__item").find(".accordion__collapse").removeClass("collapsed");
                        $(this).closest(".accordion__item").find(".accordion__collapse").slideDown(160);
                    } else if ($(this).closest(".js-accordion-btn").hasClass("open")) {
                        $(this).closest(".accordion").find(".accordion__btn").removeClass("open");
                        $(this).closest(".accordion__item").removeClass("active");
                        $(this).closest(".accordion__item").find(".accordion__collapse").slideUp(160);
                        setTimeout(function () {
                            $(this).closest(".accordion__item").find(".accordion__collapse").addClass("collapsed");
                        }, 160);
                    }
                });
            }
        }
    }
};

// Set height to '.page-content-settings-bar'
application.prototype.setSettingsBarHeight = function () {
    if ($('.page-content-settings-bar').length) {
        const body = $('.has-settings-bar');
        let barsHeight = $('.page-content-settings-bar').outerHeight();
        body.css('padding-bottom', barsHeight);
    }
};
