# Dashboard Wireframe

## Document Information

| Item | Value |
|------|--------|
| Project | Pharmora |
| Module | Dashboard |
| Document | Dashboard Wireframe |
| Version | 1.0 |
| Status | Final |
| Priority | 🔴 High |
| Last Updated | July 2026 |

---

# 1. Overview

## Purpose

This document defines the low-fidelity wireframe specification for the Dashboard Overview screen.

The objective is to establish layout hierarchy, content placement, navigation flow, and user interaction before visual design begins.

This document intentionally excludes branding, colors, typography, and visual styling.

---

# 2. Wireframe Goals

The dashboard wireframe should:

- Prioritize information hierarchy.
- Reduce cognitive load.
- Provide quick access to critical information.
- Support responsive layouts.
- Maintain consistency with the Pharmora Design System.

---

# 3. Layout Structure

```
┌──────────────────────────────────────────────────────────────────────────┐
│                         Top Navigation                                   │
├───────────────┬──────────────────────────────────────────────────────────┤
│               │                                                          │
│               │ Welcome Card                                             │
│               │                                                          │
│ Sidebar       ├──────────────────────────────────────────────────────────┤
│               │ Statistics Cards                                         │
│               │                                                          │
│               ├──────────────────────────────────────────────────────────┤
│               │ Inventory Analytics Chart                               │
│               │                                                          │
│               ├───────────────────────────┬──────────────────────────────┤
│               │ Low Stock Alert           │ Recent Activities            │
│               │                           │                              │
│               ├───────────────────────────┴──────────────────────────────┤
│               │ Top Categories                                      │
│               ├──────────────────────────────────────────────────────────┤
│               │ Quick Actions                                           │
│               │                                                          │
└───────────────┴──────────────────────────────────────────────────────────┘
```

---

# 4. Information Hierarchy

Priority order:

1. Welcome Section
2. Business Statistics
3. Inventory Analytics
4. Low Stock Alert
5. Recent Activities
6. Top Categories
7. Quick Actions

The most critical information should always appear above the fold.

---

# 5. Screen Sections

## Header

Contains:

- Logo
- Search
- Notification
- User Menu

---

## Sidebar

Navigation only.

No business information should appear inside the sidebar.

---

## Welcome Card

Displays:

- Greeting
- User Name
- Current Date
- Dashboard Description

---

## Statistics Cards

Arrange horizontally.

Recommended number:

6 Cards

Examples:

- Products
- Categories
- Suppliers
- Inventory
- Low Stock
- Out of Stock

---

## Analytics Section

Large visualization area.

Recommended width:

100%

Preferred chart:

Line Chart

Alternative:

Bar Chart

---

## Low Stock

Medium-sized table.

Maximum:

5 rows

Include:

- Product
- Stock
- Status

---

## Recent Activities

Timeline layout.

Maximum:

8 activities

Show:

- Icon
- Action
- Timestamp

---

## Top Categories

Horizontal chart.

Maximum:

5 categories.

---

## Quick Actions

Action buttons.

Display:

- Add Product
- Update Inventory
- View Reports
- Manage Suppliers

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

---

# 8. Responsive Layout

## Desktop

Sidebar Expanded

Charts Side-by-Side

---

## Laptop

Responsive Sidebar

Adaptive Grid

---

## Tablet

Collapsed Sidebar

Cards Stack

Charts Resize

---

## Mobile

Single Column

Horizontal Scroll for Tables

Bottom Navigation (Optional)

---

# 9. User Interaction

Primary Actions

- View Products
- Update Inventory
- Export Report

Secondary Actions

- View Category
- Open Supplier
- Profile

---

# 10. Empty State

If no data exists:

Display:

- Empty Illustration
- Description
- Primary Action Button

---

# 11. Loading State

Display:

- Skeleton Cards
- Skeleton Chart
- Skeleton Table

No layout shifting.

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
- Readable Layout
- Consistent Focus Order

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

The Dashboard Wireframe should include:

- Desktop Layout
- Tablet Layout
- Mobile Layout

Each version should demonstrate:

- Navigation
- Content Hierarchy
- Widget Placement
- Responsive Adaptation

---

# 16. Handoff Checklist

Before proceeding to High-Fidelity Design:

- Layout approved
- Widget placement approved
- Navigation approved
- Responsive behavior validated
- UX reviewed
- Stakeholder approval completed

---

# 17. Related Documents

- Dashboard Overview
- UI Planning Document
- Screen Inventory
- Design System
- Core UI Components
- Layout & Grid System

---

# 18. Definition of Done

The Dashboard Wireframe is complete when:

- Information hierarchy is validated.
- Layout structure is finalized.
- Responsive layout is approved.
- All dashboard widgets are positioned.
- UX review has been completed.
- Ready for High-Fidelity Design.