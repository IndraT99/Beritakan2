## 2024-05-24 - Accessibility for Icon-only Menu Toggles
**Learning:** Icon-only menu toggle buttons (such as mobile hamburger menus) in headers must include descriptive aria-labels, as visual context alone is insufficient for assistive technologies.
**Action:** Always add aria-label attributes utilizing localized strings (e.g., aria-label="{{ __(messages.navigations.menu) }}") to standalone interactive icon-only elements.
