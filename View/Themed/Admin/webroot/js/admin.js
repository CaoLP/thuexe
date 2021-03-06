$(document).ready(function(){
    if($('#PostBody').length > 0)
        CKEDITOR.replace( 'PostBody', {
            filebrowserBrowseUrl : url // eg. 'includes/elFinder/elfinder.html'
        });
    if($('#PostmetumMoreInfo').length > 0)
        CKEDITOR.replace( 'PostmetumMoreInfo', {
            filebrowserBrowseUrl : url // eg. 'includes/elFinder/elfinder.html'
        });
    if($('#PostmetumPriceInfo').length > 0)
        CKEDITOR.replace( 'PostmetumPriceInfo', {
            filebrowserBrowseUrl : url // eg. 'includes/elFinder/elfinder.html'
        });
    if($('#PostBodyEng').length > 0)
        CKEDITOR.replace( 'PostBodyEng', {
            filebrowserBrowseUrl : url // eg. 'includes/elFinder/elfinder.html'
        });
    if($('#PostmetumMoreInfoEng').length > 0)
        CKEDITOR.replace( 'PostmetumMoreInfoEng', {
            filebrowserBrowseUrl : url // eg. 'includes/elFinder/elfinder.html'
        });
    if($('#PostmetumPriceInfoEng').length > 0)
        CKEDITOR.replace( 'PostmetumPriceInfoEng', {
            filebrowserBrowseUrl : url // eg. 'includes/elFinder/elfinder.html'
        });

    $('.editor').each(function(e){
        CKEDITOR.replace( this.id);
    });

    $("#PostTitle").slug({
        slug: 'slug',
        hide: false
    });
//    $('.editor').each(function(e){
//        CKEDITOR.replace( this.id);
//    });
});
$(document).ready(function(){
    $(document).on('click','.table-toggle-expand',function(){

        var tag = $(this).parent().next('.table-expandable');
        if(tag.hasClass('tb-expanded')) tag.removeClass('tb-expanded');
        else {
            $('.table-expandable').each(function(){
                $(this).removeClass('tb-expanded');
            });
            tag.addClass('tb-expanded');
        }
    });
    $(document).on('click','.bt-table-toggle-expand',function(){

        var tag = $(this).parent().parent().next('.table-expandable');
        if(tag.hasClass('tb-expanded')) tag.removeClass('tb-expanded');
        else {
            $('.table-expandable').each(function(){
                $(this).removeClass('tb-expanded');
            });
            tag.addClass('tb-expanded');
        }
    });
});