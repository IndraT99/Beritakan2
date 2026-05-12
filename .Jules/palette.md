## 2024-05-12 - Icon-only navigation toggle buttons
**Learning:** Common navigation elements like header and sidebar toggle buttons (`fa-bars`) are often implemented as icon-only `<button>` tags without text or ARIA labels, causing accessibility issues for screen readers.
**Action:** Always ensure that icon-only interactive elements, especially core navigation toggles, have an appropriate `aria-label` (e.g., "Toggle menu").
