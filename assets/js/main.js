$(document).ready(function () {
   const mobileNavSidebar = $('#primary_mobile_nav-sidebar');
   const mobileNavToggler = $('#mobile_nav-toggler');
   const mobileNavClose = $('#mobile_sidebar_close');

   mobileNavToggler.on('click', function (e) {
      e.stopPropagation();
      mobileNavSidebar.toggleClass('open');
   });

   mobileNavClose.on('click', function () {
      mobileNavSidebar.hasClass('open') &&
         mobileNavSidebar.removeClass('open');
   });
});
