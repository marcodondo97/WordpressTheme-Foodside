# Foodside Wordpress Theme

Wordpres theme based on bootstrap for food blogs and recipes.

## Introduction 
Simple and minimal theme for blog based on wordpress.

The aim of this project is to create a blog theme for wordpress.

## Description 

To create this theme I downloaded a starter blank theme on underscores, link: https://underscores.me/
, after that I linked the blank project with bootstrap and Jquery libraries throught function.php file.

To create the graphic mockup I used Marvel prototype, link: https://marvelapp.com/

In the index page there are some sections:

- The section to insert the last sticky post (this section is thought to insert a welcome post or a presentation post);

- The form to search posts (or food recipes);

- The section for the recent posts;

- The horizontal section scrollable to search the categories.


I have also created two customized pages:

1. About page: to display the writers of the blog (authors.php):

2. Contact page: to display contact form to send a message to the admin (contact.php), this page works thanks to SMTP protocol: make sure your hosting service enabled this service.


## Getting Started

**Quick Start with Docker**

1. Clone the repository and run docker compose:
   ```bash
   git clone <repository-url>
   cd WordpressTheme-Foodside
   docker-compose up -d
   ```

2. Access WordPress and active theme:
   - URL: http://localhost:8080
   - Complete the initial WordPress installation
   - Go to Appearance > Themes
   - Activate the "Foodside" theme


## Result

<div align="center">
<table>
  <tr>
    <td><img src="screenshot/mockup_foodside.png" width="100%"/></td> 
    <td><img src="screenshot/screenshot_wp.png" width="100%"/></td> 
    <td><img src="screenshot/screenshot_foodside.png"width="80%"/></td>   
  </tr>
</table>
</div>


