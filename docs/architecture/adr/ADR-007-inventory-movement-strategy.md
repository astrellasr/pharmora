# ADR-007 — Inventory Movement Strategy

> **Status:** Accepted  
> **Date:** July 2026  
> **Decision Makers:** Pharmora Development Team

---

# Context

The inventory module is responsible for recording every stock-related activity performed within the application.

During database design, two implementation approaches were considered.

### Option A

Separate tables for each movement type.

```
stock_ins

stock_outs

stock_adjustments
```

### Option B

Use a single table to store every inventory movement.

```
inventory_movements
```

Each record is differentiated by a movement type.

---

# Decision

Pharmora will use a single table named:

```
inventory_movements
```

Every inventory event is stored within this table.

The movement type determines the nature of the operation.

Approved movement types for MVP:

```
stock_in

stock_out

adjustment
```

Future movement types can be introduced without changing the database structure.

---

# Rationale

A single movement table provides a simpler and more scalable architecture.

Benefits include:

- One source of truth for inventory history.
- Simpler Laravel relationships.
- Simpler reporting queries.
- Easier dashboard aggregation.
- Reduced database complexity.
- Lower maintenance cost.

Instead of joining multiple transaction tables, every inventory event can be retrieved from one centralized history table.

---

# Alternatives Considered

## Option A — Separate Tables

```
stock_ins

stock_outs

stock_adjustments
```

Advantages

- Simple business semantics.

Disadvantages

- Multiple relationships.
- Complex reporting.
- More migrations.
- More models.
- Duplicate business logic.

This option was rejected.

---

## Option B — Single Table (Selected)

```
inventory_movements
```

Advantages

- Centralized audit trail.
- Simpler CRUD implementation.
- Easier filtering.
- Easier reporting.
- Better scalability.

This option was accepted.

---

# Consequences

The application will:

- Store every inventory operation in one table.
- Distinguish operations using `movement_type`.
- Use Products as the source of current inventory.
- Use Inventory Movements as the historical record.

Future movement types can be added without introducing new database tables.

---

# Related Documents

- Database Design
- Entity Relationship Diagram
- Inventory Movements Table Review
- Products Table Review