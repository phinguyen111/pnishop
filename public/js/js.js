const productItems = document.querySelectorAll('.product-item');

productItems.forEach(item => {
  item.addEventListener('mouseenter', () => {
    item.classList.add('hovered');
  });

  item.addEventListener('mouseleave', () => {
    item.classList.remove('hovered');
  });
});

//
document.addEventListener('DOMContentLoaded', () => {
  const links = document.querySelectorAll('.sidebar a');
  const sections = document.querySelectorAll('.content-section');
  
  links.forEach(link => {
      link.addEventListener('click', (e) => {
          e.preventDefault();
          const target = document.querySelector(link.getAttribute('href'));
          
          sections.forEach(section => {
              section.style.display = 'none';
          });
          
          target.style.display = 'block';
          
          links.forEach(link => {
              link.classList.remove('active');
          });
          
          link.classList.add('active');
      });
  });

  // Show the first section by default
  sections[0].style.display = 'block';
  links[0].classList.add('active');
});
$('#myCarousel').carousel({
  interval: 3000,
})