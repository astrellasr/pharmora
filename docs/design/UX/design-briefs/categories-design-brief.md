# Categories Design Brief

## Document Information

| Item | Value |
|------|--------|
| Project | Pharmora |
| Module | Categories |
| Document | Design Brief |
| Version | 1.0 |
| Status | Final |
| Priority | 🟡 Medium |
| Last Updated | July 2026 |

---

# 1. Overview

## Purpose

The Categories module enables users to organize products into logical groups, creating a structured inventory system that improves navigation, reporting, and inventory management.

This screen should provide a clean, efficient, and intuitive management experience while maintaining visual consistency with the Dashboard and Products modules.

---

# 2. Design Objectives

The Categories screen should:

- Maintain consistency with the Pharmora Design System.
- Prioritize category management tasks.
- Reduce cognitive load.
- Support fast CRUD operations.
- Present information clearly.
- Feel modern, lightweight, and enterprise-ready.

---

# 3. Target Users

Primary Users

- Inventory Administrator
- Pharmacy Staff
- Store Manager

---

# 4. User Goals

Users should be able to:

- View all categories.
- Search categories instantly.
- Filter category records.
- Create new categories.
- Edit category information.
- Delete unused categories.
- Monitor category usage.

---

# 5. Screen Hierarchy

The screen should follow this hierarchy.

```
Header

↓

Statistics Cards

↓

Toolbar

↓

Categories Table

↓

Pagination
```

The Categories Table must remain the primary visual focus.

---

# 6. Layout

Desktop

1440 px

12-column Grid

80 px Margin

24 px Gutter

The layout must follow the official Pharmora Layout & Grid System.

---

# 7. Header

Contains

- Page Title
- Description
- Breadcrumb
- Add Category Button

Example

Title

Categories

Description

Organize and manage product categories used throughout the inventory system.

---

# 8. Statistics Cards

Display four KPI cards.

Recommended metrics

- Total Categories
- Active Categories
- Categories With Products
- Empty Categories

Cards must reuse the exact component from Dashboard and Products.

Do not redesign the KPI cards.

---

# 9. Toolbar

Contains

- Search
- Sort
- Status Filter
- Refresh
- Export

Search Placeholder

Search category name...

Toolbar should remain lightweight.

---

# 10. Categories Table

The table is the primary content.

Recommended Columns

- Category
- Description
- Products
- Status
- Created
- Updated
- Actions

Each row should contain:

- Category icon
- Category name
- Short description
- Product count
- Status badge
- Action menu

Rows should feel spacious and readable.

---

# 11. Status Badges

Recommended

- Active
- Inactive
- Empty

Badges should:

- Use subtle colors
- Be compact
- Follow the Design System
- Never dominate the interface

---

# 12. Empty State

Display

Headline

No Categories Found

Description

Start by creating your first product category to organize inventory more efficiently.

Primary Button

Add Category

---

# 13. Loading State

Display

- Skeleton Cards
- Skeleton Toolbar
- Skeleton Table

Avoid layout shifting.

---

# 14. Error State

Display

- Error Illustration
- Error Message
- Retry Button

---

# 15. Success State

Display toast notifications.

Examples

- Category created successfully.
- Category updated successfully.
- Category deleted successfully.

---

# 16. Accessibility

The screen should support

- Keyboard Navigation
- Logical Focus Order
- WCAG Color Contrast
- Screen Reader Compatibility
- Accessible Tables
- Accessible Buttons

---

# 17. Responsive Behaviour

Desktop

- Expanded Sidebar
- Four KPI Cards
- Full-width Table

Laptop

- Adaptive Grid

Tablet

- Two-column KPI Cards
- Horizontal Table Scroll

Mobile

- Card Layout
- Floating Add Button

---

# 18. Visual Style

The Categories screen must strictly follow the Pharmora Brand Guidelines.

Design Language

- Enterprise SaaS
- Healthcare
- Swiss Grid
- Editorial
- Minimal
- Spacious
- Professional

Inspired by

- Stripe Dashboard
- Linear
- Figma
- Notion
- Vercel Dashboard
- Attio

---

# 19. Design Constraints

Do NOT

- Redesign the Sidebar
- Redesign the Header
- Change the Grid
- Introduce new colors
- Introduce new typography
- Use gradients
- Use glassmorphism
- Use neumorphism
- Add decorative illustrations
- Change component radius
- Create inconsistent spacing

Reuse all components from the approved Design System.

---

# 20. Micro Interactions

Include

- Button Hover
- Row Hover
- Table Selection
- Dropdown Animation
- Toast Notification
- Loading Skeleton
- Empty State Transition

Animations should remain subtle.

---

# 21. Relationship to Other Modules

The Categories screen must feel like a natural continuation of:

- Dashboard
- Products

Users should perceive all modules as part of a single enterprise application.

---

# 22. Future Enhancements

Potential improvements include:

- Category Icons
- Nested Categories
- Drag-and-Drop Ordering
- Category Analytics
- AI Category Suggestions
- Bulk Category Management

---

# 23. Success Criteria

The design is considered successful when:

- It follows the Pharmora Design System.
- It feels visually identical to the Dashboard and Products modules.
- The Categories Table becomes the primary focus.
- CRUD actions are immediately discoverable.
- The interface feels calm, premium, and production-ready.
- Users can complete common tasks with minimal effort.

---

# 24. Definition of Done

The Categories Design Brief is complete when:

- Business requirements are documented.
- Layout hierarchy is defined.
- Interaction goals are defined.
- Visual direction is documented.
- Responsive behavior is specified.
- Accessibility requirements are included.
- Ready for High-Fidelity Design.