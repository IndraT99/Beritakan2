## 2024-05-18 - Fix interactive element nesting in header
**Learning:** Discovered an accessibility anti-pattern in the codebase where `<a>` elements are nested inside `<button>` elements for icon toggles. This creates duplicate focus stops and confuses screen readers.
**Action:** For icon-only buttons, apply `aria-label` directly to the `<button>` and remove the nested `<a>`, leaving the icon element directly inside the `<button>`.
