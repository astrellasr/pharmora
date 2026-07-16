# 📄 Users Table Review

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

This document reviews the **Users** table before implementation.

Its purpose is to validate that every column stored within the table directly supports the application's business requirements, user interface, and authentication workflow.

The review is based on:

- Product Requirement Document (PRD)
- Business Flow
- User Flow
- High-Fidelity UI Designs
- Laravel Breeze Authentication
- Future scalability considerations

The objective is to eliminate unnecessary attributes while ensuring the table remains flexible for future enhancements.

---

# 2. Business Responsibility

The **Users** table represents authenticated administrators who operate the Pharmora platform.

Each user is responsible for:

- Authenticating into the system
- Managing inventory
- Performing stock movements
- Updating personal profile information
- Accessing protected application features

The table **does not** represent employees, customers, pharmacists, or suppliers.

For the MVP, every authenticated account has the same application privileges.

---

# 3. UI & Feature Analysis

The Users table was validated against every feature that requires user information.

## Authentication

The following authentication pages require user data:

- Login
- Register
- Forgot Password
- Reset Password
- Verify Email

Required information:

- Name
- Email
- Password
- Email Verification Status

---

## Profile

The Profile page displays:

- Avatar
- Full Name
- Email Address
- Phone Number
- Last Login
- Member Since

Analysis:

- **Member Since** is derived from `created_at`; no additional column is required.
- **Last Login** should be stored to support activity tracking.
- **Avatar** stores only the image path.
- **Phone Number** is optional.

---

## Settings

Application-wide settings such as organization name, timezone, language, and branding belong to the **Organization Settings** table rather than the Users table.

This keeps user-specific information separate from workspace configuration.

---

# 4. Column Review

| Column | Status | Reason |
|---------|--------|--------|
| id | Keep | Primary key |
| uuid | Add | Public identifier for URLs and future API usage |
| name | Keep | User's full name |
| email | Keep | Primary login identifier |
| phone | Keep | Displayed in Profile, optional |
| avatar | Keep | Stores profile image path |
| password | Keep | Authentication |
| last_login_at | Add | Supports Profile activity information |
| email_verified_at | Keep | Laravel email verification |
| remember_token | Keep | Laravel authentication |
| created_at | Keep | Audit information |
| updated_at | Keep | Audit information |
| deleted_at | Keep | Soft delete support |

---

## Removed Columns

The following attributes were intentionally excluded from the MVP.

| Column | Reason |
|----------|--------|
| username | Login uses email address only |
| employee_id | Outside MVP scope |
| department | Organization feature not implemented |
| position | Organization feature not implemented |
| role | Single administrator role in MVP |
| location | Not required by current business flow |
| timezone | Stored in Organization Settings |

---

# 5. Final Table Structure

```
id
uuid
name
email
phone
avatar
password
last_login_at
email_verified_at
remember_token
created_at
updated_at
deleted_at
```

This structure represents the approved Users table for Pharmora MVP Version 1.0.

---

# 6. Business Rules

The following business rules apply to the Users table.

- Every user must have a unique email address.
- Passwords must always be stored using Laravel's hashing mechanism.
- Phone numbers are optional.
- Avatar stores only the file path, not the image itself.
- Email verification follows Laravel's built-in verification workflow.
- Soft-deleted users must remain in the database to preserve historical inventory movement records.
- Last login should be updated after every successful authentication.

---

# 7. Architecture Decisions

## Email as Primary Identifier

Authentication uses email addresses instead of usernames.

This reduces unnecessary complexity while aligning with Laravel Breeze's default authentication mechanism.

---

## UUID Support

Each user includes a UUID in addition to the numeric primary key.

Benefits include:

- Public-safe identifiers
- Future REST API compatibility
- Less predictable URLs
- Improved scalability

---

## Soft Deletes

Users are never permanently removed through normal application operations.

Soft deletes preserve historical ownership of inventory movements and maintain data integrity.

---

## Separation of Concerns

Workspace configuration is intentionally excluded from the Users table.

Application-level settings belong to the **Organization Settings** table to avoid mixing user-specific data with organization-wide configuration.

---

# 8. Future Considerations

Future versions of Pharmora may extend the Users table with:

- Role Management
- Permissions
- Two-Factor Authentication
- Profile Preferences
- Notification Preferences
- Activity Logs

These additions can be introduced without modifying the existing business structure.

---

# 9. Approval

The Users table has been reviewed against the current MVP requirements, business processes, and user interface designs.

The structure defined in this document is approved as the official implementation for Pharmora MVP Version 1.0.

Any future modification should be documented through an Architecture Decision Record (ADR) before implementation.