# ADR-004 — UUID Strategy

Status: Accepted

Date: July 2026

---

## Context

Auto-incrementing IDs are efficient for database operations but expose predictable identifiers in URLs and APIs.

---

## Decision

Every business entity includes:

- id
- uuid

The numeric ID remains the primary key.

UUIDs are used as public identifiers.

---

## Rationale

Benefits:

- Better URL security
- Public-safe identifiers
- Future API compatibility
- Enterprise best practice

---

## Consequences

Database joins continue using integer primary keys while external references use UUIDs.