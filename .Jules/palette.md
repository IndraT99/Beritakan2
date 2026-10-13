## 2024-05-23 - Interactive Controls Accessibility Pattern
**Learning:** In Blade templates, duplicate DOM IDs on dropdowns (like `dropdownMenuButton1`) break HTML validity and potentially accessibility. Additionally, nesting `<a>` tags inside `<button>` elements for icon-only toggles creates duplicate focus stops.
**Action:** Ensure all interactive components have unique `id` attributes. For icon-only toggle buttons, remove redundant `<a>` tags (keeping the icon directly inside the `<button>`) and always apply descriptive `aria-label` attributes using translation keys.
