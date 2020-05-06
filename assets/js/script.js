window.morePostsLoading = false;
function loadMorePosts() {
  if (window.morePostsLoading == false) {
    window.morePostsLoading = true;
    jQuery(".loadmoreButton").hide();
    let offset = jQuery(".postscontent article").length;
    jQuery.ajax({
      type: "POST",
      url: ajaxUrl,
      data: { action: "LoadMorePosts", offset: offset },
      success: function (html) {
        jQuery(".loadmoreButton").show();
        if (html != "") {
          jQuery(".postscontent").append(html);
          window.morePostsLoading = false;
        } else {
          jQuery(".loadmoreButton").hide();
          window.morePostsLoading = true;
        }
      }
    });
  }
}

jQuery(function () {
  jQuery(".mainfooter_scroll").on("click", function () {
    jQuery(window).scrollTop(0);
  });

  jQuery(".loadmoreButton").on("click", loadMorePosts);

  jQuery(window).on("scroll", function () {
    let perc = (window.scrollY / document.body.scrollHeight) * 100;
    if (perc >= 70) {
      loadMorePosts();
    }
  });
});
