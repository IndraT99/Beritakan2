## 2024-05-15 - ARIA Labels and Nested Focusable Elements
**Learning:** When an `<a href="javascript:void(0)">` is nested inside a focusable `<button>` for icon-only toggles, screen readers and keyboard navigation can experience double focus stops and empty labels if the inner element is left interactive. Adding an `aria-label` to the parent button is insufficient on its own.
**Action:** Apply `aria-hidden="true"` and `tabindex="-1"` to the nested `<a>` element, while adding the `aria-label` to the outer `<button>` element. This creates a single, clean interaction point.
