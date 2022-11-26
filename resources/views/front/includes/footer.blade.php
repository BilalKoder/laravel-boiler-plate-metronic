<!-- Start Copyright -->
@php
use App\Functions\Helper;
@endphp
<div class="slider-bottom">
    <span class="slider-copyright text-grey">© AAbove <?= date('Y') ?>.</span>
</div>
<!-- End Copyright -->

<!-- JavaScript -->
<script src="<?= asset('above/vendorF/js/bundle.min.js') ?>"></script>
<!-- Plugin Js -->
<script src="<?= asset('above/vendorF/js/jquery.appear.js') ?>"></script>
<script src="<?= asset('above/vendorF/js/jquery.fancybox.min.js') ?>"></script>
<script src="<?= asset('above/vendorF/js/owl.carousel.min.js') ?>"></script>
<!-- CUSTOM JS -->
<script src="<?= asset('above/js/jquery.pagepiling.min.js') ?>"></script>
<script src="<?= asset('above/js/timeline.js') ?>"></script>
<script src="<?= asset('above/vendorF/js/contact_us.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    var tooltips = [
        'Home',
        '<?= Helper::_lang('home') ?>',
        '<?= Helper::_lang('mygoals') ?>',
        '<?= Helper::_lang('my_guarantees') ?>',
        '<?= Helper::_lang('my_promise') ?>',
        '<?= Helper::_lang('investment_options') ?>',
    ];
    var myvis = ['<?= Helper::_lang('my') ?> <?= Helper::_lang('vision') ?>'],
        mygoal = ['<?= Helper::_lang('mygoals') ?>'],
        myGuarantees = ['<?= Helper::_lang('contact_us') ?>'],
        myPromise = ['<?= Helper::_lang('my_promise') ?>'],
        investmentOptions = ['<?= Helper::_lang('investment_options') ?>'];


    jQuery(function($) {

        var elems = $(".str");
        $.each(elems, function(i, elem) {
            elem = $(elem);
            var characters = elem.text().split("");
            elem.empty();
            $.each(characters, function(i, el) {
                if (el == ' ')
                    el = '&nbsp;';
                elem.append("<span>" + el + "</span");
            });
        });
        <?php for ($i = 0; $i <= 5; $i++) { ?>
        /* ---- particles.js config ---- */
        particlesJS("particles-js<?= $i ?>", {
            particles: {
                number: {
                    value: 100,
                    density: {
                        enable: true,
                        value_area: 1000,
                    },
                },
                color: {
                    value: ["#aa73ff", "#f8c210", "#83d238", "#33b1f8"],
                },

                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#fff",
                    },
                    polygon: {
                        nb_sides: 5,
                    },
                    image: {
                        src: "img/github.svg",
                        width: 100,
                        height: 100,
                    },
                },
                opacity: {
                    value: 0.6,
                    random: false,
                    anim: {
                        enable: false,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false,
                    },
                },
                size: {
                    value: 2,
                    random: true,
                    anim: {
                        enable: false,
                        speed: 40,
                        size_min: 0.1,
                        sync: false,
                    },
                },
                line_linked: {
                    enable: true,
                    distance: 120,
                    color: "#ffffff",
                    opacity: 0.4,
                    width: 1,
                },
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: true,
                        mode: "grab",
                    },
                    onclick: {
                        enable: false,
                    },
                    resize: true,
                },
                modes: {
                    grab: {
                        distance: 140,
                        line_linked: {
                            opacity: 1,
                        },
                    },
                    bubble: {
                        distance: 400,
                        size: 40,
                        duration: 2,
                        opacity: 8,
                        speed: 3,
                    },
                    repulse: {
                        distance: 200,
                        duration: 0.4,
                    },
                    push: {
                        particles_nb: 4,
                    },
                    remove: {
                        particles_nb: 2,
                    },
                },
            },
            retina_detect: true,
        });
        <?php } ?>
    });
</script>
<script src="<?= asset('above/js/script.js') ?>"></script>
