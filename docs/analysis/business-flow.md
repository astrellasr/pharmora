# 📄 Business Flow

> **Version:** 1.0  
> **Status:** Final  
> **Document Type:** Business Flow  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Business Overview](#2-business-overview)
- [3. Business Process Overview](#3-business-process-overview)
- [4. Overall Business Flow](#4-overall-business-flow)
- [5. Detailed Business Flows](#5-detailed-business-flows)
- [6. End-to-End Business Flow](#6-end-to-end-business-flow)
- [7. Business Rules Summary](#7-business-rules-summary)
- [8. Business Principles](#8-business-principles)
- [9. Closing](#9-closing)

---

# 1. Purpose

This document describes how business operations are performed within Pharmora from the perspective of the **Inventory Administrator**, the primary user of the system.

Unlike the User Flow document, which focuses on user interactions with the application interface, the Business Flow focuses on the operational processes that support inventory management activities.

The objective of this document is to ensure that every inventory-related process follows a logical, consistent, and efficient workflow while maintaining business integrity and data accuracy.

This document serves as the primary reference for translating business requirements into database design, system architecture, and software implementation.

---

# 2. Business Overview

Pharmora is designed to digitalize inventory management for healthcare businesses by replacing manual inventory processes with a centralized web-based platform.

The system enables organizations to manage master data, record inventory transactions, and monitor stock information through a structured and reliable workflow.

Instead of relying on spreadsheets or handwritten documentation, Pharmora centralizes operational data into a single system that improves inventory visibility, reduces administrative effort, and minimizes human error.

The first version of Pharmora focuses exclusively on core inventory management activities, including product management, supplier management, category management, inventory transactions, and inventory monitoring.

All business processes are designed around a single operational role: the **Inventory Administrator**.

---

# 3. Business Process Overview

The overall business process within Pharmora consists of several interconnected operational stages.

```
Authentication
        │
        ▼
Dashboard
        │
        ▼
Master Data Management
(Categories • Suppliers • Products)
        │
        ▼
Inventory Transactions
(Stock In • Stock Out)
        │
        ▼
Inventory Monitoring & Reporting
(Dashboard • Inventory History • Search • Filter)
        │
        ▼
Daily Business Operations Continue
```

Each stage represents a logical business process that contributes to maintaining accurate inventory records throughout daily operations.

The workflow begins with secure authentication, continues through master data preparation, supports inventory transactions, and concludes with inventory monitoring and historical tracking.

Although these activities are presented sequentially, administrators may perform them repeatedly throughout daily operations depending on business needs.

Every inventory transaction updates the latest stock information and automatically generates an inventory history record, ensuring complete traceability across the system.

---

# 4. Overall Business Flow

The following diagram illustrates the overall operational workflow within Pharmora.

```
Inventory Administrator
        │
        ▼
Authenticate
        │
        ▼
Access Dashboard
        │
        ▼
Monitor Inventory Summary
        │
        ▼
───────────────────────────────────────
        Master Data Management
───────────────────────────────────────
        │
        ├──────────────┐
        │              │
        ▼              ▼
 Manage Categories   Manage Suppliers
        │              │
        └──────┬───────┘
               ▼
        Manage Products
               │
               ▼
───────────────────────────────────────
       Inventory Transactions
───────────────────────────────────────
        │
   ┌────┴────┐
   ▼         ▼
 Stock In  Stock Out
   │         │
   └────┬────┘
        ▼
Update Product Stock
        │
        ▼
Generate Inventory History
        │
        ▼
───────────────────────────────────────
 Inventory Monitoring & Reporting
───────────────────────────────────────
        │
        ├── Dashboard
        ├── Inventory History
        ├── Search
        ├── Filter
        └── Pagination
        │
        ▼
Continue Daily Operations
```

The workflow demonstrates how master data management supports inventory transactions, while every inventory movement automatically updates stock information and creates an inventory history record for future monitoring and reporting.

---

# 5. Detailed Business Flows

## 5.1 Authentication Flow

### Business Objective

Ensure that only authorized users can access the inventory management system.

### Business Process

```
Open Application
        │
        ▼
Display Login Page
        │
        ▼
Enter Credentials
        │
        ▼
Validate Credentials
        │
   ┌────┴─────┐
   │          │
Valid      Invalid
   │          │
   ▼          ▼
Dashboard  Display Error
              │
              ▼
        Retry Login
```

### Business Rationale

Inventory information is considered operational business data.

Authentication ensures that only authorized personnel can access and modify inventory records, reducing the risk of unauthorized changes and maintaining data security.

---

## 5.2 Dashboard Monitoring Flow

### Business Objective

Provide administrators with a comprehensive overview of inventory conditions before performing operational activities.

### Business Process

```
Open Dashboard
        │
        ▼
Load Dashboard Data
        │
        ├── Total Products
        ├── Total Categories
        ├── Total Suppliers
        ├── Total Available Stock
        ├── Low Stock Summary
        └── Recent Inventory Transactions
        │
        ▼
Review Dashboard Summary
        │
        ▼
Select Operational Activity
```

### Business Rationale

The dashboard acts as the operational control center.

By presenting key inventory information immediately after login, administrators can quickly understand current inventory conditions and determine the next operational action without navigating through multiple modules.

---

## 5.3 Category Management Flow

### Business Objective

Organize products into structured categories to improve inventory organization and simplify product management.

### Business Process

```
Open Categories Module
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
Validate Data
          │
          ▼
Save Changes
          │
          ▼
Refresh Category List
```

### Business Rationale

Categories provide a structured classification for products.

Proper categorization improves product organization, simplifies searching, supports reporting, and reduces the likelihood of inconsistent product classification.

---

## 5.4 Supplier Management Flow

### Business Objective

Maintain supplier information as the primary reference for inventory procurement and Stock In transactions.

### Business Process

```
Open Suppliers Module
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
Validate Data
          │
          ▼
Save Changes
          │
          ▼
Refresh Supplier List
```

### Business Rationale

Accurate supplier information supports inventory traceability and maintains consistency throughout procurement activities.

Maintaining supplier records before inventory transactions ensures that every incoming inventory item can be associated with a valid supplier.

---

## 5.5 Product Management Flow

### Business Objective

Maintain accurate and well-structured product information as the foundation of all inventory operations.

### Business Process

```
Open Products Module
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
Validate Product Data
          │
   ┌──────┴──────┐
   │             │
Valid         Invalid
   │             │
   ▼             ▼
Save Data   Display Error
   │             │
   ▼             ▼
Refresh Product List
```

### Business Rationale

Products represent the core inventory assets managed by the organization.

Maintaining complete and accurate product information ensures reliable inventory transactions, consistent stock records, and improved operational efficiency.

Products must be registered before they can participate in any inventory transaction.

---

## 5.6 Stock In Flow

### Business Objective

Record incoming inventory and update product stock accurately.

### Business Process

```
Receive Inventory
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
Validate Transaction
        │
   ┌──────┴──────┐
   │             │
Valid         Invalid
   │             │
   ▼             ▼
Increase     Display Error
Stock
   │
   ▼
Generate Inventory History
   │
   ▼
Transaction Completed
```

### Business Rationale

Every incoming inventory item must be recorded immediately to maintain accurate stock information.

Each Stock In transaction updates product inventory and automatically creates a historical transaction record for auditing and traceability.

---

## 5.7 Stock Out Flow

### Business Objective

Record outgoing inventory while maintaining inventory accuracy and preventing negative stock.

### Business Process

```
Request Product
        │
        ▼
Open Stock Out Module
        │
        ▼
Select Product
        │
        ▼
Enter Quantity
        │
        ▼
Check Stock Availability
        │
   ┌──────┴────────┐
   │               │
Sufficient    Insufficient
   │               │
   ▼               ▼
Reduce Stock   Display Error
   │               │
   ▼               ▼
Generate Inventory History
   │
   ▼
Transaction Completed
```

### Business Rationale

Stock Out transactions represent inventory consumption or distribution.

The system validates stock availability before completing the transaction to prevent negative inventory values and preserve inventory accuracy.

---

## 5.8 Inventory History Flow

### Business Objective

Maintain a complete historical record of every inventory transaction.

### Business Process

```
Stock Transaction
(Stock In / Stock Out)
        │
        ▼
Generate History Record
        │
        ▼
Store Transaction
        │
        ▼
Update Inventory History
        │
        ▼
View Transaction History
```

### Business Rationale

Inventory History provides complete traceability for every inventory movement.

Historical records support auditing, transaction tracking, and operational analysis while preserving data integrity.

Inventory History is generated automatically and cannot be modified manually.

---

## 5.9 Search Flow

### Business Objective

Enable administrators to locate specific information quickly.

### Business Process

```
Open Module
        │
        ▼
Enter Keyword
        │
        ▼
Execute Search
        │
        ▼
Display Matching Results
        │
        ▼
Continue Operation
```

### Business Rationale

As operational data grows, searching becomes essential for maintaining productivity and reducing the time required to locate information.

---

## 5.10 Filter Flow

### Business Objective

Allow administrators to narrow displayed data based on specific criteria.

### Business Process

```
Open Module
        │
        ▼
Select Filter Criteria
        │
        ▼
Apply Filter
        │
        ▼
Display Filtered Results
        │
        ▼
Continue Operation
```

### Business Rationale

Filtering enables users to focus on relevant information, improving efficiency when working with large datasets.

---

## 5.11 Pagination Flow

### Business Objective

Maintain application performance while presenting large volumes of data.

### Business Process

```
Open Data List
        │
        ▼
Load Current Page
        │
        ▼
Navigate to Another Page
        │
        ▼
Retrieve Requested Data
        │
        ▼
Display Selected Page
```

### Business Rationale

Pagination reduces unnecessary data loading, improves application performance, and provides a better browsing experience for large datasets.

---

# 6. End-to-End Business Flow

The following diagram summarizes the complete operational workflow within Pharmora.

```
Inventory Administrator
        │
        ▼
Authenticate
        │
        ▼
Access Dashboard
        │
        ▼
Review Inventory Summary
        │
        ▼
───────────────────────────────────────
      Master Data Management
───────────────────────────────────────
        │
        ├── Manage Categories
        ├── Manage Suppliers
        └── Manage Products
                │
                ▼
───────────────────────────────────────
      Inventory Transactions
───────────────────────────────────────
        │
   ┌────┴────┐
   ▼         ▼
 Stock In  Stock Out
   │         │
   └────┬────┘
        ▼
Update Product Stock
        │
        ▼
Generate Inventory History
        │
        ▼
───────────────────────────────────────
 Inventory Monitoring & Reporting
───────────────────────────────────────
        │
        ├── Dashboard
        ├── Inventory History
        ├── Search
        ├── Filter
        └── Pagination
        │
        ▼
Continue Daily Operations
```

This workflow demonstrates how inventory data flows throughout the application.

Master data provides the foundation for inventory transactions, while every transaction automatically updates inventory records and generates historical data for future monitoring and reporting.

---

# 7. Business Rules Summary

The following business rules govern the operational behavior of Pharmora.

| Business Area | Rule |
|--------------|------|
| Authentication | Only authenticated users may access the application. |
| Categories | Every Product must belong to one valid Category. |
| Suppliers | Suppliers must exist before being referenced in Stock In transactions. |
| Products | Products must be registered before inventory transactions can occur. |
| Stock In | Stock quantity must increase and automatically generate an Inventory History record. |
| Stock Out | Stock quantity must never become negative. Transactions are rejected when available stock is insufficient. |
| Inventory History | Every inventory transaction automatically creates a historical record. History cannot be modified manually. |
| Dashboard | Dashboard information should always reflect the latest inventory data. |
| Search | Search functionality should be available across all major data modules. |
| Filter | Filtering should help users narrow operational data efficiently. |
| Pagination | Large datasets should be divided into pages to improve performance and usability. |

---

# 8. Business Principles

The business processes implemented in Pharmora are guided by the following principles.

## Centralized Data Management

All inventory information should be stored in a centralized system to ensure data consistency and eliminate duplicate records.

---

## Inventory Accuracy

Every inventory movement must immediately update product stock to maintain accurate inventory information.

---

## Operational Efficiency

Business processes should minimize repetitive administrative work while simplifying day-to-day inventory operations.

---

## Data Integrity

Inventory records should remain accurate, traceable, and internally consistent throughout the system.

---

## Traceability

Every inventory transaction should produce a permanent historical record that supports operational auditing and inventory tracking.

---

## Simplicity

Business processes should remain straightforward, intuitive, and easy to understand without sacrificing operational quality.

---

# 9. Closing

This document defines the operational business processes implemented within Pharmora.

It serves as the primary business reference for subsequent stages of system development, including User Flow, Information Architecture, Database Design, System Architecture, and software implementation.

The workflows described in this document ensure that every inventory operation follows consistent business rules while maintaining inventory accuracy, operational efficiency, and data integrity.

Future enhancements should continue following the same business principles established in this document, ensuring that every new feature provides clear business value without unnecessarily increasing system complexity.

This document should be reviewed whenever significant business process changes are introduced in future versions of Pharmora.