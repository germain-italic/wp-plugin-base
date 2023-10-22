# My Plugin

- Using `szepeviktor/phpstan-wordpress` to resolve WordPress functions names and get autocompletion in your IDE
- Custom admin icon courtesy of fontawesome.com

# Todo

- [ ] Twig templates

# Contribute

- Install WordPress locally (ex: `D:\Sites\wordpress-sandbox\wp-content\plugins\wp-plugin-base`)
- Clone this repository somewhere (ex: `D:\Sites\wp-plugin-base`)
- Create a symbolic link from the plugin destination directory to the actualy clone of this repo:

Windows:

```
mklink /D D:\Sites\wordpress-sandbox\wp-content\plugins\wp-plugin-base D:\Sites\wp-plugin-base
```

Linux:
```
ln -s /d/Sites/wordpress-sandbox/wp-content/plugins/wp-plugin-base /d/Sites/wp-plugin-base
```
- Go to your WordPress Admin > Plugins > Installed plugins
- Activate "My Plugin"