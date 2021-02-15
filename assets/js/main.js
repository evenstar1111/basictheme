document.onreadystatechange = () => {
   const mobileNavSidebar = document.querySelector(
      '#primary_mobile_nav-sidebar'
   );
   const mobileNavToggler = document.querySelector('#mobile_nav-toggler');
   const mobileNavClose = document.querySelector('#mobile_sidebar_close');

   mobileNavToggler.onclick = e => {
      e.stopPropagation();
      mobileNavSidebar.classList.contains('open')
         ? mobileNavSidebar.classList.remove('open')
         : mobileNavSidebar.classList.add('open');
   };

   mobileNavClose.onclick = e => {
      mobileNavSidebar.classList.contains('open') &&
         mobileNavSidebar.classList.remove('open');
   };
};
