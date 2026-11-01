## 2024-11-01 - Accessible Icon-Only Toggles and Unique IDs
**Learning:** Icon-only menu toggles and dropdown buttons nested with <a> tags cause duplicate focus stops and lack context for screen readers. Using duplicate IDs across multiple Bootstrap dropdowns (like dropdownMenuButton1) creates invalid HTML and breaks keyboard navigation.
**Action:** Always apply descriptive aria-labels to icon-only buttons, completely remove redundant nested <a> tags within <button>s, and ensure all interactive elements have unique IDs across viewports.
