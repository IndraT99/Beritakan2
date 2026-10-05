## 2025-02-09 - Accessible Header Search and Menu Toggles
**Learning:** Search and menu toggles commonly featured duplicate focus stops (`<a>` nested inside `<button>`), duplicate IDs (`dropdownMenuButton1`), and missing ARIA labels.
**Action:** Clean up redundant anchor elements inside buttons, assign unique IDs to dropdown toggles, and use translation strings like `__('messages.search')` for accessible labels.
