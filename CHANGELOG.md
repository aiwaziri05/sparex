# Sparex Tech Hub - Changelog

## Session: January 7, 2026

### 🔧 Bug Fixes

#### Homepage "Show on Homepage" Toggle Not Working
- **Fixed projects and blog posts not appearing on homepage** when toggled
  - Issue: Homepage partials were rendering static, hard-coded cards instead of consuming `$projects` and `$posts` data from `HomeController`
  - Solution: Replaced static portfolio and blog card templates with dynamic `@forelse` loops
  - Now respects `show_on_homepage` boolean field for both projects and posts

#### Missing Cover Images on Homepage Cards
- **Fixed image rendering for project and blog post cards**
  - Issue: Homepage partials used incorrect image path logic, didn't handle schematic image names (e.g., `portfolio-analytics`)
  - Solution: Updated image rendering to strip prefix and construct correct asset paths:
    - `portfolio-analytics` → `assets/images/portfolio/analytics.png`
    - `blog-analytics` → `assets/images/blog/analytics.png`
  - Added `onerror` fallback for graceful image load failures

**Files Modified:**
- `resources/views/partials/_portfolio.blade.php` - Dynamic project loop with correct image paths
- `resources/views/partials/_blog.blade.php` - Dynamic post loop with correct image paths

### ♿ Accessibility & Performance Improvements

#### Social Proof Section Enhancements
- **Added accessibility attributes** to logo carousel and CTAs:
  - Logo images: Added `loading="lazy"` and `decoding="async"` for performance
  - Logo links: Added `aria-label` with company name for screen readers
  - Decorative SVG icons: Added `aria-hidden="true"` and `focusable="false"`
  
- **Improved logo carousel usability**:
  - Links now have descriptive aria-labels (e.g., "Visit [Company] website")
  - Lazy loading defers image download until visible in viewport
  - Async decoding prevents blocking main thread

**Files Modified:**
- `resources/views/partials/_social-proof.blade.php` - Added ARIA labels and lazy loading

---

## Session: December 9, 2025

### 🎯 New Features

#### Portfolio Page
- **Created dedicated portfolio page** (`/portfolio`)
  - Added `PortfolioController` with static project data
  - Implemented category-based filtering using Alpine.js
  - Categories match the services section: Custom Software Development, Digital SOP Systems, Workflow Automation, Data Management, Document Digitalization, IT Infrastructure Advisory
  - Smooth transitions and animations when filtering projects
  - Responsive grid layout (1/2/3 columns)
  - 7 sample projects with descriptions, tags, and categories

**Files Created:**
- `app/Http/Controllers/PortfolioController.php`
- `resources/views/portfolio/index.blade.php`

**Files Modified:**
- `routes/web.php` - Added portfolio route

---

### 🐛 Bug Fixes

#### Social Proof Logo Animation
- **Fixed broken logo scroll animation** in the "Trusted by teams worldwide" section
- Added missing CSS keyframes and animation classes

**Files Modified:**
- `resources/css/app.css` - Added `@keyframes logo-scroll` and `.animate-logo-scroll` utility class

---

### 🎨 Design Improvements

#### Spacing and Layout Refinement
Standardized whitespace across all sections for consistent visual rhythm and better content balance.

**Changes:**
- **Section Padding**: Unified all sections to `py-20` (80px vertical padding)
- **Header Margins**: Standardized section headers to `mb-12` (48px bottom margin)
- **About Section**: Reduced grid gap from `gap-16` to `gap-12`
- **Hero Section**: Updated from `pt-0 pb-12` to `py-20` for consistency

**Files Modified:**
- `resources/views/partials/_hero.blade.php`
- `resources/views/partials/_about.blade.php`
- `resources/views/partials/_services.blade.php`
- `resources/views/partials/_portfolio.blade.php`
- `resources/views/partials/_values.blade.php`
- `resources/views/partials/_blog.blade.php`
- `resources/views/partials/_testimonials.blade.php`

**Impact:**
- More consistent visual rhythm throughout the page
- Better breathing room between components
- Improved content hierarchy and readability

---

## Technical Stack
- **Backend**: Laravel (PHP)
- **Frontend**: Vite + Tailwind CSS v4.1
- **JavaScript**: Alpine.js (for interactive filtering)
- **Architecture**: Blade components and partials

---

## Next Steps
- Replace static portfolio data with database model and migration
- Add admin interface for managing projects
- Implement individual project detail pages (`/portfolio/{slug}`)
- Consider adding pagination or load-more functionality for portfolio page

---

## Session: December 9, 2025 (Evening)

### 🎨 Header Redesign

#### Complete Header Overhaul
Redesigned the website header following modern SaaS/tech industry best practices based on extensive research.

