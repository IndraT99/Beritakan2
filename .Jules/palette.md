## 2026-11-06 - Accessible Icon-Only Toggles
**Learning:** The application extensively uses icon-only toggles (search, hamburger menu) wrapped in redundant `<a>` tags inside `<button>` elements, lacking descriptive ARIA labels. This causes screen readers to misinterpret the purpose and creates duplicate focus stops.
**Action:** Removed redundant `<a>` tags inside `<button>`s, applied localized `aria-label`s, and ensured `id` uniqueness for Bootstrap dropdown components across different viewports.
