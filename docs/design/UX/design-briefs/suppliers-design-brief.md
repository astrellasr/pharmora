# Suppliers Design Brief

## Document Information

| Item | Value |
|------|--------|
| Project | Pharmora |
| Module | Suppliers |
| Document | Design Brief |
| Version | 1.0 |
| Status | Final |
| Priority | 🟡 Medium |
| Last Updated | July 2026 |

---

# 1. Overview

## Purpose

The Suppliers module enables users to manage supplier information, monitor supplier performance, and maintain relationships with trusted vendors that provide inventory for the healthcare business.

This screen should provide a clean, organized, and professional supplier management experience while maintaining complete visual consistency with the Dashboard, Products, and Categories modules.

---

# 2. Design Objectives

The Suppliers screen should:

- Maintain consistency with the Pharmora Design System.
- Present supplier information clearly.
- Simplify supplier management.
- Support fast CRUD operations.
- Highlight supplier performance.
- Create a premium enterprise SaaS experience.

---

# 3. Target Users

Primary Users

- Inventory Administrator
- Purchasing Staff
- Pharmacy Manager
- Store Owner

---

# 4. User Goals

Users should be able to:

- View all suppliers.
- Search suppliers quickly.
- Monitor supplier status.
- Review supplier reliability.
- Create new suppliers.
- Edit supplier information.
- Remove inactive suppliers.
- Access supplier contact information easily.

---

# 5. Screen Hierarchy

The page should follow this hierarchy.

```
Header

↓

Supplier KPI Cards

↓

Toolbar

↓

Suppliers Table

↓

Supplier Analytics
```

The Suppliers Table should remain the primary visual focus.

---

# 6. Layout

Desktop

1440 px

12-column Grid

80 px Margin

24 px Gutter

Follow the official Pharmora Layout & Grid System.

---

# 7. Header

Contains

- Page Title
- Description
- Breadcrumb
- Add Supplier Button

Title

Suppliers

Description

Manage trusted suppliers and maintain accurate vendor information for your healthcare inventory.

---

# 8. Statistics Cards

Display four KPI cards.

Recommended Metrics

- Total Suppliers
- Active Suppliers
- Trusted Suppliers
- Pending Verification

Reuse the exact KPI Card component from Dashboard, Products, and Categories.

Do not redesign.

---

# 9. Toolbar

Contains

- Search
- Status Filter
- Sort
- Export
- Refresh

Search Placeholder

Search supplier name...

Toolbar should remain lightweight and minimal.

---

# 10. Suppliers Table

The table is the primary content.

Recommended Columns

- Supplier
- Contact Person
- Contact Information
- Products
- Status
- Reliability
- Updated
- Actions

Each row should contain

- Company logo placeholder
- Supplier name
- Contact person
- Phone or email
- Product count
- Status badge
- Reliability badge
- Three-dot action menu

Rows should feel spacious, organized, and easy to scan.

---

# 11. Supplier Status

Supported Status

- Active
- Pending
- Inactive

Badges should remain subtle and consistent with the Pharmora Design System.

---

# 12. Supplier Reliability

Display supplier quality using simple badges.

Recommended Levels

- Excellent
- Good
- Average
- New

Avoid star ratings.

Use semantic badge colors.

---

# 13. Analytics Section

Display two analytics cards.

## Supplier Distribution

Visualize supplier contribution by product volume using horizontal progress bars.

Example

- Medica Pharma
- Global Medical
- BioHealth
- Pharma Plus

---

## Supplier Insights

Provide operational recommendations.

Examples

- Supplier performance improving.
- Consider verifying new suppliers.
- Reduce dependency on a single supplier.
- Review inactive suppliers.

Use a minimal recommendation card similar to Categories.

---

# 14. Empty State

Display

Headline

No Suppliers Found

Description

Add your first supplier to start managing inventory vendors more efficiently.

Primary Button

Add Supplier

---

# 15. Loading State

Display

- Skeleton KPI Cards
- Skeleton Toolbar
- Skeleton Table
- Skeleton Analytics

Avoid layout shifting.

---

# 16. Error State

Display

- Error Illustration
- Error Message
- Retry Button

---

# 17. Success State

Display toast notifications.

Examples

- Supplier created successfully.
- Supplier updated successfully.
- Supplier deleted successfully.

---

# 18. Accessibility

Support

- Keyboard Navigation
- Logical Focus Order
- WCAG Color Contrast
- Screen Reader Compatibility
- Accessible Tables
- Accessible Forms

---

# 19. Responsive Behaviour

Desktop

- Expanded Sidebar
- Four KPI Cards
- Full-width Table
- Side-by-side Analytics

Laptop

- Adaptive Grid

Tablet

- Two-column KPI Cards
- Horizontal Table Scroll

Mobile

- Single-column Layout
- Card-based Supplier List
- Floating Add Button

---

# 20. Visual Style

The Suppliers screen must strictly follow the Pharmora Brand Guidelines.

Design Language

- Enterprise SaaS
- Healthcare
- Swiss Grid
- Editorial
- Minimal
- Professional
- Spacious
- Modern

Inspired by

- Stripe Dashboard
- Linear
- Notion
- Figma
- Attio
- Vercel Dashboard

---

# 21. Design Constraints

Do NOT

- Redesign Sidebar
- Redesign Header
- Introduce new colors
- Introduce new typography
- Change spacing rules
- Use gradients
- Use glassmorphism
- Use neumorphism
- Add decorative illustrations
- Change component radius

Reuse all existing Pharmora UI components.

---

# 22. Micro Interactions

Include

- Button Hover
- Table Row Hover
- Dropdown Animation
- Badge Hover
- Toast Notification
- Loading Skeleton

Animations should remain subtle and professional.

---

# 23. Relationship to Other Modules

The Suppliers screen should feel like a natural continuation of:

- Dashboard
- Products
- Categories

All modules must appear to belong to one unified enterprise platform.

---

# 24. Future Enhancements

Potential improvements include

- Supplier Rating History
- Purchase Order Integration
- Delivery Performance Tracking
- Supplier Contracts
- Payment History
- AI Supplier Recommendation
- Multi-Branch Supplier Management

---

# 25. Success Criteria

The design is considered successful when

- It follows the Pharmora Design System.
- It maintains complete consistency with previous modules.
- Supplier information is easy to scan.
- CRUD actions are immediately discoverable.
- Analytics provide meaningful insights.
- The interface feels premium, clean, and production-ready.

---

# 26. Definition of Done

The Suppliers Design Brief is complete when

- Business requirements are documented.
- Layout hierarchy is defined.
- Visual direction is documented.
- Responsive behaviour is specified.
- Accessibility requirements are included.
- Ready for High-Fidelity Design.