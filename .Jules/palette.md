## 2024-05-30 - Fix nested interactive elements in header
**Learning:** Found nested `<a>` tags inside `<button>` elements (e.g., search toggles) which creates confusing, duplicate focus stops for screen readers and breaks valid HTML.
**Action:** When fixing accessibility for icon-only toggles in Blade templates where an `<a>` tag is nested inside a `<button>`, completely remove the redundant `<a>` tag leaving the icon directly inside the `<button>`, and ensure the parent `<button>` has an appropriate `aria-label`.
