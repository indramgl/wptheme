# Saphir WordPress Theme - Context & Instructions

This project is a custom WordPress theme named **Saphir**. It is currently in the initial setup phase.

## Project Overview
- **Type:** WordPress Theme
- **Name:** Saphir
- **Status:** Initialized (Empty Repository)
- **Purpose:** To create a custom, high-performance WordPress theme.

## Architecture & Expected Structure
As a WordPress theme, the project is expected to follow the standard theme hierarchy:
- `style.css`: Theme metadata (Theme Name, Author, Version, etc.) and primary CSS.
- `index.php`: The fallback template file.
- `functions.php`: Theme features, hooks, and asset enqueuing.
- `header.php` / `footer.php`: Global site templates.
- `template-parts/`: Modular template fragments.
- `assets/` or `src/`: Directory for CSS, JS, and image source files.

## Architecture Decisions
*   **Elementor Page Builder:** The Saphir theme project uses Elementor as the page builder. Adjust all future development, architecture, and theme scaffolding strategies to be Elementor-compatible (e.g., ensuring theme-wide support for Elementor's header/footer/template system, and focusing theme code on structural logic rather than manual template layout).

## Building and Running
### Local Development
To develop and test this theme, you will need a local WordPress environment:
1.  Install WordPress locally (e.g., using [LocalWP](https://localwp.com/), [DevKinsta](https://kinsta.com/devkinsta/), or [Docker](https://github.com/wp-browser/docker-wordpress)).
2.  Clone this repository into the `wp-content/themes/wptheme` directory of your local WordPress installation.
3.  Activate the "Saphir" theme via the WordPress Admin Dashboard (**Appearance > Themes**).

### Build Commands
- **TODO:** Define build scripts (e.g., `npm run dev`, `npm run build`) once a build tool (like Vite, Webpack, or Laravel Mix) is configured.

## Development Conventions
- **Coding Standards:** Adhere to [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/) for PHP, CSS, and JavaScript.
- **Organization:** Use `template-parts/` for reusable UI components to keep template files clean.
- **Hooks:** Use WordPress action and filter hooks extensively to ensure compatibility and extensibility.
- **Translation:** Ensure all strings are internationalization-ready using `__()` or `_e()` with the text domain `saphir`.

## Key Files
- `.gitignore`: Configured to exclude WordPress core files and sensitive data, focusing only on the theme assets.
- `README.md`: Basic project introduction.
- `GEMINI.md`: This file, providing instructional context for AI interactions.
