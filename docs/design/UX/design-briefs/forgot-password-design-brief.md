# Forgot Password Design Brief

## Page Information

| Item | Value |
|------|-------|
| Page Name | Forgot Password |
| Module | Authentication |
| Product | Pharmora |
| Platform | Web Application |
| Type | High Fidelity UI |
| Status | Design Phase |

---

# Objective

The Forgot Password page enables users to securely request a password reset link using their registered email address.

This page should provide a simple, trustworthy, and professional experience while maintaining complete visual consistency with the Pharmora Authentication system.

The interface should reassure users that recovering their account is fast, secure, and straightforward.

---

# Design Goal

Design a premium enterprise password recovery page that feels like a natural extension of the Login and Register screens.

The page should communicate:

- Security
- Simplicity
- Trust
- Professionalism
- Accessibility

The experience should reduce user anxiety by providing clear instructions and minimal distractions.

---

# User Scenario

A user has forgotten their password and wants to regain access to their Pharmora account.

The user enters their registered email address and requests a password reset link.

After submission, the system will send an email containing instructions to reset the password.

---

# Layout

Reuse the exact authentication layout used in Login and Register.

Desktop only.

Two-column layout:

Left Section

- Pharmora Logo
- Tagline
- Product Description
- Feature Highlights
- Dashboard Preview

Right Section

Forgot Password Form

---

# Header

Title

Forgot Password?

Subtitle

Enter your registered email address and we'll send you a secure password reset link.

The title should feel reassuring rather than alarming.

---

# Form

Display only one input field.

Email Address

Placeholder

name@pharmora.com

Use the official Pharmora input component.

---

# Primary Button

Label

Send Reset Link

The button should use the official Pharmora Primary Button.

Full width.

---

# Secondary Navigation

Below the button display

Remember your password?

Back to Sign In

Back to Sign In should appear as a subtle text link.

---

# Additional Information

Display a small informational message below the secondary navigation.

Example:

For security reasons, password reset links expire after a limited time.

Use muted typography.

Do not over-emphasize this information.

---

# Footer

Display

© 2026 Pharmora

Privacy Policy

Terms

Support

Reuse the footer from Login and Register.

---

# Components

## Branding Panel

Reuse from Login.

Do not redesign.

---

## Card

Reuse Authentication Card.

Rounded corners.

Soft border.

Soft shadow.

---

## Input

Official Pharmora Text Field.

Height

48 px

Leading email icon (optional).

---

## Button

Official Primary Button.

Label

Send Reset Link

---

## Text Link

Muted Gray

Hover Green

---

# Color Palette

Only use official Pharmora colors.

Primary Green

Neutral Slate

White

Light Gray

Success Green

Avoid introducing new colors.

---

# Typography

Reuse the official Pharmora typography system.

Large Heading

Medium Description

Small Labels

Muted Helper Text

Consistent spacing throughout.

---

# Icons

Use Lucide Icons only.

Suggested icons

Mail

Arrow Left

Shield Check

---

# Spacing

Follow the official 8-point spacing system.

Maintain generous whitespace.

The interface should feel calm and uncluttered.

---

# Interaction States

Input

Default

Focus

Filled

Disabled

Button

Default

Hover

Pressed

Loading

Disabled

---

# Empty State

No empty states required.

---

# Validation

Support future validation for:

Invalid email format

Email required

Email not found

Do not display validation by default.

---

# Accessibility

Proper label association.

Keyboard navigable.

Visible focus states.

High contrast text.

Accessible button sizing.

---

# Responsive Behavior

Desktop First.

The authentication layout should remain consistent with Login and Register.

---

# Design Principles

Simple.

Minimal.

Secure.

Professional.

Enterprise-grade.

Healthcare-oriented.

---

# Visual Inspiration

Stripe

Clerk

Supabase

Linear

Vercel

Notion

---

# Expected User Flow

Forgot Password

↓

Enter Email

↓

Send Reset Link

↓

Email Sent Confirmation

↓

Reset Password

↓

Password Successfully Updated

↓

Login

---

# Deliverables

- High Fidelity Desktop Screen
- Auto Layout Ready
- Production Ready
- Pixel Perfect
- Consistent with Login & Register