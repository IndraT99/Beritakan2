## 2026-07-19 - Adding ARIA labels to hidden icons vs container elements
**Learning:** When addressing accessibility for icon-only toggles (like mobile hamburger buttons), it is better to place the `aria-label` on the interactive parent element (like `<button>` or `<a>`) and use `aria-hidden="true"` and `tabindex="-1"` on the inner decorative `<i>` element to prevent screen readers from duplicate/empty focus stops and properly announce the action.
**Action:** Always follow this pattern for icon-only buttons to ensure clean and semantic screen reader output.
