# 📄 Database Enum Strategy

> **Version:** 1.0  
> **Status:** Approved  
> **Document Type:** Database Design Standard  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Design Philosophy](#2-design-philosophy)
- [3. Enum Strategy](#3-enum-strategy)
- [4. Approved Enum Values](#4-approved-enum-values)
- [5. Laravel Implementation Guidelines](#5-laravel-implementation-guidelines)
- [6. UI Consistency](#6-ui-consistency)
- [7. Future Expansion](#7-future-expansion)
- [8. Approval](#8-approval)

---

# 1. Purpose

This document defines the official enumeration (Enum) strategy used throughout the Pharmora database.

Rather than allowing arbitrary string values, selected database fields are restricted to predefined business values to ensure consistency across the application.

This document serves as the single source of truth for:

- Laravel validation rules
- Eloquent models
- Database seeders
- Model factories
- UI components
- Badge styling
- Dashboard statistics
- Future API development

---

# 2. Design Philosophy

Pharmora intentionally stores business states using controlled string values.

Instead of relying on boolean fields or inconsistent text values, each business state is represented by a predefined set of values.

Examples of inconsistent values that should never appear:

```
Enabled
Disabled

Yes
No

True
False

Available
Unavailable

IN
OUT

Add
Minus
```

Using standardized values improves:

- Readability
- Maintainability
- Validation
- Reporting
- API consistency
- Future scalability

---

# 3. Enum Strategy

For the MVP, Pharmora stores enum-like values as **VARCHAR** columns rather than database-native ENUM types.

Reasons:

- Better PostgreSQL portability
- Simpler database migrations
- Easier future modifications
- Compatible with Laravel validation
- Easier API serialization

Validation is enforced at the application layer using Laravel validation rules and PHP Enums (or constants) where appropriate.

---

# 4. Approved Enum Values

## Product Status

Column

```
products.status
```

Allowed values

| Value | Description |
|--------|-------------|
| `active` | Product is available for inventory operations |
| `inactive` | Product is archived and cannot be used for new inventory activities |

---

## Category Status

Column

```
categories.status
```

Allowed values

| Value | Description |
|--------|-------------|
| `active` | Category can be assigned to products |
| `inactive` | Category remains available for historical data but cannot be assigned to new products |

---

## Supplier Status

Column

```
suppliers.status
```

Allowed values

| Value | Description |
|--------|-------------|
| `active` | Supplier can be selected when creating or updating products |
| `inactive` | Supplier remains available for historical records but cannot be selected for new products |

---

## Inventory Movement Type

Column

```
inventory_movements.movement_type
```

Allowed values

| Value | Description |
|--------|-------------|
| `stock_in` | Increase product stock |
| `stock_out` | Decrease product stock |
| `adjustment` | Manual inventory correction |

---

# 5. Laravel Implementation Guidelines

The approved values should be reused consistently across the application.

Recommended usage:

- Form Request validation
- PHP Enums or Constants
- Eloquent Models
- Seeders
- Factories
- Controllers
- Dashboard calculations
- Reporting modules

All validation should reference the approved values defined in this document.

---

# 6. UI Consistency

The UI should display user-friendly labels while preserving standardized database values.

| Database Value | UI Label |
|----------------|----------|
| `active` | Active |
| `inactive` | Inactive |
| `stock_in` | Stock In |
| `stock_out` | Stock Out |
| `adjustment` | Adjustment |

The application should never expose internal implementation values that differ from the approved database values.

---

# 7. Future Expansion

Additional enum values may be introduced when new business modules are implemented.

Examples include:

## Product Condition

```
good

damaged

expired
```

---

## Purchase Order Status

```
draft

pending

approved

received

cancelled
```

---

## Sales Status

```
pending

completed

cancelled
```

---

## User Role

```
administrator

manager

staff
```

Future enum additions must be documented before implementation to preserve consistency across the application.

---

# 8. Approval

The enum strategy defined in this document is approved as the official business value standard for Pharmora MVP Version 1.0.

All Laravel migrations, Eloquent models, validation rules, factories, seeders, UI components, and future API responses must use the values defined in this document.

Any modification to approved enum values should be documented through an Architecture Decision Record (ADR) before implementation.