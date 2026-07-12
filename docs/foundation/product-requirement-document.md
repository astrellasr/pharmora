# 📄 Product Requirement Document (PRD)

> **Version:** 1.0  
> **Status:** Final  
> **Document Type:** Product Requirement Document (PRD)  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

1. Product Overview
2. Business Background
3. Problem Statement
4. Product Goals
5. Product Objectives
6. Scope
7. Functional Requirements
8. Non-Functional Requirements
9. User Requirements
10. Business Rules
11. Assumptions
12. Constraints
13. Success Metrics
14. Technology Stack
15. Future Roadmap

---

# 1. Product Overview

## Product Name

**Pharmora**

---

## Product Positioning

**Pharmora — A Modern Inventory Management Platform for Healthcare Businesses**

---

## Tagline

**Smart Inventory. Seamless Operations.**

---

## Product Summary

Pharmora is a web-based inventory management platform designed to simplify inventory operations for healthcare businesses through a centralized and intuitive digital system.

The platform enables organizations to manage pharmaceutical products, suppliers, categories, and inventory transactions while improving inventory visibility, operational efficiency, and data consistency through a reliable and maintainable digital platform.

The first release focuses on delivering a complete inventory management workflow with a clean architecture, modern user experience, and business-oriented functionality.

---

## Product Objective

The objective of Pharmora is to provide healthcare businesses with a centralized inventory management platform that improves operational efficiency, maintains inventory accuracy, and simplifies day-to-day inventory management.

---

# 2. Business Background

Many healthcare businesses continue to manage inventory using spreadsheets or manual documentation.

As inventory volume increases, these approaches become difficult to maintain and often result in inconsistent data, duplicated records, inaccurate stock information, and inefficient operational processes.

Without a centralized inventory management system, organizations face increasing administrative workloads while losing visibility into inventory conditions and transaction history.

Pharmora is designed to address these operational challenges by providing a modern inventory platform that improves data organization, inventory tracking, and overall operational efficiency.

---

# 3. Problem Statement

Healthcare organizations require an inventory management solution that is reliable, structured, and easy to operate.

Current manual workflows introduce operational challenges that reduce productivity and increase the likelihood of inventory-related errors.

The primary problems include:

- Manual inventory recording
- Inaccurate stock information
- Duplicate product records
- Inconsistent inventory data
- Difficult supplier management
- Limited inventory visibility
- Slow inventory monitoring
- Time-consuming reporting
- Lack of centralized inventory history
- Increased risk of human error

These issues become increasingly significant as business operations continue to grow.

---

# 4. Product Goals

The primary goal of Pharmora is to digitalize inventory operations through a centralized web platform that enables healthcare businesses to manage inventory more efficiently, accurately, and consistently.

The system is expected to:

- Improve inventory visibility.
- Reduce manual administrative work.
- Increase operational efficiency.
- Organize inventory data consistently.
- Support better day-to-day inventory management.

---

# 5. Product Objectives

To achieve the product goals, the first version of Pharmora should enable users to:

- Manage pharmaceutical products.
- Organize product categories.
- Maintain supplier information.
- Record stock-in transactions.
- Record stock-out transactions.
- Monitor current inventory levels.
- Review complete inventory movement history.
- Search and filter operational data efficiently.
- Access inventory summaries through an interactive dashboard.

The MVP focuses on delivering a complete and reliable inventory management workflow while maintaining simplicity, usability, and maintainability.

---

# 6. Scope

The first release of Pharmora focuses on delivering a complete and maintainable inventory management workflow for healthcare businesses.

Only features that directly contribute to inventory operations are included in the Minimum Viable Product (MVP).

Features outside the defined scope are intentionally excluded to maintain development focus and ensure a high-quality implementation.

---

## 6.1 In Scope (MVP)

### Authentication

The system shall provide a secure authentication mechanism that allows authorized users to access the application.

Features:

- Login
- Logout
- Session Authentication

---

### Dashboard

The dashboard serves as the primary landing page after authentication and provides a high-level overview of inventory conditions.

Features:

- Total Products
- Total Categories
- Total Suppliers
- Total Available Stock
- Low Stock Summary
- Recent Inventory Transactions

---

### Product Management

The system shall allow administrators to manage pharmaceutical products.

Features:

- Create Product
- View Product
- Update Product
- Delete Product
- Product Details
- Search Products
- Filter Products
- Pagination

---

### Category Management

The system shall allow administrators to organize products into categories.

Features:

- Create Category
- View Categories
- Update Category
- Delete Category

---

### Supplier Management

The system shall allow administrators to maintain supplier information.

Features:

- Create Supplier
- View Suppliers
- Update Supplier
- Delete Supplier

---

### Inventory Management

The system shall record inventory movement through stock transactions.

Modules:

#### Stock In

- Record incoming inventory
- Increase product stock
- Save transaction history

#### Stock Out

- Record outgoing inventory
- Validate available stock
- Reduce product stock
- Save transaction history

#### Inventory History

- View all inventory transactions
- Search transaction history
- Filter transaction history
- Pagination

---

### General System Features

The system shall provide:

- Search
- Filter
- Pagination
- Form Validation
- Success Notifications
- Error Notifications
- Responsive Layout

---

# 6.2 Out of Scope

The following features are intentionally excluded from Version 1.

These features may be considered for future releases.

---

## Business Modules

- Purchase Order
- Sales Management
- Customer Management
- Financial Reports

---

## Inventory Features

- Multi Warehouse
- Batch Number
- Expired Product Tracking
- Barcode Scanner
- QR Code Scanner

---

## User Management

- Multiple User Roles
- Role-Based Access Control (RBAC)
- Permission Management

---

## Integrations

- REST API
- Third-party Integrations
- Email Notifications
- SMS Notifications

---

## Advanced Features

- Analytics Dashboard
- AI-powered Recommendations
- Machine Learning
- IoT Integration
- Mobile Application

---

# 7. Functional Requirements

The following functional requirements define the expected behavior of the system.

| ID | Requirement |
|----|-------------|
| FR-01 | The system shall authenticate users through a login page. |
| FR-02 | The system shall allow authenticated users to log out securely. |
| FR-03 | The system shall display an inventory dashboard after login. |
| FR-04 | The system shall allow users to create, view, update, and delete product records. |
| FR-05 | The system shall allow users to manage product categories. |
| FR-06 | The system shall allow users to manage supplier information. |
| FR-07 | The system shall record Stock In transactions. |
| FR-08 | The system shall record Stock Out transactions. |
| FR-09 | The system shall automatically update inventory quantities after each transaction. |
| FR-10 | The system shall prevent Stock Out transactions when available stock is insufficient. |
| FR-11 | The system shall maintain inventory transaction history. |
| FR-12 | The system shall provide product search functionality. |
| FR-13 | The system shall provide filtering capabilities on data tables. |
| FR-14 | The system shall paginate large datasets. |
| FR-15 | The system shall validate all required user inputs before storing data. |
| FR-16 | The system shall display success and error notifications after user actions. |
| FR-17 | The system shall display appropriate validation messages when invalid input is submitted. |
| FR-18 | The system shall display detailed product information. |

---

# 8. Non-Functional Requirements

The following non-functional requirements define the quality attributes of the system.

---

## Performance

The system should:

- Load pages efficiently.
- Respond quickly to user interactions.
- Handle hundreds of inventory records without noticeable performance degradation.

---

## Usability

The application should:

- Be easy to learn.
- Provide intuitive navigation.
- Maintain a consistent user interface.
- Minimize the number of steps required to complete tasks.

---

## Reliability

The application should:

- Maintain accurate inventory records.
- Preserve data consistency.
- Prevent invalid inventory transactions.
- Ensure stable CRUD operations.

---

## Security

The system should implement:

- Authentication
- Session Management
- CSRF Protection
- Form Validation
- Secure Password Hashing

---

## Maintainability

The application should:

- Follow Laravel Best Practices.
- Use modular architecture.
- Maintain clean and readable code.
- Separate business logic appropriately.
- Be easy to extend for future development.

---

## Compatibility

The application should:

- Support modern desktop browsers.
- Provide responsive layouts for tablets.
- Maintain consistent behavior across supported browsers.
- Responsive for mobile devices (limited support).

---

## Scalability

Although Version 1 targets small-to-medium healthcare businesses, the architecture should support future expansion without major restructuring.

---

# 9. User Requirements

This section defines the primary user of the system and the capabilities required to accomplish daily inventory operations.

---

## Primary User

The current version of Pharmora is designed for a single system user.

| User | Description |
|------|-------------|
| Inventory Administrator | Responsible for managing inventory data, supplier information, product records, and inventory transactions. |

Future versions may introduce multiple user roles with different permissions.

---

## User Responsibilities

The Inventory Administrator should be able to:

- Access the system securely.
- Monitor inventory conditions through the dashboard.
- Manage product information.
- Organize product categories.
- Maintain supplier information.
- Record Stock In transactions.
- Record Stock Out transactions.
- Monitor inventory availability.
- Review inventory transaction history.
- Search and filter operational data efficiently.

---

## User Needs

The system should enable users to:

- Complete inventory tasks quickly.
- Minimize repetitive administrative work.
- Access accurate inventory information.
- Prevent inventory-related mistakes.
- Maintain organized operational records.
- Navigate the application without extensive training.

---

# 10. Business Rules

Business Rules define the operational logic that governs how the system behaves.

These rules ensure data consistency, operational reliability, and business integrity throughout the application.

---

## Authentication

- Only authenticated users may access the application.
- Unauthenticated users shall be redirected to the Login page.
- Users must log in before accessing any module.

---

## Product Management

- Every Product must belong to exactly one Category.
- Each Product shall have a unique Stock Keeping Unit (SKU).
- Product names are recommended to be unique.
- Products cannot exist without a valid Category.
- Product information must pass validation before being stored.

---

## Category Management

- Categories should have unique names.
- Categories should not be deleted if they are currently referenced by existing Products.
- Updating a Category must not affect existing inventory history.

---

## Supplier Management

- Supplier names should be unique within the organization.
- Suppliers must exist before being used in Stock In transactions.
- Supplier information may be updated without affecting historical transactions.