**Key Improvements:**
- **Sticky Header**: Fixed positioning with Alpine.js scroll detection
  - Adds shadow on scroll for depth
  - Backdrop blur effect
  - Smooth state transitions
  
- **Improved CTAs**:
  - Primary: "Get Started" (action-oriented, high contrast)
  - Secondary: "View Portfolio" (outline style)
  - Both optimized for conversions
  
- **Mobile Menu**:
  - Hamburger menu with smooth animations
  - Click-away functionality
  - Mobile-optimized CTAs
  - Proper touch targets (44px+)
  
- **Fixed Navigation**:
  - Portfolio → `/portfolio` (was `#values`)
  - Blog → `#blog` (was `#values`)
  - Proper active states

**Files Modified:**
- `resources/views/components/header.blade.php` - Complete redesign
- `resources/views/layouts/app.blade.php` - Added Alpine.js
- `resources/css/app.css` - Mobile nav styles, body padding, smooth scroll

**Technical Stack:**
- Alpine.js for interactivity
- Tailwind CSS for responsive design
- CSS transitions for smooth animations

**Research Sources:**
- Modern header design best practices (2024)
- SaaS CTA optimization studies
- Mobile-first design principles

## Session: December 11, 2025

### 🚀 New Features & Enhancements

#### Blog Page Implementation
- **Built `/blog` route** and controller `BlogController`.
- **Created `blog/index.blade.php`** using a slick, dark-themed hero section.
- **Standardized design** to match the Portfolio page (typography, gradients, card styles).
- **Mock Data**: Populated with sample articles (Analytics, Automation, AI, etc.).

#### Portfolio Page Polish
- **Hero Redesign**: Switched to a unified `slate-900` dark theme with subtle grid animations.
- **White Spacing Fix**: Optimized top padding for better mobile viewing.
- **Card Styling**: Updated project cards with dynamic color-based gradients.
- **Mobile Optimization**: Verified and fixed layout issues on small screens.

#### Global Enhancements
- **Social Media Panel**: Added `<x-social-panel />` to both Portfolio and Blog pages for consistent connectivity.
- **Navigation**: Updated header navigation to point correctly to `/blog`.
- **Visual Tweaks**: Increased opacity of hero section grid lines for better visibility.

**Files Created:**
- `app/Http/Controllers/BlogController.php`
- `resources/views/blog/index.blade.php`

**Files Modified:**
- `routes/web.php`
- `resources/views/portfolio/index.blade.php`
- `resources/views/components/header.blade.php`
- `README.md`
- `CHANGELOG.md`

---

#### Contact Page & CTA Updates
- **New Page**: Built `/contact` with a split layout (Info + Form) and dark hero section.
- **CTA Integration**: Updated "Get Started" buttons across Header, Hero, and Portfolio pages to link to `/contact`.
- **Navigation**: Implemented active state logic for better user orientation.

---

## Session: December 11, 2025 (Evening)

### 🎯 Project Details Implementation

#### Database Models & Migrations
- **Created `Project` Model** with comprehensive schema:
  - Fields: `title`, `slug`, `description`, `long_description`, `category`, `client`, `duration`, `team_size`
  - JSON fields: `tags`, `technologies`, `features`, `images`
  - Timestamps and soft deletes support
  - Automatic slug generation from title
  - Category-based filtering support

- **Created `projects` Migration**:
  - Full schema with indexes on `slug` and `category`
  - Support for rich project metadata
  - Prepared for future enhancements (client testimonials, metrics, etc.)

**Files Created:**
- `app/Models/Project.php`
- `database/migrations/2025_12_11_172946_create_projects_table.php`

#### Project Details Page
- **Implemented `/portfolio/{slug}` route** for individual project pages
- **Created `portfolio/show.blade.php`** with modern, detailed layout:
  - Hero section with project title, category, and description
  - Project metadata (client, duration, team size)
  - Full project description with rich formatting
  - Technologies used section with icon badges
  - Key features list with checkmark icons
  - Image gallery for project screenshots
  - Related projects section
  - Call-to-action for contact

- **Enhanced `PortfolioController`**:
  - Added `show()` method for detail pages
  - Slug-based project lookup with 404 handling
  - Related projects logic (same category)
  - Maintained existing `index()` functionality

**Files Created:**
- `resources/views/portfolio/show.blade.php`

**Files Modified:**
- `app/Http/Controllers/PortfolioController.php` - Added `show()` method
- `routes/web.php` - Added project detail route

#### Clickable Project Cards
- **Updated Homepage Portfolio Section**:
  - Wrapped project cards in clickable links
  - Added hover effects and transitions
  - Maintained existing card styling and animations
  - Links point to `/portfolio/{slug}`

