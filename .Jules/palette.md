## 2024-05-15 - [Header Search Button Accessibility]
**Learning:** Found a common pattern of a redundant `<a>` tag nested inside a `<button>` tag for icon-only dropdown toggles, which creates duplicate focus stops and lacks screen reader context.
**Action:** Removed the nested `<a>` tag, applied `aria-label` directly to the `<button>` to ensure correct semantic structure, and gave unique IDs where previously they were duplicated.
