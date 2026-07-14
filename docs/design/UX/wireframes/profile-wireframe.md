# Profile Wireframe

## Document Information

| Item | Value |
|------|--------|
| Project | Pharmora |
| Module | Profile |
| Document | Profile Wireframe |
| Version | 1.0 |
| Status | Final |
| Priority | 🟢 Low |
| Last Updated | July 2026 |

---

# 1. Overview

## Purpose

This document defines the low-fidelity wireframe specification for the Profile Overview screen.

Its purpose is to establish layout hierarchy, content organization, navigation flow, and interaction patterns before high-fidelity interface design begins.

This document intentionally excludes branding, colors, typography, shadows, and visual styling.

---

# 2. Wireframe Goals

The Profile wireframe should:

- Present user information clearly.
- Support efficient profile management.
- Reduce cognitive load.
- Maintain consistency with the Pharmora Design System.
- Support responsive layouts.
- Prioritize user identity and account information.

---

# 3. Layout Structure

```
┌────────────────────────────────────────────────────────────────────────────┐
│                          Top Navigation                                    │
├──────────────┬─────────────────────────────────────────────────────────────┤
│              │                                                             │
│              │ Page Header                                                 │
│              │                                                             │
│ Sidebar      ├─────────────────────────────────────────────────────────────┤
│              │                                                             │
│              │ Profile Summary Card                                        │
│              │                                                             │
│              ├─────────────────────────────────────────────────────────────┤
│              │ Personal Information                                        │
│              │                                                             │
│              ├─────────────────────────────────────────────────────────────┤
│              │ Account Information                                         │
│              │                                                             │
│              ├─────────────────────────────────────────────────────────────┤
│              │ Quick Actions                                               │
│              │                                                             │
└──────────────┴─────────────────────────────────────────────────────────────┘
```

---

# 4. Information Hierarchy

Priority order:

1. Page Header
2. Profile Summary
3. Personal Information
4. Account Information
5. Quick Actions

The profile summary should immediately establish user identity.

---

# 5. Screen Sections

## Header

Contains:

- Page Title
- Breadcrumb

---

## Sidebar

Contains only application navigation.

Profile information should not appear inside the sidebar.

---

## Profile Summary

Displays:

- Profile Picture
- Full Name
- User Role
- Email Address
- Account Status

Primary action:

- Edit Profile

---

## Personal Information

Display editable fields.

Recommended fields:

- Full Name
- Email Address
- Phone Number
- Job Position

---

## Account Information

Display read-only information.

Recommended fields:

- User ID
- Account Role
- Created Date
- Last Login
- Email Verification Status

---

## Quick Actions

Display action buttons.

Recommended actions:

- Edit Profile
- Change Password
- Open Settings

---

## Profile Picture

Supports:

- Upload Image
- Replace Image
- Remove Image

Image preview should remain visible.

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

Form Field Gap

16 px

---

# 8. Responsive Layout

## Desktop

Expanded Sidebar

Two-column Information Layout

Large Profile Summary

---

## Laptop

Adaptive Grid

Responsive Cards

---

## Tablet

Collapsed Sidebar

Single-column Sections

Responsive Forms

---

## Mobile

Single Column

Centered Profile Summary

Stacked Cards

Large Touch Targets

---

# 9. User Interaction

Primary Actions

- Edit Profile
- Save Changes

Secondary Actions

- Change Password
- Open Settings

---

# 10. Empty State

If no profile picture exists:

Display:

- Default Avatar
- Upload Profile Picture Button

Other account information should display normally.

---

# 11. Loading State

Display:

- Skeleton Avatar
- Skeleton Cards
- Skeleton Form Fields

Prevent layout shifting during loading.

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
- Accessible Form Controls
- Consistent Focus Order
- Readable Layout Structure

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

The Profile Wireframe should include:

- Desktop Layout
- Tablet Layout
- Mobile Layout

Each version should demonstrate:

- Navigation
- Information Hierarchy
- Form Layout
- Responsive Adaptation

---

# 16. Handoff Checklist

Before proceeding to High-Fidelity Design:

- Layout approved
- Profile summary approved
- Information hierarchy approved
- Form structure approved
- Responsive behavior validated
- UX reviewed
- Stakeholder approval completed

---

# 17. Related Documents

- Profile Overview
- Profile Security
- Settings
- Dashboard Overview
- UI Planning Document
- Screen Inventory
- Design System
- Core UI Components
- Layout & Grid System

---

# 18. Definition of Done

The Profile Wireframe is complete when:

- Information hierarchy is validated.
- Layout structure is finalized.
- Profile summary is approved.
- Form structure is approved.
- Responsive layout is verified.
- UX review has been completed.
- Ready for High-Fidelity Design.