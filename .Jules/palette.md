## 2026-08-18 - Header Accessibility Fixes
**Learning:** Found duplicate IDs ('dropdownMenuButton1') on multiple dropdown toggles which breaks accessibility, and found icon-only toggles nesting 'a' tags inside 'button' tags which creates duplicate focus stops and lacks labels.
**Action:** Replaced duplicate IDs with unique names, removed redundant nested 'a' tags in buttons, and added localized aria-labels ('messages.search' and 'messages.navigations.menu') to icon-only interactive elements.
