## 2024-05-18 - Nested Anchor Tags in Buttons
**Learning:** Found multiple instances where an `<a>` tag was nested inside a `<button>` tag for icon-only toggles. This creates redundant focus stops for screen readers and keyboard users, and is invalid HTML.
**Action:** Remove redundant `<a>` tags inside `<button>` toggles, ensuring the parent `<button>` has a descriptive `aria-label` and correct unique `id` for Bootstrap behavior.
