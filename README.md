# WordPress Customizations

This repository contains real-world WordPress customizations implemented in PHP.
The code is extracted from production websites and focuses on performance optimization
and dynamic content handling using WordPress best practices.

---

## 🔧 Key Features

### 1. Performance Optimizations
- Image preloading for critical above-the-fold content
- Improved image fetch priority for faster rendering
- Removal of unnecessary lazy loading
- Preloading of custom fonts to reduce CLS and FCP

**Concepts used:**  
`add_action`, DOM manipulation, `wp_head`, `wp_footer`

---

### 2. Advanced Custom Fields (ACF) Integration
- Reusable shortcodes to render images stored in ACF
- Support for current post and external post IDs
- Secure output using WordPress escaping functions

**Concepts used:**  
`add_shortcode`, `get_field`, reusable PHP logic

---

## 🛠 Tech Stack
- PHP
- WordPress Core
- Advanced Custom Fields (ACF)

---

## 📌 Purpose
This repository demonstrates my understanding of WordPress internals, PHP-based
customizations, and performance-focused development practices used in real client projects.
