
function scrollToSmooth(element_id){
    var element = document.getElementById(element_id);
    window.scrollTo({
        top: element.offsetTop,
        left: 0,
        behavior: 'smooth'
      });
};