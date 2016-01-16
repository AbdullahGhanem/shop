var elixir = require('laravel-elixir');

elixir(function(mix) {

    //admin css file
    mix.styles([
        "../admin/css/font-awesome.css",
        "../admin/css/simple-line-icons.css",
        "../admin/css/bootstrap.css",
        "../admin/css/fileinput.css",
        "../admin/css/uniform.default.css",
        "../admin/css/ltr/bootstrap-switch.css",
        "../admin/css/ltr/components.css",
        "../admin/css/ltr/plugins.css",
        "../admin/css/ltr/layout.css",
        "../admin/css/ltr/darkblue.css",
        "../admin/css/ltr/custom.css",
    ], "public/back/css/admin.css");

    //admin rtl css file
    mix.styles([
        "../admin/css/font-awesome.css",
        "../admin/css/simple-line-icons.css",
        "../admin/css/bootstrap-rtl.css",
        "../admin/css/fileinput.css",
        "../admin/css/uniform.default.css",
        "../admin/css/rtl/bootstrap-switch-rtl.css",
        "../admin/css/rtl/components-md-rtl.css",
        "../admin/css/rtl/plugins-md-rtl.css",
        "../admin/css/rtl/layout-rtl.css",
        "../admin/css/rtl/darkblue-rtl.css",
        "../admin/css/rtl/custom-rtl.css",
    ], "public/back/css/admin.rtl.css");
 
    //admin js file
    mix.scripts([
        '../admin/js/jquery.js',
        '../admin/js/jquery-migrate.js',
        '../admin/js/jquery-ui.js',
        '../admin/js/bootstrap.js',
        '../admin/js/bootstrap-hover-dropdown.js',
        '../admin/js/jquery.slimscroll.js',
        '../admin/js/jquery.blockui.js',
        '../admin/js/jquery.cokie.js',
        '../admin/js/jquery.uniform.js',
        '../admin/js/bootstrap-switch.js',
        '../admin/js/metronic.js',
        '../admin/js/layout.js',
        '../admin/js/fileinput.js',
    ],'public/back/js/admin.js');  

    // ******************************** front end shop ************************************

    //front css file
    mix.styles([
        "../front/css/font-awesome.css",
        "../front/css/ltr/bootstrap.css",
        "../front/css/jquery.fancybox.css",
        "../front/css/ltr/owl.carousel.css",
        "../front/css/ltr/components.css",
        "../front/css/ltr/style.css",
        "../front/css/ltr/style-shop.css",
        "../front/css/ltr/style-responsive.css",
        "../front/css/orange.css",
        "../front/css/ltr/custom.css",
    ], "public/front/css/front-rtl.css");

    //rtl front css file
    mix.styles([
        "../front/css/font-awesome.css",
        "../front/css/rtl/bootstrap.css",
        "../front/css/jquery.fancybox.css",
        "../front/css/rtl/owl.carousel.css",
        "../front/css/rtl/components.css",
        "../front/css/rtl/style.css",
        "../front/css/rtl/style-shop.css",
        "../front/css/rtl/style-responsive.css",
        "../front/css/orange.css",
        "../front/css/rtl/custom.css",
    ], "public/front/css/front.css");

    //front css file
    mix.styles([
        "../front/css/layerslider.css",
        "../front/css/style-layer-slider.css"
    ], "public/front/css/home.css");

    //product css file
    mix.styles([
        "../front/css/uniform.default.css",
        "../front/css/jquery-ui.css",
        "../front/css/rateit.css",
    ], "public/front/css/product.css");

    //core front js file
    mix.scripts([
        '../front/js/jquery.js',
        '../front/js/jquery-migrate.js',
        '../front/js/bootstrap.js',
        '../front/js/back-to-top.js',
    ],'public/front/js/core.js');

    //layout front js file
    mix.scripts([
        '../front/js/jquery.slimscroll.js', 
        '../front/js/jquery.fancybox.pack.js',
        '../front/js/owl.carousel-rtl.js',
        '../front/js/layout.js',
    ],'public/front/js/layout-rtl.js');

    //rtl layout front js file
    mix.scripts([
        '../front/js/jquery.slimscroll.js', 
        '../front/js/jquery.fancybox.pack.js',
        '../front/js/owl.carousel.js',
        '../front/js/layout.js',
    ],'public/front/js/layout.js');

    //home front js file
    mix.scripts([
        '../front/js/jquery.zoom.js',
        '../front/js/bootstrap.touchspin.js',
        '../front/js/greensock.js',
        '../front/js/layerslider.transitions.js',
        '../front/js/layerslider.kreaturamedia.jquery.js',
        '../front/js/layerslider-init.js',
    ],'public/front/js/home.js');

    //product front js file
    mix.scripts([
        '../front/js/jquery.zoom.js', 
        '../front/js/bootstrap.touchspin.js',
        '../front/js/jquery.uniform.js',
        '../front/js/jquery.rateit.js',
    ],'public/front/js/product.js');

    mix.version([
        //back css ans js version
        "back/css/admin.rtl.css",
        "back/css/admin.css",
        "back/js/admin.js",

        //front css ans js version
        "front/css/front.css",
        "front/css/front-rtl.css",
        
        "front/css/home.css",
        "front/css/product.css",

        "front/js/core.js",
        "front/js/layout.js",
        "front/js/layout-rtl.js",
        "front/js/home.js",
        "front/js/product.js",
    ]);
});
