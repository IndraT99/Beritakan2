## 2024-05-24 - Removing redundant anchor tags in buttons for accessibility
**Learning:** Nesting `<a>` tags inside `<button>` elements for icon-only toggles creates redundant focus stops and confuses screen readers. Applying an `aria-label` directly to the parent `<button>` provides better accessibility and semantic meaning.
**Action:** Completely remove redundant `<a>` tags leaving the icon directly inside the `<button>` to prevent duplicate focus stops, and ensure the parent `<button>` has an appropriate `aria-label`.
