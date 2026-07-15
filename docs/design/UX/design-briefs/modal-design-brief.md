# Modal System

---

# Overview

The Modal System defines reusable confirmation dialogs used throughout the Pharmora application.

Instead of navigating users to separate pages, important actions should be confirmed using clean, focused, and professional modal dialogs.

Every modal should reduce accidental actions while maintaining a smooth user experience.

The design must remain consistent with the Pharmora Design System.

---

# Objective

Provide clear confirmation before users perform important actions.

Users should immediately understand:

- What action is about to happen
- The consequences of the action
- Whether the action can be undone
- What options are available

---

# Design Principles

Every modal should:

- Stay focused on one action
- Be easy to understand
- Minimize cognitive load
- Prevent accidental mistakes
- Maintain generous whitespace
- Follow Pharmora's enterprise design language

---

# Layout

Centered modal dialog.

Background overlay:

- Black
- 40% opacity
- Slight blur (optional)

The page behind the modal remains visible.

---

# Modal Structure

Every modal follows the same hierarchy.

1. Status Icon

2. Title

3. Description

4. Optional Warning Text

5. Action Buttons

---

# Components

## Modal Container

White background

Rounded corners

20px radius

Soft shadow

Thin border

Maximum width

480px

Comfortable padding

Auto height

---

## Status Icon

Top center.

Circular background.

Lucide Icons.

Variant color depends on action.

---

## Title

Large.

Bold.

Dark Slate.

Center aligned.

---

## Description

Muted gray.

Maximum three lines.

Center aligned.

---

## Optional Warning Text

Smaller typography.

Used only for destructive actions.

Muted color.

Never use alarming language.

---

## Primary Button

Large.

Full width on mobile.

Right aligned on desktop.

Uses action color.

---

## Secondary Button

Neutral ghost button.

Label examples:

Cancel

Go Back

Close

---

# Button Order

Desktop

[ Cancel ]    [ Confirm ]

Mobile

Cancel

Confirm

Stack vertically.

---

# Animation

Open

Fade + Scale

Duration

200ms

Close

Fade Out

Duration

150ms

Background blur should appear smoothly.

---

# Color Palette

Use only official Pharmora Design System.

Primary Green

Dark Slate

Gray

White

Soft Green

Soft Yellow

Soft Red

Soft Blue

Avoid saturated colors.

---

# Typography

Inter

Consistent with Design System.

Comfortable spacing.

Clear hierarchy.

---

# Modal Variants

---

# Delete Confirmation

## Purpose

Confirm permanent deletion.

## Icon

Trash

## Title

Delete Product?

## Description

Are you sure you want to delete this product?

This action cannot be undone.

## Primary Button

Delete

## Secondary Button

Cancel

## Accent Color

Soft Red

---

# Logout Confirmation

## Purpose

Confirm logout.

## Icon

Log Out

## Title

Sign Out?

## Description

You're about to sign out of your Pharmora account.

You can sign back in at any time.

## Primary Button

Sign Out

## Secondary Button

Cancel

## Accent Color

Primary Green

---

# Save Confirmation

## Purpose

Confirm saving changes.

## Icon

Save

## Title

Save Changes?

## Description

Would you like to save your changes before leaving this page?

## Primary Button

Save Changes

## Secondary Button

Discard

## Accent Color

Primary Green

---

# Archive Confirmation

## Purpose

Archive an item without deleting it.

## Icon

Archive

## Title

Archive Product?

## Description

Archived items will no longer appear in active inventory but can be restored later.

## Primary Button

Archive

## Secondary Button

Cancel

## Accent Color

Soft Yellow

---

# Generic Confirmation

## Purpose

Reusable confirmation dialog.

## Icon

Circle Check

## Title

Confirm Action

## Description

Please confirm that you want to continue.

## Primary Button

Confirm

## Secondary Button

Cancel

## Accent Color

Primary Green

---

# Accessibility

Keyboard accessible.

Escape key closes modal.

Focus trapped inside modal.

Visible focus states.

Screen-reader friendly.

---

# Responsive

Desktop

Centered modal.

Tablet

Centered modal.

Mobile

90% screen width.

Buttons stacked vertically.

---

# Notes

All confirmation dialogs should reuse the same modal component.

Only the following elements should change:

- Icon
- Title
- Description
- Button Labels
- Accent Color

Everything else should remain visually consistent.

This approach improves usability, development efficiency, and long-term maintainability while reinforcing Pharmora's enterprise design language.