# 📄 Products Table Review

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

This document reviews the **Products** table before implementation.

The Products table is the core business entity within Pharmora and serves as the central source of inventory information.

Every inventory movement, dashboard metric, report, and stock calculation originates from this table.

The objective of this review is to ensure the table contains only the information required by the MVP while remaining extensible for future business growth.

---

# 2. Business Responsibility

The Products table stores all healthcare inventory items managed by the organization.

Each product represents a unique stock keeping unit (SKU) and contains the information required to identify, classify, price, and monitor inventory.

The table is responsible for:

- Product identification
- Product categorization
- Supplier association
- Inventory monitoring
- Stock availability
- Pricing information
- Dashboard statistics

The Products table does **not** store inventory history.

Historical changes are stored separately in the **Inventory Movements** table.

---

# 3. UI & Feature Analysis

The table was reviewed against the following application modules.

## Dashboard

The Dashboard displays:

- Total Products
- Low Stock Products
- Out of Stock Products
- Inventory Summary

These metrics rely on:

- current_stock
- minimum_stock
- status

---

## Products Module

The Products module requires:

- Product Name
- SKU
- Barcode
- Category
- Supplier
- Purchase Price
- Selling Price
- Unit
- Status
- Product Image

---

## Inventory Module

Inventory operations require:

- Current Stock
- Minimum Stock
- Product Status

Inventory history is managed separately through Inventory Movements.

---

## Reports Module

Reports aggregate information using:

- Category
- Supplier
- Stock
- Product Status
- Pricing

No additional reporting fields are required.

---

# 4. Column Review

| Column | Status | Reason |
|----------|--------|--------|
| id | Keep | Primary key |
| uuid | Add | Public identifier |
| category_id | Keep | Product classification |
| supplier_id | Keep | Product supplier |
| sku | Keep | Unique inventory identifier |
| barcode | Keep | Supports barcode search (nullable) |
| name | Keep | Product name |
| description | Keep | Product description |
| unit | Keep | Inventory measurement unit |
| purchase_price | Keep | Inventory cost |
| selling_price | Keep | Selling reference price |
| current_stock | Keep | Current available stock |
| minimum_stock | Keep | Low stock threshold |
| image | Keep | Product image path |
| status | Keep | Product availability |
| created_at | Keep | Audit information |
| updated_at | Keep | Audit information |
| deleted_at | Keep | Soft delete support |

---

## Excluded Columns

The following attributes are intentionally excluded from the MVP.

| Column | Reason |
|----------|--------|
| expiration_date | Batch management not implemented |
| batch_number | Outside MVP scope |
| manufacturer | Supplier already represents procurement source |
| weight | Not required |
| dimensions | Not required |
| storage_temperature | Future healthcare enhancement |
| qr_code | Barcode already supported |

---

# 5. Final Table Structure

```
id
uuid
category_id
supplier_id
sku
barcode
name
description
unit
purchase_price
selling_price
current_stock
minimum_stock
image
status
created_at
updated_at
deleted_at
```

---

# 6. Business Rules

The following business rules apply.

- Every product must belong to one category.
- Every product must belong to one supplier.
- SKU must be unique.
- Barcode is optional but must be unique when provided.
- Current stock cannot be negative.
- Minimum stock cannot be negative.
- Selling price must not be lower than purchase price.
- Product images store only the file path.
- Soft deleted products must remain referenced by historical inventory movements.

---

# 7. Architecture Decisions

## Product as the Central Entity

Products act as the primary business entity for inventory management.

Categories, Suppliers, Inventory Movements, Dashboard metrics, and Reports all reference this table.

---

## Current Stock Strategy

Current stock is stored directly in the Products table.

This enables:

- Faster dashboard queries
- Faster inventory lookups
- Simpler CRUD implementation
- Reduced aggregation cost

Historical inventory data remains in Inventory Movements.

---

## UUID Strategy

Products include both an integer primary key and a UUID.

The integer key is optimized for database performance, while the UUID is intended for public-facing URLs and future API integration.

---

## Soft Delete Strategy

Products use Soft Deletes.

Historical inventory movements must remain valid even after a product is archived.

---

## Pricing Strategy

Both purchase price and selling price are stored.

Purchase price supports inventory valuation.

Selling price supports future sales module integration without requiring database changes.

---

# 8. Future Considerations

Future versions of Pharmora may extend this table with:

- Batch Number
- Expiration Date
- Manufacturer
- Product Brand
- Product Weight
- Product Dimensions
- Storage Temperature
- QR Code
- Product Variants
- Multiple Units of Measure

These enhancements can be introduced without altering the current business structure.

---

# 9. Approval

The Products table has been reviewed against the Product Requirement Document, Business Flow, User Flow, and all approved high-fidelity interface designs.

The structure defined in this document is approved as the official Products table for Pharmora MVP Version 1.0.

The table provides a clean, scalable, and maintainable foundation for inventory management while remaining aligned with Laravel best practices and enterprise database design principles.