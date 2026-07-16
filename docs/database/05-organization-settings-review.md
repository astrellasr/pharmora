# 📄 Organization Settings Table Review

> **Version:** 1.0  
> **Status:** Approved  
> **Document Type:** Database Architecture Review  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Purpose](#1-purpose)
- [2. Business Responsibility](#2-business-responsibility)
- [3. UI & Feature Analysis](#3-ui--feature-analysis)
- [4. Column Review](#4-column-review)
- [5. Final Table Structure](#5-final-table-structure)
- [6. Business Rules](#6-business-rules)
- [7. Architecture Decisions](#7-architecture-decisions)
- [8. Future Considerations](#8-future-considerations)
- [9. Approval](#9-approval)

---

# 1. Purpose

This document reviews the **Organization Settings** table before implementation.

The purpose of this table is to centralize application-wide configuration shared across the entire Pharmora workspace.

Unlike user-specific information, organization settings represent global preferences that affect every authenticated user within the application.

The table establishes a scalable foundation for future configuration management while keeping user data separated from workspace configuration.

---

# 2. Business Responsibility

The Organization Settings table stores information that belongs to the organization rather than individual users.

Examples include:

- Organization identity
- Branding
- Contact information
- Regional preferences
- Application preferences

Only one active record is expected during the MVP because Pharmora currently supports a single organization.

---

# 3. UI & Feature Analysis

The decision to introduce this table is based on the existing high-fidelity Settings page.

The Settings module contains several sections that represent organization-level data rather than user profile information.

### Organization

- Organization Name
- Business Type
- Logo

---

### Contact Information

- Workspace Email
- Phone Number
- Address
- Country

---

### Regional Preferences

- Language
- Timezone

---

### Branding

- Organization Logo

---

These settings should not be stored inside the Users table because they are shared across the entire workspace.

Separating organization data from user data improves maintainability and supports future multi-user functionality.

---

# 4. Column Review

| Column | Status | Reason |
|----------|--------|--------|
| id | Keep | Primary key |
| organization_name | Keep | Primary organization name |
| business_type | Keep | Pharmacy, Clinic, Distributor, etc. |
| workspace_email | Keep | Shared contact email |
| phone | Keep | Organization phone number |
| address | Keep | Business address |
| country | Keep | Regional configuration |
| timezone | Keep | Application timezone |
| language | Keep | Default language |
| logo | Keep | Organization logo path |
| created_at | Keep | Audit information |
| updated_at | Keep | Audit information |

---

## Excluded Columns

The following settings are intentionally excluded from the MVP.

| Column | Reason |
|----------|--------|
| currency | Single-country deployment |
| tax_number | Outside inventory scope |
| invoice_prefix | Sales module not implemented |
| fiscal_year | Reporting module not implemented |
| multi_branch | Future feature |
| maintenance_mode | Managed by application configuration |

---

# 5. Final Table Structure

```
id
organization_name
business_type
workspace_email
phone
address
country
timezone
language
logo
created_at
updated_at
```

Only one record should exist within this table during the MVP.

---

# 6. Business Rules

The following business rules apply.

- Only one organization record should exist.
- Organization name is required.
- Workspace email is required.
- Phone number is optional.
- Address is optional.
- Country defaults to Indonesia.
- Timezone defaults to Asia/Jakarta.
- Language defaults to English.
- Logo stores only the file path.

---

# 7. Architecture Decisions

## Single Organization Strategy

The MVP supports only one organization.

This simplifies configuration management while leaving room for future multi-tenant expansion.

---

## Separation of Concerns

Organization-wide configuration is intentionally separated from user profile information.

This keeps the Users table focused solely on authentication and user identity.

---

## Future Multi-Tenant Compatibility

Although the MVP stores a single organization, this table provides a foundation for supporting multiple organizations in future versions without redesigning the application architecture.

---

## Configuration Isolation

Global application preferences are isolated from business entities.

Changes to organization settings do not affect Products, Categories, Suppliers, or Inventory Movements.

---

# 8. Future Considerations

Future versions of Pharmora may extend this table with:

- Currency
- Date Format
- Time Format
- Company Registration Number
- Tax Number
- Invoice Prefix
- Theme Preferences
- Email Configuration
- Storage Configuration
- Multi-Branch Support

These additions can be introduced without affecting the current database relationships.

---

# 9. Approval

The Organization Settings table has been reviewed against the current high-fidelity interface designs and future application roadmap.

The structure defined in this document is approved for Pharmora Version 1.0.

Although only a single organization is supported during the MVP, introducing this table establishes a cleaner architecture and improves long-term maintainability by separating organization-wide configuration from user-specific data.