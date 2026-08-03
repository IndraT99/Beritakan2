## 2024-05-14 - Duplicate screen reader focus stops for nested elements
**Learning:** Nesting `<a>` inside `<button>` for icon-only toggles creates duplicate screen reader focus stops.
**Action:** Apply `aria-hidden="true"` and `tabindex="-1"` to the inner `<a>` to prevent duplicate or empty focus stops, and place the `aria-label` directly on the parent `<button>`.
