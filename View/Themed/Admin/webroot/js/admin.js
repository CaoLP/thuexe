$(document).ready(function(){
    if($('#PostBody').length > 0)
        CKEDITOR.replace( 'PostBody', {
            filebrowserBrowseUrl : url // eg. 'includes/elFinder/elfinder.html'
        });


    $("#PostTitle").slug({
        slug: 'slug',
        hide: false
    });
//    $('.editor').each(function(e){
//        CKEDITOR.replace( this.id);
//    });
});
