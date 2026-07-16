# 📄 Business Entities Review

> **Version:** 1.0  
> **Status:** Approved  
> **Document Type:** Database Analysis  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Business Overview](#2-business-overview)
- [3. Entity Identification Process](#3-entity-identification-process)
- [4. Business Entity Classification](#4-business-entity-classification)
- [5. Final Business Entities](#5-final-business-entities)
- [6. Excluded Entities](#6-excluded-entities)
- [7. Future Expansion](#7-future-expansion)
- [8. Design Decisions](#8-design-decisions)
- [9. Approval](#9-approval)

---

# 1. Purpose

This document identifies and validates the business entities required for the Minimum Viable Product (MVP) of Pharmora.

Rather than focusing on technical implementation, this review analyzes the business domain to ensure every database entity directly supports a real operational requirement.

The final list of entities defined in this document serves as the foundation for:

- Database Design
- Entity Relationship Diagram (ERD)
- Laravel Migrations
- Eloquent Models
- Database Seeders
- Application Business Logic

Once approved, these entities become the baseline for the MVP database schema.

---

# 2. Business Overview

Pharmora is a web-based inventory management platform designed for healthcare businesses such as pharmacies, clinics, medical suppliers, and healthcare distributors.

The application enables administrators to:

- Manage healthcare products
- Organize products into categories
- Manage supplier information
- Monitor inventory levels
- Record stock movements
- Configure workspace settings
- Maintain administrator accounts

The system focuses on inventory management and intentionally excludes purchasing, sales, accounting, and warehouse management in the initial MVP.

---

# 3. Entity Identification Process

Business entities were identified through analysis of:

- Product Requirements Document (PRD)
- Business Flow
- User Flow
- Information Architecture
- High-Fidelity UI Designs
- Dashboard Metrics
- CRUD Requirements
- Authentication Module

Each candidate entity was evaluated using the following criteria:

- Represents a real business object
- Stores long-term business data
- Supports one or more application features
- Requires independent CRUD operations or persistent storage

Entities that did not satisfy these criteria were excluded from the MVP.

---

# 4. Business Entity Classification

The Pharmora database is divided into three logical groups.

## 4.1 Master Data

Master data contains relatively stable information referenced throughout the application.

| Entity | Description |
|----------|-------------|
| Users | System administrators responsible for managing inventory |
| Categories | Product classifications |
| Suppliers | Vendor information |
| Products | Healthcare inventory items |

---

## 4.2 Transaction Data

Transactional data records operational activities performed within the system.

| Entity | Description |
|----------|-------------|
| Inventory Movements | Records every stock in and stock out transaction |

---

## 4.3 System Configuration

Configuration data stores workspace-level settings used across the application.

| Entity | Description |
|----------|-------------|
| Organization Settings | Organization profile and application preferences |

---

# 5. Final Business Entities

The following entities have been approved for the MVP.

| Entity | Category | Status |
|----------|----------|--------|
| Users | Master Data | Approved |
| Categories | Master Data | Approved |
| Suppliers | Master Data | Approved |
| Products | Master Data | Approved |
| Inventory Movements | Transaction Data | Approved |
| Organization Settings | Configuration | Approved |

These six entities fully support the functional scope defined for the first release of Pharmora.

---

# 6. Excluded Entities

The following entities were intentionally excluded from the MVP to maintain a focused project scope.

| Entity | Reason |
|----------|--------|
| Purchase Orders | Planned for future procurement module |
| Customers | Sales module is outside MVP scope |
| Sales Transactions | Not required for inventory management |
| Warehouses | Single-location inventory only |
| Branches | Multi-branch support postponed |
| Reports | Generated dynamically from existing data |
| Notifications | Event-driven feature planned for future release |
| Roles & Permissions | Single administrator role for MVP |
| Audit Logs | Can be introduced after core functionality is complete |

---

# 7. Future Expansion

The current entity structure has been designed to support future growth without requiring significant architectural changes.

Potential future entities include:

- Purchase Orders
- Sales Orders
- Customers
- Warehouses
- Branches
- Stock Transfers
- Audit Logs
- Notification Logs
- User Roles
- Permissions

These modules can be integrated while preserving the existing relationships between the current entities.

---

# 8. Design Decisions

Several architectural decisions were made during the entity review process.

## Keep the MVP Focused

Only entities required to support inventory management were included.

This reduces unnecessary complexity and allows development to focus on delivering a stable core application.

---

## Separate Master and Transaction Data

Master data and transactional records are stored independently.

This approach improves maintainability, scalability, and reporting capabilities.

---

## Avoid Redundant Entities

Information that can be derived from existing entities is not stored separately.

For example, reporting data is generated dynamically from Products and Inventory Movements rather than persisted in dedicated report tables.

---

## Support Future Scalability

Although the MVP contains only six entities, the database structure has been designed to accommodate future modules with minimal schema changes.

---

# 9. Approval

After reviewing the business requirements, application scope, and high-fidelity interface designs, the following entities have been approved as the official business entities for Pharmora MVP Version 1.0.

```
Users
Categories
Suppliers
Products
Inventory Movements
Organization Settings
```

No additional entities are required before proceeding to the detailed database design phase.

This document establishes the business foundation for all subsequent database documentation and implementation activities.