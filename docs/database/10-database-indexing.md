# 📄 Database Indexing Strategy

> **Version:** 1.0  
> **Status:** Approved  
> **Document Type:** Database Performance Design  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Indexing Philosophy](#2-indexing-philosophy)
- [3. Primary Key Indexes](#3-primary-key-indexes)
- [4. Unique Indexes](#4-unique-indexes)
- [5. Foreign Key Indexes](#5-foreign-key-indexes)
- [6. Search Indexes](#6-search-indexes)
- [7. Composite Indexes](#7-composite-indexes)
- [8. Tables Without Additional Indexes](#8-tables-without-additional-indexes)
- [9. Performance Considerations](#9-performance-considerations)
- [10. Approval](#10-approval)

---

# 1. Purpose

This document defines the indexing strategy for the Pharmora database.

Its purpose is to optimize database performance while maintaining efficient insert, update, and query operations.

Rather than indexing every column, this strategy focuses only on attributes that are frequently used for:

- Searching
- Filtering
- Sorting
- Foreign key relationships
- Dashboard statistics
- Reporting

The objective is to achieve a balance between read performance and write performance.

---

# 2. Indexing Philosophy

The indexing strategy follows several principles.

- Index only frequently queried columns.
- Avoid unnecessary indexes.
- Always index foreign keys.
- Prefer unique indexes over standard indexes when uniqueness is required.
- Keep indexes simple unless query patterns justify composite indexes.
- Optimize for real application usage rather than hypothetical scenarios.

---

# 3. Primary Key Indexes

Every table uses an indexed primary key.

| Table | Primary Key |
|---------|-------------|
| users | id |
| organization_settings | id |
| categories | id |
| suppliers | id |
| products | id |
| inventory_movements | id |

Primary keys are automatically indexed by the database engine.

---

# 4. Unique Indexes

The following columns require unique indexes.

## Users

| Column | Reason |
|---------|--------|
| uuid | Public identifier |
| email | Authentication |

---

## Categories

| Column | Reason |
|---------|--------|
| uuid | Public identifier |
| code | Business identifier |
| name | Prevent duplicate categories |

---

## Suppliers

| Column | Reason |
|---------|--------|
| uuid | Public identifier |
| code | Business identifier |

Email should be unique only when provided.

---

## Products

| Column | Reason |
|---------|--------|
| uuid | Public identifier |
| sku | Unique inventory identifier |

Barcode should be unique only when provided.

---

## Inventory Movements

| Column | Reason |
|---------|--------|
| uuid | Public identifier |

---

# 5. Foreign Key Indexes

All foreign keys must be indexed.

| Table | Foreign Key |
|---------|-------------|
| products | category_id |
| products | supplier_id |
| inventory_movements | product_id |
| inventory_movements | user_id |

These indexes improve:

- JOIN performance
- Relationship loading
- Dashboard queries
- Reporting

---

# 6. Search Indexes

The following columns are expected to be used in search functionality.

## Users

- name
- email

---

## Categories

- code
- name

---

## Suppliers

- code
- name
- contact_person

---

## Products

- sku
- barcode
- name

---

## Inventory Movements

No additional search indexes are required.

Inventory history is primarily filtered through relationships rather than free-text search.

---

# 7. Composite Indexes

Composite indexes are introduced only where they provide measurable value.

## Products

```
(status, category_id)
```

Supports product filtering by:

- Active Products
- Category

---

## Inventory Movements

```
(product_id, created_at)
```

Optimizes:

- Product History
- Inventory Timeline

---

```
(created_at, movement_type)
```

Optimizes:

- Dashboard Charts
- Monthly Reports
- Inventory Trends

---

No additional composite indexes are required for the MVP.

---

# 8. Tables Without Additional Indexes

The following columns intentionally remain unindexed.

Examples:

- description
- address
- notes
- image
- avatar

Reason:

These fields are not frequently used for searching or filtering.

Adding indexes would increase storage usage and reduce write performance without providing meaningful benefits.

---

# 9. Performance Considerations

The indexing strategy is designed around the expected workload of the Pharmora MVP.

Typical database operations include:

- Product search
- Category filtering
- Supplier filtering
- Dashboard statistics
- Inventory history
- Recent activity
- Product detail retrieval

The selected indexes optimize these operations while avoiding excessive indexing.

As the application grows, additional indexes should be introduced only after analyzing actual query performance.

---

# 10. Approval

This indexing strategy has been reviewed against the Product Requirement Document, Business Flow, User Flow, High-Fidelity UI, and Database Design.

The indexes defined in this document represent the official indexing strategy for Pharmora MVP Version 1.0.

Future indexing changes should be supported by measurable performance requirements and documented through an Architecture Decision Record (ADR) when they introduce significant architectural impact.