# 📄 Categories Table Review

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

The **Categories** table stores logical classifications used to organize healthcare products within Pharmora.

Rather than containing inventory information, categories provide a structured way to group products for filtering, reporting, navigation, and overall data organization.

The objective of this review is to ensure the Categories table remains lightweight, maintainable, and scalable while supporting the current MVP requirements.

---

# 2. Business Responsibility

The Categories table serves as a master data entity.

Its responsibilities include:

- Organizing products into logical groups
- Improving product search and filtering
- Supporting dashboard analytics
- Supporting reporting by category
- Maintaining consistent product classification

Categories are shared across multiple products and should remain relatively stable over time.

---

# 3. UI & Feature Analysis

The Categories table was reviewed against the approved High-Fidelity UI.

## Categories Module

The Categories module requires:

- Category Code
- Category Name
- Description
- Status

---

## Products Module

Each product belongs to exactly one category.

The Product Create and Edit pages require a category selector.

---

## Dashboard

Dashboard statistics display:

- Total Categories
- Product Distribution by Category

No additional category attributes are required.

---

## Reports

Reports aggregate product information based on category.

No reporting-specific columns are necessary.

---

# 4. Column Review

| Column | Status | Reason |
|----------|--------|--------|
| id | Keep | Primary key |
| uuid | Add | Public identifier |
| code | Keep | Human-readable unique category code |
| name | Keep | Category name |
| description | Keep | Optional category description |
| status | Keep | Operational status (Active / Inactive) |
| created_at | Keep | Audit information |
| updated_at | Keep | Audit information |
| deleted_at | Keep | Soft delete support |

---

## Excluded Columns

The following fields were intentionally excluded.

| Column | Reason |
|----------|--------|
| icon | UI can determine icon independently |
| color | Presentation concern, not business data |
| parent_category_id | Nested categories are outside MVP scope |
| sort_order | Current UI does not require manual ordering |

---

# 5. Final Table Structure

```
id
uuid
code
name
description
status
created_at
updated_at
deleted_at
```

---

# 6. Business Rules

The following business rules apply.

- Every category must have a unique code.
- Category names should be unique.
- Description is optional.
- Status indicates whether the category is available for new products.
- Categories referenced by existing products should not be permanently deleted.
- Soft Deletes preserve historical product relationships.

---

# 7. Architecture Decisions

## Master Data

Categories are considered master data.

They change infrequently and are referenced by multiple products.

---

## Unique Category Code

Each category receives a unique business code.

Examples:

```
MED

VIT

DEV

SUP
```

Using business codes improves readability in reports, exports, and internal references.

---

## Operational Status

The `status` column represents whether the category is available for use.

Allowed values:

- Active
- Inactive

Inactive categories remain available for historical data but cannot be assigned to newly created products.

---

## Soft Delete Strategy

Categories use Soft Deletes.

Historical product records must remain valid even if a category is archived.

---

# 8. Future Considerations

Future versions of Pharmora may extend this table with:

- Parent Category
- Category Icon
- Display Color
- Sort Order
- SEO Metadata
- Category Image

These enhancements can be introduced without changing the existing relationship between Categories and Products.

---

# 9. Approval

The Categories table has been reviewed against the Product Requirement Document, Business Flow, User Flow, and approved High-Fidelity UI.

The structure defined in this document is approved as the official Categories table for Pharmora MVP Version 1.0.

The table provides a clean, normalized, and scalable structure while remaining aligned with Laravel conventions and enterprise database design practices.