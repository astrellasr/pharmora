# 📄 Table Structure Specification

> **Version:** 1.0  
> **Status:** Approved  
> **Document Type:** Database Design Specification  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Design Principles](#2-design-principles)
- [3. Table Overview](#3-table-overview)
- [4. Table Specifications](#4-table-specifications)
  - Users
  - Organization Settings
  - Categories
  - Suppliers
  - Products
  - Inventory Movements
- [5. Cross Table Relationships](#5-cross-table-relationships)
- [6. Design Decisions](#6-design-decisions)
- [7. Approval](#7-approval)

---

# 1. Purpose

This document defines the structure of every database table required for the Pharmora MVP.

Rather than focusing on implementation details, this specification establishes the business purpose, responsibilities, and expected data stored within each table.

The information presented here serves as the primary reference for:

- Laravel Migrations
- Eloquent Models
- Data Dictionary
- Validation Rules
- Database Constraints
- Future System Enhancements

---

# 2. Design Principles

The database structure follows several core principles.

- Business-oriented design
- Normalized relational database
- Laravel naming conventions
- Minimal redundancy
- High maintainability
- Scalable architecture
- Clear separation between master, transactional, and configuration data

---

# 3. Table Overview

| Table | Category | Purpose |
|---------|----------|---------|
| users | Master Data | Stores administrator accounts |
| organization_settings | Configuration | Stores workspace configuration |
| categories | Master Data | Stores product categories |
| suppliers | Master Data | Stores supplier information |
| products | Master Data | Stores inventory items |
| inventory_movements | Transaction Data | Stores stock movement history |

---

# 4. Table Specifications

---

# Users

## Purpose

Stores administrator accounts responsible for managing inventory operations within the system.

The Users table is managed by Laravel Authentication and serves as the identity provider for all authenticated actions.

## Responsibilities

- Authentication
- User Profile
- Email Verification
- Inventory Activity Ownership

## Planned Columns

- id
- uuid
- name
- username
- email
- phone
- avatar
- password
- last_login_at
- email_verified_at
- remember_token
- created_at
- updated_at

---

# Organization Settings

## Purpose

Stores workspace-level configuration shared across the entire application.

Only one record is expected during the MVP.

## Responsibilities

- Organization Profile
- Contact Information
- Regional Preferences
- Branding

## Planned Columns

- id
- organization_name
- workspace_email
- phone
- address
- country
- timezone
- language
- business_type
- logo
- created_at
- updated_at

---

# Categories

## Purpose

Groups products into logical classifications.

## Responsibilities

- Product Classification
- Product Filtering
- Reporting

## Planned Columns

- id
- uuid
- code
- name
- description
- status
- created_at
- updated_at

---

# Suppliers

## Purpose

Stores supplier information for inventory procurement.

## Responsibilities

- Supplier Management
- Contact Information
- Product Ownership

## Planned Columns

- id
- uuid
- code
- name
- contact_person
- email
- phone
- address
- status
- created_at
- updated_at

---

# Products

## Purpose

Stores every healthcare inventory item managed by Pharmora.

This table represents the core business entity of the application.

## Responsibilities

- Product Information
- Inventory Status
- Pricing
- Stock Monitoring

## Planned Columns

- id
- uuid
- category_id
- supplier_id
- sku
- barcode
- name
- description
- unit
- purchase_price
- selling_price
- current_stock
- minimum_stock
- image
- status
- created_at
- updated_at

---

# Inventory Movements

## Purpose

Stores every inventory movement performed within the system.

Each record represents one inventory event.

## Responsibilities

- Stock In
- Stock Out
- Stock Adjustment
- Inventory History
- Audit Trail

## Planned Columns

- id
- uuid
- product_id
- user_id
- movement_type
- quantity
- stock_before
- stock_after
- notes
- created_at

---

# 5. Cross Table Relationships

```
Category
        │
        └────────── Product ───────── Supplier
                    │
                    │
                    ▼
          Inventory Movement
                    │
                    ▼
                  User
```

Each relationship follows Laravel Eloquent conventions and supports one-to-many associations.

---

# 6. Design Decisions

## UUID Support

Every business entity uses both an auto-increment primary key and a UUID.

The integer primary key provides optimal database performance, while UUIDs are intended for public-facing identifiers.

---

## Inventory History

Current inventory quantities are stored directly in the Products table.

Historical inventory changes are recorded separately in Inventory Movements.

This separation enables fast dashboard queries while preserving a complete audit trail.

---

## Configuration Isolation

Organization settings are isolated into a dedicated configuration table rather than extending the Users table.

This approach improves scalability and avoids mixing user-specific information with organization-wide settings.

---

## Naming Consistency

All tables, foreign keys, timestamps, and relationships follow Laravel naming conventions.

---

# 7. Approval

This specification has been reviewed against the Product Requirement Document, High-Fidelity UI Designs, and Business Flow documentation.

The table structures defined within this document are approved as the official database structure for Pharmora MVP Version 1.0.

Subsequent implementation phases—including migrations, Eloquent models, relationships, and seeders—must conform to this specification unless formally revised.