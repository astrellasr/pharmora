# 📄 Database Schema Freeze

> **Version:** 1.0  
> **Status:** Approved & Frozen  
> **Document Type:** Database Baseline Approval  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Scope](#2-scope)
- [3. Approved Database Entities](#3-approved-database-entities)
- [4. Approved Relationships](#4-approved-relationships)
- [5. Approved Database Standards](#5-approved-database-standards)
- [6. Architecture Decisions](#6-architecture-decisions)
- [7. Frozen Schema Summary](#7-frozen-schema-summary)
- [8. Change Management](#8-change-management)
- [9. Next Phase](#9-next-phase)
- [10. Approval](#10-approval)

---

# 1. Purpose

This document officially freezes the database schema for **Pharmora MVP Version 1.0**.

The purpose of the schema freeze is to establish a stable database foundation before implementation begins.

All database reviews, architecture discussions, normalization validation, indexing strategy, and entity analysis have been completed during Sprint 1.

From this point forward, the database structure becomes the official implementation baseline for Laravel development.

---

# 2. Scope

The schema freeze applies to all database-related implementation, including:

- Laravel Migrations
- Eloquent Models
- Relationships
- Factories
- Seeders
- Validation Rules
- Repository Layer
- Business Logic
- Dashboard Queries
- Reporting Queries

Every implementation must follow the approved schema defined throughout the database documentation.

---

# 3. Approved Database Entities

The following entities are approved for Pharmora MVP Version 1.0.

| Entity | Category | Status |
|----------|----------|--------|
| Users | Master Data | Approved |
| Organization Settings | Configuration | Approved |
| Categories | Master Data | Approved |
| Suppliers | Master Data | Approved |
| Products | Master Data | Approved |
| Inventory Movements | Transaction Data | Approved |

No additional entities are included within the MVP scope.

---

# 4. Approved Relationships

The official database relationships are shown below.

```
Organization Settings

        (Independent)

Users
        │
        │
        ▼
Inventory Movements
        ▲
        │
Products
   ▲        ▲
   │        │
Categories  Suppliers
```

Relationship summary:

- One Category → Many Products
- One Supplier → Many Products
- One Product → Many Inventory Movements
- One User → Many Inventory Movements

All relationships follow Laravel Eloquent conventions.

---

# 5. Approved Database Standards

The following standards are frozen for Version 1.0.

## Primary Keys

- BIGINT Auto Increment

---

## Public Identifiers

- UUID

---

## Foreign Keys

- Unsigned BIGINT

---

## Soft Deletes

Enabled for:

- Users
- Categories
- Suppliers
- Products

Not enabled for:

- Inventory Movements

---

## Inventory Strategy

Current inventory is stored in:

```
products.current_stock
```

Historical inventory is stored in:

```
inventory_movements
```

---

## Product Status

The status column represents operational availability only.

Allowed values:

- Active
- Inactive

Inventory conditions such as:

- In Stock
- Low Stock
- Out of Stock

are calculated dynamically.

---

## Inventory History

Inventory history is immutable.

Records cannot be edited or deleted.

---

# 6. Architecture Decisions

The following Architecture Decision Records (ADR) are part of the approved schema.

| ADR | Title |
|------|-------|
| ADR-001 | Rename Inventory Transactions to Inventory Movements |
| ADR-002 | Product Status Strategy |
| ADR-003 | Current Stock Strategy |
| ADR-004 | UUID Strategy |
| ADR-005 | Soft Delete Strategy |
| ADR-006 | Organization Settings Strategy |
| ADR-007 | Inventory Movement Strategy |
| ADR-008 | Immutable Inventory History |

These decisions define the architectural foundation of the database and should be considered authoritative throughout implementation.

---

# 7. Frozen Schema Summary

Database Version

```
Schema v1.0
```

Status

```
Frozen
```

Business Entities

```
6
```

Relationships

```
4
```

Architecture Decisions

```
8 ADRs
```

Normalization

```
1NF ✓
2NF ✓
3NF ✓
```

Laravel Convention

```
Compliant
```

---

# 8. Change Management

After this schema freeze, structural database changes are discouraged.

If a future modification becomes necessary, the following process should be followed:

1. Create a new Architecture Decision Record (ADR).
2. Update the affected database documentation.
3. Review the impact on existing relationships.
4. Implement the change through a new Laravel migration.
5. Record the change in the project changelog.

Direct modification of the approved schema without documentation should be avoided.

---

# 9. Next Phase

With the database schema frozen, the project is ready to enter the implementation phase.

The next development activities are:

1. Laravel Database Migrations
2. Eloquent Models
3. Model Relationships
4. Database Seeders
5. Model Factories

All implementation work must follow the approved schema defined in this document.

---

# 10. Approval

The database architecture for Pharmora has been reviewed through:

- Business Entity Review
- Table Structure Review
- Database Constraints Review
- Individual Table Reviews
- Indexing Strategy
- Normalization Review
- Architecture Decision Records

Based on these reviews, the database schema is approved and frozen as **Database Schema Version 1.0**.

This document establishes the official baseline for all database implementation activities within Pharmora MVP.

Any future structural modifications must be documented through the project's architecture decision process before implementation.