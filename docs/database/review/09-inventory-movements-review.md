# 📄 Inventory Movements Table Review

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

The **Inventory Movements** table records every inventory activity performed within Pharmora.

Unlike the Products table, which stores the latest inventory state, Inventory Movements preserve the complete operational history of stock changes.

Each record represents a single inventory event and forms the application's audit trail.

This table is one of the most critical components of the system because it supports inventory tracking, dashboard analytics, reporting, and accountability.

---

# 2. Business Responsibility

The Inventory Movements table is responsible for recording every stock movement performed by an authenticated administrator.

Its responsibilities include:

- Stock In
- Stock Out
- Stock Adjustment
- Inventory History
- Activity Timeline
- Audit Trail

Unlike the Products table, Inventory Movements never represent the current inventory state.

Instead, they preserve historical records that should remain unchanged once created.

---

# 3. UI & Feature Analysis

The Inventory Movements table was reviewed against every interface that requires historical inventory data.

## Dashboard

Dashboard widgets consume movement history to display:

- Recent Activity
- Monthly Stock Movement
- Inventory Trends

---

## Inventory Module

The Inventory module requires:

- Stock In
- Stock Out
- Movement History
- Quantity Changed
- Timestamp
- Administrator

---

## Product Detail

Each product displays its inventory history.

Required information:

- Movement Type
- Quantity
- Previous Stock
- Current Stock
- Notes
- Created Date

---

## Reports

Inventory reports aggregate movement data to calculate:

- Total Stock In
- Total Stock Out
- Inventory Trends
- Product Activity

No dedicated reporting table is required because reports are generated dynamically from Inventory Movements.

---

# 4. Column Review

| Column | Status | Reason |
|----------|--------|--------|
| id | Keep | Primary key |
| uuid | Add | Public identifier |
| product_id | Keep | References product |
| user_id | Keep | Records administrator |
| movement_type | Keep | Identifies inventory operation |
| quantity | Keep | Amount moved |
| stock_before | Keep | Inventory before movement |
| stock_after | Keep | Inventory after movement |
| notes | Keep | Optional explanation |
| created_at | Keep | Movement timestamp |

---

## Excluded Columns

The following fields were considered but intentionally excluded.

| Column | Reason |
|----------|--------|
| updated_at | Historical records should not change |
| deleted_at | Inventory history must remain immutable |
| status | Derived from movement_type |
| supplier_id | Already available through Product relationship |
| category_id | Already available through Product relationship |

---

# 5. Final Table Structure

```
id
uuid
product_id
user_id
movement_type
quantity
stock_before
stock_after
notes
created_at
```

---

# 6. Business Rules

The following rules apply.

- Every movement belongs to one product.
- Every movement is performed by one authenticated user.
- Quantity must always be greater than zero.
- stock_before represents the inventory quantity before the operation.
- stock_after represents the inventory quantity immediately after the operation.
- Historical records cannot be edited.
- Historical records cannot be deleted.
- Notes are optional.
- Every movement automatically updates the current_stock field within the Products table inside the same database transaction.

---

# 7. Architecture Decisions

## Immutable History

Inventory movements represent historical events.

Once created, they should never be updated or deleted.

This preserves an accurate audit trail.

---

## Movement Types

The approved movement types are:

```
stock_in
stock_out
adjustment
```

Additional movement types may be introduced without requiring structural database changes.

---

## Current Stock Strategy

Current inventory is stored within the Products table.

Inventory Movements only record history.

This approach provides:

- Faster dashboard queries
- Faster inventory lookup
- Simpler reporting
- Better application performance

---

## Audit Trail

Every inventory operation records:

- Who performed the action
- Which product changed
- Previous stock
- New stock
- Quantity changed
- Timestamp

This supports traceability and future auditing requirements.

---

# 8. Future Considerations

Future versions of Pharmora may introduce additional movement types such as:

- Damaged Stock
- Expired Stock
- Returned Stock
- Stock Transfer
- Purchase Receipt
- Sales Shipment

Because movement_type is independent of the table structure, these additions can be implemented without redesigning the database.

Future enhancements may also include:

- Attachment support
- Approval workflow
- Reason codes
- Reference documents
- Purchase Order integration

---

# 9. Approval

The Inventory Movements table has been reviewed against the Product Requirement Document, Business Flow, User Flow, and all approved high-fidelity interface designs.

The approved structure establishes Inventory Movements as the official audit trail for Pharmora MVP Version 1.0.

Current inventory quantities remain stored within the Products table, while Inventory Movements preserve the complete historical record of every inventory operation.

This architecture balances performance, maintainability, and long-term scalability while remaining aligned with enterprise inventory management practices.