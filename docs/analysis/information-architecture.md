# 📄 Information Architecture

> **Version:** 1.0  
> **Status:** Final  
> **Document Type:** Information Architecture  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Navigation Structure](#2-navigation-structure)
- [3. Application Sitemap](#3-application-sitemap)
- [4. Navigation Hierarchy](#4-navigation-hierarchy)
- [5. Screen Inventory](#5-screen-inventory)
- [6. Module Relationship](#6-module-relationship)
- [7. Navigation Rules](#7-navigation-rules)
- [8. Information Hierarchy Principles](#8-information-hierarchy-principles)
- [9. Design Considerations](#9-design-considerations)
- [10. Closing](#10-closing)

---

# 1. Purpose

This document defines the Information Architecture (IA) of Pharmora by describing the application's navigation structure, screen hierarchy, and relationships between modules.

The primary objective of this document is to organize application content into a clear, logical, and scalable structure that enables users to locate information efficiently while supporting daily inventory management activities.

Unlike the Business Flow document, which focuses on operational processes, and the User Flow document, which focuses on user interactions, the Information Architecture focuses on how information and application modules are structured and connected.

This document serves as the primary reference for designing application navigation, page hierarchy, routing structure, and overall application organization before interface design and development begin.

---

# 2. Navigation Structure

Pharmora adopts a **Sidebar Navigation** layout as the primary navigation pattern.

This navigation model is widely used in modern enterprise SaaS applications because it provides direct access to core operational modules while maintaining a clean, predictable, and scalable user experience.

All primary modules are accessible from a single navigation level, minimizing navigation depth and reducing cognitive load during daily operations.

```
Pharmora
│
├── Dashboard
├── Products
├── Categories
├── Suppliers
├── Inventory
└── Profile
```

### Navigation Philosophy

The navigation structure follows several core principles:

- Flat navigation hierarchy to minimize unnecessary navigation steps.
- Consistent module placement throughout the application.
- Clear separation between master data and transactional data.
- Fast access to frequently used operational features.
- Scalable architecture for future module expansion without restructuring the primary navigation.

The Dashboard functions as the application's central entry point after authentication, while every operational module can be accessed directly from the sidebar without passing through intermediate menus.

---

# 3. Application Sitemap

The following sitemap illustrates the overall structure of the Pharmora application.

```
Pharmora
│
├── Authentication
│   ├── Login
│   └── Logout
│
├── Dashboard
│
├── Products
│   ├── Product List
│   ├── Create Product
│   ├── Edit Product
│   └── Product Details
│
├── Categories
│   ├── Category List
│   ├── Create Category
│   └── Edit Category
│
├── Suppliers
│   ├── Supplier List
│   ├── Create Supplier
│   └── Edit Supplier
│
├── Inventory
│   ├── Stock In
│   ├── Stock Out
│   └── Inventory History
│
└── Profile
    ├── My Profile
    ├── Change Password
    └── Logout
```

The sitemap is intentionally designed with a shallow hierarchy to reduce navigation complexity while keeping related functionality grouped together.

---

# 4. Navigation Hierarchy

The following hierarchy defines the navigation levels within Pharmora.

## Level 0

```
Authentication
```

Accessible only before successful login.

---

## Level 1

```
Dashboard
Products
Categories
Suppliers
Inventory
Profile
```

These modules represent the primary navigation displayed in the application's sidebar.

---

## Level 2

### Products

```
Product List
Create Product
Edit Product
Product Details
```

---

### Categories

```
Category List
Create Category
Edit Category
```

---

### Suppliers

```
Supplier List
Create Supplier
Edit Supplier
```

---

### Inventory

```
Stock In
Stock Out
Inventory History
```

---

### Profile

```
My Profile
Change Password
Logout
```

This navigation hierarchy maintains a maximum depth of two levels, allowing users to locate information quickly without navigating through deeply nested menus.

---

# 5. Screen Inventory

The following table lists every screen included in the MVP version of Pharmora.

| Module | Screen |
|----------|----------------------|
| Authentication | Login |
| Dashboard | Dashboard |
| Products | Product List |
| Products | Create Product |
| Products | Edit Product |
| Products | Product Details |
| Categories | Category List |
| Categories | Create Category |
| Categories | Edit Category |
| Suppliers | Supplier List |
| Suppliers | Create Supplier |
| Suppliers | Edit Supplier |
| Inventory | Stock In |
| Inventory | Stock Out |
| Inventory | Inventory History |
| Profile | My Profile |
| Profile | Change Password |

**Total Main Screens:** **17**

### Notes

- Create and Edit screens are presented as dedicated pages for documentation purposes. During implementation, they may be implemented as pages or modal dialogs depending on UX requirements.
- Inventory History is a read-only screen used for transaction tracking and auditing.
- Logout is considered a system action rather than a dedicated screen and is therefore excluded from the screen inventory.

---

# 6. Module Relationship

The following diagram illustrates how each module within Pharmora is connected from an information architecture perspective.

```
Authentication
        │
        ▼
Dashboard
        │
        ├──────────────┬──────────────┬──────────────┬──────────────┐
        ▼              ▼              ▼              ▼
Products      Categories      Suppliers      Inventory
                                                   │
                                    ┌──────────────┼──────────────┐
                                    ▼              ▼              ▼
                               Stock In      Stock Out   Inventory History

Dashboard
        │
        ▼
Profile
```

The Dashboard functions as the application's central navigation hub, providing direct access to all operational modules.

Products, Categories, and Suppliers represent the application's master data modules, while Inventory manages all stock transactions and historical records.

Profile is separated from operational modules because it contains user account management rather than business operations.

---

# 7. Navigation Rules

The following rules define how users navigate throughout Pharmora.

## Dashboard

The Dashboard serves as the application's primary landing page after successful authentication.

It is the default landing page for every authenticated session.

It provides an overview of current inventory conditions and offers direct access to all operational modules.

---

## Products

The Products module is responsible for managing all product information.

Users can:

- View Product List
- Create Product
- Edit Product
- View Product Details

Products serve as the primary inventory assets and are required before Stock In or Stock Out transactions can occur.

---

## Categories

The Categories module organizes products into logical classifications.

Users can:

- View Category List
- Create Category
- Edit Category

Each product must belong to a valid category to maintain organized inventory data.

---

## Suppliers

The Suppliers module manages supplier information used during inventory procurement.

Users can:

- View Supplier List
- Create Supplier
- Edit Supplier

Supplier records must exist before they can be referenced in Stock In transactions.

---

## Inventory

The Inventory module manages all inventory movement within the system.

It consists of three operational features:

- Stock In
- Stock Out
- Inventory History

Stock In increases product inventory.

Stock Out decreases product inventory after validating stock availability.

Inventory History automatically records every inventory transaction and functions as a read-only audit log.

---

## Profile

The Profile module contains administrator account settings.

Users can:

- View Profile Information
- Change Password
- Logout

These functions are isolated from operational modules to maintain a clear separation between business operations and account management.

---

## Navigation Behavior

Pharmora follows several navigation rules to ensure a predictable and consistent user experience.

- Every primary module is accessible directly from the sidebar.
- Navigation depth should not exceed two hierarchical levels.
- Users should never navigate through unrelated modules to complete an operational task.
- Master Data modules are separated from Inventory Transaction modules.
- Authentication screens remain inaccessible after successful login unless the session ends.
- Inventory History is accessible only through the Inventory module.
- Profile functions remain independent from inventory operations.
- Navigation labels must remain consistent across the entire application.

---

# 8. Information Hierarchy Principles

The Information Architecture of Pharmora is designed according to several core principles to ensure clarity, scalability, and operational efficiency.

| Principle | Implementation |
|------------|----------------|
| **Flat Navigation** | All primary modules are accessible directly from the sidebar without unnecessary navigation depth. |
| **Consistency** | Navigation patterns, page structures, naming conventions, and layouts remain consistent across every module. |
| **Separation of Concerns** | Master Data modules are separated from Inventory Transaction modules to improve organization and maintainability. |
| **Logical Grouping** | Related features are grouped under the same module to improve discoverability and reduce navigation complexity. |
| **Scalability** | The navigation structure allows future modules to be introduced without affecting the existing hierarchy. |
| **Discoverability** | Users should be able to locate every primary feature within one or two navigation steps. |
| **Predictability** | Similar modules should follow identical navigation patterns so users can easily anticipate system behavior. |
| **Maintainability** | The navigation hierarchy should remain simple and modular to support future development and long-term maintenance. |

---

# 9. Design Considerations

The Information Architecture establishes several structural decisions that should remain consistent throughout future design and development.

## Sidebar as Primary Navigation

The sidebar serves as the primary navigation component and should remain visible throughout authenticated user sessions.

It provides immediate access to all operational modules while maintaining a consistent navigation experience.

---

## Dashboard as Navigation Hub

The Dashboard acts as the application's central landing page after authentication.

Users should always return to the Dashboard when beginning a new operational task.

---

## Flat Navigation Structure

Navigation depth should remain shallow.

Users should never navigate through multiple unrelated screens to reach a frequently used feature.

---

## Clear Module Separation

Application modules are organized into distinct functional groups.

- Dashboard
- Master Data
- Inventory Transactions
- User Account

This separation improves usability while supporting a modular software architecture.

---

## Consistent Information Organization

Every operational module should follow the same page structure whenever possible.

A typical module should include:

- Page Header
- Search
- Filter
- Data Table
- Pagination
- Primary Action Button
- Form or Modal
- Success and Validation Feedback

Maintaining this structure reduces the learning curve and creates a predictable user experience.

---

## Future Scalability

Future modules such as Purchase Orders, Sales Management, Analytics, or Multi-Warehouse support should integrate into the existing hierarchy without requiring major structural changes.

The Information Architecture is intentionally designed to support future expansion while preserving consistency.

Future modules should preserve the existing navigation hierarchy whenever possible to minimize user relearning.

---

# 10. Closing

This document defines the structural organization of information and navigation within Pharmora.

Together with the Master Project Brief, Product Requirement Document, Business Flow, and User Flow, it establishes a consistent foundation for the application's information hierarchy before interface design and implementation begin.

The Information Architecture serves as the primary reference for Wireframes, Design System, UI Components, Routing Structure, and overall application layout.

Future enhancements should preserve the organizational principles established in this document to maintain clarity, scalability, and a consistent user experience across every version of Pharmora.

This document should be reviewed whenever significant navigation changes, new application modules, or structural updates are introduced.