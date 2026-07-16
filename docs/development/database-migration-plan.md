# 📄 Database Migration Plan

> **Version:** 1.0  
> **Status:** Approved  
> **Document Type:** Development Planning  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Objectives](#2-objectives)
- [3. Migration Scope](#3-migration-scope)
- [4. Migration Strategy](#4-migration-strategy)
- [5. Migration Order](#5-migration-order)
- [6. Dependency Graph](#6-dependency-graph)
- [7. Naming Convention](#7-naming-convention)
- [8. Laravel Standards](#8-laravel-standards)
- [9. Deliverables](#9-deliverables)

---

# 1. Purpose

This document defines the migration strategy for implementing the Pharmora database using Laravel 12.

The migration process converts the approved database documentation into executable Laravel migration files while preserving the architecture established during Sprint 1.

---

# 2. Objectives

The migration phase has the following objectives:

- Create all database tables.
- Implement approved column definitions.
- Apply primary and foreign keys.
- Implement indexes and constraints.
- Support Soft Deletes where required.
- Preserve consistency with the finalized database schema.

---

# 3. Migration Scope

The following tables will be implemented during this phase.

| Table | Status |
|--------|--------|
| users | Existing (Laravel Breeze) |
| organization_settings | New |
| categories | New |
| suppliers | New |
| products | New |
| inventory_movements | New |

---

# 4. Migration Strategy

The implementation follows a dependency-first approach.

Configuration data is created before master data.

Master data is created before transactional data.

Foreign key dependencies determine the migration order.

This strategy minimizes migration failures and ensures referential integrity.

---

# 5. Migration Order

```
Laravel Breeze

↓

Users
(already exists)

↓

Organization Settings

↓

Categories

↓

Suppliers

↓

Products

↓

Inventory Movements
```

---

# 6. Dependency Graph

```
Categories
       │
       ▼
Products
       ▲
       │
Suppliers

Products
       │
       ▼
Inventory Movements

Users
       │
       ▼
Inventory Movements
```

---

# 7. Naming Convention

Every migration follows Laravel naming conventions.

```
create_organization_settings_table

create_categories_table

create_suppliers_table

create_products_table

create_inventory_movements_table
```

---

# 8. Laravel Standards

All migrations must follow Laravel best practices.

Implementation standards include:

- Auto-increment primary keys
- UUID columns for business entities
- Foreign key constraints
- Soft Deletes on master data
- Timestamp columns
- Nullable rules matching the Data Dictionary
- Consistent naming conventions

All migration files must remain consistent with:

- Database Design
- Data Dictionary
- ERD
- DBML
- Database Schema Freeze
- Database Enum Strategy
- Architecture Decision Records (ADR)

---

# 9. Deliverables

Upon completion of this phase, the following deliverables will be available:

- Laravel migration files
- Database tables
- Foreign key constraints
- Indexes
- Soft Delete support
- Timestamp implementation
- Verified database schema

These deliverables establish the executable database foundation for the Pharmora application.