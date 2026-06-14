## 2026-06-14 - Nested Icon-Only Interactions
**Learning:** Found an accessibility anti-pattern in the Blade templates where icon-only buttons contain nested empty `<a>` tags with icons. This creates empty/duplicate focus stops for screen readers and breaks keyboard navigation.
**Action:** When fixing these, the `aria-label` must be applied to the outer interactive element (like the `<button>`), while the inner empty `<a>` tag needs `aria-hidden="true"` and `tabindex="-1"` to effectively remove it from the accessibility tree and tab order.
