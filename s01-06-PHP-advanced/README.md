# Sprint 1 – s01-06 PHP Advanced
This folder contains a set of PHP exercises focused on **advanced PHP concepts and object-oriented programming fundamentals**.
The goal of this sprint is to practice:
- PHP superglobals (`$_GET`, `$_POST`, `$_SESSION`)
- Magic constants
- Magic methods
- Object-oriented programming (OOP) basics
- Enums for strict typing and structured data
- Traits for reusable behavior
- Composer and external dependencies
This sprint introduces more advanced PHP features while reinforcing clean code structure, object design, and modern PHP development practices.
---
# ⚙️ Requirements
To run these exercises you need:
- PHP installed (or XAMPP)
- VS Code (recommended)
- Terminal / command line access
- Composer (for Level 3 exercises)
### Run a file:
```bash
php filename.php

Example:

php level-1/ex01-form/process.php

⸻

📁 Project structure

s01-06-php-advanced/
│
├── README.md
│
├── level-1
│   ├── ex01-form
│   │   ├── form.html
│   │   ├── process.php
│   │   └── session.php
│   │
│   ├── ex02-magic-constants
│   │   └── main.php
│   │
│   └── ex03-magic-methods
│       └── main.php
│
├── level-2
│   ├── ex01-educational-resource
│   │   ├── Resource.php
│   │   └── main.php
│   │
│   └── ex02-car-trait
│       ├── Car.php
│       ├── Turbo.php
│       └── main.php
│
└── level-3
    ├── ex01-composer-install
    └── ex02-composer-usage

⸻

📚 PHP Concepts Practiced

This sprint focuses on intermediate and advanced PHP concepts, including:

* PHP superglobals ($_GET, $_POST, $_SESSION)
* Session management
* Magic constants (__FILE__, __DIR__, __LINE__, etc.)
* Magic methods (__toString, __get, __set, __invoke, etc.)
* Object-oriented programming fundamentals
* Enums for strict value control
* Traits for reusable functionality
* Composer dependency management
* Using external libraries in PHP projects

⸻

📌 Notes

* Each exercise is a standalone PHP script or small module
* Use $_POST for form handling
* Use sessions ($_SESSION) to persist data across requests
* Use magic constants to understand runtime context
* Override magic methods (excluding __construct) to modify object behavior
* Use enums to restrict allowed values and improve type safety
* Use traits to share reusable logic between classes
* Keep classes focused on a single responsibility
* Use Composer for external libraries in Level 3

⸻

🚀 Goal of this sprint

By the end of this sprint you should be comfortable with:

* Handling form data using PHP superglobals
* Working with sessions in PHP
* Using magic constants and magic methods
* Building basic object-oriented structures
* Applying enums for structured data
* Using traits for code reuse
* Installing and using Composer dependencies
* Understanding modern PHP project structure and organization

