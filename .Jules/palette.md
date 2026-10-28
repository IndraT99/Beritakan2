## 2026-10-28 - Fix ID conflicts and accessibility for header search dropdowns
**Learning:** Found multiple elements with the same ID 'dropdownMenuButton1' on the front header layout. Also noticed that icon-only buttons (like mobile menu, search toggles) don't have aria-labels, making them inaccessible to screen readers.
**Action:** When working on navigation or header elements that get duplicated for responsive design, always ensure IDs are unique and add descriptive aria-labels to all icon-only interactive elements using existing localized keys.
