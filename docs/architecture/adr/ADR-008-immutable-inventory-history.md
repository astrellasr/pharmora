# ADR-008 — Immutable Inventory History

> **Status:** Accepted  
> **Date:** July 2026  
> **Decision Makers:** Pharmora Development Team

---

# Context

Inventory movements represent historical business events.

Each record documents an inventory operation performed by an authenticated administrator.

Examples include:

- Stock In
- Stock Out
- Stock Adjustment

Once an inventory movement has been recorded, it becomes part of the application's audit trail.

The development team evaluated whether inventory movement records should support updates or soft deletion.

---

# Decision

Inventory movement records are immutable.

The table will include:

```
created_at
```

The table will intentionally exclude:

```
updated_at

deleted_at
```

Once created, an inventory movement record must never be modified or deleted through normal application operations.

---

# Rationale

Historical inventory data should accurately represent what happened at a specific point in time.

Allowing updates or deletions would compromise:

- Inventory traceability.
- Audit reliability.
- Reporting accuracy.
- Historical accountability.

Immutability ensures that inventory history remains trustworthy.

---

# Alternatives Considered

## Option A — Editable History

Allow inventory movement records to be updated.

Advantages

- Easier correction of mistakes.

Disadvantages

- Historical inconsistency.
- Reduced audit reliability.
- Higher risk of accidental modification.

Rejected.

---

## Option B — Soft Deletes

Allow historical records to be hidden using Soft Deletes.

Advantages

- Recovery capability.

Disadvantages

- Audit trail becomes incomplete.
- Reports may produce inconsistent results.
- Historical data may disappear from analysis.

Rejected.

---

## Option C — Immutable Records (Selected)

Inventory movements remain permanent after creation.

Advantages

- Reliable audit trail.
- Accurate reporting.
- Better accountability.
- Consistent historical data.
- Enterprise inventory best practice.

Accepted.

---

# Consequences

If an administrator makes an incorrect inventory entry:

The original movement remains unchanged.

A new inventory movement should be created to correct the inventory balance.

This preserves a complete chronological history of every inventory operation.

---

# Related Documents

- Database Constraints
- Inventory Movements Table Review
- Products Table Review
- Database Schema Freeze