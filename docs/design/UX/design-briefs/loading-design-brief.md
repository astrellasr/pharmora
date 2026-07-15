# Loading & Skeleton States

---

# Overview

The Loading & Skeleton States module defines how Pharmora communicates temporary loading states while data is being fetched.

Instead of showing blank screens or generic loading spinners, Pharmora should display realistic content placeholders that preserve layout stability and improve perceived performance.

Skeleton loading should feel lightweight, modern, and consistent with the Pharmora Design System.

---

# Objective

Provide visual feedback while maintaining user orientation.

Users should immediately understand:

- The application is loading
- The requested data is being prepared
- The layout will remain stable

The experience should reduce perceived waiting time and improve usability.

---

# Design Principles

Every skeleton should:

- Match the final layout
- Prevent layout shift
- Feel subtle
- Maintain generous whitespace
- Use soft neutral colors
- Never distract the user

---

# Skeleton Animation

Animation

Shimmer

Direction

Left → Right

Duration

1.5 seconds

Loop

Infinite

Animation should remain smooth.

Avoid fast flashing effects.

---

# Skeleton Style

Background

Neutral Gray

(#F1F5F9)

Highlight

Light Gray

(#F8FAFC)

Border Radius

12px

Opacity

100%

No borders.

No shadows.

---

# General Components

Reusable skeleton components:

## Avatar

Circle

40px

48px

64px

---

## Title

Height

20px

Width

40–60%

---

## Subtitle

Height

14px

Width

60–80%

---

## Paragraph

Height

12px

Multiple rows

Variable widths

---

## Button

Rounded rectangle

Height

40px

Width

100px

---

## Badge

Rounded pill

Height

24px

Width

70px

---

## Input

Rounded rectangle

Height

48px

Full width

---

## Card

Rounded rectangle

Variable height

---

## Table Row

Horizontal placeholders matching table columns.

---

# Loading Variants

---

# Dashboard Loading

## Trigger

Dashboard data is loading.

## Components

Sidebar

Top Navigation

Statistic Cards

Charts

Recent Activity

Quick Actions

Recent Inventory

Everything should preserve the final dashboard layout.

Statistic cards display:

- Icon placeholder
- Metric placeholder
- Subtitle placeholder

Charts display:

Large rounded placeholder.

Recent Activity displays:

Five placeholder rows.

---

# Table Loading

## Trigger

Table data is loading.

## Components

Search Bar

Filter Button

Action Button

Table Header

Table Rows

Pagination

Display

8 placeholder rows.

Each row includes:

Checkbox

Text

Badge

Action Buttons

All widths should vary naturally.

---

# Card Loading

## Trigger

Card-based pages.

Examples

Products

Suppliers

Reports

Inventory

## Components

Image Placeholder

Title

Subtitle

Status Badge

Action Button

Display

Grid layout.

Maintain exact spacing as final cards.

---

# Chart Loading

## Trigger

Analytics data loading.

## Components

Chart Title

Chart Area

Legend

Axis Labels

Chart placeholder should mimic the final chart dimensions.

Do not use spinners.

---

# Empty Container Loading

For small widgets.

Use simple rounded rectangle placeholders.

---

# Progressive Loading

Load visible content first.

Priority

Navigation

↓

Page Header

↓

Statistics

↓

Main Content

↓

Charts

↓

Secondary Content

---

# Animation Rules

All skeletons animate simultaneously.

No independent flashing.

Smooth shimmer only.

---

# Responsive

Desktop

Tablet

Mobile

Skeletons should scale proportionally while preserving layout consistency.

---

# Accessibility

Respect prefers-reduced-motion.

Disable shimmer when reduced motion is enabled.

Provide screen reader loading announcements.

Example

Loading dashboard...

Loading products...

Loading reports...

---

# Design Style

Minimal

Enterprise SaaS

Professional

Clean

Subtle

Modern

No colorful placeholders.

No gradients beyond shimmer.

No unnecessary motion.

---

# Notes

Skeleton loading should always resemble the final UI.

Users should never lose context while waiting.

Every loading state should reinforce the perception of speed, stability, and professionalism.

The overall experience should remain fully consistent with the Pharmora Design System.