## 2024-11-04 - Fixed Nested Focus Stops and Duplicate IDs
**Learning:** Nested `<a>` tags inside `<button>` elements cause duplicate focus stops for screen readers, and duplicate `id` attributes break ARIA relationships and create invalid HTML.
**Action:** Removed redundant `<a>` tags from icon-only buttons, added localized `aria-label`s, and ensured unique `id`s for Bootstrap dropdowns.
