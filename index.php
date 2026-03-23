<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="LuxeHome Decor & Styling - Premium home decor and interior design services">
  <title>LuxeHome Decor & Styling - Premium Home Interior Design</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="container">
      <a href="index.html" class="logo font-serif">LuxeHome</a>
      <nav class="nav">
        <a href="index.html">Home</a>
        <a href="services.html">Services</a>
        <a href="about-contact.html">About & Contact</a>
      </nav>
      <button class="mobile-menu-btn" id="mobile-menu-btn">
        <span>☰</span>
      </button>
    </div>
  </header>

  <!-- Mobile Navigation -->
  <nav class="mobile-nav" id="mobile-nav">
    <a href="index.html">Home</a>
    <a href="services.html">Services</a>
    <a href="about-contact.html">About & Contact</a>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1 class="font-serif">
        Luxury Home Decor &<br>
        <span class="highlight">Interior Styling</span>
      </h1>
      <p>Transform your living spaces into elegant havens with our expert design services and premium decor solutions</p>
      <div class="btn-group">
        <a href="#contact" class="btn btn-primary">
          <span>Get a Free Consultation</span>
          <span>→</span>
        </a>
        <a href="services.html" class="btn btn-secondary">View Our Services</a>
      </div>
    </div>
  </section>

  <!-- Featured Services Section -->
  <section class="section">
    <div class="container">
      <div class="section-title">
        <h2 class="font-serif">Our Premium Services</h2>
        <p>Comprehensive home decor solutions tailored to your unique style and preferences</p>
      </div>
      <div class="grid grid-3">
        <div class="service-card">
          <div class="service-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
          </div>
          <h3>Living Room Decor</h3>
          <p>Create inviting spaces for relaxation and entertainment with curated furnishings.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18M3 10h18M3 7l9-4 9 4M4 10v11h4V10H4zm8 0v11h4V10h-4zm8 0v11h4V10h-4z" />
            </svg>
          </div>
          <h3>Bedroom Styling</h3>
          <p>Transform your bedroom into a peaceful retreat with elegant design elements.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
          </div>
          <h3>Kitchen & Dining Decor</h3>
          <p>Stylish and functional spaces for cooking and gathering with loved ones.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
            </svg>
          </div>
          <h3>Wall Art & Lighting</h3>
          <p>Illuminate your home with artistic fixtures and stunning wall decorations.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
            </svg>
          </div>
          <h3>Custom Furniture & Accessories</h3>
          <p>Bespoke pieces designed to perfectly complement your unique style.</p>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="services.html" style="color: var(--color-primary); text-decoration: none; font-weight: 500;">
          Explore All Services →
        </a>
      </div>
    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section class="section section-bg">
    <div class="container">
      <div style="max-width: 1200px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem; align-items: center;">
          <div>
            <h2 class="font-serif" style="font-size: 2.5rem; margin-bottom: 1.5rem;">Why Choose LuxeHome?</h2>
            <p style="font-size: 1.125rem; color: var(--color-neutral-600); margin-bottom: 2rem;">
              We combine artistic vision with practical expertise to create spaces that are both beautiful and livable. Our commitment to excellence ensures every project exceeds expectations.
            </p>
            <div class="benefits-grid">
              <div class="benefit-item">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Premium Quality Materials</span>
              </div>
              <div class="benefit-item">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>20+ Years of Experience</span>
              </div>
              <div class="benefit-item">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Personalized Design Consultation</span>
              </div>
              <div class="benefit-item">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>On-Time Project Delivery</span>
              </div>
              <div class="benefit-item">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>Affordable Luxury Pricing</span>
              </div>
              <div class="benefit-item">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span>100% Satisfaction Guarantee</span>
              </div>
            </div>
          </div>
          <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem;">
            <img src="https://images.unsplash.com/photo-1542904990-579199bba13a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=400" alt="Interior consultation" style="border-radius: 0.5rem; height: 12rem; object-fit: cover; width: 100%;">
            <img src="https://images.unsplash.com/photo-1593069431672-f903a33c286f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=400" alt="Custom furniture" style="border-radius: 0.5rem; height: 12rem; object-fit: cover; width: 100%; margin-top: 2rem;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Inspiration Gallery -->
  <section class="section">
    <div class="container">
      <div class="section-title">
        <h2 class="font-serif">Design Inspiration</h2>
        <p>Explore our portfolio of stunning transformations and get inspired for your own space</p>
      </div>
      <div class="gallery-grid">
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1704383014646-2123f9dc8137?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="Luxury interior">
          <div class="gallery-overlay"></div>
        </div>
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1631679706909-1844bbd07221?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="Modern living room">
          <div class="gallery-overlay"></div>
        </div>
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1594296220371-a34da13ff6d4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="Elegant bedroom">
          <div class="gallery-overlay"></div>
        </div>
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1725257928373-dc6d2ac7b145?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="Dining space">
          <div class="gallery-overlay"></div>
        </div>
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1631562380774-fbde0bd709f2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="Wall lighting">
          <div class="gallery-overlay"></div>
        </div>
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1627229483132-ecb9184f9d07?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="Home accessories">
          <div class="gallery-overlay"></div>
        </div>
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1617403493677-a0cbfc484010?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="Home office">
          <div class="gallery-overlay"></div>
        </div>
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1605191353027-d21e534a419a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="Cozy interior">
          <div class="gallery-overlay"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Client Testimonials -->
  <section class="section section-amber">
    <div class="container">
      <div class="section-title">
        <h2 class="font-serif">What Our Clients Say</h2>
        <p>Trusted by homeowners who value quality, creativity, and exceptional service</p>
      </div>
      <div class="grid grid-3">
        <div class="testimonial-card">
          <div class="stars">
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
          </div>
          <blockquote>"The team transformed our living room beyond our expectations! Every detail was perfect."</blockquote>
          <div>
            <p class="testimonial-author">Sarah Johnson</p>
            <p class="testimonial-role">Homeowner</p>
          </div>
        </div>
        
        <div class="testimonial-card">
          <div class="stars">
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
          </div>
          <blockquote>"Professional, creative, and timely. Our bedroom looks like a 5-star hotel suite now!"</blockquote>
          <div>
            <p class="testimonial-author">Michael Chen</p>
            <p class="testimonial-role">Interior Design Client</p>
          </div>
        </div>
        
        <div class="testimonial-card">
          <div class="stars">
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
          </div>
          <blockquote>"Outstanding service and quality. They understood our vision perfectly."</blockquote>
          <div>
            <p class="testimonial-author">Emma Williams</p>
            <p class="testimonial-role">Real Estate Developer</p>
          </div>
        </div>
        
        <div class="testimonial-card">
          <div class="stars">
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
          </div>
          <blockquote>"From consultation to completion, the entire process was seamless. Our home has never looked better!"</blockquote>
          <div>
            <p class="testimonial-author">David Martinez</p>
            <p class="testimonial-role">Homeowner</p>
          </div>
        </div>
        
        <div class="testimonial-card">
          <div class="stars">
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
          </div>
          <blockquote>"They brought my Pinterest board to life! The attention to detail and quality of work is exceptional."</blockquote>
          <div>
            <p class="testimonial-author">Lisa Anderson</p>
            <p class="testimonial-role">First-time Homeowner</p>
          </div>
        </div>
        
        <div class="testimonial-card">
          <div class="stars">
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
          </div>
          <blockquote>"Worth every penny! The custom furniture pieces are stunning and the overall design exceeded our dreams."</blockquote>
          <div>
            <p class="testimonial-author">Robert Taylor</p>
            <p class="testimonial-role">Luxury Home Client</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Before & After Projects -->
  <section class="section">
    <div class="container">
      <div class="section-title">
        <h2 class="font-serif">Before & After Projects</h2>
        <p>See the transformative power of our design services in real projects</p>
      </div>
      <div class="grid grid-3">
        <div class="before-after-card">
          <div class="before-after-images">
            <div class="image-container">
              <img src="https://images.unsplash.com/photo-1631679706909-1844bbd07221?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="Before">
              <span class="image-label">Before</span>
            </div>
            <div class="image-container">
              <img src="https://images.unsplash.com/photo-1767050321604-a2654be8fad0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="After">
              <span class="image-label" style="background: var(--color-primary); color: white;">After</span>
            </div>
          </div>
          <h3 style="margin-top: 1rem;">Modern Living Room Makeover</h3>
          <p>Complete transformation with modern furniture and neutral palette</p>
        </div>
        
        <div class="before-after-card">
          <div class="before-after-images">
            <div class="image-container">
              <img src="https://images.unsplash.com/photo-1594296220371-a34da13ff6d4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="Before">
              <span class="image-label">Before</span>
            </div>
            <div class="image-container">
              <img src="https://images.unsplash.com/photo-1612301988752-5a5b19021f45?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="After">
              <span class="image-label" style="background: var(--color-primary); color: white;">After</span>
            </div>
          </div>
          <h3 style="margin-top: 1rem;">Luxury Bedroom Redesign</h3>
          <p>Elegant bedroom suite with premium bedding and custom lighting</p>
        </div>
        
        <div class="before-after-card">
          <div class="before-after-images">
            <div class="image-container">
              <img src="https://images.unsplash.com/photo-1725257928373-dc6d2ac7b145?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="Before">
              <span class="image-label">Before</span>
            </div>
            <div class="image-container">
              <img src="https://images.unsplash.com/photo-1723750290151-164cb19ebab7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=600" alt="After">
              <span class="image-label" style="background: var(--color-primary); color: white;">After</span>
            </div>
          </div>
          <h3 style="margin-top: 1rem;">Contemporary Dining Space</h3>
          <p>Stylish dining area with statement lighting and modern furnishings</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section id="contact" class="cta-section">
    <div class="container">
      <h2 class="font-serif">Ready to Transform Your Space?</h2>
      <p>Get a free consultation and let's bring your dream home to life</p>
      <div class="btn-group">
        <a href="about-contact.html" class="btn btn-white">Contact Us Today</a>
        <a href="services.html" class="btn btn-outline-white">Explore Services</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-section">
        <h4 class="font-serif">LuxeHome</h4>
        <p>Transform your living spaces into elegant havens with premium decor and expert design services.</p>
        <div class="social-links">
          <a href="#" class="social-link" aria-label="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
              <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
            </svg>
          </a>
          <a href="#" class="social-link" aria-label="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
          </a>
          <a href="#" class="social-link" aria-label="Pinterest">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z"/>
            </svg>
          </a>
          <a href="#" class="social-link" aria-label="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
              <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
            </svg>
          </a>
        </div>
      </div>
      
      <div class="footer-section">
        <h4>Quick Links</h4>
        <a href="index.html">Home</a>
        <a href="services.html">Services</a>
        <a href="about-contact.html">About Us</a>
        <a href="about-contact.html#contact">Contact</a>
      </div>
      
      <div class="footer-section">
        <h4>Legal</h4>
        <a href="terms.html">Terms & Conditions</a>
        <a href="privacy.html">Privacy Policy</a>
        <a href="refund.html">Refund Policy</a>
        <a href="faq.html">FAQ</a>
      </div>
      
      <div class="footer-section">
        <h4>Contact Info</h4>
        <p>123 Design Avenue, Suite 400</p>
        <p>New York, NY 10001</p>
        <p>Phone: +1 (555) 123-4567</p>
        <p>Email: hello@luxehome.com</p>
      </div>
    </div>
    
    <div class="footer-bottom">
      <p>&copy; 2026 LuxeHome Decor & Styling. All rights reserved.</p>
    </div>
  </footer>

  <script src="js/script.js"></script>
</body>
</html>
