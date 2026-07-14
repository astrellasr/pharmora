# Categories List

## Document Information

| Item | Value |
|------|--------|
| Project | Pharmora |
| Module | Categories |
| Screen | Categories List |
| Version | 1.0 |
| Status | Final |
| Priority | 🟡 Medium |
| Last Updated | July 2026 |

---

# 1. Overview

## Purpose

The Categories List screen enables users to organize products into structured categories, making inventory management more efficient and improving product classification throughout the system.

Categories serve as a foundational data entity used across Products, Inventory, Reports, and Analytics.

---

## Business Goals

The Categories module is designed to:

- Organize inventory into logical groups.
- Improve product discoverability.
- Simplify inventory reporting.
- Standardize product classification.
- Reduce duplicate category creation.

---

## Target Users

- Inventory Administrator
- Pharmacy Staff
- Store Manager

---

# 2. User Goals

Users should be able to:

- View all categories.
- Search categories quickly.
- Filter category records.
- Add new categories.
- Edit existing categories.
- Delete unused categories.
- View product counts for each category.

---

# 3. Navigation

Accessible From

- Sidebar Navigation
- Dashboard Quick Actions

Navigate To

- Create Category
- Edit Category
- Products
- Dashboard

---

# 4. Permissions

| User Role | Access |
|------------|--------|
| Administrator | Full Access |
| Inventory Staff | View, Create, Edit |
| Store Manager | View Only |

---

# 5. Layout Structure

```
Top Navigation

Sidebar

Page Header

Statistics Cards

Search & Filter Toolbar

Categories Data Table

Pagination

Footer (Optional)
```

---

# 6. Screen Components

## Header

Contains:

- Page Title
- Breadcrumb
- Add Category Button

---

## Statistics Cards

Display category insights.

Cards:

- Total Categories
- Active Categories
- Categories With Products
- Empty Categories

---

## Search Toolbar

Includes:

- Search Input
- Sort Dropdown
- Filter Dropdown
- Refresh Button

---

## Categories Table

Columns

- Category Name
- Description
- Total Products
- Status
- Created Date
- Last Updated
- Actions

---

## Actions

Available actions:

- View
- Edit
- Delete

---

## Pagination

Supports:

- Previous Page
- Next Page
- Page Numbers
- Total Records

---

# 7. Data Sources

| Widget | Source |
|---------|--------|
| Statistics Cards | Categories |
| Categories Table | Categories |
| Product Count | Products |
| Search | Categories |

---

# 8. UI Components

The Categories screen uses the following shared UI components.

- Sidebar
- Header
- Breadcrumb
- Cards
- Buttons
- Search Field
- Dropdown
- Table
- Badges
- Pagination
- Modal
- Toast Notification

---

# 9. Empty State

When no categories exist:

Display:

- Empty Illustration
- "No Categories Found"
- Description
- Add Category Button

---

# 10. Loading State

While loading category data:

Display:

- Skeleton Cards
- Skeleton Table
- Skeleton Toolbar

Avoid layout shifts.

---

# 11. Error State

If categories fail to load:

Display:

- Error Illustration
- Error Message
- Retry Button

Example:

"Unable to load categories."

---

# 12. Success State

Display toast notifications after successful actions.

Examples

- Category created successfully.
- Category updated successfully.
- Category deleted successfully.

---

# 13. Responsive Behavior

## Desktop

- Full sidebar
- 12-column layout
- Statistics cards in one row
- Full table

---

## Laptop

- Responsive spacing
- Adaptive table width

---

## Tablet

- Collapsible sidebar
- Two-column statistics cards
- Horizontal table scrolling

---

## Mobile

- Single-column layout
- Card-based category list
- Floating Add Button
- Bottom spacing optimization

---

# 14. Accessibility

Requirements

- Keyboard navigation
- Visible focus states
- Accessible table navigation
- Screen reader support
- Sufficient color contrast

---

# 15. Performance Requirements

The Categories screen should:

- Load within 2 seconds.
- Support pagination efficiently.
- Optimize large datasets.
- Minimize unnecessary requests.

---

# 16. Security Considerations

- Only authenticated users can access categories.
- Role-based permissions determine available actions.
- Prevent deletion of categories currently assigned to products.

---

# 17. Acceptance Criteria

The screen is complete when:

- Categories display correctly.
- Search functions properly.
- Filters work as expected.
- Pagination operates correctly.
- CRUD actions are accessible.
- Statistics display accurate values.
- Responsive layout functions across supported devices.
- Empty, loading, error, and success states are implemented.

---

# 18. Future Enhancements

Potential improvements include:

- Category icons
- Category color labels
- Nested categories
- Drag-and-drop category ordering
- AI category suggestions
- Usage analytics
- Bulk category management

---

# 19. Design References

This screen follows the official Pharmora Design System.

Related Documentation

- UI Planning Document
- Screen Inventory
- Design System
- Layout & Grid System
- Core UI Components
- Products List
- Dashboard Overview

---

# 20. Definition of Done

The Categories List screen is complete when:

- Functional requirements have been implemented.
- UI follows the Pharmora Design System.
- Responsive behavior is verified.
- Accessibility requirements are met.
- Performance targets are achieved.
- User acceptance testing is completed.
- Documentation is updated.