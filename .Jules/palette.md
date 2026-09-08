
## 2024-05-15 - Fixed duplicate IDs and nested links in interactive elements
**Learning:** Found an accessibility pattern where Bootstrap dropdown buttons had duplicated `id`s (like `dropdownMenuButton1`) across mobile and desktop views, which breaks ARIA references and HTML validation. Additionally, icon-only buttons contained nested `<a>` tags instead of placing the icon directly inside the `<button>`, creating redundant tab stops and confusing screen readers.
**Action:** When working with responsive components that duplicate UI elements (like search or menus for mobile/desktop), ensure `id` attributes remain unique. Always remove `<a>` wrappers inside `<button>` elements and apply descriptive `aria-label`s directly to interactive elements using localization keys.
