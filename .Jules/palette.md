## 2026-07-09 - Added missing aria-labels to icon-only links
**Learning:** Found several standalone links containing only icons (e.g. magnifying glass, bars, trash-can) without proper ARIA labels. Screen readers need these labels to understand the purpose of the link, as the icon alone provides no context.
**Action:** Add aria-label directly to the <a> tag when an interactive link is icon-only and standalone.
