jQuery(function () {
  jQuery(".mainfooter_scroll").on("click", function () {
    jQuery(document.body).scrollTop(0)
  })

  jQuery(".loadmoreButton").on("click", function () {
    jQuery(this).hide()

    var offset = jQuery(".postscontents article").length
    jQuery.ajax({
      type: "POST",
      url: ajaxUrl,
      data: { action: "LoadMorePosts", offset: offset },
      success: function (html) {
        jQuery(".loadmoreButton").show()
        if (html != "") {
          jQuery(".postscontents").append(html)
        } else {
          jQuery(".loadmoreButton").hide()
        }
      },
    })
  })
})
