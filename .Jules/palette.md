
## 2024-05-24 - Header Accessibility Refactoring
**Learning:** Found a recurring pattern in the header component where duplicate IDs (e.g., `dropdownMenuButton1`) were used across different dropdowns, and interactive buttons contained redundant nested `<a>` tags wrapping icons, which creates multiple focus stops and invalid HTML.
**Action:** Assigned unique IDs to all dropdown toggles, removed redundant nested links leaving icons directly inside buttons, and applied descriptive `aria-label`s using translation keys to ensure clean focus management and screen reader context.
