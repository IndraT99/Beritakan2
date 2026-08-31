## 2026-08-31 - Fix duplicate interactive elements & unique IDs
**Learning:** Icon-only toggle buttons frequently nest `<a>` inside `<button>` across this app, causing duplicate focus stops. Duplicated IDs on Bootstrap dropdowns are also common, breaking accessibility mappings.
**Action:** Always verify parent element of icon links and ensure Bootstrap component IDs are unique.
