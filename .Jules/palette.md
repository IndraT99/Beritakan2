## 2024-05-24 - Accessibility improvements for icon-only toggle buttons and preventing duplicate focus stops

**Learning:** When using Bootstrap dropdown toggles or offcanvas toggles that only contain an icon, screen readers do not have text to read. This makes it impossible for visually impaired users to know what the button does. Furthermore, nesting `<a>` tags inside `<button>` tags creates duplicate focus stops and invalid HTML, which can confuse keyboard and screen reader users.
**Action:** When creating icon-only toggles, apply an `aria-label` with descriptive, localized text. If using a `<button>` as the toggle, place the icon directly inside it and avoid nesting `<a>` tags inside the button to prevent duplicate focus stops.
