// Páginação automática rolando a página ele carrega mais posts
window.morePostsLoading = false
function loadMorePosts() {
  if (window.morePostsLoading == false) {
    window.morePostsLoading = true
    jQuery(".loadmoreButton").hide()

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
        window.morePostsLoading = false
      },
    })
  }
}

jQuery(function () {
  jQuery(".mainfooter_scroll").on("click", function () {
    jQuery(document.body).scrollTop(0)
  })
  jQuery(".loadmoreButton").on("click", loadMorePosts)

  jQuery(window).on("scroll", function () {
    var pct = (window.scrollY / document.body.scrollHeight) * 100
    if (pct >= 50) {
      loadMorePosts()
    }
  })
})

// Páginação com botão clicando ele carrega mais posts
/*jQuery(function () {
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
})*/
