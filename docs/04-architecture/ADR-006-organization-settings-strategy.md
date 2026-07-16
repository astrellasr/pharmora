# ADR-006 — Organization Settings Strategy

Status: Accepted

Date: July 2026

---

## Context

The Settings UI includes organization-wide configuration such as branding, contact information, language, and timezone.

These settings do not belong to individual users.

---

## Decision

Create a dedicated `organization_settings` table to store workspace-level configuration.

Only one record is expected during the MVP.

---

## Rationale

Separating organization settings from user profiles improves maintainability and keeps authentication data isolated from global configuration.

---

## Consequences

Future support for multiple organizations or tenants can build on this structure without redesigning user-related tables.