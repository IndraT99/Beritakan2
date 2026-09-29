## 2024-05-24 - Unique IDs in Bootstrap Dropdowns
**Learning:** Found multiple instances of `id="dropdownMenuButton1"` in header layouts, indicating copy-pasted Bootstrap dropdown snippets. This breaks HTML validation and accessibility (aria-labelledby) as IDs must be unique per document. Also found redundant `<a>` elements inside `<button>`s for icon toggles.
**Action:** When adding or auditing Bootstrap dropdowns and toggles, always ensure IDs are unique document-wide and remove empty redundant `<a>` wrapping inside native buttons to fix accessibility focus loops.
