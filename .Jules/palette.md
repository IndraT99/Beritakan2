## 2026-06-08 - Nested Link Accessibility in Bootstrap Drops
**Learning:** Nesting interactive `<a>` elements inside `<button>` tags (often done for icon-only dropdown toggles) creates duplicate and sometimes empty focus stops for screen readers. This is an accessibility issue specific to how these components are structured.
**Action:** Applied `aria-hidden="true"` and `tabindex="-1"` to the nested inner `<a>` to prevent the duplicate focus stop, while applying the `aria-label` directly to the outer interactive `<button>` element.
