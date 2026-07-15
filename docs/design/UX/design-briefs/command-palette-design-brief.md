# Command Palette

---

# Overview

The Command Palette provides a fast keyboard-driven interface that allows users to quickly navigate, search, and perform common actions throughout the Pharmora application.

Inspired by modern SaaS products such as Linear, Vercel, Raycast, Notion, and GitHub, the Command Palette improves productivity by reducing navigation time and providing instant access to application features.

This component should feel lightweight, fast, intelligent, and consistent with the Pharmora Design System.

---

# Objective

Enable users to:

- Navigate between pages
- Search application content
- Execute common actions
- Improve workflow efficiency
- Reduce mouse dependency

---

# Activation

Keyboard Shortcut

Windows

Ctrl + K

macOS

⌘ K

Additional Trigger

Search button in the navigation bar.

Search icon.

Command icon.

---

# Modal Behavior

The palette opens as a centered overlay.

Background

Dark overlay

Opacity

40%

Optional blur

8px

Close Actions

Escape

Click outside

Select command

---

# Layout

Centered modal.

Maximum Width

720px

Maximum Height

640px

Rounded Corners

20px

Soft Shadow

Thin Border

Large Padding

Scrollable results.

---

# Components

---

## Search Input

Top section.

Contains

Search Icon

Placeholder

Search pages, products, suppliers, reports...

Keyboard shortcut badge

Ctrl + K

Input Height

56px

Rounded corners

Large typography

---

## Categories

Commands grouped by category.

Examples

Navigation

Create

Search

Quick Actions

Recent

Each category has a small muted label.

---

## Command Item

Each item contains

Icon

Title

Short description

Optional shortcut

Chevron

Hover State

Soft Green background.

Rounded corners.

Smooth transition.

---

## Empty Result

Title

No Results Found

Description

Try searching using another keyword.

Illustration

Magnifying Glass

Ghost document

---

# Command Categories

---

## Navigation

Dashboard

Products

Categories

Suppliers

Inventory

Reports

Settings

Profile

---

## Create

New Product

New Category

New Supplier

Stock In

Stock Out

Generate Report

---

## Search

Search Products

Search Suppliers

Search Inventory

Search Reports

---

## Quick Actions

Export Data

Import Products

Refresh Dashboard

Open Notifications

View Activity History

---

## Recent Pages

Display recently opened pages.

Maximum

5 items.

---

# Search Behavior

Search begins immediately after typing.

No Search button.

Results update in real time.

Supports

Partial matching

Typo tolerance

Keyword matching

Recent searches

---

# Keyboard Navigation

Arrow Up

Move selection up.

Arrow Down

Move selection down.

Enter

Execute command.

Escape

Close palette.

Tab

Move focus.

---

# Visual Style

Premium SaaS.

Minimal.

Enterprise.

Fast.

Clean.

Professional.

Inspired by

Linear

Raycast

Notion

Vercel

Stripe

---

# Color Palette

Use only Pharmora Design System.

Primary Green

Dark Slate

White

Gray

Light Green

No additional accent colors.

---

# Typography

Inter

Large input typography.

Medium command titles.

Small muted descriptions.

---

# Icons

Use Lucide Icons.

Suggested icons

LayoutDashboard

Package

FolderTree

Truck

Boxes

BarChart3

Settings

User

Search

Plus

Bell

Clock

Download

Upload

RefreshCw

---

# Animation

Open

Fade + Scale

200ms

Close

Fade Out

150ms

Hover

150ms

Selection

Smooth transition.

---

# Responsive

Desktop

Centered modal.

Tablet

90% width.

Mobile

Full width bottom sheet.

---

# Accessibility

Keyboard-first experience.

Visible focus states.

Screen-reader friendly.

Supports reduced motion.

---

# Security

Only display commands that the current user has permission to access.

Hidden modules should never appear.

---

# Notes

The Command Palette should feel like the central productivity tool of Pharmora.

It should allow users to navigate the application without relying on the sidebar.

Every interaction should feel fast, responsive, and effortless.

The overall experience should communicate a premium enterprise SaaS product built for professional users.

The design must remain fully consistent with the Pharmora Design System and be reusable across the application.