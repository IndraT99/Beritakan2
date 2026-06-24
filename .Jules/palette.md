## 2025-02-28 - Icon-only Search Toggles Screen Reader Accessibility
**Learning:** Standalone `<a>` elements within `<button>` tags can cause duplicate and empty focus stops for screen readers if the button handles the actual interaction.
**Action:** Ensure that nested `<a>` elements inside icon-only `<button>` toggles (e.g., search/menu) include `aria-hidden="true"` and `tabindex="-1"` to hide them from assistive technologies while retaining the button's `aria-label` for context.
