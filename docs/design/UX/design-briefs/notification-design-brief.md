# Notification Center

---

# Overview

The Notification Center provides a centralized location where users can view important system updates, inventory alerts, account activities, and operational notifications.

Instead of interrupting users with modal dialogs, Pharmora delivers non-blocking notifications that help users stay informed while maintaining workflow efficiency.

The Notification Center should feel lightweight, organized, and consistent with the Pharmora Design System.

---

# Objective

Provide users with timely and relevant information without disrupting their current tasks.

Users should immediately understand:

- What happened
- When it happened
- Whether action is required
- How important the notification is

---

# Design Principles

Every notification should:

- Be concise
- Prioritize important information
- Support quick scanning
- Avoid unnecessary interruptions
- Maintain generous whitespace
- Follow the Pharmora enterprise design language

---

# Entry Points

Users can open the Notification Center by:

- Notification Bell in the Top Navigation
- Keyboard Shortcut (Future Enhancement)
- Notification Toast (optional)

---

# Layout

Desktop

Right-side dropdown panel.

Width

400px

Maximum Height

640px

Scrollable.

Rounded corners.

Soft shadow.

Thin border.

Mobile

Full-screen bottom sheet.

---

# Structure

The Notification Center consists of:

1. Header
2. Filter Tabs
3. Notification List
4. Empty State
5. Footer Action

---

# Header

Contains:

Notification Icon

Title

Notifications

Unread Count Badge

Mark All as Read

Settings Shortcut

---

# Filter Tabs

Display horizontally.

All

Unread

Inventory

Reports

Security

System

Each tab displays notification count.

---

# Notification Item

Each notification contains:

Status Icon

Title

Description

Timestamp

Optional Badge

Optional Action

Unread Indicator

---

# Notification Layout

Left

Status Icon

Center

Title

Description

Timestamp

Right

Chevron

Unread Dot

---

# Status Icons

Use Lucide Icons.

Inventory

Package

Reports

BarChart3

Security

ShieldCheck

System

Settings

Success

CircleCheck

Warning

TriangleAlert

Error

CircleX

Information

Info

---

# Notification Priority

## High

Red accent.

Requires immediate attention.

Examples

Critical inventory shortage

Security alert

Failed backup

---

## Medium

Yellow accent.

Requires attention soon.

Examples

Low stock warning

Pending report

Upcoming maintenance

---

## Low

Blue / Gray accent.

Informational.

Examples

Supplier added

Profile updated

Report exported

---

# Notification Types

---

## Inventory

Examples

Low Stock

Stock Out

Expired Product

Restock Completed

Inventory Updated

---

## Reports

Examples

Report Generated

Export Completed

Scheduled Report Ready

Analytics Updated

---

## Suppliers

Examples

New Supplier Added

Supplier Updated

Supplier Archived

---

## Categories

Examples

Category Created

Category Updated

Category Deleted

---

## Products

Examples

Product Created

Product Updated

Product Archived

Product Deleted

---

## Authentication

Examples

Password Changed

Email Verified

Successful Login

Suspicious Login

Session Expired

---

## System

Examples

Scheduled Maintenance

System Update

Backup Completed

Storage Warning

---

# Notification States

Unread

White background.

Green unread indicator.

Bold title.

Read

Neutral background.

Normal typography.

Archived

Muted appearance.

---

# Actions

Each notification may include:

View Details

Retry

Dismiss

Archive

Open Report

Open Product

Open Inventory

---

# Empty State

Title

You're All Caught Up

Description

There are currently no notifications waiting for you.

Illustration

Bell

Checkmark

Primary Button

Go to Dashboard

---

# Footer

View All Notifications

Centered text button.

Opens full notification history page.

---

# Search

Support instant search.

Placeholder

Search notifications...

Real-time filtering.

---

# Sorting

Newest First

Oldest First

Unread First

Priority

---

# Bulk Actions

Mark All as Read

Delete All

Archive Read

---

# Visual Style

Premium SaaS

Enterprise

Minimal

Professional

Large whitespace

Rounded corners

Soft shadows

Thin borders

Consistent spacing

---

# Color Palette

Use only official Pharmora Design System.

Primary Green

Dark Slate

Gray

White

Light Green

Soft Yellow

Soft Blue

Soft Red

---

# Typography

Inter

Medium title

Small description

Muted timestamp

---

# Animation

Panel

Slide Down

200ms

Notification

Fade In

Hover

150ms

Unread Indicator

Subtle pulse (optional)

---

# Accessibility

Keyboard accessible.

Screen-reader friendly.

Visible focus states.

Supports reduced motion.

---

# Responsive

Desktop

Dropdown panel.

Tablet

Side sheet.

Mobile

Bottom sheet.

---

# Security

Only display notifications relevant to the authenticated user.

Hide restricted notifications based on permissions.

---

# Notes

The Notification Center should function as the communication hub of Pharmora.

Notifications should always be actionable, informative, and easy to scan.

The overall experience should reinforce Pharmora as a modern enterprise healthcare inventory management platform while remaining fully consistent with the Design System.