- **Updated Portfolio Page**:
  - Made all project cards clickable
  - Preserved category filtering functionality
  - Enhanced hover states for better UX
  - Consistent link behavior across all cards

**Files Modified:**
- `resources/views/partials/_portfolio.blade.php` - Added clickable links to project cards
- `resources/views/portfolio/index.blade.php` - Enhanced cards with routing

#### Technical Improvements
- **Slug-based URLs**: Clean, SEO-friendly URLs for all projects
- **404 Handling**: Graceful error handling for non-existent projects
- **Related Projects**: Smart suggestions based on category matching
- **Responsive Design**: Mobile-optimized detail pages
- **Performance**: Efficient database queries with eager loading support

**Impact:**
- Users can now explore detailed project information
- Improved navigation and user experience
- Better SEO with dedicated project pages
- Foundation for future CMS integration
- Scalable architecture for project management

---

### 📝 Documentation Updates
- **Updated README.md**: Added section on project details functionality
- **Updated CHANGELOG.md**: Comprehensive documentation of all changes

---

### 🐛 Bug Fixes

#### Fixed "Undefined Array Key 'slug'" Error
- **Issue**: Portfolio page threw error when accessing project cards after viewing project details
- **Root Cause**: `index()` method used old projects array without `slug` key
- **Solution**: Refactored `index()` method to use `getProjects()` for consistency
- **Impact**: Eliminated code duplication and ensured all projects have required fields

**Files Modified:**
- `app/Http/Controllers/PortfolioController.php` - Refactored `index()` method

---

## Session: January 5, 2026

### 🗄️ Database Integration & Contact Form Implementation

#### Complete Database Migration
Migrated the entire application from static data arrays to a fully database-driven architecture using Laravel Eloquent models.

#### Project Model & Migration
- **Completed `Project` Model** (`app/Models/Project.php`):
  - Added fillable fields: `title`, `slug`, `description`, `long_description`, `category`, `image`, `color`, `tags`, `technologies`, `features`, `images`, `client`, `duration`, `team_size`, `is_published`, `published_at`
  - Implemented JSON casting for array fields (`tags`, `technologies`, `features`, `images`)
  - Added automatic slug generation using `Str::slug()` on title creation/update
  - Created `published()` scope for filtering published projects
  - Added soft deletes support

- **Updated Projects Migration**:
  - Added all required columns with proper types and constraints
  - Added unique index on `slug` for SEO-friendly URLs
  - Added index on `category` for efficient filtering
  - Included `is_published` and `published_at` for content management
  - Added soft deletes support

**Files Modified:**
- `app/Models/Project.php` - Complete model implementation
- `database/migrations/2025_12_11_172946_create_projects_table.php` - Full schema
- `database/migrations/2026_01_05_123249_add_columns_to_projects_table.php` - Migration to add columns to existing table

#### Post Model & Migration
- **Completed `Post` Model** (`app/Models/Post.php`):
  - Added fillable fields: `slug`, `title`, `description`, `content`, `image`, `category`, `color`, `read_time`, `author`, `tags`, `is_published`, `published_at`
  - Implemented JSON casting for `tags` array
  - Added automatic slug generation
  - Created `published()` scope for filtering published posts
  - Added soft deletes support

- **Updated Posts Migration**:
  - Added all required columns matching blog post structure
  - Added unique index on `slug`
  - Added index on `category` for filtering
  - Included publishing fields for content management

**Files Modified:**
- `app/Models/Post.php` - Complete model implementation
- `database/migrations/2025_12_11_181123_create_posts_table.php` - Full schema
- `database/migrations/2026_01_05_123250_add_columns_to_posts_table.php` - Migration to add columns to existing table

#### Contact Model & Migration
- **Created `Contact` Model** (`app/Models/Contact.php`):
  - Fields: `name`, `email`, `subject`, `message`, `is_read`
  - Boolean casting for `is_read` field
  - Prepared for future admin panel integration

- **Created Contacts Migration**:
  - Full contact form submission schema
  - Indexed `email` field for efficient queries
  - `is_read` flag for message management

**Files Created:**
- `app/Models/Contact.php`
- `database/migrations/2026_01_05_121642_create_contacts_table.php`

#### Database Seeders
- **Created `ProjectSeeder`**:
  - Migrated all 7 projects from static arrays to database
  - Converted arrays to JSON for `tags`, `technologies`, `features`, `images`
  - Set `published_at` timestamps and `is_published` flags

- **Created `PostSeeder`**:
  - Migrated all 6 blog posts from static arrays to database
  - Converted `tags` arrays to JSON
  - Parsed date strings to `published_at` timestamps using Carbon
  - Set publishing flags

