## 2024-08-14 - Add ARIA Labels to Header Sidebar Menus
**Learning:** Found an accessibility issue pattern specific to this app where icon-only sidebar toggle buttons (`aside-menu-container__aside-menubar`) lack ARIA labels, rendering them inaccessible to screen readers.
**Action:** Always verify header and sidebar mobile toggles have descriptive ARIA labels using `aria-label="{{ __(messages.menu.menu) }}"` or similar localization.
