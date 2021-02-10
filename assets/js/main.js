$(document).ready(function () {
   const mobileNavSidebar = $('#primary_mobile_nav-sidebar');
   const mobileNavToggler = $('#mobile_nav-toggler');

   mobileNavToggler.on('click', function (e) {
      e.stopPropagation();
      mobileNavSidebar.toggleClass('open');
   });
});
