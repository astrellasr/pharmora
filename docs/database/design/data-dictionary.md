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

# Organization Settings

## Purpose

The **Organization Settings** table stores global application configuration shared across the entire Pharmora workspace.

Unlike business entities such as Products or Suppliers, Organization Settings does not represent transactional business data.

Instead, it stores information that defines the identity and preferences of the organization using the application.

Only one record is expected to exist within the MVP scope.

---

## Business Responsibility

The Organization Settings entity is responsible for:

- Organization identity
- Workspace branding
- Default application preferences
- Localization settings
- Business profile information

The data stored within this table is referenced by multiple modules throughout the application but is not directly related through foreign key relationships.

---

## Business Rules

The Organization Settings table follows these business rules:

- Only one record should exist within the application.
- Organization Settings does not participate in foreign key relationships.
- UUID is intentionally omitted because the entity is never exposed through public URLs.
- The record may be updated by authorized administrators.
- Soft Deletes are not implemented because the application always requires one active configuration.

---

## Column Definitions

| Column | Type | Nullable | Default | Constraint | Description |
|---------|------|----------|---------|------------|-------------|
| id | BIGINT | No | Auto Increment | Primary Key | Internal identifier |
| organization_name | VARCHAR | No | - | - | Organization name |
| business_type | VARCHAR | No | - | - | Business category |
| workspace_email | VARCHAR | No | - | - | Official organization email |
| phone | VARCHAR | Yes | NULL | - | Contact number |
| address | TEXT | Yes | NULL | - | Organization address |
| country | VARCHAR | Yes | NULL | - | Country |
| timezone | VARCHAR | No | Asia/Jakarta | - | Default timezone |
| language | VARCHAR | No | id | - | Default application language |
| logo | VARCHAR | Yes | NULL | - | Organization logo path |
| created_at | TIMESTAMP | No | Current Timestamp | - | Creation timestamp |
| updated_at | TIMESTAMP | No | Current Timestamp | - | Last update timestamp |

---

## Indexes

| Column | Type | Purpose |
|---------|------|---------|
| id | Primary Key | Internal identifier |

No additional indexes are required within the MVP because this table stores only a single record.

---

## Constraints

| Constraint | Description |
|------------|-------------|
| Primary Key | id |
| UUID | Not Implemented |
| Soft Deletes | Not Implemented |

---

## Relationships

Organization Settings is intentionally designed as an independent configuration entity.

The table does not contain foreign keys and is not referenced by other tables.

This simplifies the configuration layer while avoiding unnecessary relational complexity.

---

## Laravel Mapping

```php
class OrganizationSetting extends Model
{
    protected $fillable = [
        'organization_name',
        'business_type',
        'workspace_email',
        'phone',
        'address',
        'country',
        'timezone',
        'language',
        'logo',
    ];
}
```

---

## Business Notes

Organization Settings centralizes workspace-level configuration.

Typical examples include:

- Organization Name
- Pharmacy Name
- Clinic Name
- Medical Supplier Name
- Business Contact
- Workspace Logo
- Language
- Timezone

This information may be displayed throughout the application, including:

- Dashboard
- Settings
- Login Branding
- Exported Reports
- PDF Documents

---

## Architectural Decisions

The Organization Settings table follows the decisions defined in:

- ADR-006 — Organization Settings Strategy

Key architectural decisions include:

- Single-row configuration table
- Independent entity
- No UUID
- No foreign keys
- No Soft Deletes

---

## Future Considerations

Future versions of Pharmora may extend this table with additional configuration options.

Possible additions include:

- Currency
- Date Format
- Time Format
- Theme
- Dark Mode
- Tax Configuration
- Company Registration Number
- Business License Number
- SMTP Configuration
- Backup Settings

These features are intentionally excluded from the MVP scope.

# Categories

## Purpose

The **Categories** table stores product classifications used to organize inventory within the Pharmora platform.

