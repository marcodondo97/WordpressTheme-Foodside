# WordpressTheme-Foodside

Wordpres theme based on bootstrap responsive ideal as a theme for cooking blogs and recipes.

<h2> Introduction </h2>
Simple and minimal theme for blog based on wordpress.

The aim of this project is to create a blog theme for wordpress.

<h2> Description </h2>

To create this theme i downloaded starter blank theme on underscores. Link https://underscores.me/
After that i linked tha blank project with bootstrap and Jquery libreries throught function.php file.

To create the graphic mockup i used Marvel prototype. Link https://marvelapp.com/

In index page there are some section:

- The section where inser the last sticky post (this section is thought for insert welcome post or presentation post);

- Form to search posts (or food recipes);

- The section for the recents post

- The section horizontal scrollable to search the categories.


I also created two page custom:

1. About page: to display the writers of the blog (authors.php),

2. Contact page: to display contact form to send message to admin (contact.php), this page works thanks to SMTP protocol, check your hosting service enabled this service.


<h2>&#x1F53A; Warning &#x1F53A; </h2>

To modify jumbotron background you shuld use the additional css (after log in WP click on paint logo and then click on additional CSS) and write this code:
```
.jumbotron{
background-image:url('');
 /* inside '' you should insert the path of your image */
}
```

To modify the background color of the navbar menu you should do the same thing but in addtional CSS you copy and paste this code:
```
.navbar{
background-color: ;
 /* write the name or the HEX color after : */
}
```
The default language of theme is English but there is also the translation in italian language.

<h2> Images </h2>

<img src="screenshot/mockup_foodside.png" width="60%"/>
 
<img src="screenshot/screenshot_foodside.png" width="60%"/>


