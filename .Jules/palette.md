## 2023-10-25 - Fix duplicate Bootstrap IDs and nested links in buttons
**Learning:** Found multiple instances where the default Bootstrap dropdown ID `dropdownMenuButton1` was reused on the same page, which breaks accessibility and valid HTML. Additionally, `<a>` tags were unnecessarily nested inside `<button>` elements for icon toggles, creating redundant focus stops and confusing screen readers.
**Action:** Ensure all interactive elements have unique IDs and apply `aria-label`s directly to the `<button>` element rather than wrapping icons in an extra `<a>` tag.