Categories simplify inventory management by grouping similar products into logical business classifications.

Examples include:

- Antibiotics
- Vitamins
- Medical Devices
- Personal Care
- Baby Care

Each Product must belong to exactly one Category.

---

## Business Responsibility

The Categories entity is responsible for:

- Product classification
- Inventory organization
- Product filtering
- Dashboard statistics
- Reporting aggregation

Categories represent relatively static master data and therefore support Soft Deletes instead of permanent deletion.

---

## Business Rules

The Categories table follows these business rules:

- Every Category must have a unique Code.
- Every Category must have a unique Name.
- Category names should remain descriptive and human-readable.
- Categories may exist without any Products.
- Categories cannot be permanently deleted while still referenced by Products.
- Categories may be marked as inactive.
- Historical Product records must remain valid regardless of Category status.

---

## Column Definitions

| Column | Type | Nullable | Default | Constraint | Description |
|---------|------|----------|---------|------------|-------------|
| id | BIGINT | No | Auto Increment | Primary Key | Internal identifier |
| uuid | UUID | No | Generated | Unique | Public identifier |
| code | VARCHAR | No | - | Unique | Category code |
| name | VARCHAR | No | - | Unique | Category name |
| description | TEXT | Yes | NULL | - | Category description |
| status | VARCHAR | No | active | - | Business status |
| created_at | TIMESTAMP | No | Current Timestamp | - | Creation timestamp |
| updated_at | TIMESTAMP | No | Current Timestamp | - | Last update timestamp |
| deleted_at | TIMESTAMP | Yes | NULL | Soft Delete | Soft deletion timestamp |

---

## Indexes

| Column | Type | Purpose |
|---------|------|---------|
| id | Primary Key | Internal relationship |
| uuid | Unique | Public identifier |
| code | Unique | Business identifier |
| name | Unique | Prevent duplicate categories |
| status | Index | Dashboard filtering |

---

## Constraints

| Constraint | Description |
|------------|-------------|
| Primary Key | id |
| Unique | uuid |
| Unique | code |
| Unique | name |
| Soft Deletes | Enabled |

---

## Relationships

| Relationship | Type |
|--------------|------|
| Category → Products | One-to-Many |

One Category may classify many Products.

Each Product must belong to exactly one Category.

---

## Laravel Mapping

```php
class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'code',
        'name',
        'description',
        'status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
```

---

## Business Notes

Categories provide a logical structure for organizing inventory.

Typical use cases include:

- Product grouping
- Inventory filtering
- Dashboard statistics
- Stock analysis
- Report generation
- Search optimization

Categories are not intended to represent product brands or manufacturers.

---

## Lifecycle

```
Create
    │
    ▼
Active
    │
    ├──────────────┐
    ▼              │
Inactive           │
    │              │
    ▼              │
Restore ◄──────────┘
```

Categories should be marked as **Inactive** instead of being deleted whenever possible.

Soft Deletes should only be used when a Category is no longer required and is not referenced by active Products.

---

## Architectural Decisions

The Categories table follows the decisions defined in:

- ADR-002 — Product Status Strategy
- ADR-004 — UUID Strategy
- ADR-005 — Soft Delete Strategy

Key architectural decisions include:

- UUID for public identification
- Business code for internal reference
- String-based status values
- Soft Deletes for master data

---

## Future Considerations

Future versions of Pharmora may extend Categories with additional capabilities.

Potential enhancements include:

- Category icons
- Category colors
- Parent-child categories
- Nested category hierarchy
- Display ordering
- Category images
- SEO metadata
- Multi-language support

These features are intentionally excluded from the MVP scope.

# Suppliers

## Purpose

The **Suppliers** table stores information about organizations that provide products to the business.

Suppliers represent external business partners responsible for supplying inventory items managed within Pharmora.

Each Product must reference exactly one Supplier.

---

## Business Responsibility

The Suppliers entity is responsible for:

