# KourseMate

KourseMate is a research-project marketplace for students. It helps undergraduate and postgraduate students find research project materials, read academic posts and get expert help with complex projects, all from one website.

## Business idea

Final-year and postgraduate students spend weeks searching for reliable research materials and guidance. KourseMate brings that into one place:

- **Find research projects fast** — a searchable library of project topics and materials ("your research projects right in front of you").
- **Buy materials online** — students add materials to a cart and pay online, then download what they purchased.
- **Get expert help** — students with a complex research project can request help from KourseMate's team.
- **Partner with KourseMate** — writers and institutions can apply to become partners and contribute content.

Revenue comes from paid project materials, research assistance and partnerships.

## Key features

- Student registration and login
- Searchable project and blog posts
- Cart, online payment and payment-failure handling
- Partnership request form
- Admin dashboard to:
  - add, edit, approve and delete posts
  - review and approve or decline partner requests
  - manage admin accounts and profiles
- AJAX-powered admin actions with toast and SweetAlert notifications

## Tech stack

- **Backend:** PHP
- **Database:** MySQL (schema in `koursemate (3).sql`)
- **Frontend:** HTML, CSS, Bootstrap, jQuery, CKEditor, DataTables, Owl Carousel, AOS animations

## Project structure

```
index.php, blog.php, posts.php, project.php   # Public pages
cart.php, sendPayment.php, failed_payment.php # Purchase flow
patnership.php                                 # Partnership requests
admin/                                         # Admin dashboard
admin/ajax_controls/                           # Admin AJAX endpoints
includes/                                      # Shared header, footer, sidebar
lib/, styles/, assets/                         # CSS, JS libraries and images
```

## Getting started

1. Install a PHP and MySQL stack such as XAMPP or WAMP.
2. Copy the project into your web server folder (for example `htdocs/koursemate`).
3. Create a MySQL database and import `koursemate (3).sql`.
4. Update the database connection details in the PHP connection file.
5. Open `http://localhost/koursemate` in your browser.
