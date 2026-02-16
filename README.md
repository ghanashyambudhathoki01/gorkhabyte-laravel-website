# Gorkhabyte Academy 🚀

Gorkhabyte Academy is a comprehensive, modern Learning Management System (LMS) and professional services website built with Laravel. It features a stunning public site, a powerful admin dashboard, and a dedicated student portal for accessing course content and recorded sessions.

## 🌟 Key Features

### 🎓 Student Portal
- **Dashboard**: personalized overview of learning progress and statistics.
- **Video Library**: Access to all course recordings with a premium video player supporting YouTube, Vimeo, and direct links.
- **Feedback System**: Students can provide ratings and feedback for training sessions.
- **Profile Management**: Custom profile settings with image upload support.

### 🛠️ Admin Dashboard
- **Comprehensive Analytics**: Real-time stats for services, blogs, trainings, and user engagement.
- **Content Management**: Full CRUD for Blogs, Services, and Training Programs.
- **Video Management**: easily upload and organize recorded sessions with embed support.
- **Inquiry Handling**: Manage messages and contact requests from the public site.
- **Feedback Moderation**: View and manage student feedback to improve course quality.

### 🌐 Public Website
- **Dynamic Homepage**: Highlighting services, training programs, and latest news.
- **Professional Services**: Showcase business and educational services offered.
- **Academy Blog**: Full-featured blog with category and slug support.
- **Training Programs**: Detailed course pages with curriculum information.
- **Contact Integration**: Functional inquiry form for potential students and clients.

## 💻 Tech Stack

- **Backend**: [Laravel 12+](https://laravel.com/)
- **Frontend**: [Tailwind CSS 4](https://tailwindcss.com/) & [Alpine.js](https://alpinejs.dev/)
- **Build Tool**: [Vite](https://vitejs.dev/)
- **Database**: MySQL / PostgreSQL
- **Authentication**: Laravel Breeze (Customized)
- **UI Architecture**: Blade Components & Dark/Light Mode Support

## 🚀 Getting Started

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL / MariaDB

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/ghanashyambudhathoki01/gorkhabyte-laravel-website.git
   cd gorkhabyte-laravel-website
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup**
   ```bash
   copy .env.example .env
   php artisan key:generate
   ```
   *Configure your database settings in the `.env` file.*

4. **Run Migrations & Seeders**
   ```bash
   php artisan migrate --seed
   ```

5. **Symlink Storage**
   ```bash
   php artisan storage:link
   ```

6. **Start Development Server**
   ```bash
   npm run dev
   # In a separate terminal
   php artisan serve
   ```

## 🎨 Design Philosophy

Gorkhabyte focuses on **Rich Aesthetics** and **Visual Excellence**:
- **Glassmorphism**: Subtle blur effects and semi-transparent layers for a premium feel.
- **Dynamic Animations**: Smooth hover transitions and micro-interactions.
- **Dark Mode**: Fully implemented native dark mode for a better nighttime learning experience.
- **Responsive**: A "Mobile-First" approach ensuring a seamless experience on all devices.

## 📄 License

The Gorkhabyte Academy project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---
*Built with ❤️ byGhanashyam Budhathoki*
