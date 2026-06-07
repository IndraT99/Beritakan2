import re

with open('resources/views/front_new/layouts/header.blade.php', 'r') as f:
    content = f.read()

# Check for aria-label on button
if 'aria-label="{{ __(\'messages.search\') }}"' in content:
    print("Found aria-label on buttons!")
else:
    print("Missing aria-label on buttons!")

# Check for aria-hidden and tabindex on nested a tags
if 'aria-hidden="true"' in content and 'tabindex="-1"' in content:
    print("Found aria-hidden and tabindex on nested links!")
else:
    print("Missing aria-hidden and tabindex on nested links!")

print("\nOccurrences found:")
print(f"aria-label count: " + str(content.count("aria-label=\"{{ __('messages.search') }}\"")))
print(f"aria-hidden count: " + str(content.count('aria-hidden="true"')))
