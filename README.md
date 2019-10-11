# Cabion
CodeIgniter 3 Boilerplate including Bootstrap, AdminLTE and ionAuth

## Introduction
For every website, we need some sort of admin panel to monitor over the content of the website. The developers must have to start with the basic functinalities like login, logout, create/manage admin users, manage their roles, change password, forget password etc. This repository gives you all above things readymade as boilerplate for admin panel (but by using CodeIgniter PHP MVC framework). You just start code to add your project feature in it.

#### What is CodeIgniter?
CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP. Its goal is to enable you to develop projects much faster than you could if you were writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by minimizing the amount of code needed for a given task.

#### What is Bootstrap?
Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and (optionally) JavaScript-based design templates for typography, forms, buttons, navigation and other interface components.

#### What is AdminLTE?
AdminLTE is a popular open source WebApp template for admin dashboards and control panels. It is a responsive HTML template that is based on the CSS framework Bootstrap 3. It utilizes all of the Bootstrap components in its design and re-styles many commonly used plugins to create a consistent design that can be used as a user interface for backend applications. AdminLTE is based on a modular design, which allows it to be easily customized and built upon. This documentation will guide you through installing the template and exploring the various components that are bundled with the template.

#### What is Ion Auth?
Ion Auth is a simple and lightweight authentication library for the CodeIgniter framework.

## Server Requirements
Below configuration are preferred; other environments are not well-tested, but still feel free to report and issues.

- PHP version 5.6 or newer is recommended. It should work on 5.4.8 as well, but we strongly advise you NOT to run such old versions of PHP, because of potential security and performance issues, as well as missing features.
- Apache 2.2+ with rewrite mod enabled
- MySQL 5.5+ or MariaDb

## Getting Started
Perform the following installation steps:

- Download the latest release or clone this repository;

```shell
git clone https://github.com/mavisland/cabion.git <yourprojectname>
```

- Create a database (e.g. named `cabion`), then import `sql/cabion.sql` into MySQL server
- Set the `base_url` in `application/config/config.php`
- Make sure the database config (`application/config/database.php`) is set correctly
- Run the migrations (by browsing to the migrate controller; afterwards, set `migration_enabled` in `application/config/migration.php` to false if you no longer which to use / support migrations or for productive use!)

## Thanks

| :globe_with_meridians: Website | :package: Repo | :page_facing_up: Docs |
|--|--|--|
| [Codeigniter](https://codeigniter.com/) | [bcit-ci/CodeIgniter](https://github.com/bcit-ci/CodeIgniter) | [User Guide](https://codeigniter.com/user_guide/index.html) |
| [Bootstrap](https://getbootstrap.com/) | [twbs/bootstrap](https://github.com/twbs/bootstrap) | [Docs](https://getbootstrap.com/docs/4.3/getting-started/introduction/) |
| [AdminLTE](https://adminlte.io/) | [ColorlibHQ/AdminLTE](https://github.com/ColorlibHQ/AdminLTE) | [Docs](https://adminlte.io/docs/)
| [Ion Auth](http://benedmunds.com/ion_auth/) | [benedmunds/CodeIgniter-Ion-Auth](https://github.com/benedmunds/CodeIgniter-Ion-Auth) | [Docs](http://benedmunds.com/ion_auth/) |

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
Cabion is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.