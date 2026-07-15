# Toast Notifications

---

# Overview

The Toast Notification module defines how Pharmora communicates the result of user actions through lightweight, non-intrusive notifications.

Toast notifications provide immediate feedback without interrupting the user's workflow.

They should be informative, concise, and visually consistent with the Pharmora Design System.

---

# Objective

Provide instant feedback for user actions while maintaining a clean and professional experience.

Users should immediately understand:

- What happened
- Whether the action succeeded or failed
- Whether any further action is required

---

# Design Principles

Every toast notification should:

- Be lightweight
- Never block user interaction
- Automatically disappear after a few seconds
- Be easy to scan
- Feel calm and professional
- Follow the Pharmora Design System

---

# Placement

Desktop

Top Right Corner

Mobile

Top Center

Maximum

3 visible notifications at once.

Newest notification appears on top.

---

# Duration

Success

4 seconds

Info

4 seconds

Warning

6 seconds

Error

Persistent until dismissed or 8 seconds maximum.

---

# Layout

Each toast consists of:

1. Status Icon

2. Title

3. Description

4. Close Button

Optional

Progress Bar

---

# Components

## Container

White background

Thin border

Soft shadow

Rounded corners

16px radius

Maximum width

380px

Minimum height

72px

Comfortable padding

---

## Status Icon

Left aligned.

Circular background.

Lucide Icons.

Examples:

Success

Circle Check

Error

Circle X

Warning

Triangle Alert

Info

Info

---

## Title

Bold.

Dark Slate.

Maximum one line.

---

## Description

Muted gray.

Maximum two lines.

---

## Close Button

Small X icon.

Top right.

Hover state.

---

## Progress Bar (Optional)

Thin line at bottom.

Represents remaining display duration.

Uses corresponding status color.

---

# Animation

Entry

Fade + Slide Up

Duration

250ms

Exit

Fade Out

Duration

200ms

Stack smoothly.

No abrupt movement.

---

# Color Palette

Only use official Pharmora Design System.

Primary Green

Dark Slate

Gray

White

Light Green

Soft Yellow

Soft Red

Soft Blue

Avoid overly saturated colors.

---

# Typography

Inter

Consistent with the Design System.

Clear hierarchy.

Comfortable spacing.

---

# Toast Variants

---

# Success

## Purpose

Action completed successfully.

## Icon

Circle Check

## Title

Success

## Description Examples

Product added successfully.

Supplier updated successfully.

Inventory updated successfully.

Password reset successfully.

Settings saved successfully.

## Accent Color

Success Green

---

# Error

## Purpose

Action failed.

## Icon

Circle X

## Title

Something Went Wrong

## Description Examples

Unable to save changes.

Failed to delete product.

Network connection lost.

Please try again later.

## Accent Color

Soft Red

---

# Warning

## Purpose

Potential issue requiring attention.

## Icon

Triangle Alert

## Title

Attention Required

## Description Examples

Product stock is running low.

This action cannot be undone.

Some fields are incomplete.

Session will expire soon.

## Accent Color

Soft Yellow

---

# Info

## Purpose

Provide additional information.

## Icon

Info

## Title

Information

## Description Examples

Inventory report is being generated.

A new version is available.

Changes will take effect after refresh.

Scheduled maintenance starts tonight.

## Accent Color

Soft Blue

---

# Behavior

Multiple notifications should stack vertically.

Each notification maintains equal spacing.

Closing one notification should smoothly reposition the remaining notifications.

---

# Accessibility

Keyboard accessible.

Visible focus states.

Screen-reader friendly.

Icons should never be the only method of conveying meaning.

---

# Responsive

Desktop

Top Right

Tablet

Top Right

Mobile

Top Center

Maintain comfortable margins.

---

# Notes

Toast notifications should never interrupt user workflows.

They should communicate important information quickly while remaining visually subtle.

Every notification should reinforce the premium enterprise experience of Pharmora.

The overall appearance should remain minimal, modern, and consistent with the existing Design System.