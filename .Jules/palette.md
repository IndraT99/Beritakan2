## 2024-05-24 - Accessibility pattern for icon-only toggles in Blade

**Learning:** Nesting `<a>` tags inside `<button>` tags for icon toggles is a common pattern in the Blade templates but causes duplicate or empty focus stops for screen readers.

**Action:** Apply `aria-hidden="true"` and `tabindex="-1"` to the inner `<a>` tags to hide them from screen readers while providing a descriptive `aria-label` on the parent `<button>` element.
