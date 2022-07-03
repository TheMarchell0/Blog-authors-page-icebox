(function() {
  document.addEventListener('DOMContentLoaded', () => {
    const ourAppLinks = document.querySelectorAll('.our-apps__link');
    if (ourAppLinks) {
      ourAppLinks.forEach(item => {
        item.setAttribute('onclick',`ym(52342033,'reachGoal','CLK_BLOG_OUR_APPS'); return true;`);
      });
    }
  })
}())