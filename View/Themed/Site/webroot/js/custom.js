$('li.custom-drop a').on('click', function (event) {
    $(this).parent().toggleClass("open");
});
$('body').on('click', function (e) {
    if (!$('li.custom-drop').is(e.target) && $('li.custom-drop').has(e.target).length === 0 && $('.open').has(e.target).length === 0) {
        $('li.custom-drop').removeClass('open');
    }
});