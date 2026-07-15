# Profile Design Brief

## Document Information

| Item | Value |
|------|--------|
| Project | Pharmora |
| Module | Profile |
| Document | Profile Design Brief |
| Version | 1.0 |
| Status | Final |
| Priority | 🟡 Medium |
| Last Updated | July 2026 |

---

# 1. Overview

## Purpose

The Profile module provides users with a centralized workspace to manage their personal information, account details, work profile, and activity history.

This screen enables users to review their profile, understand their account status, and access important account information while maintaining consistency with the official Pharmora Design System.

Unlike the Settings module, which manages application-wide preferences, the Profile module focuses entirely on the authenticated user's identity and account.

---

# 2. Business Goals

The Profile module aims to:

- Centralize user information.
- Improve account transparency.
- Simplify profile management.
- Display work-related information.
- Increase user confidence and trust.
- Support future role-based features.

---

# 3. Target Users

Primary Users

- Inventory Administrator
- Pharmacy Owner
- Operations Manager

Secondary Users

- System Administrator

---

# 4. Design Goals

The Profile page should feel professional, organized, and trustworthy.

Design objectives:

- Clean profile presentation
- Easy-to-read information
- Clear information hierarchy
- Enterprise SaaS appearance
- High readability
- Consistent design language
- Future scalability

---

# 5. Layout Structure

```
Top Navigation

Sidebar

Page Header

Profile Summary

Personal Information

Account Information

Work Information

Recent Activity

Quick Statistics
```

---

# 6. Screen Components

## Header

Displays:

- Page Title
- Description
- Edit Profile Button

---

## Profile Summary

Large profile card displaying:

- Avatar
- Full Name
- Job Title
- Role Badge
- Workspace
- Member Since

Display a professional summary layout.

---

## Personal Information

Editable fields:

- Full Name
- Email Address
- Phone Number
- Date of Birth
- Location

Components:

- Text Fields
- Date Picker
- Input Fields

---

## Account Information

Read-only information.

Display:

- Username
- User ID
- Account Status
- Email Verification
- Last Login
- Account Created

Use status badges where appropriate.

---

## Work Information

Display:

- Department
- Position
- Employee ID
- Workspace
- Timezone

Future-ready structure for enterprise organizations.

---

## Recent Activity

Display a chronological activity list.

Example activities:

- Updated Inventory
- Added Product
- Generated Report
- Updated Profile
- Exported Report

Each activity should display:

- Icon
- Activity Title
- Timestamp

---

## Quick Statistics

Display compact statistic cards.

Examples:

- Products Added
- Reports Generated
- Inventory Updates
- Member Since

Reuse KPI card styles from Dashboard.

---

# 7. Data Sources

| Widget | Source |
|----------|--------|
| Profile Summary | User |
| Personal Information | User |
| Account Information | Authentication |
| Work Information | Organization |
| Recent Activity | Activity Log |
| Statistics | Dashboard Analytics |

---

# 8. UI Components

Reuse official Pharmora components.

Components:

- Sidebar
- Header
- Cards
- Avatar
- Buttons
- Text Fields
- Status Badge
- Statistic Cards
- Timeline List
- Divider

No new UI components should be introduced.

---

# 9. Visual Hierarchy

Priority:

1. Header
2. Profile Summary
3. Personal Information
4. Account Information
5. Work Information
6. Recent Activity
7. Quick Statistics

The profile summary should become the visual anchor of the page.

---

# 10. Empty State

If profile information is incomplete:

Display:

- Avatar Placeholder
- Description
- Complete Profile Button

Example:

"Complete your profile to personalize your Pharmora workspace."

---

# 11. Loading State

Display skeleton components.

Include:

- Skeleton Avatar
- Skeleton Cards
- Skeleton Statistics
- Skeleton Activity

Avoid layout shifting.

---

# 12. Error State

Display:

- Error Illustration
- Description
- Retry Button

Example:

"Unable to load your profile."

---

# 13. Success State

Display toast notifications.

Examples:

- Profile updated successfully.
- Password changed.
- Avatar updated.
- Information saved.

---

# 14. Responsive Behavior

Desktop

- Two-column layout
- Left profile summary
- Right information cards

Laptop

- Adaptive spacing

Tablet

- Profile summary above content

Mobile

- Single-column layout
- Full-width cards
- Stacked statistics

---

# 15. Accessibility

The Profile module must support:

- Keyboard Navigation
- Screen Reader Compatibility
- Visible Focus States
- Accessible Forms
- High Color Contrast
- Semantic Labels

---

# 16. Performance

The Profile page should:

- Load within 2 seconds.
- Display profile instantly.
- Save profile without full-page refresh.
- Minimize API requests.

---

# 17. Design Principles

The screen should follow:

- Simplicity
- Clarity
- Consistency
- Professionalism
- Accessibility
- Enterprise Design
- Minimalism

Inspired by:

- Stripe
- Linear
- GitHub
- Vercel
- Clerk

---

# 18. Design Constraints

The Profile screen must:

- Follow the official Pharmora Design System.
- Reuse existing UI components.
- Reuse typography.
- Reuse spacing scale.
- Reuse official buttons.
- Reuse sidebar and navigation.
- Maintain consistency with Dashboard, Products, Categories, Suppliers, Inventory, Reports, and Settings.

Do not introduce:

- Cover Photos
- Social Media Layouts
- Decorative Illustrations
- Glassmorphism
- Heavy Gradients
- Unnecessary Animations

---

# 19. Deliverables

The Profile screen should include:

- Desktop High-Fidelity Design
- Responsive-ready Layout
- Profile Summary
- Personal Information
- Account Information
- Work Information
- Recent Activity
- Quick Statistics

---

# 20. Definition of Done

The Profile screen is complete when:

- Profile summary is displayed.
- Personal information is editable.
- Account information is complete.
- Work information is displayed.
- Recent activity is available.
- Statistics are displayed.
- Responsive layout is validated.
- Design follows the official Pharmora Design System.
- Ready for High-Fidelity implementation.