# Categories Wireframe

## Document Information

| Item | Value |
|------|--------|
| Project | Pharmora |
| Module | Categories |
| Document | Categories Wireframe |
| Version | 1.0 |
| Status | Final |
| Priority | 🟡 Medium |
| Last Updated | July 2026 |

---

# 1. Overview

## Purpose

This document defines the low-fidelity wireframe specification for the Categories List screen.

Its purpose is to establish layout hierarchy, content organization, navigation flow, and interaction patterns before high-fidelity UI design begins.

This document intentionally excludes branding, colors, typography, and visual styling.

---

# 2. Wireframe Goals

The Categories wireframe should:

- Present category information clearly.
- Support efficient category management.
- Maintain visual consistency with the Pharmora Design System.
- Reduce cognitive load.
- Prioritize common management actions.
- Scale effectively across responsive layouts.

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
│              │ Search + Filter + Add Category                              │
│              │                                                             │
│              ├─────────────────────────────────────────────────────────────┤
│              │                                                             │
│              │ Categories Table                                            │
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
4. Categories Table
5. Pagination

The primary management interface should remain above the fold whenever possible.

---

# 5. Screen Sections

## Header

Contains:

- Page Title
- Breadcrumb
- Add Category Button

---

## Sidebar

Contains only navigation.

No statistics or category information should appear in the sidebar.

---

## Statistics Cards

Arrange horizontally.

Recommended number:

4 Cards

Examples:

- Total Categories
- Active Categories
- Categories With Products
- Empty Categories

---

## Search Toolbar

Display:

- Search Field
- Sort Dropdown
- Filter Dropdown
- Refresh Button
- Add Category Button

Toolbar actions should appear on a single horizontal row on desktop.

---

## Categories Table

Primary management area.

Columns:

- Category
- Description
- Total Products
- Status
- Created
- Updated
- Actions

Maximum visible rows before pagination:

10

---

## Actions

Each row should include:

- View
- Edit
- Delete

Icons only.

Use tooltips when necessary.

---

## Pagination

Display:

- Previous
- Page Numbers
- Next
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

Full Table

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

Stacked Cards

Card-based Category List

Floating Add Button

Bottom Navigation (Optional)

---

# 9. User Interaction

Primary Actions

- Create Category
- Edit Category
- Delete Category

Secondary Actions

- Search
- Filter
- Sort
- Refresh

---

# 10. Empty State

If no categories exist:

Display:

- Empty Illustration
- "No Categories Found"
- Supporting Description
- Add Category Button

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

The Categories Wireframe should include:

- Desktop Layout
- Tablet Layout
- Mobile Layout

Each version should demonstrate:

- Navigation
- Information Hierarchy
- Table Layout
- Toolbar Placement
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

- Categories List
- Products List
- Dashboard Overview
- UI Planning Document
- Screen Inventory
- Design System
- Core UI Components
- Layout & Grid System

---

# 18. Definition of Done

The Categories Wireframe is complete when:

- Information hierarchy is validated.
- Layout structure is finalized.
- Toolbar placement is approved.
- Table structure is approved.
- Responsive layout is verified.
- UX review has been completed.
- Ready for High-Fidelity Design.