- **Updated `DatabaseSeeder`**:
  - Added calls to `ProjectSeeder` and `PostSeeder`

**Files Created:**
- `database/seeders/ProjectSeeder.php`
- `database/seeders/PostSeeder.php`

**Files Modified:**
- `database/seeders/DatabaseSeeder.php` - Added seeder calls

#### Controller Updates
- **Updated `PortfolioController`**:
  - Removed `getProjects()` private method with static arrays
  - Updated `index()` to use `Project::published()->orderBy('published_at', 'desc')->get()`
  - Updated `show()` to use `Project::published()->where('slug', $slug)->firstOrFail()`
  - Updated related projects query to use database relationships
  - Automatic 404 handling with `firstOrFail()`

- **Updated `BlogController`**:
  - Removed `getPosts()` private method with static arrays
  - Updated `index()` to use `Post::published()->orderBy('published_at', 'desc')->get()`
  - Updated `show()` to use `Post::published()->where('slug', $slug)->firstOrFail()`
  - Updated related posts query to use database
  - Automatic 404 handling

**Files Modified:**
- `app/Http/Controllers/PortfolioController.php` - Database-driven queries
- `app/Http/Controllers/BlogController.php` - Database-driven queries

#### Contact Form Backend
- **Enhanced `ContactController`**:
  - Added `store()` method to handle POST requests
  - Implemented validation: `name` (required, string, max:255), `email` (required, email, max:255), `subject` (required, in:project,partnership,career,other), `message` (required, string, min:10)
  - Creates `Contact` record in database
  - Sends email notification using `ContactNotification`
  - Returns JSON response for AJAX requests or redirects with flash message

- **Created `ContactNotification`**:
  - Email notification class extending Laravel's `Notification`
  - Formats contact details in email template
  - Includes name, email, subject, and message
  - Sends to admin email configured in `.env`

- **Updated Routes**:
  - Added POST route: `Route::post('/contact', [ContactController::class, 'store'])->name('contact.store')`

**Files Created:**
- `app/Notifications/ContactNotification.php`

**Files Modified:**
- `app/Http/Controllers/ContactController.php` - Added `store()` method
- `routes/web.php` - Added contact form POST route

#### Contact Form Frontend
- **Updated Contact View**:
  - Changed form action to `{{ route('contact.store') }}`
  - Added AJAX form submission with JavaScript
  - Implemented loading states with spinner animation
  - Added success/error message display
  - Form reset on successful submission
  - Error handling for validation and network errors

- **Updated Layout**:
  - Added `@stack('scripts')` to `layouts/app.blade.php` for script injection

**Files Modified:**
- `resources/views/contact/index.blade.php` - AJAX form submission
- `resources/views/layouts/app.blade.php` - Script stack support

#### View Updates
- **Portfolio Views**:
  - Updated `portfolio/index.blade.php` to use object notation (`$project->title` instead of `$project['title']`)
  - Updated `portfolio/show.blade.php` to use `long_description` instead of `content`
  - Ensured JSON fields are properly accessed via Laravel's JSON casting

- **Blog Views**:
  - Updated `blog/index.blade.php` to use object notation (`$post->title` instead of `$post['title']`)
  - Updated `blog/show.blade.php` to use `published_at->format('M j, Y')` instead of `date` field
  - Ensured JSON fields work correctly with Eloquent models

**Files Modified:**
- `resources/views/portfolio/index.blade.php` - Object notation
- `resources/views/portfolio/show.blade.php` - Field name update
- `resources/views/blog/index.blade.php` - Object notation and date formatting
- `resources/views/blog/show.blade.php` - Date field update

#### Technical Improvements
- **Database Architecture**:
  - Full Eloquent ORM integration
  - JSON casting for array fields (automatic serialization/deserialization)
  - Soft deletes for content recovery
  - Published scopes for content management
  - Automatic slug generation for SEO-friendly URLs

- **Data Migration**:
  - Successfully migrated 7 projects from static arrays to database
  - Successfully migrated 6 blog posts from static arrays to database
  - All data preserved with proper formatting

- **Error Handling**:
  - Automatic 404 handling for missing projects/posts
  - Graceful error handling in contact form
  - Email notification error logging

**Impact:**
- ✅ Fully database-driven application
- ✅ Content can now be managed through database/admin panel
- ✅ Contact form submissions stored and tracked
- ✅ Email notifications for contact form submissions
- ✅ Scalable architecture for future growth
- ✅ SEO-friendly URLs with slug-based routing
- ✅ Foundation for admin panel integration (Filament ready)

**Next Steps:**
- Configure Filament admin panel for content management
- Add image upload functionality for projects and posts
- Implement pagination for portfolio and blog pages
- Add search functionality
- Set up email configuration in production environment
