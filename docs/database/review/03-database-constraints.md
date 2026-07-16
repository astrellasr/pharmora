# 📄 Database Constraints & Data Types Review

> **Version:** 1.0  
> **Status:** Approved  
> **Document Type:** Database Standards  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Design Principles](#2-design-principles)
- [3. Primary Key Strategy](#3-primary-key-strategy)
- [4. UUID Strategy](#4-uuid-strategy)
- [5. Foreign Key Strategy](#5-foreign-key-strategy)
- [6. Data Type Standards](#6-data-type-standards)
- [7. Constraint Standards](#7-constraint-standards)
- [8. Default Value Strategy](#8-default-value-strategy)
- [9. Soft Delete Strategy](#9-soft-delete-strategy)
- [10. Timestamp Strategy](#10-timestamp-strategy)
- [11. Laravel Convention Compliance](#11-laravel-convention-compliance)
- [12. Approval](#12-approval)

---

# 1. Purpose

This document defines the database implementation standards used throughout the Pharmora application.

Its purpose is to ensure consistency across database migrations, Eloquent models, validation rules, and future development by establishing a single source of truth for data types and database constraints.

Rather than describing individual tables, this document defines the global standards that every table should follow.

---

# 2. Design Principles

The database follows these principles:

- Consistency over customization
- Laravel framework conventions
- Data integrity first
- Minimize redundant data
- Maintain scalability
- Improve query performance
- Support future system growth

---

# 3. Primary Key Strategy

Every business table uses an auto-incrementing primary key.

Standard:

```text
id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
```

Reason:

- Fast indexing
- Efficient joins
- Native Laravel support
- Better database performance

---

# 4. UUID Strategy

Every business entity also includes a UUID.

Purpose:

- Public identifiers
- URL-safe references
- Prevent predictable IDs
- Future API compatibility

Applied to:

- users
- categories
- suppliers
- products
- inventory_movements

Standard:

```text
uuid UUID UNIQUE
```

---

# 5. Foreign Key Strategy

All relationships use unsigned BIGINT foreign keys.

Example:

```text
category_id

supplier_id

product_id

user_id
```

Foreign keys must enforce referential integrity.

Delete behavior:

| Relationship | Action |
|--------------|--------|
| Category → Product | Restrict Delete |
| Supplier → Product | Restrict Delete |
| Product → Inventory Movement | Restrict Delete |
| User → Inventory Movement | Restrict Delete |

Historical inventory records should never become orphaned.

---

# 6. Data Type Standards

The following standards apply throughout the database.

| Business Data | Data Type |
|---------------|-----------|
| Primary Key | BIGINT |
| UUID | UUID |
| Name | VARCHAR(255) |
| Code | VARCHAR(50) |
| SKU | VARCHAR(100) |
| Barcode | VARCHAR(100) |
| Email | VARCHAR(255) |
| Phone | VARCHAR(30) |
| Address | TEXT |
| Description | TEXT |
| Status | BOOLEAN |
| Quantity | INTEGER |
| Price | DECIMAL(12,2) |
| Image Path | VARCHAR(255) |
| Notes | TEXT |
| Date & Time | TIMESTAMP |

---

# 7. Constraint Standards

The following constraints should be applied whenever applicable.

## Unique

- uuid
- email
- sku
- barcode (nullable unique)
- category code
- supplier code

---

## Nullable

Nullable fields should only be used when business requirements allow incomplete data.

Examples:

- avatar
- barcode
- description
- address
- image
- notes
- phone

---

## Required

Examples:

- name
- sku
- category_id
- supplier_id
- quantity
- movement_type

---

# 8. Default Value Strategy

Default values reduce unnecessary application logic.

| Field | Default |
|--------|----------|
| status | true |
| current_stock | 0 |
| minimum_stock | 0 |

Default values should always reflect the safest business assumption.

---

# 9. Soft Delete Strategy

Soft Deletes are enabled for master data.

Applied to:

- users
- categories
- suppliers
- products

Reason:

- Prevent accidental data loss
- Preserve historical references
- Support future recovery

Inventory Movements should not use soft deletes because transaction history must remain immutable.

---

# 10. Timestamp Strategy

Master tables include:

```text
created_at

updated_at
```

Transactional tables include:

```text
created_at
```

Inventory movement history should remain immutable after creation.

---

# 11. Laravel Convention Compliance

The database follows Laravel naming conventions.

Table Names

Plural

Snake Case

Example:

```text
products

categories

inventory_movements
```

Primary Key

```text
id
```

Foreign Keys

```text
category_id

supplier_id

product_id

user_id
```

Relationship Naming

```php
belongsTo()

hasMany()
```

No custom naming conventions are introduced unless required by business needs.

---

# 12. Approval

This document establishes the official database implementation standards for Pharmora MVP Version 1.0.

All future Laravel migrations, Eloquent models, validation rules, and database modifications must comply with these standards unless superseded by a future architecture decision.

The standards defined in this document ensure consistency, maintainability, and long-term scalability across the entire application.