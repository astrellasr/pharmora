# Suppliers Wireframe

## Document Information

| Item | Value |
|------|--------|
| Project | Pharmora |
| Module | Suppliers |
| Document | Suppliers Wireframe |
| Version | 1.0 |
| Status | Final |
| Priority | 🟡 Medium |
| Last Updated | July 2026 |

---

# 1. Overview

## Purpose

This document defines the low-fidelity wireframe specification for the Suppliers List screen.

Its purpose is to establish layout hierarchy, navigation flow, information placement, and interaction patterns before high-fidelity interface design begins.

This document intentionally excludes branding, typography, colors, shadows, and visual styling.

---

# 2. Wireframe Goals

The Suppliers wireframe should:

- Present supplier information clearly.
- Support efficient supplier management.
- Minimize cognitive load.
- Prioritize frequently used actions.
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
│              │ Search + Filter + Add Supplier                              │
│              │                                                             │
│              ├─────────────────────────────────────────────────────────────┤
│              │                                                             │
│              │ Suppliers Table                                             │
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
4. Suppliers Table
5. Pagination

The primary management interface should remain visible above the fold whenever possible.

---

# 5. Screen Sections

## Header

Contains:

- Page Title
- Breadcrumb
- Add Supplier Button

---

## Sidebar

Contains only navigation.

Business information should never appear inside the sidebar.

---

## Statistics Cards

Arrange horizontally.

Recommended number:

4 Cards

Examples:

- Total Suppliers
- Active Suppliers
- Inactive Suppliers
- Products Linked

---

## Search Toolbar

Display:

- Search Field
- Filter Dropdown
- Sort Dropdown
- Refresh Button
- Add Supplier Button

Toolbar actions should remain on a single row on desktop.

---

## Suppliers Table

Primary management area.

Columns:

- Supplier
- Contact Person
- Email
- Phone
- Products
- Status
- Last Updated
- Actions

Maximum visible rows before pagination:

10

---

## Row Actions

Each row should include:

- View
- Edit
- Delete

Icons only.

Tooltips should appear on hover.

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

Full-width Table

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

Card-based Supplier List

Floating Add Supplier Button

Bottom Navigation (Optional)

---

# 9. User Interaction

Primary Actions

- Add Supplier
- Edit Supplier
- Delete Supplier

Secondary Actions

- Search
- Filter
- Sort
- Refresh

---

# 10. Empty State

If no suppliers exist:

Display:

- Empty Illustration
- "No Suppliers Found"
- Supporting Description
- Add Supplier Button

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

The Suppliers Wireframe should include:

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

- Suppliers List
- Products List
- Categories List
- Dashboard Overview
- UI Planning Document
- Screen Inventory
- Design System
- Core UI Components
- Layout & Grid System

---

# 18. Definition of Done

The Suppliers Wireframe is complete when:

- Information hierarchy is validated.
- Layout structure is finalized.
- Toolbar placement is approved.
- Table structure is approved.
- Responsive layout is verified.
- UX review has been completed.
- Ready for High-Fidelity Design.