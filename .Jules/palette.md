## 2024-09-07 - ARIA Labels for Icon-Only Menu Toggles
**Learning:** Icon-only menu buttons like hamburgers require descriptive ARIA labels for assistive technologies; use translation keys that resolve to strings directly (e.g., `messages.navigations.menu` instead of `messages.menu`) to prevent Laravel 500 errors.
**Action:** Always apply `aria-label` using a string-resolving translation key to `<button>` or `<a>` tags containing only an icon.
