# Pharmora Screen Inventory

## Document Information

| Item | Value |
|------|--------|
| Project | Pharmora |
| Document | Screen Inventory |
| Version | 1.0 |
| Status | Final |
| Last Updated | July 2026 |

---

# Overview

This document serves as the master inventory of all application screens in Pharmora.

Its purpose is to provide a centralized reference for design, development, testing, and future feature expansion.

Each screen is tracked from planning through implementation to ensure complete project coverage.

---

# Development Workflow

Every screen follows the same development lifecycle.

```

Planning

↓

Wireframe

↓

High Fidelity Design

↓

Review

↓

Approved

↓

Development

↓

Testing

↓

Completed

```

---

# Priority Levels

| Priority | Description |
|----------|-------------|
| 🔴 High | Core feature required for MVP |
| 🟡 Medium | Important but not blocking |
| 🟢 Low | Future enhancement |

---

# Status Legend

| Status | Meaning |
|---------|---------|
| ⬜ Planned | Not started |
| 🟦 Wireframe | Low-fidelity design completed |
| 🟪 High Fidelity | Final UI completed |
| 🟨 Review | Under review |
| 🟩 Approved | Design approved |
| 🟧 Development | Currently being implemented |
| ✅ Completed | Finished and tested |

---

# Screen Inventory

| ID | Module | Screen | Priority | Status |
|----|--------|---------|----------|--------|
| AUTH-01 | Authentication | Login | 🔴 High | ⬜ Planned |
| AUTH-02 | Authentication | Register | 🔴 High | ⬜ Planned |
| AUTH-03 | Authentication | Forgot Password | 🟡 Medium | ⬜ Planned |

| DASH-01 | Dashboard | Dashboard Overview | 🔴 High | ⬜ Planned |

| PROD-01 | Products | Product List | 🔴 High | ⬜ Planned |
| PROD-02 | Products | Product Details | 🔴 High | ⬜ Planned |
| PROD-03 | Products | Create Product | 🔴 High | ⬜ Planned |
| PROD-04 | Products | Edit Product | 🔴 High | ⬜ Planned |

| CAT-01 | Categories | Category List | 🟡 Medium | ⬜ Planned |
| CAT-02 | Categories | Create Category | 🟡 Medium | ⬜ Planned |
| CAT-03 | Categories | Edit Category | 🟡 Medium | ⬜ Planned |

| SUP-01 | Suppliers | Supplier List | 🟡 Medium | ⬜ Planned |
| SUP-02 | Suppliers | Create Supplier | 🟡 Medium | ⬜ Planned |
| SUP-03 | Suppliers | Edit Supplier | 🟡 Medium | ⬜ Planned |

| INV-01 | Inventory | Inventory Overview | 🔴 High | ⬜ Planned |
| INV-02 | Inventory | Inventory Details | 🔴 High | ⬜ Planned |

| MOV-01 | Stock Movements | Stock Movement History | 🔴 High | ⬜ Planned |

| REP-01 | Reports | Analytics Dashboard | 🟡 Medium | ⬜ Planned |
| REP-02 | Reports | Export Reports | 🟢 Low | ⬜ Planned |

| PRO-01 | Profile | User Profile | 🟡 Medium | ⬜ Planned |
| PRO-02 | Profile | Change Password | 🟡 Medium | ⬜ Planned |

| SET-01 | Settings | Application Settings | 🟢 Low | ⬜ Planned |

---

# Module Summary

| Module | Screens |
|---------|---------:|
| Authentication | 3 |
| Dashboard | 1 |
| Products | 4 |
| Categories | 3 |
| Suppliers | 3 |
| Inventory | 2 |
| Stock Movements | 1 |
| Reports | 2 |
| Profile | 2 |
| Settings | 1 |

**Total Screens: 22**

---

# MVP Scope

The following screens are required for the Minimum Viable Product (MVP).

- Login
- Register
- Dashboard Overview
- Product List
- Product Details
- Create Product
- Edit Product
- Inventory Overview
- Stock Movement History

---

# Phase 2 Scope

The following screens will be completed after the MVP.

- Categories
- Suppliers
- Reports
- Profile
- Settings

---

# Dependencies

## Authentication

Must be completed before:

- Dashboard
- Products
- Inventory
- Reports

---

## Products

Required before:

- Inventory
- Stock Movements
- Reports

---

## Categories

Required before:

- Product Management

---

## Suppliers

Required before:

- Product Management

---

# Screen Design Order

The recommended design sequence is:

1. Login
2. Register
3. Dashboard Overview
4. Product List
5. Create Product
6. Edit Product
7. Product Details
8. Category List
9. Supplier List
10. Inventory Overview
11. Inventory Details
12. Stock Movement History
13. Reports
14. User Profile
15. Settings

---

# Development Milestones

## Milestone 1

- Authentication
- Dashboard

---

## Milestone 2

- Products
- Categories
- Suppliers

---

## Milestone 3

- Inventory
- Stock Movements

---

## Milestone 4

- Reports
- Profile
- Settings

---

# Progress Tracker

| Phase | Progress |
|--------|---------:|
| Planning | ✅ 100% |
| Wireframes | 0% |
| High Fidelity UI | 0% |
| UI Review | 0% |
| Development | 0% |
| Testing | 0% |
| Deployment | 0% |

---

# Definition of Done

A screen is considered complete when:

- User flow has been validated.
- Wireframe is finalized.
- High-fidelity design is approved.
- Responsive layout is verified.
- Accessibility requirements are met.
- Laravel implementation is completed.
- Functional testing has passed.
- Documentation has been updated.

---

# Notes

This document should be updated throughout the project lifecycle.

Any new feature or screen must be added to this inventory before entering the design phase to maintain consistency and traceability across the project.