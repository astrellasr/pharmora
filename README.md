# 💊 Pharmora

> **Smart Inventory. Seamless Operations.**

A modern inventory management system built with **Laravel 12**, **PostgreSQL**, and **Tailwind CSS** for pharmacies, clinics, and healthcare businesses.

Pharmora is a portfolio project developed to demonstrate full-stack web development skills, software engineering practices, database design, and modern UI/UX implementation using the Laravel ecosystem.

---

## Badges

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.4-777BB4?logo=php&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-17-4169E1?logo=postgresql&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4-06B6D4?logo=tailwindcss&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-Template-FF2D20?logo=laravel&logoColor=white)
![Status](https://img.shields.io/badge/Status-In_Development-F59E0B)
![License](https://img.shields.io/badge/License-MIT-22C55E)
![Architecture](https://img.shields.io/badge/Architecture-MVC-2563EB)

---

# Table of Contents

- [About Pharmora](#about-pharmora)
- [Key Features](#key-features)
- [Technology Stack](#technology-stack)
- [System Architecture](#system-architecture)
- [Project Structure](#project-structure)
- [Installation](#installation)
- [Documentation](#documentation)
- [Development Roadmap](#development-roadmap)
- [Screenshots](#screenshots)
- [Project Progress](#project-progress)
- [Contributing](#contributing)
- [License](#license)
- [Author](#author)

---

# About Pharmora

Pharmora is a modern inventory management platform designed to help healthcare businesses efficiently manage medicines, suppliers, inventory movements, and stock availability through a clean, responsive, and user-friendly interface.

The project emphasizes maintainability, scalability, and software engineering best practices rather than serving solely as a CRUD application. Every implementation is guided by comprehensive documentation, including product requirements, database design, wireframes, design systems, and development planning.

This repository is developed as a software engineering portfolio project to demonstrate practical experience in designing, developing, and documenting a production-style Laravel application from initial planning through implementation.

---

# Key Features

Current MVP features include:

- 🔐 Secure user authentication
- 💊 Product management
- 🗂 Category management
- 🚚 Supplier management
- 📦 Stock In management
- 📤 Stock Out management
- 📜 Inventory transaction history
- 🔍 Search and filtering
- 📊 Inventory dashboard
- 📱 Responsive interface
- 🌙 Dark mode support
- ⚡ Modern Laravel architecture
- 🎨 Clean enterprise UI
- 🗄 PostgreSQL relational database
- 📚 Comprehensive project documentation

The project is being developed incrementally following a structured implementation roadmap, with each feature aligned to the project's Product Requirements Document (PRD), Database Design, Entity Relationship Diagram (ERD), Data Dictionary, Wireframes, and Design System.

# Technology Stack

Pharmora is built using modern web technologies with a strong focus on maintainability, scalability, and clean architecture.

| Category | Technology |
|----------|------------|
| Backend | Laravel 12 |
| Language | PHP 8.4 |
| Frontend | Blade, Tailwind CSS, Alpine.js |
| Database | PostgreSQL 17 |
| Authentication | Laravel Breeze |
| ORM | Eloquent ORM |
| Build Tool | Vite |
| Package Manager | Composer, NPM |
| Version Control | Git & GitHub |
| Testing | Pest |
| Deployment (Planned) | Laravel Forge / VPS |

---

# System Architecture

Pharmora follows Laravel's MVC (Model-View-Controller) architecture to promote clean code organization, separation of concerns, and long-term maintainability.

```
                    Client (Browser)
                            │
                            ▼
                    Laravel Routes
                            │
                            ▼
                     Controllers
                            │
            ┌───────────────┴───────────────┐
            ▼                               ▼
        Business Logic                  Blade Views
          (Controllers)                     (UI)
            │
            ▼
      Eloquent Models
            │
            ▼
      PostgreSQL Database
```

The application also leverages Laravel's built-in features, including:

- Authentication & Authorization
- Middleware
- Request Validation
- Eloquent ORM
- Database Migrations
- Blade Components
- Service Providers
- Route Protection

This architecture keeps business logic separated from presentation logic while ensuring the application remains scalable as additional modules are introduced.

---

# Project Structure

The repository is organized into documentation, application source code, project planning, and supporting assets.

```text
Pharmora
│
├── app/                    # Application source code
├── assets/                 # Branding assets
├── bootstrap/              # Framework bootstrap files
├── config/                 # Application configuration
├── database/               # Migrations, seeders, factories
├── docs/                   # Project documentation
├── planning/               # Development planning
├── public/                 # Public assets
├── resources/              # Blade views, CSS, JavaScript
├── routes/                 # Application routes
├── screenshots/            # UI screenshots
├── storage/                # Application storage
├── tests/                  # Feature & Unit tests
│
├── artisan
├── composer.json
├── package.json
├── README.md
└── vite.config.js
```

The `docs` directory contains comprehensive software engineering documentation created before implementation, ensuring every development phase aligns with the project's architecture and business requirements.

---

# Installation

## Prerequisites

Before running the project, make sure the following software is installed:

- PHP 8.4 or higher
- Composer
- PostgreSQL 17
- Node.js 24+
- NPM
- Git

---

## Clone Repository

```bash
git clone https://github.com/astrellasr/pharmora.git

cd pharmora
```

---

## Install Dependencies

```bash
composer install

npm install
```

---

### Environment Configuration

Create the environment file.

```bash
cp .env.example .env
```

> **Windows (PowerShell)**

```powershell
Copy-Item .env.example .env
```

Generate the application key.

```bash
php artisan key:generate
```

Configure your PostgreSQL connection inside the `.env` file.

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=pharmora
DB_USERNAME=postgres
DB_PASSWORD=your_password
```

---

## Database Migration

Run the database migrations.

```bash
php artisan migrate
```

---

## Run Development Server

Start the Laravel development server.

```bash
php artisan serve
```

In a separate terminal, start the Vite development server.

```bash
npm run dev
```

Open your browser and visit:

```
http://127.0.0.1:8000
```

The application should now be running successfully.

# Documentation

One of Pharmora's primary goals is to demonstrate a structured software engineering workflow. Before implementation began, the project was fully planned and documented to ensure consistency across business requirements, database design, user experience, and development execution.

## Project Documentation

| Document | Description |
|----------|-------------|
| Product Requirement Document (PRD) | Defines business goals, users, features, and project scope. |
| Business Flow | Describes the overall business process supported by the system. |
| User Flow | Illustrates user interactions throughout the application. |
| Information Architecture | Defines the application's navigation structure and sitemap. |
| Database Design | Documents database entities, attributes, and constraints. |
| Entity Relationship Diagram (ERD) | Visualizes relationships between all database entities. |
| Data Dictionary | Defines every database table, field, and data type. |
| Wireframe | Presents low-fidelity layouts for every application screen. |
| Design System | Defines colors, typography, spacing, components, and UI standards. |
| Implementation Plan | Outlines the complete development roadmap from setup to deployment. |

All documentation is available inside the `docs/` directory.

---

# Development Roadmap

The project is developed incrementally following a structured implementation plan.

| Phase | Status |
|--------|--------|
| Phase 1 — Project Setup | ✅ Completed |
| Phase 2 — Database Foundation | 🔄 In Progress |
| Phase 3 — Product Management Module | ⏳ Planned |
| Phase 4 — Category Management Module | ⏳ Planned |
| Phase 5 — Supplier Management Module | ⏳ Planned |
| Phase 6 — Inventory Management Module | ⏳ Planned |
| Phase 7 — Dashboard Development | ⏳ Planned |
| Phase 8 — UI & UX Enhancement | ⏳ Planned |
| Phase 9 — Testing & Optimization | ⏳ Planned |
| Phase 10 — Deployment | ⏳ Planned |

Each phase is completed and committed independently to maintain a clean Git history and demonstrate an iterative software development process.

---

# Screenshots

Application screenshots will be added as development progresses.

| Feature | Preview |
|---------|---------|
| Login | To be added after implementation. |
| Dashboard | To be added after implementation. |
| Products | To be added after implementation. |
| Categories | To be added after implementation. |
| Suppliers | To be added after implementation. |
| Inventory | To be added after implementation. |
| Profile | CTo be added after implementation. |

Screenshots will be stored in the `screenshots/` directory and updated after each completed module.

---

# Development Progress

The project is actively under development.

```text
Overall Progress

████████░░░░░░░░░░░░ 40%

Documentation           ████████████████████ 100%
Project Setup           ████████████████████ 100%
Authentication          ████████████████████ 100%
Database Foundation     ░░░░░░░░░░░░░░░░░░░░
Product Module          ░░░░░░░░░░░░░░░░░░░░   0%
Category Module         ░░░░░░░░░░░░░░░░░░░░   0%
Supplier Module         ░░░░░░░░░░░░░░░░░░░░   0%
Inventory Module        ░░░░░░░░░░░░░░░░░░░░   0%
Dashboard               ░░░░░░░░░░░░░░░░░░░░   0%
Deployment              ░░░░░░░░░░░░░░░░░░░░   0%
```

Current development focuses on building a production-style inventory management application while maintaining clean architecture, comprehensive documentation, and software engineering best practices throughout every development phase.

# Contributing

Thank you for your interest in Pharmora.

At the current stage, this repository is maintained as a personal portfolio project and is not accepting external contributions.

As the project evolves, contribution guidelines, issue templates, and pull request workflows may be introduced to support collaborative development.

If you have suggestions, feedback, or improvement ideas, feel free to open an issue or start a discussion.

---

# License

This project is licensed under the **MIT License**.

You are free to use, modify, and distribute this project in accordance with the terms of the MIT License.

See the `LICENSE` file for more information.

---

# Author

**Astrella Syadira Ramadhante**

Software Engineering & Laravel Portfolio Project

- GitHub: https://github.com/astrellasr
- LinkedIn: https://linkedin.com/in/astrella-syadira/

---

# Closing

Pharmora represents more than an inventory management application.

It demonstrates a complete software engineering workflow—from product planning and system analysis to database design, UI/UX planning, implementation, and deployment.

Rather than focusing solely on writing code, this project emphasizes structured documentation, clean architecture, maintainable development practices, and incremental feature delivery.

The repository will continue to evolve as new modules, improvements, and production-ready features are implemented throughout the project's development roadmap.

Thank you for visiting this repository.

If you find this project interesting, consider giving it a ⭐ on GitHub.

---

This repository is continuously improved as new features and modules are implemented throughout the development journey.