# 📄 Design System

> **Version:** 1.0  
> **Status:** Final  
> **Document Type:** Design System  
> **Project:** Pharmora  
> **Prepared by:** Astrella Syadira Ramadhante  
> **Last Updated:** July 2026

---

# Table of Contents

- [1. Design Philosophy](#1-design-philosophy)
- [2. Brand Identity](#2-brand-identity)
- [3. Color System](#3-color-system)
- [4. Typography](#4-typography)
- [5. Spacing System](#5-spacing-system)
- [6. Grid System](#6-grid-system)
- [7. Border Radius](#7-border-radius)
- [8. Elevation](#8-elevation)
- [9. Iconography](#9-iconography)
- [10. Buttons](#10-buttons)
- [11. Input Fields](#11-input-fields)
- [12. Dropdowns](#12-dropdowns)
- [13. Tables](#13-tables)
- [14. Cards](#14-cards)
- [15. Badges](#15-badges)
- [16. Toast Notifications](#16-toast-notifications)
- [17. Empty States](#17-empty-states)
- [18. Loading States](#18-loading-states)
- [19. Responsive Design](#19-responsive-design)
- [20. Accessibility](#20-accessibility)
- [21. Closing](#21-closing)

---

# 1. Design Philosophy

Pharmora follows a design language called **Emerald Enterprise**.

Emerald Enterprise is a modern SaaS design approach created specifically for Pharmora. It emphasizes clarity, consistency, and usability while maintaining a clean and professional appearance suitable for healthcare inventory management.

The design philosophy prioritizes operational efficiency over visual decoration. Every interface element should support the user's workflow, reduce cognitive load, and make daily inventory management faster and more intuitive.

Rather than relying on heavy visual effects, the interface focuses on typography, spacing, hierarchy, and thoughtful component organization to create a premium user experience.

The Emerald Enterprise design language is built upon the following principles:

---

## Simplicity

Every screen should communicate one primary purpose.

Only the information required to complete the user's task should be presented.

Unnecessary visual elements should be avoided.

---

## Consistency

Similar actions should always look and behave the same.

Buttons, forms, tables, cards, spacing, and navigation patterns remain consistent across every module.

Consistency reduces learning time and increases user confidence.

---

## Clarity

Information should be organized using a strong visual hierarchy.

Users should immediately understand where to focus their attention without unnecessary distractions.

Typography, spacing, and alignment are preferred over decorative elements.

---

## Efficiency

The interface should help Inventory Administrators complete repetitive operational tasks with as few interactions as possible.

Frequently used actions should remain easily accessible throughout the application.

---

## Scalability

The design system should support future product growth without requiring significant visual restructuring.

New modules should integrate naturally by following the same design language and component standards.

---

# 2. Brand Identity

## Brand Name

**Pharmora**

---

## Tagline

**Smart Inventory. Seamless Operations.**

---

## Brand Positioning

Pharmora is a modern inventory management platform designed for healthcare businesses.

The product combines enterprise-grade usability with a clean and approachable interface, enabling organizations to manage inventory more efficiently through a centralized digital platform.

---

## Design Language

**Emerald Enterprise**

A modern enterprise SaaS design language focused on simplicity, consistency, operational efficiency, and premium user experience.

---

## Brand Personality

The Pharmora interface should consistently communicate the following characteristics:

- Professional
- Modern
- Reliable
- Efficient
- Clean
- Minimal
- Premium
- Trustworthy

---

## Visual Direction

The visual identity of Pharmora follows a minimalist enterprise SaaS aesthetic inspired by leading modern software products.

Primary design characteristics include:

- Spacious layouts
- Minimal color palette
- Clean typography
- Soft shadows
- Rounded components
- Thin borders
- Consistent spacing
- Simple iconography
- Data-focused interfaces

The overall experience should feel calm, organized, and focused on productivity rather than decoration.

---

## Design Inspirations

The Emerald Enterprise design language draws inspiration from several modern SaaS products, including:

- Stripe Dashboard
- Linear
- Vercel Dashboard
- Supabase
- Notion
- Clerk

These products are referenced for their design principles, consistency, and usability rather than for direct visual replication.

---

## Design Goals

The user interface should enable users to:

- Understand information quickly.
- Navigate confidently.
- Complete operational tasks efficiently.
- Maintain focus during inventory management.
- Experience a polished and professional application.

Every design decision should reinforce Pharmora's identity as a modern enterprise inventory management platform rather than a generic administration dashboard.

---

# 3. Color System

The Emerald Enterprise design language uses a restrained color palette that emphasizes clarity, readability, and consistency.

Colors should communicate hierarchy and status rather than decoration.

The interface relies primarily on neutral colors, while emerald serves as the primary accent throughout the application.

---

## Primary Colors

| Role | Color | Hex |
|------|-------|------|
| Primary | Emerald 600 | `#059669` |
| Primary Hover | Emerald 700 | `#047857` |
| Primary Light | Emerald 50 | `#ECFDF5` |

Primary colors are reserved for high-priority actions, active navigation states, focused elements, and key interactive components.

---

## Neutral Colors

| Role | Color | Hex |
|------|-------|------|
| Background | White | `#FFFFFF` |
| Surface | Slate 50 | `#F8FAFC` |
| Border | Slate 200 | `#E2E8F0` |
| Divider | Slate 100 | `#F1F5F9` |
| Primary Text | Slate 900 | `#0F172A` |
| Secondary Text | Slate 600 | `#475569` |
| Placeholder | Slate 400 | `#94A3B8` |

Neutral colors establish the visual foundation of the interface and improve readability.

---

## Semantic Colors

| State | Color | Hex |
|------|-------|------|
| Success | Green 600 | `#16A34A` |
| Warning | Amber 500 | `#F59E0B` |
| Danger | Red 600 | `#DC2626` |
| Info | Sky 500 | `#0EA5E9` |

Semantic colors should only communicate system feedback and operational status.

---

## Usage Guidelines

- Emerald is reserved for primary interactions.
- Neutral colors dominate the interface.
- Avoid using multiple accent colors within the same screen.
- Status colors should never replace the primary brand color.
- Decorative gradients should be avoided.

---

# 4. Typography

Typography is the primary visual element within the Emerald Enterprise design language.

Clear typography creates hierarchy while reducing the need for excessive visual decoration.

---

## Font Family

| Usage | Font |
|--------|------|
| Primary | Inter |
| Fallback | System UI, sans-serif |

---

## Typography Scale

| Style | Size | Weight | Usage |
|--------|------|--------|------|
| Display | 36 px | Bold | Large page headings |
| H1 | 30 px | Bold | Page titles |
| H2 | 24 px | Semibold | Section headings |
| H3 | 20 px | Semibold | Card titles |
| Body Large | 16 px | Regular | Main content |
| Body | 14 px | Regular | Tables and forms |
| Small | 12 px | Medium | Labels and helper text |

---

## Typography Principles

- Maintain strong visual hierarchy.
- Use bold text sparingly.
- Prefer whitespace over decorative typography.
- Limit font weights to improve consistency.
- Ensure comfortable reading across all screen sizes.

---

# 5. Spacing System

Spacing establishes rhythm and consistency throughout the interface.

Pharmora follows an **8-point spacing system**, ensuring all layouts align to predictable increments.

---

## Spacing Scale

| Token | Value |
|-------|------|
| XS | 4 px |
| SM | 8 px |
| MD | 16 px |
| LG | 24 px |
| XL | 32 px |
| 2XL | 48 px |
| 3XL | 64 px |

---

## Usage Principles

- Maintain consistent spacing between related elements.
- Separate sections using larger spacing values.
- Avoid arbitrary spacing values.
- Preserve generous whitespace to improve readability.

---

# 6. Grid System

The interface follows a responsive grid system optimized for enterprise dashboard applications.

---

## Desktop

- 12-column grid
- Maximum content width: 1440 px
- Sidebar width: 280 px
- Content padding: 32 px

---

## Tablet

- 8-column grid
- Collapsible sidebar
- Reduced spacing between sections

---

## Mobile

- Single-column layout
- Collapsible navigation drawer
- Full-width components
- Horizontal scrolling for large tables when necessary

---

## Grid Principles

- Align all components to the grid.
- Avoid overlapping content.
- Maintain consistent gutters.
- Prioritize readability over information density.

---

# 7. Border Radius

Rounded corners contribute to Pharmora's approachable yet professional appearance.

---

## Radius Scale

| Token | Radius |
|-------|--------|
| Small | 6 px |
| Medium | 10 px |
| Large | 14 px |
| Extra Large | 20 px |
| Full | 9999 px |

---

## Usage Guidelines

| Component | Radius |
|-----------|--------|
| Buttons | Medium |
| Input Fields | Medium |
| Dropdowns | Medium |
| Cards | Large |
| Toast Notifications | Large |
| Badges | Full |

Rounded corners should remain subtle and consistent throughout the interface.

---

# 8. Elevation

Elevation creates visual hierarchy while maintaining a clean and minimal interface.

Instead of relying on strong shadows, Pharmora uses soft elevation to distinguish surfaces.

---

## Shadow Scale

| Level | Usage |
|--------|------|
| None | Flat surfaces |
| Small | Input fields |
| Medium | Cards |
| Large | Dropdown menus |
| Extra Large | Modal dialogs |

---

## Elevation Principles

- Prefer subtle shadows over heavy visual effects.
- Combine shadows with thin borders for improved definition.
- Avoid excessive depth.
- Maintain consistent elevation across similar components.

The overall interface should appear light, calm, and modern while preserving a clear visual hierarchy.

---

# 9. Iconography

Icons improve visual recognition while keeping the interface clean and intuitive.

Pharmora uses icons to support navigation and actions, not to replace text labels.

---

## Icon Library

**Primary Library:** Lucide Icons

Lucide provides a modern, lightweight, and consistent icon set that aligns with the Emerald Enterprise design language.

---

## Usage Guidelines

- Pair icons with text whenever possible.
- Use simple outline icons.
- Maintain consistent icon sizes throughout the application.
- Avoid decorative icons that do not provide functional value.

---

## Standard Icon Size

| Size | Usage |
|------|------|
| 16 px | Inline actions |
| 20 px | Buttons |
| 24 px | Navigation |
| 32 px | Empty States |

---

## Common Icons

| Feature | Icon |
|---------|------|
| Dashboard | LayoutDashboard |
| Products | Package |
| Categories | FolderTree |
| Suppliers | Truck |
| Inventory History | History |
| Profile | User |
| Search | Search |
| Add | Plus |
| Edit | Pencil |
| Delete | Trash2 |
| Save | Save |
| Logout | LogOut |

---

# 10. Buttons

Buttons represent the primary interaction mechanism throughout the application.

Every button should communicate a clear action and maintain visual consistency.

---

## Button Variants

| Variant | Usage |
|---------|------|
| Primary | Main actions such as Save or Add |
| Secondary | Less prominent actions |
| Outline | Neutral actions such as Back or Close |
| Danger | Destructive actions such as Delete |

---

## Button Sizes

| Size | Height |
|------|--------|
| Small | 36 px |
| Medium | 40 px |
| Large | 48 px |

---

## Button Principles

- One primary button per section.
- Use concise action-oriented labels.
- Keep spacing consistent.
- Destructive actions require confirmation before execution.

---

## Common Button Labels

- Add Product
- Add Category
- Add Supplier
- Save
- Update
- Cancel
- Delete
- Logout

---

# 11. Input Fields

Input fields collect user information in a simple and predictable manner.

All input components follow the same visual structure across every module.

---

## Standard Structure

```text
Label

[________________________]

Helper Text

Validation Message
```

---

## Supported Input Types

- Text
- Number
- Email
- Password
- Textarea

---

## Input Principles

- Labels appear above fields.
- Required fields are clearly indicated.
- Validation messages appear below inputs.
- Placeholder text should provide examples rather than instructions.

---

# 12. Dropdowns

Dropdowns allow users to select predefined values while minimizing input errors.

---

## Common Usage

- Category Selection
- Supplier Selection
- Transaction Type
- Filter Options

---

## Standard Structure

```text
Category

[ Select Category ▼ ]
```

---

## Dropdown Principles

- Display placeholder text before selection.
- Sort options alphabetically whenever possible.
- Use consistent widths within forms.
- Prevent invalid selections.

---

# 13. Tables

Tables display structured operational data throughout the application.

Consistency and readability take priority over visual complexity.

---

## Standard Structure

```text
--------------------------------------------------------------
Name        Category      Supplier      Stock      Action
--------------------------------------------------------------
Paracetamol Medicine      ABC Pharma    120     Edit Delete
--------------------------------------------------------------
```

---

## Table Components

- Header
- Body
- Row Actions
- Search
- Filter
- Pagination

---

## Table Principles

- Maintain generous row spacing.
- Left-align textual content.
- Right-align numeric values when appropriate.
- Highlight row hover states subtly.
- Keep action buttons consistent across all modules.

---

# 14. Cards

Cards group related information into visually distinct sections.

They are primarily used on the Dashboard to present key operational metrics.

---

## Card Types

| Type | Usage |
|------|------|
| Summary Card | Dashboard metrics |
| Information Card | Profile information |
| Form Card | Data entry sections |

---

## Standard Structure

```text
+----------------------+
| Total Products       |
|                      |
|        245           |
+----------------------+
```

---

## Card Principles

- Keep content concise.
- Maintain consistent internal spacing.
- Use subtle borders and shadows.
- Avoid excessive visual decoration.

---

# 15. Badges

Badges communicate status and categories using compact visual indicators.

They should supplement information rather than replace it.

---

## Badge Variants

| Variant | Usage |
|---------|------|
| Success | Stock In |
| Danger | Stock Out |
| Warning | Low Stock |
| Neutral | General Labels |

---

## Badge Principles

- Use semantic colors consistently.
- Keep labels short.
- Avoid using badges as primary navigation.
- Ensure sufficient color contrast for readability.

---

# 16. Toast Notifications

Toast notifications provide immediate feedback after user actions without interrupting the user's workflow.

They should appear briefly and disappear automatically after a few seconds.

---

## Toast Variants

| Variant | Usage |
|---------|------|
| Success | Successful operations |
| Warning | User attention required |
| Error | Failed operations |
| Info | General information |

---

## Examples

```text
✅ Product created successfully.

✅ Stock updated successfully.

⚠️ Available stock is running low.

❌ Failed to save supplier data.
```

---

## Toast Principles

- Display in the top-right corner of the screen.
- Auto-dismiss after approximately 3–5 seconds.
- Keep messages concise and action-oriented.
- Avoid displaying multiple toast notifications simultaneously whenever possible.

---

# 17. Empty States

Empty states help users understand why no data is currently displayed and guide them toward the next appropriate action.

Rather than simply displaying "No Data", empty states should encourage users to continue their workflow.

---

## Example

```text
📦

No products found.

Start by creating your first product.

[ Add Product ]
```

---

## Empty State Principles

- Explain why the screen is empty.
- Provide a clear next action.
- Use friendly and concise language.
- Maintain the application's minimal visual style.

---

# 18. Loading States

Loading states provide visual feedback while data is being retrieved or processed.

Pharmora prioritizes skeleton loading over traditional loading indicators whenever appropriate.

---

## Preferred Loading Pattern

- Skeleton cards
- Skeleton tables
- Skeleton form placeholders

---

## Alternative Loading Indicator

A simple spinner may be used for short loading operations such as form submissions.

---

## Loading Principles

- Minimize perceived waiting time.
- Prevent layout shifts while loading.
- Match placeholder dimensions with the final content.
- Avoid unnecessary animations.

---

# 19. Responsive Design

Pharmora follows a desktop-first responsive strategy while ensuring usability across tablet and mobile devices.

Although desktop remains the primary platform for inventory management, all core functionality remains accessible on smaller screens.

---

## Desktop

Desktop provides the optimal experience for daily inventory operations.

Characteristics include:

- Fixed sidebar navigation.
- Multi-column layouts.
- Full-width tables.
- Spacious content areas.
- Maximum information visibility.

---

## Tablet

Tablet layouts preserve the desktop experience while adapting to smaller screens.

Adjustments include:

- Collapsible sidebar.
- Responsive dashboard cards.
- Reduced spacing.
- Horizontally scrollable tables when necessary.

---

## Mobile

Mobile layouts prioritize accessibility and usability without sacrificing essential functionality.

Adjustments include:

- Navigation drawer replaces the fixed sidebar.
- Single-column layouts.
- Full-width buttons.
- Full-width form fields.
- Horizontally scrollable tables.
- Stacked dashboard cards.

Inventory management tasks remain fully functional while optimizing the interface for smaller screens.

---

## Responsive Principles

- Prioritize readability over information density.
- Preserve consistent navigation patterns.
- Maintain touch-friendly interaction targets.
- Ensure layouts adapt naturally across all supported devices.

---

# 20. Accessibility

Accessibility improves usability for all users and contributes to a more inclusive user experience.

Pharmora incorporates accessibility best practices throughout the interface.

---

## Accessibility Guidelines

- Maintain sufficient color contrast.
- Use descriptive labels for all form fields.
- Provide visible keyboard focus indicators.
- Ensure interactive elements remain keyboard accessible.
- Avoid relying solely on color to communicate status.
- Use semantic HTML whenever possible.
- Support screen readers through proper labeling and document structure.

---

## Accessibility Principles

Accessibility should be considered a fundamental aspect of interface design rather than an optional enhancement.

Every component should remain understandable, navigable, and usable for as many users as possible.

---

# 21. Closing

The Pharmora Design System establishes a unified visual language for the entire application.

Together with the Wireframe, Information Architecture, User Flow, and Product Requirement Document, it provides a complete design foundation for implementing a consistent and maintainable user interface.

The Emerald Enterprise design language emphasizes simplicity, consistency, operational efficiency, and long-term scalability.

Future enhancements should continue following the principles and standards established throughout this document to ensure a cohesive user experience as the application evolves.