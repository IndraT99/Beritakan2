## 2024-05-23 - Duplicate focus stops and invalid HTML in icon-only buttons
**Learning:** Nested interactive elements (`<a>` inside `<button>`) cause duplicate focus stops and invalid HTML. Icon-only buttons without text must have descriptive `aria-label`s for screen readers. Using duplicate `id`s like `dropdownMenuButton1` across multiple Bootstrap dropdowns causes accessibility issues.
**Action:** Remove redundant `<a>` tags from inside buttons, ensure all icon-only buttons use `aria-label` with translated strings, and use unique `id`s for Bootstrap dropdown toggles.
