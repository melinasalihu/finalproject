# 🌐 URL & Navigation Guide

## 📍 COMPLETE URL STRUCTURE

Replace `yoursite.com` with your actual domain.

### Homepage & Main Pages

| Page | URL | Purpose |
|------|-----|---------|
| Homepage | `yoursite.com/` | Main landing page with dashboard |
| All Services | `yoursite.com/sherbime/` | Browse all services |
| Testimonials | `yoursite.com/testimonials/` | Customer reviews (optional) |
| Pricing | `yoursite.com/pricing/` | Service pricing (optional) |
| Contact | `yoursite.com/contact/` | Contact form & info |
| Search | `yoursite.com/?s=keyword` | Search results |

### Category Pages (Automatic)

When you create services and assign them to categories, these URLs become active automatically:

| Category | URL | Color Theme |
|----------|-----|-------------|
| Nails | `yoursite.com/lloj-sherbimi/thonj/` | 💅 Pink |
| Hair | `yoursite.com/lloj-sherbimi/floke/` | ✂️ Gold |
| Makeup | `yoursite.com/lloj-sherbimi/makeup/` | 💄 Dark |
| Skincare | `yoursite.com/lloj-sherbimi/skincare/` | ✨ Blue |

### Individual Service Pages

Once you create services, each gets its own page:

| Service | URL Format |
|---------|-----------|
| Any Service | `yoursite.com/sherbimet/service-name/` |
| Example: Hair Color | `yoursite.com/sherbimet/hair-color/` |
| Example: Manicure | `yoursite.com/sherbimet/manicure/` |

---

## 🔗 NAVIGATION FLOW

### User clicks "Thonj" on homepage ⬇️
```
Home Page (yoursite.com/)
    ↓ (clicks 💅 Nails box)
Nails Category Page (yoursite.com/lloj-sherbimi/thonj/)
    ↓ (clicks a service)
Single Service Page (yoursite.com/sherbimet/french-nails/)
```

### User searches for "makeup" ⬇️
```
Any Page
    ↓ (uses search bar)
Search Results (yoursite.com/?s=makeup)
    ↓ (clicks a result)
Service Page or Category Page
```

### User visits contact ⬇️
```
Any Page (clicks Contact link)
    ↓
Contact Page (yoursite.com/contact/)
    ↓ (fills form and submits)
Email sent to admin + Success message
```

---

## 📱 MOBILE FRIENDLY URLS

All URLs work on:
- Desktop browsers
- Mobile browsers
- Tablets
- Any device

No special mobile URLs needed - same address for all devices!

---

## 🔐 ADMIN URLS

These are for you to manage content:

| Admin Task | URL |
|-----------|-----|
| WordPress Dashboard | `yoursite.com/wp-admin/` |
| All Services | `yoursite.com/wp-admin/edit.php?post_type=sherbimet` |
| Add New Service | `yoursite.com/wp-admin/post-new.php?post_type=sherbimet` |
| All Pages | `yoursite.com/wp-admin/edit.php?post_type=page` |
| Add New Page | `yoursite.com/wp-admin/post-new.php?post_type=page` |

---

## 🎯 SETTING UP PAGE SLUGS

When creating pages, set these **slugs** (URL-friendly names):

### Required Pages

| Page Name | Slug | Full URL |
|-----------|------|----------|
| Home | (Set as home) | yoursite.com/ |
| Contact Us | contact | yoursite.com/contact/ |

### Recommended Pages (Optional)

| Page Name | Slug | Full URL |
|-----------|------|----------|
| All Services | sherbime | yoursite.com/sherbime/ |
| Testimonials | testimonials | yoursite.com/testimonials/ |
| Pricing | pricing | yoursite.com/pricing/ |

**How to set slug:**
1. Create/Edit page
2. In "Publish" box, click "Permalink"
3. Edit the URL slug
4. Click "OK" or "Save"

---

## 📊 EXAMPLE SITE NAVIGATION

### Real Example URL Structure

