# 📄 Suppliers Table Review

> **Version:** 1.0  
> **Status:** Approved  
> **Document Type:** Database Architecture Review  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Business Responsibility](#2-business-responsibility)
- [3. UI & Feature Analysis](#3-ui--feature-analysis)
- [4. Column Review](#4-column-review)
- [5. Final Table Structure](#5-final-table-structure)
- [6. Business Rules](#6-business-rules)
- [7. Architecture Decisions](#7-architecture-decisions)
- [8. Future Considerations](#8-future-considerations)
- [9. Approval](#9-approval)

---

# 1. Purpose

The **Suppliers** table stores information about organizations or vendors that supply healthcare products managed within Pharmora.

Suppliers are considered master data and provide procurement references for products.

This document validates the structure of the Suppliers table before implementation to ensure it supports current business requirements while remaining extensible for future enhancements.

---

# 2. Business Responsibility

The Suppliers table is responsible for:

- Maintaining supplier information
- Supporting product procurement
- Providing contact references
- Organizing products by supplier
- Supporting supplier-based reporting

Each supplier may provide multiple products, while every product belongs to exactly one supplier in the MVP.

The Suppliers table does not store procurement transactions or purchase history.

---

# 3. UI & Feature Analysis

The Suppliers table was reviewed against the approved High-Fidelity UI.

## Suppliers Module

The Suppliers module requires:

- Supplier Code
- Company Name
- Contact Person
- Email Address
- Phone Number
- Business Address
- Status

---

## Products Module

Every product requires a supplier selection.

The Product Create and Edit pages reference supplier data.

---

## Dashboard

Dashboard statistics include:

- Total Suppliers

No additional supplier information is required.

---

## Reports

Reports allow products to be grouped by supplier.

No additional reporting columns are necessary.

---

# 4. Column Review

| Column | Status | Reason |
|----------|--------|--------|
| id | Keep | Primary key |
| uuid | Add | Public identifier |
| code | Keep | Unique supplier code |
| name | Keep | Company name |
| contact_person | Keep | Primary contact person |
| email | Keep | Supplier email |
| phone | Keep | Contact number |
| address | Keep | Business address |
| status | Keep | Operational status |
| created_at | Keep | Audit information |
| updated_at | Keep | Audit information |
| deleted_at | Keep | Soft delete support |

---

## Excluded Columns

The following attributes were intentionally excluded from the MVP.

| Column | Reason |
|----------|--------|
| website | Not required by current workflow |
| tax_number | Outside inventory scope |
| bank_account | Procurement module not implemented |
| payment_terms | Future purchasing feature |
| rating | Can be calculated later |
| notes | Not currently used by UI |
| logo | Not required |

---

# 5. Final Table Structure

```
id
uuid
code
name
contact_person
email
phone
address
status
created_at
updated_at
deleted_at
```

---

# 6. Business Rules

The following business rules apply.

- Every supplier must have a unique supplier code.
- Supplier names should be unique.
- Email is optional but must be unique if provided.
- Phone number is optional.
- Address is optional.
- Status indicates whether the supplier is available for new products.
- Suppliers referenced by existing products must not be permanently deleted.
- Soft Deletes preserve historical product relationships.

---

# 7. Architecture Decisions

## Master Data

Suppliers are treated as master data.

Supplier information changes infrequently and is referenced by multiple products.

---

## Supplier Code

Every supplier receives a unique business code.

Examples:

```
SUP-001

SUP-002

SUP-003
```

Supplier codes provide stable identifiers for exports, reports, and future integrations.

---

## Operational Status

The `status` column represents operational availability.

Allowed values:

- Active
- Inactive

Inactive suppliers remain visible in historical records but cannot be selected when creating new products.

---

## Soft Delete Strategy

Suppliers implement Soft Deletes.

Historical product records continue referencing archived suppliers, preserving data integrity and reporting accuracy.

---

## One Supplier per Product

For the MVP, every product belongs to exactly one supplier.

Supporting multiple suppliers for a single product is intentionally deferred until future procurement modules are introduced.

---

# 8. Future Considerations

Future versions of Pharmora may extend this table with:

- Website
- Tax Identification Number
- Payment Terms
- Supplier Rating
- Supplier Notes
- Logo
- Country
- City
- Postal Code
- Purchase Order Integration

These enhancements can be introduced without affecting the existing relationship between Suppliers and Products.

---

# 9. Approval

The Suppliers table has been reviewed against the Product Requirement Document, Business Flow, User Flow, and approved High-Fidelity UI.

The structure defined in this document is approved as the official Suppliers table for Pharmora MVP Version 1.0.

The table provides a simple, normalized, and scalable foundation for supplier management while remaining aligned with Laravel conventions and enterprise database design practices.