## 2024-09-19 - Accessible Nested Toggles and Unique IDs
**Learning:** Nesting interactive elements (like <a> inside <button>) creates duplicate focus stops and confuses screen readers. Duplicating component IDs (like dropdownMenuButton1) breaks HTML validity and accessibility associations.
**Action:** Always strip redundant nested tags leaving the icon directly inside the button, apply aria-labels to the parent, and ensure IDs are unique per document.
