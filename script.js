
AOS.init({ duration: 800, once: true });

// Mobile nav
const btn = document.querySelector('.hamburger');
const nav = document.querySelector('.navlinks');
if (btn && nav){
  btn.addEventListener('click', () => {
    const open = nav.classList.toggle('show');
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
}
