## 2024-05-23 - Interactive Element Nesting in Toggles
**Learning:** This app frequently nests interactive elements (e.g., `<a>`) inside other interactive elements (e.g., `<button>`) for header and icon-only toggles. This creates accessibility issues like double focus stops and missing context since screen readers miss the intended ARIA label if the parent is not properly labeled and nested.
**Action:** Always check toggle buttons for nested `<a>` elements, remove the redundant wrapper, and place the `aria-label` directly on the root `<button>` element.
