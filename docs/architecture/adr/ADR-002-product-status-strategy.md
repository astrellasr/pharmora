# ADR-002 — Product Status Strategy

Status: Accepted

Date: July 2026

---

## Context

Products require both operational status and stock information.

One option was to store inventory conditions directly inside the status column.

Example:

- In Stock
- Low Stock
- Out of Stock

This approach introduces duplicated data because stock conditions can already be derived from inventory quantities.

---

## Decision

The status column represents only operational availability.

Allowed values:

- Active
- Inactive

Inventory conditions are calculated dynamically.

---

## Rationale

Separating operational state from stock condition:

- avoids duplicated data
- prevents synchronization issues
- simplifies inventory updates
- keeps the database normalized

---

## Consequences

Inventory status shown in the UI is computed using:

current_stock

minimum_stock

instead of being persisted.