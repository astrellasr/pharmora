# ADR-005 — Soft Delete Strategy

Status: Accepted

Date: July 2026

---

## Context

Deleting master data permanently may break historical inventory references.

---

## Decision

Soft Deletes will be enabled for:

- Users
- Categories
- Suppliers
- Products

Inventory Movements will never use Soft Deletes.

---

## Rationale

Benefits:

- Prevent accidental data loss.
- Preserve historical records.
- Maintain referential integrity.

---

## Consequences

Deleted entities remain available for historical reporting while being hidden from normal application operations.