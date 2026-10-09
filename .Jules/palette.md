## 2024-11-20 - Accessible Icon-Only Menu Toggles
**Learning:** Icon-only menu toggles (like hamburger icons) are frequently implemented using bare `<button>` or `<a>` tags. While visual users recognize the 'fa-bars' icon, assistive technologies encounter empty elements.
**Action:** Always add a descriptive `aria-label` (using existing translation strings, e.g., `__('messages.navigations.menu')`) to interactive icon-only elements.
