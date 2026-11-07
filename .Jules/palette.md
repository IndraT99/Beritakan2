## 2024-05-20 - Nested Interactive Elements in Toggles
**Learning:** Found an accessibility issue pattern in the app's components where `<a>` tags were nested inside `<button>` elements for icon-only dropdown toggles. This creates duplicate focus stops and confuses screen readers.
**Action:** Completely remove redundant `<a>` tags inside `<button>` elements, leaving the icon directly inside the `<button>`, and ensure the parent `<button>` has a descriptive `aria-label` (using translation helpers) and a unique `id`.
