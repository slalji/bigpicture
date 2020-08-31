/* 
 * Custom tinyMCE settings
 */
    var share_button_top = new Share(".share-button-top", {
      title: "Share Button Multiple Element Test",
      ui: {
        flyout: "top center"
      }
    });

    //set up the editor

    tinyMCE.init({ 
        //theme : "advanced", 
       plugins: "code, preview, contextmenu, image, link, searchreplace", 
        selector: "textarea",
        convert_urls : false 
    });

 $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

