
## 2025-01-20 - Header ARIA labels and structural validity
**Learning:** The application's header components exhibit a recurring accessibility anti-pattern where icon-only `<a>` tags are nested directly inside functional `<button>` elements, creating redundant tab stops for screen readers. Additionally, the boilerplate Bootstrap dropdown ID `dropdownMenuButton1` is reused multiple times within the same view, breaking HTML ID uniqueness constraints and ARIA `aria-labelledby` associations.
**Action:** When implementing interactive UI components, ensure that semantic `<button>` elements wrap their icons directly without nested links, and always assign unique IDs to distinct Bootstrap dropdown toggles to preserve accessible references.
