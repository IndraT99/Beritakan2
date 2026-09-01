## 2024-05-24 - Accessibility and Valid HTML for Interactive Icons
**Learning:** Nested interactive elements (like `<a>` inside `<button>`) cause duplicate focus stops and screen reader confusion. Additionally, duplicate IDs on Bootstrap dropdown toggles (e.g., multiple `dropdownMenuButton1`) break HTML validity and accessibility standards.
**Action:** Ensure icon-only toggles use a single interactive element with a descriptive `aria-label` and maintain unique IDs across responsive layout variants.
