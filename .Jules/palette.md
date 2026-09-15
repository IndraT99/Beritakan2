## 2024-09-15 - Remove redundant links inside icon-only buttons
**Learning:** Wrapping an icon inside an `<a>` tag which is itself inside a `<button>` creates duplicate focus stops and confuses screen readers.
**Action:** When adding ARIA labels to button toggles, remove redundant nested `<a>` tags and place the `aria-label` directly on the parent `<button>`.