---

## Stock In

- Stock In transactions increase product inventory.
- Every Stock In transaction must generate an Inventory History record.
- Stock quantity must always be greater than zero.

---

## Stock Out

- Stock Out transactions decrease product inventory.
- Stock quantity cannot become negative.
- Stock Out is not permitted when available stock is insufficient.
- Every Stock Out transaction must generate an Inventory History record.

---

## Inventory History

- Inventory History is generated automatically.
- Historical transaction records cannot be edited manually.
- Every inventory movement must be traceable.

---

## Dashboard

Dashboard statistics should always reflect the latest inventory data.

---

# 11. Assumptions

The following assumptions define the operating conditions under which Version 1 of Pharmora is expected to function.

- The application is operated by a single Inventory Administrator.
- Internet connectivity is available during system usage.
- Inventory transactions are performed manually by the administrator.
- Product information is entered accurately by users.
- Every product belongs to one valid category.
- Suppliers are registered before inventory transactions occur.
- Inventory data is stored within a single organization.
- Users possess basic computer literacy.
- Authentication credentials are managed securely by the organization.

---

# 12. Constraints

The following constraints intentionally limit the scope of Version 1.

These constraints are introduced to maintain development focus while delivering a reliable Minimum Viable Product (MVP).

---

## Functional Constraints

- Single user authentication.
- Single organization.
- Single warehouse.
- No Purchase Order module.
- No Sales Management module.
- No Customer Management module.
- No Batch Number management.
- No Expired Product management.
- No Barcode scanning.
- No QR Code support.
- No Mobile Application.

---

## Technical Constraints

- Laravel 12 framework.
- Blade templating engine.
- PostgreSQL database.
- Laravel Breeze authentication.
- Server-side rendering architecture.
- MVC application architecture.

---

## Project Constraints

- The first release focuses on delivering a production-quality MVP for portfolio purposes.
- Limited development time.
- Focus on core inventory management features.
- Maintainable architecture is prioritized over feature quantity.
- Professional quality is prioritized over application complexity.

---

# 13. Success Metrics

The first release of Pharmora will be considered successful when it delivers a complete, reliable, and maintainable inventory management workflow that satisfies the defined business and technical requirements.

---

## Functional Success

The MVP shall successfully:

- Allow users to authenticate securely.
- Manage Products, Categories, and Suppliers.
- Record Stock In transactions.
- Record Stock Out transactions.
- Automatically update inventory quantities.
- Maintain complete Inventory History.
- Display inventory summaries through the Dashboard.

---

## Technical Success

The application should:

- Follow Laravel Best Practices.
- Maintain a modular MVC architecture.
- Store data consistently within PostgreSQL.
- Prevent invalid inventory transactions.
- Validate all required user inputs.
- Maintain clean and readable code.
- Be easy to understand and extend by other developers.

---

## User Experience Success

Users should be able to:

- Complete common inventory tasks efficiently.
- Navigate the application intuitively.
- Receive clear feedback after every important action.
- Access information with minimal effort.

---

## Project Success

The project should demonstrate the ability to:

- Analyze real business problems.
- Translate business requirements into software.
- Design a scalable system architecture.
- Develop a modern Laravel web application.
- Apply software engineering best practices.
- Produce professional technical documentation.
- Present a complete end-to-end software development process.

The final result should resemble a real enterprise software product rather than a university assignment.

---

# 14. Technology Stack

The following technologies are selected based on maintainability, development efficiency, modern best practices, and industry relevance.

---

## Architecture

- MVC (Model–View–Controller)

---

## Backend

- Laravel 12

---

## Frontend

- Blade
- Tailwind CSS
- JavaScript

---

## Database

- PostgreSQL

---

## Authentication

- Laravel Breeze

---

## Version Control

- Git
- GitHub

---

## Development Tools

- Windows 11
- Visual Studio Code
- Composer
- Node.js
- npm

---

# 15. Future Roadmap

The future roadmap outlines features that may be introduced after the successful completion of Version 1.

Future development will continue following the principle of delivering business value before increasing technical complexity.

---

## Version 2

### Inventory Enhancement

- Batch Number Management
- Expired Product Tracking
- Low Stock Notifications
- Barcode Support
- QR Code Support

### Data Management

- Export to Excel
- Export to PDF

### User Management

- Multiple User Roles
- Role-Based Access Control (RBAC)

---

## Version 3

### Business Operations

- Purchase Order Management
- Sales Management
- Customer Management

### Platform Expansion

- REST API
- Third-party Integrations
- Multi Warehouse Support
- Email Notifications
- Analytics Dashboard

---

## Long-Term Vision

Potential long-term enhancements include:

- Mobile Application
- Business Intelligence Dashboard
- Predictive Inventory Analytics
- AI-assisted Inventory Recommendations
- Multi-Organization Support
- Cloud Deployment
- Real-time Notifications

---

## Roadmap Principle

Future features should only be implemented when they provide clear business value.

The project should continue following the core philosophy of Pharmora:

> **Professional over Complex.**

Every future enhancement should improve business operations without sacrificing maintainability, usability, or software quality.