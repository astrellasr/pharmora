# Products List Wireframe

## Document Information

| Item | Value |
|------|--------|
| Project | Pharmora |
| Module | Products |
| Document | Products List Wireframe |
| Version | 1.0 |
| Status | Final |
| Priority | 🔴 High |
| Last Updated | July 2026 |

---

# 1. Overview

## Purpose

This document defines the low-fidelity wireframe specification for the Products List screen.

The objective is to establish layout hierarchy, navigation flow, content placement, and interaction patterns before visual design begins.

This document intentionally excludes branding, colors, typography, shadows, and other visual styling.

---

# 2. Wireframe Goals

The Products List should:

- Prioritize product discoverability.
- Enable fast product search.
- Support efficient inventory management.
- Simplify bulk operations.
- Reduce user clicks.
- Maintain consistency with the Pharmora Design System.

---

# 3. Layout Structure

```
┌──────────────────────────────────────────────────────────────────────────┐
│                         Top Navigation                                   │
├───────────────┬──────────────────────────────────────────────────────────┤
│               │                                                          │
│               │ Page Header                                              │
│ Sidebar       │                                                          │
│               ├──────────────────────────────────────────────────────────┤
│               │ Search + Filters + Add Product                           │
│               ├──────────────────────────────────────────────────────────┤
│               │ Statistics Cards                                         │
│               ├──────────────────────────────────────────────────────────┤
│               │                                                          │
│               │ Products Table                                           │
│               │                                                          │
│               ├──────────────────────────────────────────────────────────┤
│               │ Pagination                                               │
│               │                                                          │
└───────────────┴──────────────────────────────────────────────────────────┘
```

---

# 4. Information Hierarchy

Priority order:

1. Page Header
2. Search
3. Filters
4. Add Product
5. Statistics Cards
6. Products Table
7. Pagination

The search and Add Product button should always remain visible above the table.

---

# 5. Screen Sections

## Header

Contains:

- Page Title
- Breadcrumb
- Short Description

---

## Search Section

Contains:

- Search Field
- Search Icon

Supports searching by:

- Product Name
- SKU
- Barcode

Real-time search is recommended.

---

## Filter Section

Contains dropdown filters for:

- Category
- Supplier
- Status
- Availability

Optional

- Expiry
- Stock Level

---

## Primary Action

One primary button:

**Add Product**

Position:

Top-right.

---

## Statistics Cards

Recommended:

4 Cards

Display:

- Total Products
- Low Stock
- Out of Stock
- Categories

Cards should appear in a single horizontal row on desktop.

---

## Products Table

Recommended Columns

- Product
- SKU
- Category
- Supplier
- Stock
- Unit Price
- Status
- Last Updated
- Actions

Maximum:

10 rows per page.

---

## Row Actions

Each row should include:

- View
- Edit
- Delete

Use compact action buttons.

---

## Bulk Actions

Available after selecting rows.

Examples:

- Delete
- Export
- Update Category
- Update Supplier

---

## Pagination

Contains:

- Previous
- Next
- Page Numbers
- Items Per Page

Display total records.

---

# 6. Grid Specification

Desktop

- 12 Columns
- 24 px Gutters
- 80 px Outer Margin

Tablet

- 8 Columns

Mobile

- 4 Columns

---

# 7. Spacing Rules

Outer Margin

80 px

Section Gap

32 px

Card Gap

24 px

Table Padding

24 px

Filter Gap

16 px

Button Gap

16 px

---

# 8. Responsive Layout

## Desktop

Expanded Sidebar

Full Table

Statistics in one row

---

## Laptop

Responsive Table

Compact Filters

---

## Tablet

Collapsible Sidebar

Horizontal Table Scroll

Two-column Statistics

---

## Mobile

Cards replace table.

Floating Add Product button.

Filters collapse into a bottom sheet.

---

# 9. User Interaction

Primary Actions

- Search Product
- Add Product
- View Product

Secondary Actions

- Edit Product
- Delete Product
- Export Data

---

# 10. Empty State

Display:

- Empty Illustration
- Title
- Description
- Add Product Button

Example:

"No products found."

---

# 11. Loading State

Display:

- Skeleton Statistics
- Skeleton Search
- Skeleton Filters
- Skeleton Table

Avoid layout shifting.

---

# 12. Error State

Display:

- Error Illustration
- Error Message
- Retry Button

Example:

"Unable to load product data."

---

# 13. Accessibility

The wireframe should support:

- Keyboard Navigation
- Accessible Tables
- Screen Reader Labels
- Focus Indicators
- Logical Tab Order

---

# 14. Design Constraints

The wireframe must:

- Remain grayscale.
- Exclude branding.
- Exclude colors.
- Exclude shadows.
- Exclude gradients.
- Exclude illustrations.
- Focus entirely on layout and hierarchy.

---

# 15. Deliverables

The Products List Wireframe should include:

Desktop Layout

Tablet Layout

Mobile Layout

Each version should demonstrate:

- Product Search
- Filter Area
- Statistics
- Table Layout
- Pagination
- Responsive Adaptation

---

# 16. Handoff Checklist

Before High-Fidelity Design:

- Layout approved
- Product table approved
- Filters approved
- Search approved
- Responsive behavior approved
- UX validated

---

# 17. Related Documents

- Products List
- Dashboard Overview
- UI Planning Document
- Screen Inventory
- Design System
- Core UI Components
- Layout & Grid System

---

# 18. Definition of Done

The Products List Wireframe is complete when:

- Layout hierarchy is finalized.
- Search placement is validated.
- Filters are positioned correctly.
- Table structure is approved.
- Responsive layouts are defined.
- UX review has been completed.
- Ready for High-Fidelity Design.