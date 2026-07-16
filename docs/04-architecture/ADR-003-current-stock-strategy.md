# ADR-003 — Current Stock Strategy

Status: Accepted

Date: July 2026

---

## Context

Two approaches were considered.

Option A

Calculate current stock using:

SUM(inventory_movements)

Option B

Store current stock directly inside the Products table while keeping Inventory Movements as the historical record.

---

## Decision

Current stock will be stored inside the Products table.

Inventory Movements remain the complete audit trail.

---

## Rationale

Benefits:

- Faster dashboard loading
- Faster CRUD operations
- Better reporting performance
- Reduced aggregation queries
- Simpler business logic

---

## Consequences

Every inventory movement must update:

products.current_stock

inside the same database transaction.