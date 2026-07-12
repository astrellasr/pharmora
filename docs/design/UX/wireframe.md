# 📄 Wireframe

> **Version:** 1.0  
> **Status:** Final  
> **Document Type:** Wireframe  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Design Principles](#2-design-principles)
- [3. Layout Structure](#3-layout-structure)
- [4. Global Components](#4-global-components)
- [5. Screen Wireframes](#5-screen-wireframes)
  - [Login](#login)
  - [Dashboard](#dashboard)
  - [Products](#products)
  - [Categories](#categories)
  - [Suppliers](#suppliers)
  - [Stock In](#stock-in)
  - [Stock Out](#stock-out)
  - [Inventory History](#inventory-history)
  - [Profile](#profile)
- [6. Navigation Flow](#6-navigation-flow)
- [7. Responsive Considerations](#7-responsive-considerations)
- [8. Closing](#8-closing)

---

# 1. Purpose

This document defines the low-fidelity user interface structure of Pharmora.

Rather than focusing on visual styling, the wireframes describe the placement of interface components, page hierarchy, navigation flow, and user interactions throughout the application.

The objective is to establish a consistent layout before moving into high-fidelity UI design and implementation.

This document serves as a reference for:

- User interface planning.
- Page layout consistency.
- Component placement.
- User navigation.
- Laravel Blade implementation.
- Future UI refinement.

The wireframes included in this document represent the MVP scope of Pharmora and remain consistent with the Product Requirement Document, Information Architecture, and User Flow documentation.

---

# 2. Design Principles

The wireframes are designed around modern enterprise SaaS principles.

## Simplicity

Every screen focuses on one primary objective.

Unnecessary visual elements are intentionally removed to reduce cognitive load.

---

## Consistency

All pages follow the same structural layout, navigation pattern, spacing, and interaction model.

Users should feel familiar with every screen after learning one module.

---

## Clarity

Information is presented using a clear visual hierarchy.

Important actions receive greater emphasis while secondary information remains accessible without creating visual clutter.

---

## Efficiency

Frequently used actions should be reachable within a minimal number of interactions.

The interface prioritizes productivity for daily inventory management tasks.

---

## Scalability

Layouts are designed to accommodate future modules without requiring major structural changes.

---

# 3. Layout Structure

Every authenticated page follows the same layout structure.

```text
+------------------------------------------------------------------+
| Sidebar | Topbar                                                 |
|         |--------------------------------------------------------|
|         | Page Header                                            |
|         |--------------------------------------------------------|
|         |                                                        |
|         | Main Content                                           |
|         |                                                        |
|         |                                                        |
+------------------------------------------------------------------+
```

The layout is divided into four primary regions.

| Area | Purpose |
|------|---------|
| Sidebar | Main application navigation. |
| Topbar | User information and quick actions. |
| Page Header | Page title and primary actions. |
| Main Content | Displays the core functionality of each module. |

Maintaining this layout across every screen improves usability, reduces learning time, and creates a consistent user experience throughout the application.

---

# 4. Global Components

The following components establish a consistent interface throughout the Pharmora application.

Each component is designed to be reusable across multiple modules, ensuring a predictable user experience and reducing interface complexity.

---

## Sidebar

### Purpose

The Sidebar serves as the primary navigation menu for authenticated users.

It provides direct access to all core modules while maintaining a consistent navigation experience across the application.

### Structure

```text
+--------------------------+
| PHARMORA                 |
| Smart Inventory          |
|--------------------------|
| Dashboard                |
| Products                 |
| Categories               |
| Suppliers                |
| Inventory                |
|   ├─ Stock In            |
|   ├─ Stock Out           |
|   └─ History             |
|--------------------------|
| Profile                  |
+--------------------------+
```

### Design Notes

- Fixed on the left side.
- Visible on all authenticated pages.
- Clearly highlights the active menu.
- Uses simple icons with text labels.
- Supports future module expansion.

---

## Topbar

### Purpose

The Topbar provides contextual information and quick access to user-related actions.

### Structure

```text
+-------------------------------------------------------------+
| Dashboard                     🔔   Astrella ▼               |
+-------------------------------------------------------------+
```

### Design Notes

- Displays the current page title.
- Contains the authenticated user's profile.
- Provides access to profile settings and logout.
- Maintains a clean and minimal appearance.

---

## Page Header

### Purpose

The Page Header introduces the current module and presents its primary action.

### Structure

```text
Products

Manage and organize your inventory products.

                                   [+ Add Product]
```

### Design Notes

- Displays the page title.
- Includes a short supporting description.
- Places the primary action button on the right.
- Appears consistently across all modules.

---

## Cards

### Purpose

Cards present summarized information and key metrics.

### Structure

```text
+----------------------+
| Total Products       |
|                      |
|        245           |
+----------------------+
```

### Design Notes

- Used primarily on the Dashboard.
- Displays one key metric per card.
- Maintains consistent spacing and sizing.
- Uses subtle borders and rounded corners.

---

## Tables

### Purpose

Tables display structured business data such as products, categories, suppliers, and inventory transactions.

### Structure

```text
--------------------------------------------------------------
Name        Category      Supplier      Stock      Action
--------------------------------------------------------------
Paracetamol Medicine      ABC Pharma    120     Edit Delete
--------------------------------------------------------------
```

### Design Notes

- Supports sorting in future versions.
- Optimized for readability.
- Uses consistent row spacing.
- Includes action buttons within each row.

---

## Forms

### Purpose

Forms collect user input for creating and updating records.

### Structure

```text
Product Name

[________________________]

Category

[ Select Category ▼ ]

Supplier

[ Select Supplier ▼ ]

Stock

[________]

Minimum Stock

[________]

[ Cancel ]      [ Save ]
```

### Design Notes

- Labels appear above input fields.
- Required fields are clearly indicated.
- Validation messages appear below inputs.
- Uses consistent spacing between fields.

---

## Buttons

### Purpose

Buttons trigger user actions throughout the application.

### Button Types

| Button | Usage |
|---------|-------|
| Primary | Save, Add, Submit |
| Secondary | Cancel |
| Danger | Delete |
| Outline | Back, Close |

### Design Notes

- Primary actions receive the highest visual emphasis.
- Destructive actions require confirmation.
- Button styles remain consistent across all pages.

---

## Search

### Purpose

Search enables users to quickly locate records within large datasets.

### Structure

```text
🔍 Search products...
```

### Design Notes

- Positioned above data tables.
- Supports keyword-based searching.
- Updates displayed data efficiently.
- Available on all list pages.

---

## Filter

### Purpose

Filters help users narrow displayed records based on predefined criteria.

### Structure

```text
Category ▼

Supplier ▼

Apply Filter
```

### Design Notes

- Positioned beside the Search component.
- Supports multiple filtering criteria.
- Easily resettable for convenience.

---

## Pagination

### Purpose

Pagination improves usability when displaying large datasets.

### Structure

```text
< Previous

1   2   3   4

Next >
```

### Design Notes

- Displayed below every data table.
- Indicates the current active page.
- Keeps navigation simple and predictable.

---

## Toast Notification

### Purpose

Toast notifications provide immediate feedback after user actions.

### Examples

```text
✅ Product created successfully.

✅ Supplier updated successfully.

❌ Failed to save product.

⚠️ Stock quantity is insufficient.
```

### Design Notes

- Appears in the top-right corner.
- Automatically disappears after a few seconds.
- Uses different styles for success, warning, and error messages.
- Does not interrupt the user's workflow.

---

# 5. Screen Wireframes

## Login

### Purpose

The Login page authenticates the Inventory Administrator before granting access to the Pharmora dashboard.

This page is intentionally minimal to reduce distractions and provide a fast, secure sign-in experience.

### User Actions

- Enter email address.
- Enter password.
- Click **Sign In**.
- Receive validation feedback if authentication fails.

### Layout

```text
+--------------------------------------------------------------+
|                                                              |
|                      PHARMORA                                |
|              Smart Inventory. Seamless Operations.           |
|                                                              |
|                  Welcome Back                                |
|      Sign in to continue managing your inventory.            |
|                                                              |
|  Email                                                       |
|  [__________________________________________]                |
|                                                              |
|  Password                                                    |
|  [__________________________________________]                |
|                                                              |
|                 [ Sign In ]                                  |
|                                                              |
+--------------------------------------------------------------+
```

### Design Notes

- Minimal and distraction-free interface.
- Centered authentication card.
- Primary focus on the sign-in form.
- Responsive layout for desktop and tablet.

---

## Dashboard

### Purpose

The Dashboard provides a high-level overview of inventory operations and helps administrators quickly understand the current inventory status before performing daily tasks.

### User Actions

- Review inventory summary.
- Monitor low-stock products.
- View recent inventory activities.
- Navigate to operational modules.

### Layout

```text
+--------------------------------------------------------------------------------------+
| Sidebar | Dashboard                                             Astrella ▼           |
|---------|----------------------------------------------------------------------------|
|         | Dashboard                                                                  |
|         | Welcome back! Here's today's inventory overview.                           |
|         |                                                                            |
|         | +-----------+ +-----------+ +-----------+ +-----------+                    |
|         | | Products  | |Categories | |Suppliers | | TotalStock|                     |
|         | |    245    | |    18     | |    42    | |   5,320   |                     |
|         | +-----------+ +-----------+ +-----------+ +-----------+                    |
|         |                                                                            |
|         | Low Stock Products                                                         |
|         | ------------------------------------------------------                     |
|         | Product          Stock          Minimum                                    |
|         | ------------------------------------------------------                     |
|         | Amoxicillin         5               10                                     |
|         | Vitamin C           8               15                                     |
|         |                                                                            |
|         | Recent Inventory Activities                                                |
|         | ------------------------------------------------------                     |
|         | Product        Type        Quantity        Time                            |
|         | ------------------------------------------------------                     |
+--------------------------------------------------------------------------------------+
```

### Design Notes

- Summary cards appear at the top.
- Low-stock information receives visual priority.
- Recent activities provide operational context.
- Clean layout with generous whitespace.

---

## Products

### Purpose

The Products page allows administrators to manage all inventory products from a centralized location.

### User Actions

- View product list.
- Search products.
- Filter products.
- Create a product.
- Edit product information.
- Delete a product.

### Layout

```text
+--------------------------------------------------------------------------------------+
| Sidebar | Products                                              Astrella ▼           |
|---------|----------------------------------------------------------------------------|
|         | Products                                              [+ Add Product]      |
|         | Manage and organize inventory products.                                    |
|         |                                                                            |
|         | Search...          Category ▼          Supplier ▼                          |
|         | ----------------------------------------------------------------------     |
|         | Name        Category      Supplier      Stock      Action                  |
|         | ----------------------------------------------------------------------     |
|         | Paracetamol Medicine      ABC Pharma    120     Edit Delete                |
|         | Amoxicillin Medicine      Medica        65      Edit Delete                |
|         | Vitamin C   Supplement    Health Lab    40      Edit Delete                |
|         | ----------------------------------------------------------------------     |
|         |                     < Previous   1 2 3   Next >                            |
+--------------------------------------------------------------------------------------+
```

### Design Notes

- Search and filters are placed above the table.
- Primary action button appears in the page header.
- CRUD actions remain visible for every row.
- Pagination is consistently positioned below the table.

---

## Categories

### Purpose

The Categories page manages product classifications used throughout the inventory system.

### User Actions

- View categories.
- Search categories.
- Create a category.
- Edit category information.
- Delete a category.

### Layout

```text
+--------------------------------------------------------------------------------------+
| Sidebar | Categories                                            Astrella ▼         |
|---------|--------------------------------------------------------------------------|
|         | Categories                                           [+ Add Category]    |
|         | Organize products into meaningful classifications.                       |
|         |                                                                          |
|         | Search...                                                                |
|         | ----------------------------------------------------------------------   |
|         | Category Name          Description              Action                   |
|         | ----------------------------------------------------------------------   |
|         | Medicine               Prescription drugs      Edit Delete               |
|         | Supplement             Daily supplements       Edit Delete               |
|         | Medical Device         Healthcare equipment    Edit Delete               |
|         | ----------------------------------------------------------------------   |
|         |                     < Previous   1 2 3   Next >                          |
+--------------------------------------------------------------------------------------+
```

### Design Notes

- Simple table layout focused on category management.
- Minimal number of columns for improved readability.
- Primary action button remains consistent with other modules.
- Uses the same table, pagination, and search components as the Products page.

---

## Suppliers

### Purpose

The Suppliers page allows administrators to manage supplier information used throughout the inventory management process.

Supplier records ensure product traceability and support future inventory replenishment activities.

### User Actions

- View supplier list.
- Search suppliers.
- Create a supplier.
- Edit supplier information.
- Delete a supplier.

### Layout

```text
+--------------------------------------------------------------------------------------+
| Sidebar | Suppliers                                             Astrella ▼           |
|---------|----------------------------------------------------------------------------|
|         | Suppliers                                            [+ Add Supplier]      |
|         | Manage supplier information for inventory products.                        |
|         |                                                                            |
|         | Search...                                                                  |
|         | ----------------------------------------------------------------------     |
|         | Name          Email            Phone          Action                       |
|         | ----------------------------------------------------------------------     |
|         | ABC Pharma    abc@mail.com     0812xxxxxx     Edit Delete                  |
|         | Medica        med@mail.com     0813xxxxxx     Edit Delete                  |
|         | Health Lab    hl@mail.com      0815xxxxxx     Edit Delete                  |
|         | ----------------------------------------------------------------------     |
|         |                     < Previous   1 2 3   Next >                            |
+--------------------------------------------------------------------------------------+
```

### Design Notes

- Uses the same layout as Products and Categories.
- Search is positioned above the table.
- CRUD actions remain accessible for every record.
- Consistent spacing and typography improve readability.

---

## Stock In

### Purpose

The Stock In page records incoming inventory and updates product stock levels.

### User Actions

- Select a product.
- Enter quantity.
- Add optional notes.
- Save transaction.

### Layout

```text
+--------------------------------------------------------------------------------------+
| Sidebar | Stock In                                              Astrella ▼           |
|---------|----------------------------------------------------------------------------|
|         | Stock In                                              [ Save ]             |
|         | Record incoming inventory transactions.                                    |
|         |                                                                            |
|         | Product                                                                    |
|         | [ Select Product ▼ ]                                                       |
|         |                                                                            |
|         | Quantity                                                                   |
|         | [____________________]                                                     |
|         |                                                                            |
|         | Notes (Optional)                                                           |
|         | [_______________________________________________]                          |
|         |                                                                            |
|         |                  [ Cancel ]      [ Save ]                                  |
+--------------------------------------------------------------------------------------+
```

### Design Notes

- Form layout follows the global form pattern.
- Required fields are clearly labeled.
- Save action is emphasized.
- Success feedback is displayed using toast notifications.

---

## Stock Out

### Purpose

The Stock Out page records outgoing inventory while ensuring stock availability before completing the transaction.

### User Actions

- Select a product.
- Enter quantity.
- Add optional notes.
- Save transaction.
- Receive validation if stock is insufficient.

### Layout

```text
+--------------------------------------------------------------------------------------+
| Sidebar | Stock Out                                             Astrella ▼           |
|---------|----------------------------------------------------------------------------|
|         | Stock Out                                             [ Save ]             |
|         | Record outgoing inventory transactions.                                    |
|         |                                                                            |
|         | Product                                                                    |
|         | [ Select Product ▼ ]                                                       |
|         |                                                                            |
|         | Quantity                                                                   |
|         | [____________________]                                                     |
|         |                                                                            |
|         | Notes (Optional)                                                           |
|         | [_______________________________________________]                          |
|         |                                                                            |
|         |                  [ Cancel ]      [ Save ]                                  |
+--------------------------------------------------------------------------------------+
```

### Design Notes

- Shares the same structure as Stock In.
- Performs stock availability validation before saving.
- Displays clear validation messages when stock is insufficient.
- Maintains consistent spacing and component placement.

---

## Inventory History

### Purpose

The Inventory History page displays a complete record of inventory movements performed within the system.

### User Actions

- View transaction history.
- Search transactions.
- Filter transactions.
- Navigate between pages.

### Layout

```text
+--------------------------------------------------------------------------------------+
| Sidebar | Inventory History                                    Astrella ▼            |
|---------|----------------------------------------------------------------------------|
|         | Inventory History                                                          |
|         | Review all inventory transactions.                                         |
|         |                                                                            |
|         | Search...      Transaction Type ▼                                          |
|         | ---------------------------------------------------------------------------|
|         | Product     Type      Quantity      Date        User                       |
|         | ---------------------------------------------------------------------------|
|         | Paracetamol Stock In     50        Today       Astrella                    |
|         | Vitamin C   Stock Out    10        Today       Astrella                    |
|         | ---------------------------------------------------------------------------|
|         |                     < Previous   1 2 3   Next >                            |
+--------------------------------------------------------------------------------------+
```

### Design Notes

- Search and filter improve transaction lookup.
- Table layout prioritizes readability.
- Pagination remains consistent with other list pages.
- Transaction history is read-only.

---

## Profile

### Purpose

The Profile page allows the authenticated administrator to view account information and manage personal credentials.

### User Actions

- View profile information.
- Update password.
- Logout.

### Layout

```text
+--------------------------------------------------------------------------------------+
| Sidebar | Profile                                              Astrella ▼            |
|---------|----------------------------------------------------------------------------|
|         | My Profile                                                                 |
|         | Manage your account information.                                           |
|         |                                                                            |
|         | Name                                                                       |
|         | [ Astrella Syadira ]                                                       |
|         |                                                                            |
|         | Email                                                                      |
|         | [ astrella@email.com ]                                                     |
|         |                                                                            |
|         | Change Password                                                            |
|         | [____________________]                                                     |
|         |                                                                            |
|         |                  [ Update Password ]                                       |
|         |                                                                            |
|         |                  [ Logout ]                                                |
+--------------------------------------------------------------------------------------+
```

### Design Notes

- Displays account information clearly.
- Password updates are separated from profile information.
- Logout remains easily accessible.
- Uses the same form and button components as the rest of the application.

---

# 6. Navigation Flow

The following navigation flow illustrates how users move between the primary screens of Pharmora during daily inventory management activities.

```text
Login
   │
   ▼
Dashboard
   │
   ├──────────────┬──────────────┬──────────────┬────────────────────┐
   ▼              ▼              ▼              ▼                    ▼
Products     Categories     Suppliers     Inventory History     Profile
   │
   ├──────────────┐
   ▼              ▼
Stock In      Stock Out
   │              │
   └──────┬───────┘
          ▼
Inventory History
```

### Navigation Principles

- Dashboard serves as the central navigation hub after authentication.
- The Sidebar provides direct access to all primary modules.
- Every module can be reached within one or two interactions.
- Users can return to the Dashboard from any page using the Sidebar.
- Navigation remains consistent across the entire application.

---

# 7. Responsive Considerations

Pharmora is designed using a responsive layout to ensure usability across multiple screen sizes while maintaining a consistent user experience.

## Desktop

Desktop is the primary platform for daily inventory operations.

The interface displays:

- Fixed sidebar navigation.
- Full-width data tables.
- Multi-column dashboard cards.
- Spacious layouts for efficient data management.

---

## Tablet

Tablet layouts preserve the overall desktop experience while optimizing spacing and component sizes.

Adjustments include:

- Reduced spacing between interface elements.
- Responsive dashboard cards.
- Scrollable tables when necessary.
- Optimized forms for touch interaction.

---

## Mobile

Although Pharmora is primarily intended for desktop use, the interface remains accessible on mobile devices.

Adjustments include:

- Collapsible sidebar navigation.
- Single-column layouts.
- Horizontally scrollable tables.
- Full-width buttons and form inputs.
- Simplified spacing for smaller screens.

Complex inventory management tasks are recommended to be performed on desktop devices to maximize usability and productivity.

---

# 8. Closing

This Wireframe document establishes the structural foundation of Pharmora's user interface.

Rather than defining visual styling, it focuses on page hierarchy, component placement, navigation consistency, and user interaction patterns.

Together with the Information Architecture, User Flow, and Design System documents, these wireframes provide a complete blueprint for implementing the application's interface using Laravel Blade and Tailwind CSS.

Future interface enhancements should preserve the layout consistency, usability principles, and navigation patterns established throughout this document to ensure a cohesive user experience across all modules.