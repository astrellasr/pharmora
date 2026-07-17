# 📄 Data Dictionary

> **Version:** 2.0  
> **Status:** Approved & Frozen  
> **Document Type:** Data Dictionary  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Database Overview](#2-database-overview)
- [3. Database Statistics](#3-database-statistics)
- [4. Naming Conventions](#4-naming-conventions)
- [5. Data Type Standards](#5-data-type-standards)
- [6. Table Definitions](#6-table-definitions)
  - Users
  - Organization Settings
  - Categories
  - Suppliers
  - Products
  - Inventory Movements
- [7. Relationship Summary](#7-relationship-summary)
- [8. Enum Reference](#8-enum-reference)
- [9. Index Reference](#9-index-reference)
- [10. UUID Strategy](#10-uuid-strategy)
- [11. Soft Delete Strategy](#11-soft-delete-strategy)
- [12. Timestamp Strategy](#12-timestamp-strategy)
- [13. Related Documents](#13-related-documents)
- [14. Closing](#14-closing)

---

# 1. Purpose

This document defines the official data dictionary for the Pharmora database.

It provides a complete specification of every database table, column, constraint, relationship, and business rule used throughout the application.

The Data Dictionary acts as the primary implementation reference during backend development and ensures consistency across Laravel migrations, Eloquent models, factories, seeders, validation rules, API resources, and future system enhancements.

Unlike the Entity Relationship Diagram (ERD), which focuses on relationships between entities, this document provides detailed definitions for each individual table and column within the database.

The Data Dictionary serves the following objectives:

- Define every database table.
- Define every database column.
- Standardize naming conventions.
- Define database constraints.
- Document business rules.
- Support Laravel migration development.
- Improve long-term maintainability.
- Serve as the single source of truth for database implementation.

This document reflects the finalized database architecture for **Pharmora MVP Version 1.0**.

---

# 2. Database Overview

Pharmora uses a relational database designed around modern normalization principles while remaining practical for real-world inventory management.

The database separates business data into three major categories.

## Master Data

Master data stores relatively static business information.

Current master entities include:

- Users
- Categories
- Suppliers
- Products

Master data supports Soft Deletes to preserve historical relationships while allowing administrators to deactivate records safely.

---

## Configuration Data

Configuration data stores application-wide settings shared across the entire system.

Current configuration entity:

- Organization Settings

Unlike business entities, configuration data exists independently and does not participate in foreign key relationships.

---

## Transactional Data

Transactional data records operational activities performed by users.

Current transactional entity:

- Inventory Movements

Transactional data is immutable and represents the historical audit trail of inventory operations.

Records are never modified or deleted after creation.

---

## Database Design Principles

The database architecture follows the following principles:

- Business-first design
- Third Normal Form (3NF)
- UUID-based public identifiers
- Immutable inventory history
- Controlled denormalization for inventory performance
- Laravel naming conventions
- PostgreSQL compatibility
- Future extensibility

These principles are documented throughout the project's Architecture Decision Records (ADR).

---

# 3. Database Statistics

The finalized Pharmora MVP database consists of the following components.

| Metric | Value |
|---------|------:|
| Total Tables | 6 |
| Master Data Tables | 4 |
| Configuration Tables | 1 |
| Transaction Tables | 1 |
| Total Relationships | 4 |
| Relationship Type | One-to-Many (1:N) |
| UUID-enabled Tables | 5 |
| Soft Delete Tables | 4 |
| Immutable Tables | 1 |

---

## Entity Summary

| Entity | Category |
|---------|----------|
| Users | Master Data |
| Organization Settings | Configuration |
| Categories | Master Data |
| Suppliers | Master Data |
| Products | Master Data |
| Inventory Movements | Transactional Data |

---

## Database Engine

| Item | Value |
|------|-------|
| Database | PostgreSQL |
| Framework | Laravel 12 |
| ORM | Eloquent ORM |
| Primary Key Strategy | Auto Increment BIGINT |
| Public Identifier | UUID |
| Timestamp Strategy | Laravel Timestamps |
| Soft Delete Strategy | Laravel Soft Deletes |

---

# 4. Naming Conventions

To ensure consistency across the project, the following naming conventions are applied throughout the database.

## Table Names

All database tables use plural snake_case.

Examples:

```

users
products
categories
suppliers
inventory_movements

```

---

## Column Names

All columns use snake_case.

Examples:

```

organization_name
workspace_email
current_stock
minimum_stock
movement_type
created_at

```

---

## Primary Keys

Every table uses the default Laravel primary key convention.

```

id

```

Type:

```

BIGINT UNSIGNED

```

---

## Foreign Keys

Foreign keys follow Laravel naming conventions.

Examples:

```

category_id
supplier_id
product_id
user_id

```

---

## UUID Columns

Every business entity exposes a UUID for public identification.

Column name:

```

uuid

```

UUIDs are never used as primary keys.

Instead, they provide secure public identifiers for URLs and future API integrations.

---

## Timestamp Columns

Laravel timestamp conventions are used consistently.

```

created_at
updated_at

```

Inventory Movements intentionally omit `updated_at` according to the Immutable Inventory History strategy.

---

## Soft Delete Columns

Applicable tables use the standard Laravel convention.

```

deleted_at

```

---

## Boolean Values

Business status values are stored as strings rather than database ENUM or BOOLEAN types.

Examples:

```

active
inactive

```

Validation is handled within Laravel rather than the database layer.

---

# 5. Data Type Standards

The following standards define the approved database data types used throughout Pharmora.

| Business Value | Laravel Migration | PostgreSQL Type |
|----------------|-------------------|-----------------|
| Primary Key | `$table->id()` | BIGINT |
| UUID | `$table->uuid()` | UUID |
| Name | `$table->string()` | VARCHAR |
| Email | `$table->string()` | VARCHAR |
| Phone | `$table->string()` | VARCHAR |
| Code | `$table->string()` | VARCHAR |
| SKU | `$table->string()` | VARCHAR |
| Barcode | `$table->string()` | VARCHAR |
| Description | `$table->text()` | TEXT |
| Address | `$table->text()` | TEXT |
| Quantity | `$table->integer()` | INTEGER |
| Stock | `$table->integer()` | INTEGER |
| Status | `$table->string()` | VARCHAR |
| Timestamp | `$table->timestamps()` | TIMESTAMP |
| Soft Delete | `$table->softDeletes()` | TIMESTAMP |

---

## Approved Migration Standards

All Laravel migrations must follow these implementation standards.

### Primary Keys

```php
$table->id();
```

### UUID

```php
$table->uuid('uuid')->unique();
```

### Foreign Keys

```php
$table->foreignId('category_id')
      ->constrained()
      ->restrictOnDelete();
```

### Timestamps

```php
$table->timestamps();
```

### Soft Deletes

```php
$table->softDeletes();
```

### Status Fields

Business status values are stored as strings.

```php
$table->string('status')->default('active');
```

Database ENUM types are intentionally avoided to improve portability and simplify future business changes.

This implementation follows the project's **Database Enum Strategy**.

# 6. Table Definitions

---

# Users

## Purpose

The **Users** table stores authenticated application users who are authorized to access the Pharmora platform.

Within the MVP scope, every authenticated user acts as an **Inventory Administrator** responsible for managing products, suppliers, categories, and inventory operations.

Users are also recorded as the actor behind every Inventory Movement, providing accountability and supporting future audit capabilities.

---

## Business Responsibility

The Users entity is responsible for:

- User authentication
- User identification
- Inventory operation ownership
- Audit trail support
- Future role management

This table is provided by Laravel Breeze and extended where necessary to support Pharmora's business requirements.

---

## Business Rules

The Users table follows these business rules:

- Every user must have a unique email address.
- Passwords must always be securely hashed.
- Email verification is optional for MVP.
- Users may exist without performing inventory operations.
- Historical Inventory Movements must continue referencing their original user.
- Users use Soft Deletes instead of permanent deletion.

---

## Column Definitions

| Column | Type | Nullable | Default | Constraint | Description |
|---------|------|----------|---------|------------|-------------|
| id | BIGINT | No | Auto Increment | Primary Key | Internal identifier |
| uuid | UUID | No | Generated | Unique | Public identifier |
| name | VARCHAR | No | - | - | Full name |
| email | VARCHAR | No | - | Unique | Login email |
| email_verified_at | TIMESTAMP | Yes | NULL | - | Email verification timestamp |
| password | VARCHAR | No | - | - | Hashed password |
| remember_token | VARCHAR | Yes | NULL | - | Laravel remember token |
| created_at | TIMESTAMP | No | Current Timestamp | - | Creation timestamp |
| updated_at | TIMESTAMP | No | Current Timestamp | - | Last update timestamp |
| deleted_at | TIMESTAMP | Yes | NULL | Soft Delete | Soft deletion timestamp |

---

## Indexes

| Column | Type | Purpose |
|---------|------|---------|
| id | Primary Key | Internal relationship |
| uuid | Unique | Public identifier |
| email | Unique | Authentication |

---

## Constraints

| Constraint | Description |
|------------|-------------|
| Primary Key | id |
| Unique | uuid |
| Unique | email |
| Soft Deletes | Enabled |

---

## Relationships

| Relationship | Type |
|--------------|------|
| User → Inventory Movements | One-to-Many |

A single User may perform multiple Inventory Movements throughout the lifetime of the application.

---

## Laravel Mapping

```php
class User extends Authenticatable
{
    public function inventoryMovements()
    {
        return $this->hasMany(InventoryMovement::class);
    }
}
```

---

## Future Considerations

The Users table has been designed to support future enhancements without requiring structural redesign.

Potential future additions include:

- User roles
- Permissions
- Profile photos
- Two-Factor Authentication (2FA)
- Last login tracking
- Activity logging
- Multi-organization support

These features are intentionally excluded from the current MVP scope.

---