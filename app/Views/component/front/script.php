<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>

<!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(".physiology").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/physiology.png')
    $("#common-name").text("Physiology")
})
$(".anatomy").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/anatomy.png')
    $("#common-name").text("Anatomy")
})
$(".biochemistry").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/biochemistry.png')
    $("#common-name").text("Biochemistry")
})
$(".pathology").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/forensic-science-medicine-toxicology.png')
    $("#common-name").text("Pathology")
})
$(".g-medicine").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/general-medicine.png')
    $("#common-name").text("General-Medicine")
})
$(".anaesthesiology").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/general-surgery.png')
    $("#common-name").text("Anaesthesiology")
})
$(".paediatric").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/dermatology.png')
    $("#common-name").text("Paediatric Medicine")
})
$(".genaral-s").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/ophthalmology (1).png')
    $("#common-name").text(" General Surgery")
})
$(".microbiology").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/dentistry.png')
    $("#common-name").text("Micro-Biology")
})
$(".pharmacology").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/general-medicine.png')
    $("#common-name").text("Pharmacology")
})
$(".pathology").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/pathology.png')
    $("#common-name").text("Pathology")
})
$(".m-biology").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/microbiology.png')
    $("#common-name").text("Micro-Biology")
})
$(".pediatrics").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/orthopedic.png')
    $("#common-name").text("Pediatrics")
})
$(".respiratorymedicine").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/pharmacology.png')
    $("#common-name").text("Respiratory Medicine")
})
$(".dermatology").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/gynaecology-and-obstetrics.png')
    $("#common-name").text("Dermatology")
})
$(".otorinolayngology").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/anaesthesiology.png')
    $("#common-name").text("Otorinolayngology (Ent)")
})
$(".gyanocology").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/comunity-medicine.png')
    $("#common-name").text("Obstetrics & Gynaecology")
})
$(".forensicmedicine").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/pharmacology.png')
    $("#common-name").text("Forensic Medicine")
})
$(".psychiatry").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/paediatric-medicine.png')
    $("#common-name").text("Psychiatry")
})
$(".radiotherapy").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/paediatric-medicine.png')
    $("#common-name").text("Radiotherapy")
})
$(".emergencymedicine").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/gynaecology-and-obstetrics.png')
    $("#common-name").text("Emergency Medicine")
})
$(".dentistry").hover(function() {
    $("#common-image").attr('src', 'assets/images/department/gynaecology-and-obstetrics.png')
    $("#common-name").text("Dentistry")
})
$('.owl-carousel').owlCarousel({
    slideBy: 1,
    dots: false,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    margin: 10,
    nav: true,
    navText: ['<button type="button" class="btn slider-left-btn"> </button>',
        '<button type="button" class="btn slider-right-btn"> </button>'
    ],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        },
    }
})
</script>
<script src="https://www.jqueryscript.net/demo/bootstrap-navbar-multi-level-dropdowns/js/bootnavbar.js?v2"></script>
<script>
$(function() {
    // $('#main_navbar').bootnavbar();

    if(!$('.no-datatable').length){
        new DataTable('table');
    }
})
</script>
<script>
let dropdowns = document.querySelectorAll('.dropdown-toggle')
dropdowns.forEach((dd) => {
    dd.addEventListener('click', function(e) {
        var el = this.nextElementSibling
        el.style.display = el.style.display === 'block' ? 'none' : 'block'
    })
})
</script>
<script>
var $ticker = $('[data-ticker="list"]'),
    tickerItem = '[data-ticker="item"]'
itemCount = $(tickerItem).length,
    viewportWidth = 0;

function setupViewport() {
    $ticker.find(tickerItem).clone().prependTo('[data-ticker="list"]');
    for (i = 0; i < itemCount; i++) {
        var itemWidth = $(tickerItem).eq(i).outerWidth();
        viewportWidth = viewportWidth + itemWidth;
    }
    $ticker.css('width', viewportWidth);
}

function animateTicker() {
    $ticker.animate({
        marginLeft: -viewportWidth
    }, 30000, "linear", function() {
        $ticker.css('margin-left', '0');
        animateTicker();
    });
}

function initializeTicker() {
    setupViewport();
    animateTicker();
    $ticker.on('mouseenter', function() {
        $(this).stop(true);
    }).on('mouseout', function() {
        animateTicker();
    });
}
initializeTicker();
</script>
<script>
$(window).scroll(function() {
    if ($(window).scrollTop() > 0) {
        $('.bg-l-light').addClass('floatingNav');
    } else {
        $('.bg-l-light').removeClass('floatingNav');
    }
});
</script>