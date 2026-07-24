## 2026-07-24 - Nested Links in Button Toggles
**Learning:** The application uses a pattern where icon-only `<a>` tags are nested directly inside `<button>` elements for search toggles and dropdowns. This creates redundant focus stops for screen readers and keyboard users if both are interactive.
**Action:** Always apply the `aria-label` to the parent `<button>` and apply `aria-hidden="true"` and `tabindex="-1"` to the nested `<a>` tag to remove it from the accessibility tree and tab order.
