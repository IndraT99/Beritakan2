## 2024-03-08 - Icon-only Dropdown Accessibility
**Learning:** Found a common pattern of nested `<a>` tags inside `<button>` elements for dropdown toggles, which creates duplicate focus stops and lacks accessible names.
**Action:** Remove redundant `<a>` wrappers, add `aria-label`s directly to the `<button>`s using existing translations like `__('messages.search')`, and ensure `id`s are unique across responsive breakpoints.
