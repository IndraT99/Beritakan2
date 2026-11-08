## 2024-03-24 - Accessibility Fixes for Navigation Header
**Learning:** Found nested `<a>` inside `<button>` elements causing duplicate focus stops. Also discovered that `messages.navigations.menu` should be used instead of `messages.menu` to avoid resolving to an array and throwing a 500 server error.
**Action:** When fixing accessibility for icon-only toggles, completely remove redundant nested tags. Always verify that translation keys resolve to strings when used for `aria-label` attributes in Blade templates.
