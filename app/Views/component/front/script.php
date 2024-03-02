<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    $('#main_navbar').bootnavbar();
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