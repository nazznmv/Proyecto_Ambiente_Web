
let lastScrollTop = 0;

window.addEventListener('scroll', function() {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

  if (currentScroll > lastScrollTop) {
    // Desplazamiento hacia abajo
    document.getElementById('miFooter').style.bottom = '-100px'; // Cambia 100px por el valor que desees
  } else {
    // Desplazamiento hacia arriba
    document.getElementById('miFooter').style.bottom = '0';
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
}, false);

document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('input');
    const paragraphs = document.querySelectorAll('p');
  
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
          if (input.value === '') {
            input.style.borderColor = 'red';
            const pregunta = input.parentElement.querySelector('p');
            pregunta.style.color = 'red'; // Cambiar color del párrafo
          } else {
            input.style.borderColor = '';
            const pregunta = input.parentElement.querySelector('p');
            pregunta.style.color = ''; // Restaurar color original del párrafo
          }
        });
    });
  
    paragraphs.forEach(paragraph => {
      paragraph.addEventListener('mouseenter', function() {
        if (paragraph.innerText === 'Hombre' || paragraph.innerText === 'Mujer' || paragraph.innerText === 'Otro') {
          paragraph.style.color = '';
        }
      });
    });
  
    document.addEventListener('mouseleave', function() {
      let isEmpty = false;
      inputs.forEach(input => {
        if (input.value === '') {
          isEmpty = true;
          input.style.borderColor = 'red';
        }
      });
  
      if (isEmpty) {
        alert('¡Debe llenar todos los datos!');
      }
    });
  });
  
