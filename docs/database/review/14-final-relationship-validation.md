# 📄 Final Relationship Validation

> **Version:** 1.0  
> **Status:** Approved  
> **Document Type:** Database Validation Report  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Validation Scope](#2-validation-scope)
- [3. Relationship Validation Criteria](#3-relationship-validation-criteria)
- [4. Approved Relationships](#4-approved-relationships)
- [5. Relationship Matrix](#5-relationship-matrix)
- [6. Referential Integrity](#6-referential-integrity)
- [7. Laravel Relationship Mapping](#7-laravel-relationship-mapping)
- [8. Future Relationship Expansion](#8-future-relationship-expansion)
- [9. Validation Summary](#9-validation-summary)
- [10. Approval](#10-approval)

---

# 1. Purpose

This document validates every relationship between database entities before generating the final Entity Relationship Diagram (ERD) and implementing Laravel migrations.

The objective is to ensure that all entity relationships accurately reflect the approved business processes while maintaining data integrity and supporting Laravel Eloquent conventions.

---

# 2. Validation Scope

Relationship validation is based on:

- Product Requirement Document (PRD)
- Business Flow
- User Flow
- Information Architecture
- Database Design
- Individual Table Reviews
- Architecture Decision Records (ADR)

Only relationships required by the approved MVP scope are included.

---

# 3. Relationship Validation Criteria

Every relationship was evaluated using the following criteria.

| Criteria | Description |
|----------|-------------|
| Business Need | Required by business process |
| UI Support | Referenced by approved interfaces |
| Referential Integrity | Prevents orphaned records |
| Normalization | Avoids duplicated data |
| Laravel Compatibility | Supports Eloquent relationships |
| Scalability | Supports future application growth |

Relationships satisfying all criteria are approved.

---

# 4. Approved Relationships

## Categories → Products

Relationship

```
One Category
        │
        └──────< Many Products
```

Relationship Type

```
One-to-Many (1:N)
```

Foreign Key

```
products.category_id
```

Laravel

```php
Category::hasMany(Product::class)

Product::belongsTo(Category::class)
```

Status

✅ Approved

---

## Suppliers → Products

Relationship

```
One Supplier
        │
        └──────< Many Products
```

Relationship Type

```
One-to-Many (1:N)
```

Foreign Key

```
products.supplier_id
```

Laravel

```php
Supplier::hasMany(Product::class)

Product::belongsTo(Supplier::class)
```

Status

✅ Approved

---

## Products → Inventory Movements

Relationship

```
One Product
        │
        └──────< Many Inventory Movements
```

Relationship Type

```
One-to-Many (1:N)
```

Foreign Key

```
inventory_movements.product_id
```

Laravel

```php
Product::hasMany(InventoryMovement::class)

InventoryMovement::belongsTo(Product::class)
```

Status

✅ Approved

---

## Users → Inventory Movements

Relationship

```
One User
      │
      └──────< Many Inventory Movements
```

Relationship Type

```
One-to-Many (1:N)
```

Foreign Key

```
inventory_movements.user_id
```

Laravel

```php
User::hasMany(InventoryMovement::class)

InventoryMovement::belongsTo(User::class)
```

Status

✅ Approved

---

## Organization Settings

Organization Settings is an independent configuration entity.

It has no direct foreign key relationships with other tables.

The application accesses this table globally through configuration services rather than relational joins.

Status

✅ Approved

---

# 5. Relationship Matrix

| Parent | Child | Cardinality | Foreign Key |
|----------|-------|-------------|-------------|
| Categories | Products | 1:N | category_id |
| Suppliers | Products | 1:N | supplier_id |
| Products | Inventory Movements | 1:N | product_id |
| Users | Inventory Movements | 1:N | user_id |

---

# 6. Referential Integrity

The following constraints preserve data consistency.

| Relationship | Delete Strategy |
|--------------|-----------------|
| Category → Product | RESTRICT |
| Supplier → Product | RESTRICT |
| Product → Inventory Movement | RESTRICT |
| User → Inventory Movement | RESTRICT |

These rules prevent orphaned records and preserve historical inventory data.

Soft Deletes are used for master data instead of cascading deletions.

---

# 7. Laravel Relationship Mapping

The approved Eloquent relationships are:

```text
Category

hasMany(Product)

-------------------------

Supplier

hasMany(Product)

-------------------------

Product

belongsTo(Category)

belongsTo(Supplier)

hasMany(InventoryMovement)

-------------------------

InventoryMovement

belongsTo(Product)

belongsTo(User)

-------------------------

User

hasMany(InventoryMovement)
```

These relationships form the official object model for Pharmora MVP Version 1.0.

---

# 8. Future Relationship Expansion

Future versions of Pharmora may introduce additional relationships such as:

- Products → Purchase Orders
- Products → Batch Records
- Warehouses → Inventory Movements
- Organizations → Users
- Customers → Sales
- Sales → Products

These relationships are intentionally excluded from the MVP.

---

# 9. Validation Summary

| Validation Item | Result |
|-----------------|--------|
| Business Relationships | ✅ Passed |
| Referential Integrity | ✅ Passed |
| Foreign Key Design | ✅ Passed |
| Laravel Compatibility | ✅ Passed |
| Future Scalability | ✅ Passed |

Approved Relationships

```
4 One-to-Many Relationships
```

Independent Entities

```
1 Configuration Entity
```

---

# 10. Approval

The relationship validation process has been completed.

All approved relationships accurately represent the business model defined for Pharmora Version 1.0.

These relationships become the official reference for:

- Entity Relationship Diagram (ERD)
- Laravel Migrations
- Foreign Key Constraints
- Eloquent Relationships
- Dashboard Queries
- Reporting Queries

No additional relationships should be introduced without documentation through a new Architecture Decision Record (ADR).