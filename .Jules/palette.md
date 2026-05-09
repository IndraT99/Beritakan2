## 2024-05-19 - Accessible Sidebar Menu Toggles
**Learning:** Adding ARIA labels to structural elements like navigation toggles is a straightforward, zero-risk accessibility enhancement that heavily improves the experience for screen-reader users without affecting the visual DOM or introducing regressions in tests, especially when using existing localization keys.
**Action:** Always check the main layout or wrapper files (like headers and sidebars) first for simple `aria-label` additions, as these high-traffic elements are often overlooked when building primarily visual templates.
