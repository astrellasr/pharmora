# Inventory Wireframe

## Document Information

| Item | Value |
|------|--------|
| Project | Pharmora |
| Module | Inventory |
| Document | Inventory Wireframe |
| Version | 1.0 |
| Status | Final |
| Priority | 🔴 High |
| Last Updated | July 2026 |

---

# 1. Overview

## Purpose

This document defines the low-fidelity wireframe specification for the Inventory Overview screen.

Its purpose is to establish layout hierarchy, content organization, navigation flow, and interaction patterns before high-fidelity interface design begins.

This document intentionally excludes branding, colors, typography, shadows, and visual styling.

---

# 2. Wireframe Goals

The Inventory wireframe should:

- Provide a clear overview of inventory status.
- Highlight stock conditions efficiently.
- Prioritize operational information.
- Reduce cognitive load.
- Maintain consistency with the Pharmora Design System.
- Support responsive layouts.

---

# 3. Layout Structure

```
┌────────────────────────────────────────────────────────────────────────────┐
│                          Top Navigation                                    │
├──────────────┬─────────────────────────────────────────────────────────────┤
│              │                                                             │
│              │ Page Header                                                 │
│              │                                                             │
│ Sidebar      ├─────────────────────────────────────────────────────────────┤
│              │ Statistics Cards                                            │
│              │                                                             │
│              ├─────────────────────────────────────────────────────────────┤
│              │ Search + Filter + Export                                    │
│              │                                                             │
│              ├─────────────────────────────────────────────────────────────┤
│              │                                                             │
│              │ Inventory Table                                             │
│              │                                                             │
│              ├─────────────────────────────────────────────────────────────┤
│              │ Pagination                                                  │
│              │                                                             │
└──────────────┴─────────────────────────────────────────────────────────────┘
```

---

# 4. Information Hierarchy

Priority order:

1. Page Header
2. Statistics Cards
3. Search & Filter Toolbar
4. Inventory Table
5. Pagination

The inventory table should remain the primary visual focus.

---

# 5. Screen Sections

## Header

Contains:

- Page Title
- Breadcrumb
- Export Inventory Button

---

## Sidebar

Contains navigation only.

No inventory metrics should appear inside the sidebar.

---

## Statistics Cards

Arrange horizontally.

Recommended number:

4 Cards

Examples:

- Total Inventory
- In Stock
- Low Stock
- Out of Stock

---

## Search Toolbar

Display:

- Search Field
- Category Filter
- Status Filter
- Sort Dropdown
- Refresh Button
- Export Button

Toolbar should remain on a single horizontal row on desktop.

---

## Inventory Table

Primary management area.

Columns:

- Product
- SKU
- Category
- Current Stock
- Minimum Stock
- Unit
- Status
- Last Updated
- Actions

Maximum visible rows before pagination:

10

---

## Row Actions

Each row should include:

- View Details
- View Product

Icons only.

Use tooltips where appropriate.

---

## Pagination

Display:

- Previous
- Page Numbers
- Next
- Items Per Page
- Total Records

---

# 6. Grid Specification

Desktop

- 12 Columns
- 24 px Gutter
- 80 px Margin

Tablet

- 8 Columns

Mobile

- 4 Columns

---

# 7. Spacing Rules

Outer Margin

80 px

Card Gap

24 px

Section Gap

32 px

Internal Padding

24 px

Table Row Height

64 px

---

# 8. Responsive Layout

## Desktop

Expanded Sidebar

Horizontal Statistics Cards

Full-width Inventory Table

---

## Laptop

Adaptive Grid

Responsive Toolbar

---

## Tablet

Collapsed Sidebar

Statistics Cards (2 Columns)

Horizontal Table Scroll

---

## Mobile

Single Column

Card-based Inventory List

Floating Filter Button

Bottom Navigation (Optional)

---

# 9. User Interaction

Primary Actions

- View Inventory Details
- Export Inventory

Secondary Actions

- Search
- Filter
- Sort
- Refresh

---

# 10. Empty State

If no inventory data exists:

Display:

- Empty Illustration
- "No Inventory Data"
- Supporting Description
- View Products Button

---

# 11. Loading State

Display:

- Skeleton Cards
- Skeleton Toolbar
- Skeleton Table

Prevent layout shifting during loading.

---

# 12. Error State

Display:

- Error Illustration
- Error Description
- Retry Button

---

# 13. Accessibility

The wireframe should support:

- Keyboard Navigation
- Logical Tab Order
- Accessible Table Navigation
- Consistent Focus Order
- Readable Layout Structure

---

# 14. Design Constraints

The wireframe must:

- Remain grayscale.
- Exclude branding.
- Exclude typography styling.
- Exclude colors.
- Exclude shadows.
- Exclude gradients.
- Focus only on layout and hierarchy.

---

# 15. Deliverables

The Inventory Wireframe should include:

- Desktop Layout
- Tablet Layout
- Mobile Layout

Each version should demonstrate:

- Navigation
- Information Hierarchy
- Toolbar Placement
- Table Structure
- Responsive Adaptation

---

# 16. Handoff Checklist

Before proceeding to High-Fidelity Design:

- Layout approved
- Table structure approved
- Toolbar placement approved
- Navigation approved
- Responsive behavior validated
- UX reviewed
- Stakeholder approval completed

---

# 17. Related Documents

- Inventory Overview
- Products List
- Dashboard Overview
- Reports Dashboard
- UI Planning Document
- Screen Inventory
- Design System
- Core UI Components
- Layout & Grid System

---

# 18. Definition of Done

The Inventory Wireframe is complete when:

- Information hierarchy is validated.
- Layout structure is finalized.
- Toolbar placement is approved.
- Table structure is approved.
- Responsive layout is verified.
- UX review has been completed.
- Ready for High-Fidelity Design.