```
Beauty Salon
├── Home: https://beautysalon.al/
│
├── About on Home
├── Dashboard Section
│   ├── 💅 Click → https://beautysalon.al/lloj-sherbimi/thonj/
│   ├── ✂️ Click → https://beautysalon.al/lloj-sherbimi/floke/
│   ├── 💄 Click → https://beautysalon.al/lloj-sherbimi/makeup/
│   └── ✨ Click → https://beautysalon.al/lloj-sherbimi/skincare/
│
├── Featured Services
│   └── Click service → https://beautysalon.al/sherbimet/service-name/
│
├── Testimonials Preview
│   └── "View More" → https://beautysalon.al/testimonials/
│
├── Footer Links
│   ├── All Services → https://beautysalon.al/sherbime/
│   ├── Pricing → https://beautysalon.al/pricing/
│   ├── Contact → https://beautysalon.al/contact/
│   └── Search → https://beautysalon.al/?s=keyword
│
└── Search Box (anywhere)
    └── Results → https://beautysalon.al/?s=search-term
```

---

## 🔗 INTERNAL LINKING

Services automatically link to:
- Category page
- Related services
- Homepage

Categories automatically link to:
- All services
- Individual services
- Homepage

---

## 🌍 DOMAIN SETUP

### What you need:
- Domain name (e.g., beautysalon.com)
- Hosting (you already have XAMPP/WordPress installed)

### Setting it up:
1. Register domain with registrar
2. Point domain to your hosting
3. Update WordPress URL settings
4. All links will automatically work

**Note:** Currently using localhost (XAMPP)
- URLs like: `http://localhost/wordpress/...`
- Will change to: `https://yoursite.com/...` after deployment

---

## 🔐 SSL/HTTPS

After getting a real domain:
1. Get SSL certificate
2. Update WordPress URLs to use HTTPS
3. All URLs will be secure

**Currently:** HTTP (local development)
**After deployment:** HTTPS (production)

---

## 📋 URL CUSTOMIZATION

### Change category slug "lloj-sherbimi" to something else:

1. Go to WordPress Admin
2. Shërbime > Kategoritë (Categories)
3. Edit category
4. In URL/slug field, change it
5. Update category

**New URL:** `yoursite.com/your-new-slug/category-name/`

---

## ❓ COMMON URL QUESTIONS

**Q: Why are URLs in Albanian?**
A: Theme is set to Albanian language. Can change in WordPress settings if needed.

**Q: Can I change the URLs?**
A: Yes! Edit the slugs in WordPress. URLs auto-generate based on slugs.

**Q: What's "sherbimet"?**
A: It's Albanian for "services". This is the post type slug.

**Q: Why ?s=keyword in search?**
A: Standard WordPress query parameter for search functionality.

**Q: Do I need to manually create these URLs?**
A: No! WordPress creates them automatically when you add content.

---

## 🚀 BEFORE & AFTER DEPLOYMENT

### Local Development
- Home: `http://localhost/wordpress/`
- Services: `http://localhost/wordpress/sherbimet/`
- Contact: `http://localhost/wordpress/contact/`

### After Deployment
- Home: `https://yourdomain.com/`
- Services: `https://yourdomain.com/sherbimet/`
- Contact: `https://yourdomain.com/contact/`

**All internal links update automatically!**

---

## 📱 MOBILE URL BEHAVIOR

### Desktop
Click button → Takes to page

### Mobile  
Click button → Takes to same page (responsive design adapts)

**No separate mobile URLs** - Same URL works everywhere!

---

## 🎯 TRACKING YOUR PAGES

### After setup, you should have these active:

**Critical (Must have):**
- [ ] Homepage works
- [ ] Contact page works
- [ ] At least 1 service works

**Important (Should have):**
- [ ] All 4 categories work
- [ ] Search works
- [ ] All Services page works

**Nice to have (Optional):**
- [ ] Pricing page works
- [ ] Testimonials page works
- [ ] Footer links work

---

## 📞 URL REFERENCE CARD

**Print this or bookmark for quick reference:**

```
🏠 Home: yoursite.com/
💅 Nails: yoursite.com/lloj-sherbimi/thonj/
✂️ Hair: yoursite.com/lloj-sherbimi/floke/
💄 Makeup: yoursite.com/lloj-sherbimi/makeup/
✨ Skincare: yoursite.com/lloj-sherbimi/skincare/
📋 All Services: yoursite.com/sherbime/
⭐ Testimonials: yoursite.com/testimonials/
💲 Pricing: yoursite.com/pricing/
📞 Contact: yoursite.com/contact/
🔍 Search: yoursite.com/?s=keyword
```

---

**That's it! Your site navigation is ready! 🎉**
