//Paginação AJAX
window.morePostsLoading = false;

function loadMorePosts() {

    if(window.morePostsLoading == false) {
        window.morePostsLoading = true;

        var offset = jQuery('article.type-post').length;

        jQuery.ajax({
            type: 'POST',
            url: ajaxUrl,
            data: {action:'loadMorePosts', offset:offset},
            success:function(html) {
                jQuery('.moreposts').append(html);

                window.morePostsLoading = false;
            }
        });
    }

}

jQuery(function(){
    jQuery(".loadmoreButton").on('click', loadMorePosts);
});

/*Paginação AJAX (ñ está funcionando corretamente, está repetindo os posts)
jQuery(function(){
    jQuery(".loadmoreButton").on('click', function(){

        jQuery(this).hide();

        var offset = jQuery('article.type-post').length;

        jQuery.ajax({
            type: 'POST',
            url: ajaxUrl,
            data: {action:'loadMorePosts', offset:offset},
            success:function(html) {
                jQuery('.loadmoreButton').show();

                if(html != '') {
                    jQuery('article.type-post').append(html);
                } else {
                    jQuery('.loadmoreButton').hide();
                    
                }
            }
        });
    });
});*/