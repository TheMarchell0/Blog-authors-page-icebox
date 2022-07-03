document.addEventListener('DOMContentLoaded', function() {
  const prevLocation = document.referrer;
  const searchParamCurrent = document.location.search;
  const allPostSection = document.querySelector('#all-post-section');

  if(searchParamCurrent) {
    return false;
  }

  if(prevLocation.includes('all') && !searchParamCurrent.includes('all')) {
    setTimeout(() => {

      allPostSection.scrollIntoView({block: "start", behavior: "smooth"});
    }, 500);
  }
})