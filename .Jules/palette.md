## 2024-05-18 - Remove nested links from buttons for accessibility
**Learning:** In Blade templates, nesting `<a>` tags inside `<button>` elements creates duplicate focus stops and breaks HTML validity/accessibility for screen readers, particularly for icon-only toggles.
**Action:** Remove the redundant `<a>` tag leaving the icon (e.g., `<i>`) directly inside the `<button>`, and ensure the parent `<button>` has a descriptive `aria-label` translating the action.
