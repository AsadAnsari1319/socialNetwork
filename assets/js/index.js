$(document).ready(function () {

    $('.down').hide();

    $('.notification').on('click', function (event) {
        $('.down').toggle();
        event.stopPropagation(); // Prevents the click event from propagating to the document
    });

    $(document).on('click', function (event) {
        if (!$(event.target).closest('.notification').length && !$(event.target).closest('.down').length) {
            // Check if the clicked element is not part of the notification or popup
            $('.down').hide();
        }
    });

    $('.half-side').hide();

    $('.small-side-icon-arrow').on('click', function () {
        var dataval = $(this).parents('.side');
        $(dataval).toggleClass('small-side half-side');
        $('.form-data').toggleClass('small-form');
        $('.form-body').toggleClass('col-lg-10 mx-auto');
        $('.small-file').toggleClass('col-lg-12');
        $('.small-form').toggleClass('col-lg-12');
        $('.img-select-input').toggleClass('img-select-input-active');
        $('.width-set').toggleClass('width-set-active');
    });

    $('.options').hide();

    $('.more').on('click', function () {
        $('.options').slideToggle();
        $(this).toggleClass('rotate_arrow');
    });

    var gallery = document.querySelector('#gallery');
    var getVal = function (elem, style) {
        return parseInt(window.getComputedStyle(elem).getPropertyValue(style));
    };
    var getHeight = function (item) {
        return item.querySelector('.content').getBoundingClientRect().height;
    };
    var resizeAll = function () {
        var altura = getVal(gallery, 'grid-auto-rows');
        var gap = getVal(gallery, 'grid-row-gap');
        gallery.querySelectorAll('.gallery-item').forEach(function (item) {
            var el = item;
            el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
        });
    };
    gallery.querySelectorAll('img').forEach(function (item) {
        item.classList.add('byebye');
        if (item.complete) {
            console.log(item.src);
        }
        var altura = getVal(gallery, 'grid-auto-rows');
        var gap = getVal(gallery, 'grid-row-gap');
        var gitem = item.parentElement.parentElement;
        gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
        item.classList.remove('byebye');
    });
    window.addEventListener('resize', resizeAll);
    // gallery.querySelectorAll('.gallery-item').forEach(function (item) {
    //     item.addEventListener('click', function () {
    //         item.classList.toggle('full');
    //     });
    // });

});