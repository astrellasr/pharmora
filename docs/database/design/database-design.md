# 📄 Database Design

> **Version:** 1.0  
> **Status:** Final  
> **Document Type:** Database Design  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Database Overview](#2-database-overview)
- [3. Design Principles](#3-design-principles)
- [4. Database Architecture](#4-database-architecture)
- [5. Entity Overview](#5-entity-overview)
- [6. Relationship Overview](#6-relationship-overview)
- [7. Table Overview](#7-table-overview)
- [8. Naming Conventions](#8-naming-conventions)
- [9. Indexing Strategy](#9-indexing-strategy)
- [10. Data Integrity Rules](#10-data-integrity-rules)
- [11. Scalability Considerations](#11-scalability-considerations)
- [12. Closing](#12-closing)

---

# 1. Purpose

This document defines the database architecture of Pharmora.

Its primary objective is to establish a consistent and scalable database structure that supports the application's business requirements while following relational database design best practices.

The database is designed to ensure data integrity, maintainability, and long-term scalability while remaining intentionally simple for the MVP scope.

Unlike the Information Architecture document, which defines how information is organized within the application, this document focuses on how business data is stored, related, and managed inside the database.

This document serves as the primary reference for creating database schemas, Laravel migrations, Eloquent models, foreign key relationships, and future database enhancements.

---

# 2. Database Overview

Pharmora uses a relational database management system (RDBMS) to organize and manage healthcare inventory data.

The database is designed around a centralized inventory model where products, suppliers, categories, and inventory transactions are stored as separate entities connected through relational keys.

Rather than storing duplicated information across multiple tables, the database follows normalization principles to reduce redundancy and improve consistency.

For the MVP version, the database consists of five primary entities:

- Users
- Categories
- Suppliers
- Products
- Inventory Transactions

Each entity represents a distinct business object with clearly defined responsibilities.

The database is designed to support common inventory operations, including:

- Product Management
- Category Management
- Supplier Management
- Stock In Transactions
- Stock Out Transactions
- Inventory History Tracking

Future versions may introduce additional entities without requiring major structural changes to the existing database.

---

# 3. Design Principles

The database architecture of Pharmora follows several core design principles.

| Principle | Description |
|------------|-------------|
| **Business-Oriented Design** | Every table exists to represent a real business entity or operational process. |
| **Normalization** | Data is normalized to minimize redundancy and maintain consistency across the system. |
| **Single Source of Truth** | Every business entity has one authoritative location within the database. |
| **Referential Integrity** | Relationships between entities are enforced using foreign key constraints. |
| **Scalability** | The schema supports future feature expansion without requiring major structural redesign. |
| **Maintainability** | Table structures, naming conventions, and relationships remain simple and easy to maintain. |
| **Performance** | Frequently queried fields will be indexed appropriately while avoiding unnecessary indexing. |
| **Consistency** | Naming conventions and relationship patterns remain uniform throughout the database. |

The overall database design prioritizes clarity, reliability, and maintainability over unnecessary complexity, reflecting the project's guiding principle:

> **Professional over Complex.**

---

# 4. Database Architecture

Pharmora adopts a **Relational Database Architecture** using PostgreSQL as its database management system.

The database is designed around a centralized inventory model where each business entity is represented by its own dedicated table and connected through foreign key relationships.

Rather than duplicating information across multiple tables, the database separates master data from transactional data to improve maintainability, consistency, and scalability.

The overall architecture consists of two primary groups:

### Master Data

Master data stores relatively static business information that serves as the foundation of the inventory system.

The following entities belong to this group:

- Users
- Categories
- Suppliers
- Products

These entities are created once and updated only when necessary.

---

### Transactional Data

Transactional data records operational activities that occur throughout the inventory lifecycle.

For the MVP version, all inventory movements are stored within a single transaction table.

```
Inventory Transactions
│
├── Stock In
└── Stock Out
```

Instead of creating separate tables for stock additions and stock removals, Pharmora stores every inventory movement inside the `inventory_transactions` table using a transaction type.

This approach provides several advantages:

- Simpler database structure
- Easier reporting
- Better scalability
- Reduced data duplication
- Support for future transaction types

Future inventory operations such as Product Returns, Stock Adjustments, or Damaged Items can be introduced without changing the existing database architecture.

---

# 5. Entity Overview

The MVP database consists of five primary entities.

| Entity | Purpose |
|---------|---------|
| **Users** | Stores administrator account information used for authentication and system access. |
| **Categories** | Organizes products into logical business classifications. |
| **Suppliers** | Stores supplier information used during inventory procurement. |
| **Products** | Stores all product information managed by the inventory system. |
| **Inventory Transactions** | Records every inventory movement, including Stock In and Stock Out transactions. |

Each entity represents a single business concept and follows the principle of **Single Responsibility**.

No entity should contain data that belongs to another business object.

---

## Entity Responsibilities

### Users

Responsible for authentication and administrator account management.

---

### Categories

Responsible for organizing products into business categories.

Each product belongs to one category.

---

### Suppliers

Responsible for maintaining supplier information.

Each product is supplied by one supplier.

---

### Products

Responsible for storing inventory item information, including stock quantity and business attributes.

Products act as the central entity of the database because nearly every operational process references product data.

---

### Inventory Transactions

Responsible for recording every inventory movement.

Each transaction stores:

- Transaction Type
- Product Reference
- Quantity
- Notes
- Transaction Timestamp

The transaction history serves as an immutable audit trail and should never be modified after creation.

---

# 6. Relationship Overview

The following relationships define how entities interact within the database.

```
Users
│
└──────────────┐
               ▼
Inventory Transactions

Categories
│
└──────────────┐
               ▼
Products
               ▲
               │
Suppliers──────┘
               │
               ▼
Inventory Transactions
```

---

## Relationship Summary

| Parent Entity | Child Entity | Relationship |
|---------------|-------------|--------------|
| Categories | Products | One-to-Many |
| Suppliers | Products | One-to-Many |
| Products | Inventory Transactions | One-to-Many |
| Users | Inventory Transactions | One-to-Many |

---

## Relationship Explanation

### Categories → Products

One category can contain many products.

Each product belongs to exactly one category.

---

### Suppliers → Products

One supplier can provide multiple products.

Each product references one supplier.

---

### Products → Inventory Transactions

One product may have many inventory transactions throughout its lifecycle.

Each inventory transaction references one product.

---

### Users → Inventory Transactions

Each inventory transaction records the administrator who performed the operation.

One administrator may create many inventory transactions.

This relationship improves traceability and supports future auditing requirements.

---

# 7. Table Overview

The following tables constitute the MVP database schema of Pharmora.

## Users

The **Users** table stores administrator account information used for authentication and system access.

### Responsibilities

- Store administrator credentials.
- Manage user authentication.
- Record ownership of inventory transactions.
- Support future user management features if required.

This table is provided by Laravel's authentication system and extended only when additional business requirements arise.

---

## Categories

The **Categories** table stores product classifications used to organize inventory.

### Responsibilities

- Organize products into logical business groups.
- Simplify product searching and filtering.
- Improve inventory organization.
- Prevent inconsistent product classification.

Each category may contain multiple products.

---

## Suppliers

The **Suppliers** table stores supplier information for inventory procurement.

### Responsibilities

- Maintain supplier information.
- Support Stock In transactions.
- Improve supplier traceability.
- Centralize procurement data.

Each supplier may provide multiple products.

---

## Products

The **Products** table is the central entity of the inventory system.

It stores all information related to inventory items.

### Responsibilities

- Store product information.
- Maintain current stock quantity.
- Reference category information.
- Reference supplier information.
- Support inventory transactions.

Products serve as the primary business entity referenced throughout the application.

---

## Inventory Transactions

The **Inventory Transactions** table stores every inventory movement performed within the system.

Rather than separating Stock In and Stock Out into different tables, every transaction is recorded within a single table using a transaction type.

### Responsibilities

- Record Stock In transactions.
- Record Stock Out transactions.
- Maintain inventory history.
- Provide audit trail.
- Support inventory reporting.

Inventory Transactions represent immutable historical records and should never be modified after creation.

---

# 8. Naming Conventions

To ensure consistency and maintainability, Pharmora follows standardized database naming conventions.

## Table Names

- Use lowercase letters.
- Use plural nouns.
- Use snake_case formatting.

Examples:

```
users
categories
suppliers
products
inventory_transactions
```

---

## Primary Keys

Every table uses a single primary key named:

```
id
```

Laravel's default primary key convention should be preserved.

---

## Foreign Keys

Foreign keys follow the format:

```
{referenced_table_singular}_id
```

Examples:

```
category_id

supplier_id

product_id

user_id
```

---

## Timestamp Columns

Every table should include Laravel's standard timestamp columns.

```
created_at

updated_at
```

These columns support auditing and future reporting requirements.

---

## Soft Deletes

Soft Deletes will only be implemented for business entities that may require recovery.

For the MVP version:

| Table | Soft Delete |
|--------|-------------|
| Users | Yes |
| Categories | Yes |
| Suppliers | Yes |
| Products | Yes |
| Inventory Transactions | No |

Inventory transaction records should remain permanent to preserve historical accuracy.

---

## Boolean Fields

Boolean values should use descriptive names.

Examples:

```
is_active

is_discontinued
```

Avoid ambiguous names such as:

```
status

flag
```

unless multiple states are required.

---

## Enum Values

Fields representing limited business states should use controlled values.

Example:

```
transaction_type

IN

OUT
```

Future versions may extend this list with additional transaction types while preserving backward compatibility.

---

# 9. Indexing Strategy

Proper indexing improves query performance without introducing unnecessary storage overhead.

The following indexing strategy will be applied.

| Table | Indexed Columns | Reason |
|---------|----------------|--------|
| Users | email | Authentication lookup |
| Categories | name | Fast category search |
| Suppliers | name | Supplier lookup |
| Products | name | Product search |
| Products | category_id | Relationship query |
| Products | supplier_id | Relationship query |
| Inventory Transactions | product_id | Transaction lookup |
| Inventory Transactions | transaction_type | Reporting |
| Inventory Transactions | created_at | Sorting and history |

---

## Performance Considerations

Indexes should only be created for columns that are frequently used for:

- Searching
- Filtering
- Sorting
- Foreign key relationships
- Reporting

Avoid excessive indexing because every additional index increases storage requirements and write operations.

The indexing strategy should evolve alongside future business requirements rather than attempting to optimize prematurely.

---

# 10. Data Integrity Rules

To ensure reliable and consistent inventory data, Pharmora enforces several data integrity rules throughout the database.

## Referential Integrity

All relationships between entities must be enforced using foreign key constraints.

Records cannot reference entities that do not exist.

Examples:

- Every Product must reference a valid Category.
- Every Product must reference a valid Supplier.
- Every Inventory Transaction must reference a valid Product.
- Every Inventory Transaction must reference a valid User.

---

## Entity Integrity

Every table must contain a unique primary key (`id`) to ensure that each record can be uniquely identified.

Primary keys are automatically generated by the database and must never be modified after creation.

---

## Domain Integrity

Each column must store values that conform to its intended data type and business rules.

Examples:

- Product name cannot be empty.
- Stock quantity cannot be negative.
- Transaction quantity must be greater than zero.
- Transaction type must contain only predefined values (`IN` or `OUT`).

---

## Transaction Integrity

Inventory movements must always be executed as atomic database transactions.

When a Stock In or Stock Out operation occurs, the following actions must succeed or fail together:

1. Create an Inventory Transaction record.
2. Update the Product stock quantity.
3. Commit the transaction.

If any step fails, the entire operation must be rolled back to prevent inconsistent inventory data.

---

## Historical Integrity

Inventory transaction records represent permanent business history.

For this reason:

- Inventory Transactions cannot be edited after creation.
- Inventory Transactions cannot be deleted.
- Historical records should always remain available for auditing and reporting purposes.

This approach preserves traceability and maintains an accurate audit trail.

---

# 11. Scalability Considerations

Although Pharmora is intentionally designed as a focused MVP, the database architecture is prepared for future expansion.

The following design decisions support long-term scalability.

## Unified Transaction Model

All inventory movements are stored within a single `inventory_transactions` table.

Future transaction types such as:

- Product Return
- Stock Adjustment
- Damaged Product
- Expired Product

can be introduced by extending the `transaction_type` field without requiring additional transaction tables.

---

## Modular Entity Design

Each business entity is stored independently.

Future modules such as:

- Purchase Orders
- Sales
- Warehouses
- Customers
- Reports

can be introduced by adding new entities rather than modifying existing ones.

---

## Relationship Extensibility

Relationships between entities are intentionally simple and loosely coupled.

This allows future features to be added without breaking existing database relationships.

---

## Laravel Compatibility

The database follows Laravel conventions for:

- Primary Keys
- Foreign Keys
- Timestamps
- Soft Deletes
- Naming Conventions

This minimizes custom configuration and improves maintainability throughout development.

---

## Performance Readiness

The MVP database prioritizes clean design over premature optimization.

As application usage grows, future improvements may include:

- Additional indexes
- Query optimization
- Database caching

These enhancements can be introduced without redesigning the database structure.

---

# 12. Closing

This document defines the conceptual database architecture of Pharmora and establishes the foundation for all data-related components within the application.

Together with the Master Project Brief, Product Requirement Document, Business Flow, User Flow, and Information Architecture, this document ensures that the database design remains aligned with the project's business objectives, system architecture, and development principles.

The database structure described in this document serves as the primary reference for Entity Relationship Diagrams (ERD), Data Dictionary, Laravel Migrations, Eloquent Models, Seeders, Factories, and application development.

Future enhancements should preserve the architectural principles established in this document to maintain consistency, scalability, and long-term maintainability.

This document should be reviewed whenever new business entities, database relationships, or major architectural changes are introduced.