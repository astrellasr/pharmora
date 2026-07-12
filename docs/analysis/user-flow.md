# 📄 User Flow

> **Version:** 1.0  
> **Status:** Final  
> **Document Type:** User Flow  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Primary User](#2-primary-user)
- [3. User Journey Overview](#3-user-journey-overview)
- [4. Overall User Journey](#4-overall-user-journey)
- [5. Detailed User Flows](#5-detailed-user-flows)
- [6. Complete User Flow](#6-complete-user-flow)
- [7. UX Principles](#7-ux-principles)
- [8. Design Considerations](#8-design-considerations)
- [9. Closing](#9-closing)

---

# 1. Purpose

This document describes how users interact with Pharmora to complete daily inventory management tasks.

Unlike the Business Flow document, which focuses on operational business processes, the User Flow focuses on the user's journey while navigating the application to accomplish specific objectives.

The primary goal of this document is to ensure that every interaction within the system is intuitive, efficient, and consistent with modern enterprise SaaS design principles.

This document serves as the primary reference for designing application navigation, user experience, interface behavior, and screen-to-screen interactions before implementation begins.

---

# 2. Primary User

The first release of Pharmora is designed around a single operational role.

| User | Description |
|------|-------------|
| **Inventory Administrator** | Responsible for managing master data, recording inventory transactions, monitoring inventory status, and maintaining inventory accuracy throughout daily business operations. |

The Inventory Administrator performs all core operational activities within the system, including managing products, categories, suppliers, stock movements, and inventory history.

Future versions may introduce additional user roles with different responsibilities and permissions.

---

# 3. User Journey Overview

The Inventory Administrator follows a simple and structured workflow throughout daily operations.

```
Open Pharmora
        │
        ▼
Login
        │
        ▼
Access Dashboard
        │
        ▼
Review Inventory Summary
        │
        ▼
Select Operational Module
        │
        ▼
Complete Business Task
        │
        ▼
Receive System Feedback
        │
        ▼
Continue Daily Operations
        │
        ▼
Logout
```

Although users may access different modules depending on operational needs, every interaction follows the same design philosophy:

- Start from a centralized dashboard.
- Navigate directly to the required module.
- Complete a single operational task.
- Receive immediate validation and system feedback.
- Return to continue daily inventory operations.

This predictable interaction pattern minimizes learning effort, improves productivity, and provides a consistent experience across the entire application.

---

# 4. Overall User Journey

The following diagram illustrates the overall interaction between the Inventory Administrator and Pharmora throughout daily inventory operations.

```
Open Pharmora
        │
        ▼
Login
        │
        ▼
Dashboard
        │
        ▼
Review Inventory Summary
        │
        ▼
Select Module
        │
        ├───────────────┐
        │               │
        ▼               ▼
Master Data      Inventory Transaction
        │               │
        └──────┬────────┘
               ▼
Inventory History
               │
               ▼
Search / Filter
               │
               ▼
Continue Daily Operations
               │
               ▼
Logout
```

The dashboard serves as the central navigation point of the application. From there, users can quickly access every operational module while maintaining a consistent navigation experience.

---

# 5. Detailed User Flows

## 5.1 Login

### User Goal

Access the inventory management system securely.

### User Journey

```
Open Application
        │
        ▼
Display Login Page
        │
        ▼
Enter Email
        │
        ▼
Enter Password
        │
        ▼
Click "Sign In"
        │
        ▼
Validate Credentials
        │
   ┌────┴─────┐
   │          │
Success    Failed
   │          │
   ▼          ▼
Dashboard  Display Error
               │
               ▼
         Retry Login
```

### System Response

- Validate user credentials.
- Create an authenticated session.
- Redirect successful users to the Dashboard.
- Display an appropriate error message when authentication fails.

### UX Rationale

The login process should be simple, secure, and require minimal user effort while providing immediate feedback for both successful and failed authentication attempts.

---

## 5.2 Dashboard

### User Goal

Review the current inventory condition and quickly access operational modules.

### User Journey

```
Login Successful
        │
        ▼
Dashboard
        │
        ▼
Review Dashboard Summary
        │
        ├── Total Products
        ├── Total Categories
        ├── Total Suppliers
        ├── Total Available Stock
        ├── Low Stock Summary
        └── Recent Inventory Transactions
        │
        ▼
Select Module
```

### System Response

The system displays the latest inventory summary and provides quick navigation to all primary modules.

### UX Rationale

The dashboard functions as the operational hub of the application, allowing users to understand inventory conditions before performing any business activity.

---

## 5.3 Category Management

### User Goal

Create, update, and maintain product categories.

### User Journey

```
Dashboard
        │
        ▼
Open Categories
        │
        ▼
View Category List
        │
 ┌──────┼──────────────┐
 ▼      ▼              ▼
Create Update       Delete
Category Category   Category
 │        │             │
 └────────┼─────────────┘
          ▼
Input Category Information
          │
          ▼
Submit Form
          │
   ┌──────┴──────┐
   │             │
Valid         Invalid
   │             │
   ▼             ▼
Save Data   Display Validation
   │             │
   ▼             ▼
Refresh Category List
```

### System Response

The system validates submitted data, saves valid information, refreshes the category list, and displays an appropriate success or validation message.

### UX Rationale

Category management should require as few steps as possible while maintaining data accuracy and preventing duplicate or invalid information.

---

## 5.4 Supplier Management

### User Goal

Maintain supplier information for inventory procurement.

### User Journey

```
Dashboard
        │
        ▼
Open Suppliers
        │
        ▼
View Supplier List
        │
 ┌──────┼──────────────┐
 ▼      ▼              ▼
Create Update       Delete
Supplier Supplier   Supplier
 │        │             │
 └────────┼─────────────┘
          ▼
Input Supplier Information
          │
          ▼
Submit Form
          │
   ┌──────┴──────┐
   │             │
Valid         Invalid
   │             │
   ▼             ▼
Save Data   Display Validation
   │             │
   ▼             ▼
Refresh Supplier List
```

### System Response

The system validates supplier information, stores valid records, refreshes the supplier list, and provides immediate feedback after each operation.

### UX Rationale

Supplier management should support fast data maintenance while ensuring that supplier information remains complete, accurate, and ready to be used in Stock In transactions.

---

## 5.5 Product Management

### User Goal

Manage product information as the primary inventory asset within the system.

### User Journey

```
Dashboard
        │
        ▼
Open Products
        │
        ▼
View Product List
        │
 ┌──────┼──────────────┐
 ▼      ▼              ▼
Create Update       Delete
Product Product     Product
 │        │             │
 └────────┼─────────────┘
          ▼
Input Product Information
          │
          ▼
Submit Form
          │
   ┌──────┴──────┐
   │             │
Valid         Invalid
   │             │
   ▼             ▼
Save Data   Display Validation
   │             │
   ▼             ▼
Refresh Product List
```

### System Response

- Validate all product information.
- Store valid product data.
- Refresh the product list automatically.
- Display success or validation feedback.

### UX Rationale

Product management should be straightforward and consistent with other master data modules, allowing administrators to maintain accurate inventory records with minimal effort.

---

## 5.6 Stock In

### User Goal

Record incoming inventory accurately.

### User Journey

```
Dashboard
        │
        ▼
Open Stock In
        │
        ▼
Select Supplier
        │
        ▼
Select Product
        │
        ▼
Enter Quantity
        │
        ▼
Add Notes (Optional)
        │
        ▼
Submit Transaction
        │
   ┌──────┴──────┐
   │             │
Valid         Invalid
   │             │
   ▼             ▼
Update Stock Display Validation
   │
   ▼
Generate Inventory History
   │
   ▼
Display Success Notification
```

### System Response

- Validate transaction data.
- Increase product stock.
- Automatically generate an Inventory History record.
- Display a confirmation message after successful submission.

### UX Rationale

Recording incoming inventory should require minimal interaction while ensuring complete transaction accuracy and traceability.

---

## 5.7 Stock Out

### User Goal

Record outgoing inventory while preventing invalid stock transactions.

### User Journey

```
Dashboard
        │
        ▼
Open Stock Out
        │
        ▼
Select Product
        │
        ▼
Enter Quantity
        │
        ▼
Add Notes (Optional)
        │
        ▼
Submit Transaction
        │
   ┌──────┴──────────┐
   │                 │
Stock Available   Insufficient Stock
   │                 │
   ▼                 ▼
Update Stock    Display Error
   │
   ▼
Generate Inventory History
   │
   ▼
Display Success Notification
```

### System Response

- Validate stock availability.
- Reject transactions that exceed available stock.
- Update inventory automatically after successful transactions.
- Record every Stock Out activity in Inventory History.

### UX Rationale

The interface should prevent inventory mistakes by validating stock availability before completing the transaction.

---

## 5.8 Inventory History

### User Goal

Review historical inventory transactions.

### User Journey

```
Dashboard
        │
        ▼
Open Inventory History
        │
        ▼
View Transaction List
        │
        ▼
Search Transactions
        │
        ▼
Filter Transactions
        │
        ▼
View Transaction Details
```

### System Response

- Display chronological inventory records.
- Update results dynamically after searching or filtering.
- Preserve historical records without allowing manual modification.

### UX Rationale

Inventory History should provide complete visibility into past inventory movements while maintaining data integrity.

---

## 5.9 Search

### User Goal

Locate specific information quickly.

### User Journey

```
Open Module
        │
        ▼
Enter Keyword
        │
        ▼
Search Records
        │
        ▼
Display Matching Results
```

### System Response

- Search matching records instantly.
- Update the displayed list without requiring page navigation.

### UX Rationale

Search should reduce the time required to locate information and improve operational efficiency.

---

## 5.10 Filter

### User Goal

Narrow displayed information using predefined criteria.

### User Journey

```
Open Module
        │
        ▼
Choose Filter
        │
        ▼
Apply Filter
        │
        ▼
Display Filtered Results
```

### System Response

- Apply selected filters.
- Refresh displayed data immediately.

### UX Rationale

Filtering helps administrators focus on relevant information without manually reviewing large datasets.

---

## 5.11 Pagination

### User Goal

Navigate large datasets efficiently.

### User Journey

```
Open Data List
        │
        ▼
View Current Page
        │
        ▼
Select Next / Previous Page
        │
        ▼
Load Requested Records
```

### System Response

- Load only the requested page.
- Preserve search and filter conditions while navigating between pages.

### UX Rationale

Pagination improves readability and maintains application performance when handling large amounts of data.

---

## 5.12 Logout

### User Goal

End the current session securely.

### User Journey

```
Dashboard
        │
        ▼
Open Profile Menu
        │
        ▼
Click "Logout"
        │
        ▼
Destroy Session
        │
        ▼
Redirect to Login Page
```

### System Response

- Terminate the authenticated session.
- Clear session data securely.
- Redirect users to the Login page.

### UX Rationale

Logout should always be easily accessible and ensure that unauthorized users cannot continue using an active session after the administrator leaves the application.

---

# 6. Complete User Flow

The following diagram summarizes the complete user journey within Pharmora.

```
Open Pharmora
        │
        ▼
Login
        │
        ▼
Dashboard
        │
        ▼
Review Inventory Summary
        │
        ▼
Select Operational Module
        │
        ├──────────────────────────────┐
        │                              │
        ▼                              ▼
Master Data                 Inventory Transactions
        │                              │
        ├── Categories                 ├── Stock In
        ├── Suppliers                  └── Stock Out
        └── Products
                │
                └──────────────┬──────────────┘
                               ▼
                    Inventory History
                               │
                               ▼
                    Search & Filter Data
                               │
                               ▼
                      Continue Operations
                               │
                               ▼
                            Logout
```

This workflow represents the complete interaction between the Inventory Administrator and the system throughout daily inventory management activities.

Every operational task follows a predictable interaction pattern, ensuring consistency across all application modules.

---

# 7. UX Principles

The user experience of Pharmora is guided by the following design principles.

| Principle | Implementation |
|------------|----------------|
| **Simplicity** | Every module focuses on one primary task and minimizes unnecessary user interactions. |
| **Consistency** | Navigation patterns, forms, tables, buttons, and feedback remain consistent throughout the application. |
| **Efficiency** | Users can complete common inventory tasks using the fewest possible steps. |
| **Visibility** | Important inventory information is presented clearly through the Dashboard and summary components. |
| **Feedback** | Every important user action receives immediate visual feedback, including success messages, validation errors, and confirmation states. |
| **Error Prevention** | The system validates user input before processing transactions and prevents invalid inventory operations. |
| **Predictability** | Similar actions produce consistent behavior across every module, reducing the learning curve for new users. |
| **Accessibility** | The interface prioritizes readability, clear typography, and intuitive layouts to improve usability. |

---

# 8. Design Considerations

The User Flow establishes several design decisions that should be maintained throughout development.

## Dashboard-Centered Navigation

The Dashboard serves as the primary entry point after authentication and acts as the central hub for accessing all operational modules.

---

## Consistent CRUD Experience

Products, Categories, and Suppliers should follow identical interaction patterns for creating, updating, and deleting records.

---

## Immediate System Feedback

Every user action should receive immediate feedback through validation messages, success notifications, or error alerts.

---

## Minimal User Effort

Common operational tasks should require as few interactions as possible while maintaining data accuracy and business integrity.

---

## Read-Only Historical Records

Inventory History serves as an audit log and should only allow users to view historical transactions without editing or deleting records.

---

## Responsive Experience

The interface should remain usable across desktop and tablet devices while preserving consistent navigation and interaction patterns.

---

# 9. Closing

This document defines how users interact with Pharmora to perform daily inventory management activities.

It complements the Business Flow document by translating business processes into intuitive user interactions and navigation patterns.

The workflows described in this document serve as the primary reference for Wireframes, Design System, UI Components, and application implementation.

Future enhancements should preserve the interaction principles established in this document to ensure a consistent, intuitive, and efficient user experience across every version of Pharmora.

This document should be reviewed whenever significant user interaction or navigation changes are introduced in future releases.