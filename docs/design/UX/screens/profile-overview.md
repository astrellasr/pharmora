# Profile Overview

## Document Information

| Item | Value |
|------|--------|
| Project | Pharmora |
| Module | Profile |
| Screen | Profile Overview |
| Version | 1.0 |
| Status | Final |
| Priority | 🟢 Low |
| Last Updated | July 2026 |

---

# 1. Overview

## Purpose

The Profile Overview screen allows users to manage their personal information, account details, and professional profile within the Pharmora platform.

It serves as a centralized location for maintaining user identity, viewing account information, and accessing profile-related settings.

---

## Business Goals

The Profile module is designed to:

- Centralize user profile management.
- Improve account personalization.
- Maintain accurate user information.
- Support secure account ownership.
- Enhance user experience across the platform.

---

## Target Users

- Administrator
- Inventory Staff
- Store Manager

---

# 2. User Goals

Users should be able to:

- View personal information.
- Update profile details.
- Change profile picture.
- Review account information.
- Access account security settings.
- Navigate to application settings.

---

# 3. Navigation

Accessible From

- User Avatar
- Sidebar Navigation
- Settings

Navigate To

- Profile Security
- Settings
- Dashboard

---

# 4. Permissions

| User Role | Access |
|------------|--------|
| Administrator | Full Access |
| Inventory Staff | Personal Profile Only |
| Store Manager | Personal Profile Only |

---

# 5. Layout Structure

```
Top Navigation

Sidebar

Page Header

Profile Summary Card

Personal Information

Account Information

Quick Actions

Footer (Optional)
```

---

# 6. Screen Components

## Header

Contains:

- Page Title
- Breadcrumb

---

## Profile Summary

Displays:

- Profile Picture
- Full Name
- Role
- Email Address
- Account Status

---

## Personal Information

Fields:

- Full Name
- Email Address
- Phone Number
- Job Position

---

## Account Information

Displays:

- User ID
- Role
- Account Created Date
- Last Login
- Email Verification Status

---

## Quick Actions

Available actions:

- Edit Profile
- Change Password
- Open Settings

---

## Profile Picture

Supports:

- Upload New Photo
- Remove Photo
- Preview Image

---

# 7. Data Sources

| Widget | Source |
|---------|--------|
| Profile Summary | Users |
| Personal Information | Users |
| Account Information | Authentication |

---

# 8. UI Components

The Profile screen uses the following shared UI components.

- Sidebar
- Header
- Breadcrumb
- Cards
- Avatar
- Buttons
- Input Fields
- Badges
- Divider
- Toast Notification

---

# 9. Empty State

If no profile image exists:

Display:

- Default Avatar
- Upload Profile Picture Button

Other profile information should display default account values.

---

# 10. Loading State

Display:

- Skeleton Avatar
- Skeleton Cards
- Skeleton Form Fields

Prevent layout shifting.

---

# 11. Error State

If profile data fails to load:

Display:

- Error Illustration
- Error Message
- Retry Button

Example:

"Unable to load profile information."

---

# 12. Success State

Display toast notifications after successful actions.

Examples

- Profile updated successfully.
- Profile picture changed successfully.
- Personal information saved successfully.

---

# 13. Responsive Behavior

## Desktop

- Sidebar Navigation
- Two-column content layout
- Large profile summary card

---

## Laptop

- Responsive spacing
- Adaptive layout

---

## Tablet

- Collapsible sidebar
- Single-column profile sections

---

## Mobile

- Full-width cards
- Centered profile summary
- Stacked information sections

---

# 14. Accessibility

Requirements

- Keyboard Navigation
- Accessible Form Controls
- Screen Reader Compatibility
- Visible Focus Indicators
- WCAG Color Contrast Compliance

---

# 15. Performance Requirements

The Profile screen should:

- Load within 2 seconds.
- Optimize avatar loading.
- Save profile updates efficiently.
- Minimize unnecessary requests.

---

# 16. Security Considerations

- Authentication required.
- Users may only edit their own profile.
- Email address changes require verification.
- Password changes require current password confirmation.
- Uploaded profile images should be validated.

---

# 17. Acceptance Criteria

The screen is complete when:

- Profile information displays correctly.
- User can update personal information.
- Avatar upload functions properly.
- Validation works correctly.
- Responsive layout functions across supported devices.
- Empty, loading, error, and success states are implemented.

---

# 18. Future Enhancements

Potential improvements include:

- Activity Timeline
- Login History
- Connected Devices
- Notification Preferences
- Profile Completion Indicator
- Two-Factor Authentication Status
- Personal Preferences

---

# 19. Design References

This screen follows the official Pharmora Design System.

Related Documentation

- Settings
- Profile Security
- Dashboard Overview
- Design System
- Layout & Grid System
- Core UI Components
- UI Planning Document

---

# 20. Definition of Done

The Profile Overview screen is complete when:

- Functional requirements have been implemented.
- UI follows the Pharmora Design System.
- Responsive behavior is verified.
- Accessibility requirements are met.
- Performance targets are achieved.
- Documentation is complete.
- Ready for High-Fidelity Design.