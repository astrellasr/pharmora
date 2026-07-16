# 📄 Entity Relationship Diagram (ERD)

> **Version:** 2.0  
> **Status:** Approved & Frozen  
> **Document Type:** Entity Relationship Diagram (ERD)  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Entity Relationship Diagram](#2-entity-relationship-diagram)
- [3. Relationship Summary](#3-relationship-summary)
- [4. Relationship Explanation](#4-relationship-explanation)
- [5. Design Notes](#5-design-notes)
- [6. Related Documents](#6-related-documents)
- [7. Closing](#7-closing)

---

# 1. Purpose

This document provides the official Entity Relationship Diagram (ERD) for the Pharmora database.

Its primary purpose is to illustrate how business entities are connected through relational database relationships while maintaining consistency with the project's Database Design, Data Dictionary, Architecture Decision Records (ADR), Database Review documentation, Database Enum Strategy, and Database Schema Freeze.

The Entity Relationship Diagram serves as the primary blueprint for implementing Laravel migrations, Eloquent relationships, foreign key constraints, factories, seeders, and future database enhancements.

Rather than introducing new business rules, this document visualizes the relationships that have already been reviewed and approved throughout the database design process, ensuring a shared understanding of the application's relational model.

The ERD supports the following objectives:

- Visualize relationships between business entities.
- Validate the finalized database architecture.
- Serve as the primary reference for Laravel migration development.
- Support Eloquent relationship implementation.
- Improve database maintainability and scalability.
- Provide a consistent reference for future database evolution.

The finalized database schema consists of:

- Five Master Data entities
- One Transactional entity
- One Independent Configuration entity

Together, these entities form the relational foundation of Pharmora MVP Version 1.0.

---

# 2. Entity Relationship Diagram

The following Entity Relationship Diagram illustrates the finalized relational database structure used by Pharmora.

The diagram reflects the approved database schema after completing:

- Database Design Review
- Entity Validation
- Relationship Validation
- Cardinality Review
- Database Schema Freeze
- Architecture Decision Records (ADR)

The Mermaid diagram focuses on entity relationships and essential implementation attributes.

Detailed column definitions, data types, indexes, constraints, nullable rules, default values, and validation strategies are documented separately within the **Data Dictionary**.

---

## Visual Entity Relationship Diagram

The following visual diagram represents the finalized database schema for Pharmora MVP Version 1.0.

It complements the Mermaid diagram below and serves as the primary visual reference during Laravel implementation.

> **Developer ERD**

![Pharmora Developer ERD](../assets/diagrams/erd-developer.png)

---

## Mermaid Entity Relationship Diagram

```mermaid
```erDiagram

    USERS {
        bigint id PK
        uuid uuid UK
        varchar email UK
    }

    ORGANIZATION_SETTINGS {
        bigint id PK
    }

    CATEGORIES {
        bigint id PK
        uuid uuid UK
        varchar code UK
        varchar name UK
        varchar status
    }

    SUPPLIERS {
        bigint id PK
        uuid uuid UK
        varchar code UK
        varchar status
    }

    PRODUCTS {
        bigint id PK
        uuid uuid UK

        bigint category_id FK
        bigint supplier_id FK

        varchar sku UK
        varchar barcode UK

        integer current_stock
        integer minimum_stock

        varchar status
    }

    INVENTORY_MOVEMENTS {
        bigint id PK
        uuid uuid UK

        bigint product_id FK
        bigint user_id FK

        varchar movement_type

        integer quantity
    }

    CATEGORIES ||--o{ PRODUCTS : categorizes

    SUPPLIERS ||--o{ PRODUCTS : supplies

    PRODUCTS ||--o{ INVENTORY_MOVEMENTS : records

    USERS ||--o{ INVENTORY_MOVEMENTS : performs

```

The diagram above represents the finalized relational database structure for Pharmora MVP Version 1.0 and serves as the official reference for Laravel implementation.

---

# 3. Relationship Summary

The following table summarizes all approved relationships between entities in the Pharmora database.

| Parent Entity | Child Entity | Relationship | Foreign Key |
|---------------|-------------|--------------|-------------|
| Categories | Products | One-to-Many (1:N) | `category_id` |
| Suppliers | Products | One-to-Many (1:N) | `supplier_id` |
| Products | Inventory Movements | One-to-Many (1:N) | `product_id` |
| Users | Inventory Movements | One-to-Many (1:N) | `user_id` |

**Organization Settings** is an independent configuration entity and intentionally does not participate in foreign key relationships within the MVP scope.

---

## Relationship Statistics

| Item | Value |
|------|------:|
| Total Entities | 6 |
| Total Relationships | 4 |
| Relationship Type | One-to-Many (1:N) |
| Independent Configuration Entities | 1 |

---

## Cardinality Overview

The Pharmora MVP database consists exclusively of **One-to-Many (1:N)** relationships.

```
Category
1 ────────────────< 0..N Products

Supplier
1 ────────────────< 0..N Products

Product
1 ────────────────< 0..N Inventory Movements

User
1 ────────────────< 0..N Inventory Movements
```

---

## Participation Rules

| Parent Entity | Child Entity | Parent Participation | Child Participation |
|---------------|-------------|----------------------|---------------------|
| Category | Product | Optional | Mandatory |
| Supplier | Product | Optional | Mandatory |
| Product | Inventory Movement | Optional | Mandatory |
| User | Inventory Movement | Optional | Mandatory |

Participation Rules Explained

- A **Product** must belong to exactly one **Category**.
- A **Product** must belong to exactly one **Supplier**.
- An **Inventory Movement** must always reference one **Product**.
- An **Inventory Movement** must always be performed by one authenticated **User**.
- A **Category** may exist before any Product is assigned.
- A **Supplier** may exist before supplying any Product.
- A **User** may exist before performing any inventory operation.
- **Organization Settings** exists independently from all business entities.

No Many-to-Many (M:N) or One-to-One (1:1) relationships are required within the current MVP scope.

---

# 4. Relationship Explanation

This section explains the purpose and business rationale behind each relationship represented in the Entity Relationship Diagram.

Each relationship has been reviewed and approved during the Database Design Review process to ensure consistency with the Product Requirement Document (PRD), Business Flow, User Flow, and the approved MVP scope.

---

## Categories → Products

### Relationship Type

**One-to-Many (1:N)**

### Description

A single Category can classify multiple Products, while every Product belongs to exactly one Category.

This relationship enables logical product organization throughout the inventory system.

Categories improve:

- Product organization
- Product searching
- Product filtering
- Dashboard analytics
- Reporting

### Foreign Key

```text
products.category_id
```

### Business Rules

- Every Product must belong to one Category.
- A Category may exist without any Products.
- Categories can be deactivated without affecting historical Product records.
- Deleting a Category is restricted while Products are still assigned.

---

## Suppliers → Products

### Relationship Type

**One-to-Many (1:N)**

### Description

A Supplier may provide multiple Products, while each Product references exactly one Supplier.

Supplier information is centralized to simplify procurement management and product traceability.

### Foreign Key

```text
products.supplier_id
```

### Business Rules

- Every Product must reference one Supplier.
- A Supplier may exist before supplying any Products.
- Historical Products continue referencing inactive Suppliers.
- Deleting a Supplier is restricted while Products are still assigned.

---

## Products → Inventory Movements

### Relationship Type

**One-to-Many (1:N)**

### Description

Each Product may generate multiple Inventory Movement records throughout its lifecycle.

Rather than separating Stock In and Stock Out into multiple tables, Pharmora stores every inventory operation inside a centralized **Inventory Movements** table.

Movement types currently supported are:

- Stock In
- Stock Out
- Adjustment

This strategy simplifies querying, reporting, auditing, and future system expansion.

### Foreign Key

```text
inventory_movements.product_id
```

### Business Rules

- Every Inventory Movement must belong to exactly one Product.
- A Product may exist before any inventory activity occurs.
- Inventory history is immutable and must never be modified after creation.
- Product stock is updated after every successful Inventory Movement.

---

## Users → Inventory Movements

### Relationship Type

**One-to-Many (1:N)**

### Description

Every Inventory Movement stores the authenticated User responsible for performing the operation.

This relationship provides accountability, traceability, and supports future audit requirements.

### Foreign Key

```text
inventory_movements.user_id
```

### Business Rules

- Every Inventory Movement must reference one User.
- A User may exist without performing any inventory operations.
- Historical Inventory Movements must preserve the original User reference.
- Inventory history should never lose ownership information.

---

## Organization Settings

Organization Settings is implemented as an independent configuration entity.

Unlike business entities, Organization Settings is not connected through foreign key relationships.

Instead, it stores workspace-level configuration shared across the entire application.

Examples include:

- Organization Name
- Business Type
- Workspace Email
- Timezone
- Language
- Logo

Only a single Organization Settings record is expected within the MVP scope.

---

## Relationship Integrity

The following referential integrity rules apply throughout the database.

| Relationship | Delete Strategy |
|--------------|-----------------|
| Category → Product | RESTRICT |
| Supplier → Product | RESTRICT |
| Product → Inventory Movement | RESTRICT |
| User → Inventory Movement | RESTRICT |

The use of **RESTRICT** ensures that historical inventory records remain valid and prevents orphaned records from being created.

Master data uses **Soft Deletes**, while Inventory Movements remain immutable.

---

# 5. Design Notes

The Entity Relationship Diagram has been intentionally designed to remain simple, normalized, and aligned with the MVP scope of Pharmora.

The database architecture follows modern relational database principles while remaining flexible enough to support future business expansion.

The following architectural decisions define the overall database strategy.

---

## Centralized Inventory Movement Strategy

All inventory activities are stored within a single **Inventory Movements** table.

Instead of separating Stock In, Stock Out, and Inventory Adjustment into different tables, the `movement_type` field determines the business operation.

Benefits of this approach include:

- Simpler database design
- Easier reporting
- Unified inventory history
- Better query performance
- Easier future expansion

This strategy is documented in:

**ADR-007 — Inventory Movement Strategy**

---

## Immutable Inventory History

Inventory history is treated as immutable data.

Once an Inventory Movement has been created, it should never be edited or deleted.

For this reason:

- Inventory Movements do not implement Soft Deletes.
- Inventory Movements do not include an `updated_at` column.
- Historical records must remain unchanged.

Corrections should always be recorded as new Inventory Movement records rather than modifying previous ones.

This strategy is documented in:

**ADR-008 — Immutable Inventory History**

---

## UUID Strategy

Every business entity uses UUIDs as public identifiers while retaining auto-increment primary keys for internal database relationships.

Entities using UUID:

- Users
- Categories
- Suppliers
- Products
- Inventory Movements

Benefits include:

- Improved security
- Public URL safety
- API compatibility
- Easier future integrations

This strategy is documented in:

**ADR-004 — UUID Strategy**

---

## Current Stock Strategy

Current inventory quantity is stored directly within the **Products** table.

Historical inventory activity is recorded separately inside **Inventory Movements**.

This represents a controlled denormalization intended to improve dashboard performance and reduce aggregation queries.

Benefits include:

- Faster dashboard loading
- Faster inventory listing
- Simpler stock availability checks

Historical accuracy is preserved through Inventory Movements.

This strategy is documented in:

**ADR-003 — Current Stock Strategy**

---

## Product Status Strategy

Products use a controlled status field.

Approved values:

- `active`
- `inactive`

The status indicates whether a Product can participate in future inventory operations.

Historical inventory records remain valid regardless of Product status.

This strategy is documented in:

**ADR-002 — Product Status Strategy**

---

## Soft Delete Strategy

Soft Deletes are applied only to master data.

Applicable tables:

- Users
- Categories
- Suppliers
- Products

Inventory Movements intentionally do not support Soft Deletes because inventory history must remain permanent.

This strategy is documented in:

**ADR-005 — Soft Delete Strategy**

---

## Organization Settings

Organization Settings is implemented as an independent configuration entity.

Rather than duplicating organization information across multiple tables, all workspace-level configuration is centralized within a single table.

Examples include:

- Organization Name
- Business Type
- Workspace Email
- Country
- Language
- Timezone
- Logo

This strategy is documented in:

**ADR-006 — Organization Settings Strategy**

---

## Normalized Database Structure

Business entities are stored independently to minimize redundancy and improve maintainability.

The database satisfies the following normalization standards:

- First Normal Form (1NF)
- Second Normal Form (2NF)
- Third Normal Form (3NF)

The only intentional denormalization is `products.current_stock`, introduced to optimize inventory queries and dashboard performance.

---

## Laravel Convention Compliance

The database follows Laravel conventions for:

- Table names
- Primary keys
- Foreign keys
- Timestamp columns
- Soft Deletes
- Relationship naming

Following framework conventions minimizes custom configuration and improves long-term maintainability.

---

## MVP-Oriented Architecture

The ERD intentionally excludes entities that fall outside the current MVP scope.

Examples include:

- Purchase Orders
- Warehouses
- Customers
- Sales
- Manufacturers
- Product Batches
- Expiration Tracking
- Multi-Branch Management
- Notifications
- Audit Logs

These modules may be introduced in future versions through versioned database migrations and supporting Architecture Decision Records (ADR).

---

# 6. Related Documents

This document should be read together with the following database documentation.

| Document | Purpose |
|----------|---------|
| Database Design | Overall database architecture |
| Data Dictionary | Detailed column definitions |
| Database Constraints | Naming conventions and constraints |
| Database Indexing | Index strategy |
| Normalization Review | Database normalization analysis |
| Database Schema Freeze | Approved database schema |
| Database Enum Strategy | Approved business values |
| Architecture Decision Records (ADR) | Architectural decisions |

Together, these documents form the complete database documentation for Pharmora MVP Version 1.0.

---

# 7. Closing

This Entity Relationship Diagram represents the official relational database blueprint for Pharmora MVP Version 1.0.

Together with the Database Design, Data Dictionary, Database Review documents, Database Enum Strategy, Architecture Decision Records (ADR), and Database Schema Freeze, this document serves as the single source of truth for implementing the application's database layer.

All Laravel migrations, Eloquent models, relationships, factories, seeders, validation rules, and future database enhancements must remain consistent with the structure defined in this document.

Any structural modification beyond this point should be evaluated, documented, and approved through the project's Architecture Decision Record (ADR) process to preserve architectural integrity, maintain consistency across the codebase, and support long-term scalability.

The database architecture documented within this ERD has been reviewed, validated, and approved as the official implementation baseline for Pharmora MVP Version 1.0.