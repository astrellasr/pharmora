# ADR-001 — Rename Inventory Transactions to Inventory Movements

Status: Accepted

Date: July 2026

---

## Context

The inventory module records every stock-related activity performed within the system.

Initially, the table was named:

inventory_transactions

However, the recorded events include:

- Stock In
- Stock Out
- Stock Adjustment

These events represent inventory movements rather than business or financial transactions.

---

## Decision

Rename the table to:

inventory_movements

---

## Rationale

The term "movement" better reflects inventory domain terminology.

The new name:

- Supports future movement types.
- Better aligns with warehouse and inventory systems.
- Avoids confusion with sales transactions.
- Improves business readability.

---

## Consequences

Future inventory events such as:

- Damaged
- Expired
- Returned

can be introduced without changing the table purpose.