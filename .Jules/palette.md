## 2024-05-18 - Accessibility: Redundant Links in Buttons and Duplicate IDs
**Learning:** Found nested `<a>` tags inside `<button>` elements for icon-only toggles, creating duplicate focus stops. Also discovered duplicate `id` attributes (e.g., `dropdownMenuButton1`) across responsive viewports.
**Action:** Remove redundant `<a>` tags inside buttons, add appropriate `aria-label` to the parent `<button>`, and ensure all `id` attributes are unique to maintain valid HTML and accessibility.
