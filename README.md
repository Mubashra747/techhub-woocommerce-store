# techhub-woocommerce-store
# TechHub – Computer Accessories Store
**Your One-Stop Shop for Premium Computer Accessories**

A WordPress + WooCommerce e-commerce project built for a BS Computer Science semester
submission. This package contains everything needed to install a fully working store on
WAMPserver, plus ready-to-import product, category, and coupon data.

---

## ⚠️ What's in this package vs. what you install

This package was generated in a sandboxed environment without access to wordpress.org, so it
ships the **data and documentation layer** rather than pre-downloaded WordPress/plugin binaries
(those must come from wordpress.org directly, which takes about 15 minutes — see below).
What's included:

- `products.csv` — 60 products across all 10 required categories, WooCommerce-import-ready
- `categories.csv` — the 10 product categories with descriptions
- `coupons.csv` — the 3 required coupons with exact field values to enter
- `DATABASE_STRUCTURE.md` — explains the WordPress/WooCommerce schema and how to export your
  real `.sql` file once your site is running
- This `README.md`

You will download WordPress core + free plugins yourself (links below) since they're large
binaries best fetched fresh from the official source — this also means you get the latest
stable versions rather than a possibly-outdated bundled copy.

---

## 1. Environment Setup (WAMPserver)

**Requirements:**
- PHP: 8.1 or higher
- MySQL: 5.7+ or MariaDB 10.4+
- WAMPserver: latest version (includes Apache, PHP, MySQL)

**Steps:**
1. Download and install [WAMPserver](https://www.wampserver.com/en/) (or XAMPP as an alternative).
2. Start WAMP, confirm the tray icon is green (all services running).
3. Open `http://localhost/phpmyadmin`, create a new database named `techhub_db`.

## 2. Install WordPress

1. Download the latest WordPress from **wordpress.org/download**.
2. Extract it into `wamp64/www/techhub/`.
3. Visit `http://localhost/techhub/`, and run the famous 5-minute install:
   - Database name: `techhub_db`
   - Username: `root`, Password: *(blank, default WAMP setting)*
   - Site title: `TechHub`
   - Set your own admin username/password (see credentials section below).

## 3. Install Required Free Plugins

From **Plugins → Add New**, search and install each (all free, from the official repository):

| Plugin | Purpose |
|---|---|
| **WooCommerce** | Core e-commerce engine |
| **Elementor** | Page builder for homepage, About, Contact |
| **Contact Form 7** | Contact page form |
| **Advanced Custom Fields (Free)** | Custom "Specifications" table on product pages |
| **YITH WooCommerce Compare** | Product comparison feature |
| **LiteSpeed Cache** (or **WP Super Cache** if unavailable) | Performance/caching |
| **Classic Widgets** | Only if your theme needs it — check compatibility first |

Optional:
- **WP Mail SMTP** — reliable email delivery (order confirmations)
- **Yoast SEO** — SEO-friendly URLs and meta
- **Duplicate Page** — quickly clone product/page layouts

## 4. Theme

Use a free WooCommerce-compatible theme from the WordPress Theme Directory — **Storefront**
(by WooCommerce/Automattic) is the standard choice: fully free, built specifically for
WooCommerce, and Elementor-compatible. Install via **Appearance → Themes → Add New → search
"Storefront"**.

Recolor to the required palette (Appearance → Customize → Colors):
- Primary: Dark Blue `#0A2647`
- Accent/Background: White `#FFFFFF`
- Text/Contrast: Black `#000000`

## 5. Import the Data

1. **Categories:** WooCommerce auto-creates categories on product import, but for descriptions,
   go to **Products → Categories** and manually add the 10 categories using `categories.csv`
   as reference (name + description), or install a lightweight CSV category importer plugin.
2. **Products:** Go to **Products → All Products → Import**, upload `products.csv`. Map columns
   as prompted (WooCommerce auto-detects Name, SKU, Categories, Regular price, etc.). The
   `Specifications` column can be mapped to a custom field, then displayed via ACF as a table.
3. **Coupons:** Go to **Marketing → Coupons → Add Coupon**, and create each of the 3 coupons
   using the exact values in `coupons.csv`.
4. **Images:** includes placeholder image URLs (picsum.photos) so every product
   has a photo immediately after import. Swap these for real product photos from a free stock
   source (e.g. Pexels, Unsplash, Pixabay) before final submission if your instructor expects
   realistic accessory photos.

## 6. Build the Pages with Elementor

Use Elementor to build:
- **Home:** Hero Banner → Featured Products → Best Sellers → New Arrivals → Categories →
  Deals of the Week → Why Choose Us → Reviews → Newsletter → Footer
- **About Us:** Company Story, Mission, Vision, Team section
- **Contact:** Contact Form 7 shortcode + embedded Google Map iframe + business hours
- **Deals:** Use WooCommerce's built-in "On Sale" shortcode/widget to auto-list discounted
  products (about 40% of the generated products are marked on sale)

WooCommerce's built-in pages (Shop, Cart, Checkout, My Account) are created automatically on
activation — no manual building required for these.

## 7. Sample Credentials

Set these up manually after install (never ship real passwords in a submitted ZIP):

| Role | Username | Suggested Password | Notes |
|---|---|---|---|
| Administrator | `admin` | *(set your own strong password)* | Full dashboard access |
| Sample Customer | `demo_customer` | *(set your own)* | Register via My Account → Register |

Document whatever you actually set in your final submission — do not reuse the placeholders
above verbatim.

## 8. Payment & Checkout

Enable only **Cash on Delivery** in **WooCommerce → Settings → Payments**. No real gateway
(Stripe/PayPal) integration is required or should be enabled.

## 9. Folder Structure (after install)

```
wamp64/www/techhub/
├── wp-admin/
├── wp-includes/
├── wp-content/
│   ├── themes/
│   │   └── storefront/
│   ├── plugins/
│   │   ├── woocommerce/
│   │   ├── elementor/
│   │   ├── contact-form-7/
│   │   ├── advanced-custom-fields/
│   │   ├── yith-woocommerce-compare/
│   │   └── litespeed-cache/
│   └── uploads/
│       └── 2026/07/  (product images)
├── wp-config.php
└── index.php
```

## 10. Final Submission Checklist

- [ ] WordPress + WooCommerce installed and running on WAMPserver
- [ ] Storefront theme active, recolored to White/Dark Blue/Black
- [ ] All 10 categories created (`categories.csv`)
- [ ] 60 products imported across categories (`products.csv`), each with price, SKU, stock,
      brand, specs, description
- [ ] 3 coupons created (`coupons.csv`)
- [ ] YITH Compare active and working on Shop page
- [ ] Contact Form 7 form embedded on Contact page
- [ ] Home, Shop, Product Detail, Cart, Checkout, My Account, Deals, Contact, About Us all live
- [ ] Cash on Delivery enabled as the only payment method
- [ ] Real `.sql` exported via phpMyAdmin (see `DATABASE_STRUCTURE.md`) and included in your
      final ZIP alongside the whole `wamp64/www/techhub` folder

## Features Implemented (per original spec)

Product catalog with categories/brands/specs/ratings, shop filtering & search, product
comparison, reviews, deals/sale badges, coupon system, cart, checkout (COD), customer
accounts, contact form, about page, and an admin dashboard covering sales, orders, products,
customers, coupons, inventory, and reviews — all via WooCommerce core plus the free plugins
listed above, with no paid or nulled software required.
