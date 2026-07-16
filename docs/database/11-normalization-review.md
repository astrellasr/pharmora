# 📄 Database Normalization Review

> **Version:** 1.0  
> **Status:** Approved  
> **Document Type:** Database Design Validation  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Normalization Strategy](#2-normalization-strategy)
- [3. First Normal Form (1NF)](#3-first-normal-form-1nf)
- [4. Second Normal Form (2NF)](#4-second-normal-form-2nf)
- [5. Third Normal Form (3NF)](#5-third-normal-form-3nf)
- [6. Redundancy Analysis](#6-redundancy-analysis)
- [7. Controlled Denormalization](#7-controlled-denormalization)
- [8. Review Summary](#8-review-summary)
- [9. Approval](#9-approval)

---

# 1. Purpose

This document validates the Pharmora database design against standard relational database normalization principles.

The objective is to ensure that the database:

- minimizes redundant data
- maintains data integrity
- simplifies maintenance
- supports scalability
- remains efficient for inventory management

This review is based on the finalized database structure established during Sprint 1.

---

# 2. Normalization Strategy

The Pharmora database follows a normalized relational design.

Database entities have been separated according to their business responsibilities.

Master data, transactional data, and configuration data are stored independently to reduce duplication and improve maintainability.

Current database entities:

- Users
- Organization Settings
- Categories
- Suppliers
- Products
- Inventory Movements

---

# 3. First Normal Form (1NF)

## Definition

Every table must contain atomic values.

Each column stores a single value.

No repeating groups or multi-valued attributes are allowed.

---

## Validation

### Users

✔ Every attribute stores one value.

---

### Organization Settings

✔ One configuration value per column.

---

### Categories

✔ Each category attribute is atomic.

---

### Suppliers

✔ Contact information is separated into individual fields.

---

### Products

✔ Product attributes are stored independently.

Examples:

- SKU
- Barcode
- Purchase Price
- Selling Price

Each occupies its own column.

---

### Inventory Movements

✔ Each movement represents exactly one inventory event.

No arrays or repeating values exist.

---

## Result

✅ The database satisfies First Normal Form (1NF).

---

# 4. Second Normal Form (2NF)

## Definition

Every non-key attribute must depend on the entire primary key.

Because every table uses a single-column primary key (`id`), partial dependency cannot occur.

---

## Validation

Every business attribute depends entirely on its corresponding table's primary key.

Examples:

Products

```
id

↓

name
sku
purchase_price
selling_price
```

Categories

```
id

↓

code
name
description
```

Inventory Movements

```
id

↓

movement_type
quantity
stock_before
stock_after
```

No partial dependency exists.

---

## Result

✅ The database satisfies Second Normal Form (2NF).

---

# 5. Third Normal Form (3NF)

## Definition

Non-key attributes must depend only on the primary key.

They must not depend on other non-key attributes.

---

## Validation

### Products

Category information is stored inside the Categories table.

Supplier information is stored inside the Suppliers table.

Products reference them using foreign keys.

No duplicated supplier or category information exists.

---

### Inventory Movements

Movement history stores only:

- Product reference
- User reference
- Movement details

Supplier and category information are intentionally excluded because they can be obtained through Product relationships.

---

### Users

Organization configuration is not stored inside Users.

Global configuration has been separated into Organization Settings.

---

## Result

✅ The database satisfies Third Normal Form (3NF).

---

# 6. Redundancy Analysis

The following potential data duplication was intentionally avoided.

| Data | Stored In | Not Stored In |
|--------|-----------|---------------|
| Category Name | Categories | Products |
| Supplier Name | Suppliers | Products |
| Current Stock History | Inventory Movements | Products |
| Organization Information | Organization Settings | Users |
| Product History | Inventory Movements | Products |

This separation minimizes update anomalies and improves consistency.

---

# 7. Controlled Denormalization

The database intentionally introduces one controlled denormalization.

## Current Stock

Current inventory quantity is stored directly in the Products table.

```
products.current_stock
```

instead of being calculated using:

```
SUM(inventory_movements.quantity)
```

---

## Reason

Calculating stock from every inventory movement during each request would increase query complexity and reduce dashboard performance.

Storing the latest inventory value provides:

- faster dashboard loading
- faster product listing
- faster inventory lookup
- simpler reporting

Inventory Movements remain the complete audit trail.

This trade-off is intentional and documented through:

- ADR-003 — Current Stock Strategy

---

# 8. Review Summary

| Review Item | Status |
|--------------|--------|
| First Normal Form (1NF) | ✅ Passed |
| Second Normal Form (2NF) | ✅ Passed |
| Third Normal Form (3NF) | ✅ Passed |
| Data Redundancy | ✅ Controlled |
| Referential Integrity | ✅ Maintained |
| Business Separation | ✅ Validated |
| Controlled Denormalization | ✅ Approved |

The Pharmora database follows a normalized relational structure while introducing only one intentional denormalization for performance optimization.

---

# 9. Approval

The database normalization review has been completed against the finalized database design for Pharmora MVP Version 1.0.

The database satisfies the requirements of First, Second, and Third Normal Forms while preserving practical performance considerations through controlled denormalization.

This review confirms that the current schema provides a solid foundation for Laravel migrations, Eloquent models, and future application growth.

Any future structural changes should be evaluated against these normalization principles before implementation.