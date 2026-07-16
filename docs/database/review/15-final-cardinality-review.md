# 📄 Final Cardinality Review

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
- [3. Cardinality Principles](#3-cardinality-principles)
- [4. Relationship Cardinality Review](#4-relationship-cardinality-review)
- [5. Participation Analysis](#5-participation-analysis)
- [6. Business Rule Validation](#6-business-rule-validation)
- [7. Cardinality Summary](#7-cardinality-summary)
- [8. Approval](#8-approval)

---

# 1. Purpose

This document validates the cardinality and participation rules between all approved business entities before generating the final Entity Relationship Diagram (ERD).

The objective is to ensure that every relationship accurately reflects the intended business rules and supports Laravel Eloquent relationships without ambiguity.

---

# 2. Validation Scope

The review covers every approved relationship defined within the Pharmora MVP database.

Validated entities:

- Users
- Organization Settings
- Categories
- Suppliers
- Products
- Inventory Movements

---

# 3. Cardinality Principles

Each relationship is evaluated using:

- Minimum Participation
- Maximum Participation
- Mandatory vs Optional Relationship
- Business Requirement
- Laravel Relationship Compatibility

Notation used throughout this document:

```
1..1

Exactly One
```

```
0..1

Zero or One
```

```
0..*

Zero or Many
```

```
1..*

One or Many
```

---

# 4. Relationship Cardinality Review

## Categories → Products

Relationship

```
Category

1 -------- 0..*

Product

1 -------- 1
```

Meaning

- Every Product must belong to exactly one Category.
- A Category may exist without any Products.

Participation

| Entity | Participation |
|---------|---------------|
| Category | Optional |
| Product | Mandatory |

Status

✅ Approved

---

## Suppliers → Products

Relationship

```
Supplier

1 -------- 0..*

Product

1 -------- 1
```

Meaning

- Every Product must have one Supplier.
- A Supplier may exist without supplying any Products.

Participation

| Entity | Participation |
|---------|---------------|
| Supplier | Optional |
| Product | Mandatory |

Status

✅ Approved

---

## Products → Inventory Movements

Relationship

```
Product

1 -------- 0..*

Inventory Movement

1 -------- 1
```

Meaning

- Every Inventory Movement belongs to exactly one Product.
- A Product may exist before any inventory activity occurs.

Participation

| Entity | Participation |
|---------|---------------|
| Product | Optional |
| Inventory Movement | Mandatory |

Status

✅ Approved

---

## Users → Inventory Movements

Relationship

```
User

1 -------- 0..*

Inventory Movement

1 -------- 1
```

Meaning

- Every Inventory Movement must be created by one authenticated User.
- A User may exist without performing any inventory operation.

Participation

| Entity | Participation |
|---------|---------------|
| User | Optional |
| Inventory Movement | Mandatory |

Status

✅ Approved

---

## Organization Settings

Organization Settings has no relational dependencies.

Only one record is expected during the MVP.

Participation

Independent Entity

Status

✅ Approved

---

# 5. Participation Analysis

| Relationship | Parent | Child |
|--------------|--------|-------|
| Categories → Products | Optional | Mandatory |
| Suppliers → Products | Optional | Mandatory |
| Products → Inventory Movements | Optional | Mandatory |
| Users → Inventory Movements | Optional | Mandatory |

No Many-to-Many relationships exist within the current MVP.

No One-to-One relationships are required.

All approved relationships follow a One-to-Many structure.

---

# 6. Business Rule Validation

The following business rules have been validated.

## Product

A Product cannot exist without:

- Category
- Supplier

---

## Inventory Movement

An Inventory Movement cannot exist without:

- Product
- User

---

## Category

A Category may exist before any Product is assigned.

---

## Supplier

A Supplier may exist before supplying any Product.

---

## User

A User account may exist before performing any inventory activity.

---

## Organization Settings

Configuration exists independently of all business entities.

---

# 7. Cardinality Summary

| Relationship | Cardinality | Result |
|--------------|-------------|--------|
| Categories → Products | 1 : N | ✅ |
| Suppliers → Products | 1 : N | ✅ |
| Products → Inventory Movements | 1 : N | ✅ |
| Users → Inventory Movements | 1 : N | ✅ |

Relationship Types

```
One-to-Many

4
```

Many-to-Many

```
0
```

One-to-One

```
0
```

Independent Entities

```
1
```

---

# 8. Approval

The cardinality validation has been completed.

All approved relationships accurately represent the business rules defined for Pharmora Version 1.0.

The validated cardinality model serves as the official reference for:

- Entity Relationship Diagram (ERD)
- Laravel Foreign Keys
- Eloquent Relationships
- Database Constraints
- Future Database Evolution

No changes to relationship cardinality should be made without review and approval through the project's Architecture Decision Record (ADR) process.