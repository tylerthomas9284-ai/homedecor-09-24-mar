// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileNav = document.getElementById('mobile-nav');
  
  if (mobileMenuBtn && mobileNav) {
    mobileMenuBtn.addEventListener('click', function() {
      mobileNav.classList.toggle('active');
      const icon = this.querySelector('span');
      icon.textContent = mobileNav.classList.contains('active') ? '✕' : '☰';
    });
    
    // Close mobile menu when clicking on a link
    const mobileLinks = mobileNav.querySelectorAll('a');
    mobileLinks.forEach(link => {
      link.addEventListener('click', function() {
        mobileNav.classList.remove('active');
        mobileMenuBtn.querySelector('span').textContent = '☰';
      });
    });
  }
});

// FAQ Accordion
function toggleFAQ(element) {
  const answer = element.nextElementSibling;
  const icon = element.querySelector('.faq-icon');
  const allAnswers = document.querySelectorAll('.faq-answer');
  const allIcons = document.querySelectorAll('.faq-icon');
  
  // Close all other FAQs
  allAnswers.forEach(item => {
    if (item !== answer) {
      item.classList.remove('active');
    }
  });
  
  allIcons.forEach(item => {
    if (item !== icon) {
      item.textContent = '▼';
    }
  });
  
  // Toggle current FAQ
  answer.classList.toggle('active');
  icon.textContent = answer.classList.contains('active') ? '▲' : '▼';
}

// Contact Form Validation
function validateForm(event) {
  event.preventDefault();
  
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const phone = document.getElementById('phone').value.trim();
  const message = document.getElementById('message').value.trim();
  
  if (!name || !email || !phone || !message) {
    alert('Please fill in all fields.');
    return false;
  }
  
  // Basic email validation
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert('Please enter a valid email address.');
    return false;
  }
  
  // Phone validation (basic)
  const phoneRegex = /^[\d\s\-\+\(\)]+$/;
  if (!phoneRegex.test(phone)) {
    alert('Please enter a valid phone number.');
    return false;
  }
  
  // Success message
  alert('Thank you for your message! We will get back to you within 24 hours.');
  
  // Reset form
  document.getElementById('contact-form').reset();
  
  return false;
}

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});

// Header Scroll Effect
let lastScrollTop = 0;
const header = document.querySelector('.header');

window.addEventListener('scroll', function() {
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  
  if (scrollTop > lastScrollTop && scrollTop > 100) {
    // Scrolling down
    header.style.transform = 'translateY(-100%)';
  } else {
    // Scrolling up
    header.style.transform = 'translateY(0)';
  }
  
  lastScrollTop = scrollTop;
});

// Add active class to current page navigation
document.addEventListener('DOMContentLoaded', function() {
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  const navLinks = document.querySelectorAll('.nav a, .mobile-nav a');
  
  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      link.style.color = 'var(--color-primary)';
      link.style.fontWeight = '600';
    }
  });
});
