// Intersection Observer API
const ratio = 0.15;
const options = {
  root: null,
  rootMargin: '0px',
  threshold: ratio
}

function handleIntersect(entries, observer) {
 entries.forEach(function(entry) {
   if(entry.intersectionRatio > ratio) {
     entry.target.classList.add('fx-reveal--visible');
     observer.unobserve(entry.target);
   }
 }) 
}

const observer = new IntersectionObserver(handleIntersect, options);

document.querySelectorAll('.fx-reveal').forEach(function(reveal) {
  observer.observe(reveal);
});
