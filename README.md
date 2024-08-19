# Display a list of Categories with a Show All option at the Top
A WordPress code snippet to display a list of categories with a 'Show All' option at the top of Categories. This simple snippet is designed to fit into any theme and allows for easy customization.

## Features
- Displays all WordPress categories in an unordered list.
- Includes a 'Show All' option at the top of the category list.
- Uses Bootstrap classes for responsive container styling.

## Installation
1. Copy the PHP code provided in the file.
2. Paste the code into your WordPress theme's template file where you want the category list to appear.
3. Adjust the HTML structure or CSS classes to match your theme's design.

## Usage
- The `wp_list_categories` function is used to generate the list of categories.
- The 'Show All' option is automatically added to the top of the list.
- Container classes (`.container-fluid` and `.container`) are used for responsive design.

## Customization
- Modify the `orderby` argument to change how categories are ordered (e.g., by name, slug, etc.).
- Set `show_count` to `true` if you want to display the post count next to each category.
- Customize the CSS classes (`.cat-list-container-fluid`, `.cat-list-container`) to fit your theme's styling.

## Contributing
Contributions to improve the code or suggest new features are welcome. Submit a pull request or open an issue on GitHub.

## License
This project is open-source and available under the MIT License.

