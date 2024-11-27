document.addEventListener('DOMContentLoaded', function () {
    var modeSwitch = document.querySelector('.mode-switch');
  
    modeSwitch.addEventListener('click', function () {                     
        document.documentElement.classList.toggle('dark');
        modeSwitch.classList.toggle('active');
    });

    $('#site-type').on('change', function(e) {
        let changed = e.target.value;

        $('.CategoryItem_item__1KWXH').each(function() {
            $(this).hasClass(changed) && !$(this).hasClass('form') && $(this).removeClass('d-none');
            !$(this).hasClass(changed) && $(this).addClass('d-none');
        })

        countChecked();
    })
});

$(document).ready(function(){
    $(".form").addClass('d-none');

    $('.CategoryItem_item__1KWXH').each(function() {
        !$(this).hasClass("full") && $(this).addClass('d-none');
    })

    countChecked();
})

$('.CategoryItem_arrow__2q0AQ').on('click', function(){
    $(this).parent().parent().toggleClass('more');
})

$('.form_checkbox').on('click', function(e){
    e.preventDefault();
    $(this).toggleClass('checked'); // fills checkbox

    $('.form').find('.checked').removeClass('checked'); // remove checked when toggling form off

    $('#form-checkbox').toggleClass('checked');
    if ($('#form-checkbox').hasClass('checked')) {
        $(".form").removeClass('d-none');
    } else {
        $(".form").addClass('d-none');
    }

    countChecked();
})

$('.posts_checkbox').on('click', function(e){
    e.preventDefault();
    $(this).toggleClass('checked'); // fills checkbox

    $('.posts').find('.checked').removeClass('checked'); // remove checked when toggling posts off

    $('#posts-checkbox').toggleClass('checked');
    if ($('#posts-checkbox').hasClass('checked')) {
        $(".posts").addClass('d-none');
    } else {
        $(".posts").removeClass('d-none');
    }

    countChecked();
})

$('.Checkbox_checkbox__3pwM6').on('click', function(e){
    e.preventDefault();
    $(this).toggleClass('checked');
    $(this).parent().parent().toggleClass('checked');
    countChecked();
})

function countChecked() {
    var count =  checked =  total_required = 0;
    function countBoxes() { 
        count = document.querySelectorAll('.Checkbox_checkbox__3pwM6 .Checkbox_icon__yWXiN').length;
    }

    countBoxes();
    checked = document.querySelectorAll('.CategoryItem_item__1KWXH:not(.d-none) .Checkbox_checkbox__3pwM6.checked .Checkbox_icon__yWXiN').length;
    total_required = document.querySelectorAll('.CategoryItem_item__1KWXH:not(.d-none)').length;

    var percentage = parseInt(((checked / total_required) * 100),10);
    document.getElementsByClassName('progressbar-bar')[0].style.width = percentage + "%";
    $(".progress-amount").text(percentage + "%");
    $(".required-checked").text(checked);
    $(".required-total").text(total_required);
}

function clearProgress() {
    for (elem of document.querySelectorAll(".checked")) {
        elem.classList.remove("checked");
    }
    countChecked();
}