- Supplier master data
- Product sourcing
- Procurement reference
- Inventory traceability
- Business reporting

Suppliers are considered master data and therefore support Soft Deletes instead of permanent deletion.

---

## Business Rules

The Suppliers table follows these business rules:

- Every Supplier must have a unique Code.
- Every Supplier must have a unique Name.
- Suppliers may exist without supplying any Products.
- Suppliers cannot be permanently deleted while still referenced by Products.
- Suppliers may be marked as inactive.
- Historical Product records must continue referencing their original Supplier.
- Supplier information should remain stable to preserve inventory history.

---

## Column Definitions

| Column | Type | Nullable | Default | Constraint | Description |
|---------|------|----------|---------|------------|-------------|
| id | BIGINT | No | Auto Increment | Primary Key | Internal identifier |
| uuid | UUID | No | Generated | Unique | Public identifier |
| code | VARCHAR | No | - | Unique | Supplier code |
| name | VARCHAR | No | - | Unique | Supplier name |
| contact_person | VARCHAR | Yes | NULL | - | Primary contact person |
| email | VARCHAR | Yes | NULL | - | Supplier email |
| phone | VARCHAR | Yes | NULL | - | Supplier phone number |
| address | TEXT | Yes | NULL | - | Supplier address |
| status | VARCHAR | No | active | - | Business status |
| created_at | TIMESTAMP | No | Current Timestamp | - | Creation timestamp |
| updated_at | TIMESTAMP | No | Current Timestamp | - | Last update timestamp |
| deleted_at | TIMESTAMP | Yes | NULL | Soft Delete | Soft deletion timestamp |

---

## Indexes

| Column | Type | Purpose |
|---------|------|---------|
| id | Primary Key | Internal relationship |
| uuid | Unique | Public identifier |
| code | Unique | Business identifier |
| name | Unique | Prevent duplicate suppliers |
| status | Index | Dashboard filtering |

---

## Constraints

| Constraint | Description |
|------------|-------------|
| Primary Key | id |
| Unique | uuid |
| Unique | code |
| Unique | name |
| Soft Deletes | Enabled |

Email and phone numbers are intentionally **not** marked as Unique because different supplier branches or representatives may legitimately share contact information.

---

## Relationships

| Relationship | Type |
|--------------|------|
| Supplier → Products | One-to-Many |

One Supplier may provide multiple Products.

Each Product must belong to exactly one Supplier.

---

## Laravel Mapping

```php
class Supplier extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'code',
        'name',
        'contact_person',
        'email',
        'phone',
        'address',
        'status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
```

---

## Business Notes

Suppliers represent external organizations rather than individual employees.

Typical supplier information includes:

- Pharmaceutical distributors
- Medical equipment providers
- Healthcare wholesalers
- Local medicine suppliers

Supplier information supports:

- Product traceability
- Procurement management
- Inventory reporting
- Future purchase order implementation

---

## Lifecycle

```
Create
    │
    ▼
Active
    │
    ├──────────────┐
    ▼              │
Inactive           │
    │              │
    ▼              │
Restore ◄──────────┘
```

Suppliers should generally be marked as **Inactive** instead of being deleted.

Soft Deletes are reserved for suppliers that are permanently removed from business operations while ensuring historical Product references remain valid.

---

## Architectural Decisions

The Suppliers table follows the decisions defined in:

- ADR-004 — UUID Strategy
- ADR-005 — Soft Delete Strategy

Key architectural decisions include:

- UUID for secure public identification
- Business code for internal reference
- String-based status values
- Soft Deletes for master data
- Historical relationship preservation

---

## Future Considerations

Future versions of Pharmora may extend Suppliers with additional capabilities.

Potential enhancements include:

- Supplier logo
- Tax identification number
- Bank account information
- Payment terms
- Purchase Order integration
- Supplier rating
- Contract management
- Delivery lead time
- Multiple contact persons
- Vendor performance analytics

These features are intentionally excluded from the MVP scope.