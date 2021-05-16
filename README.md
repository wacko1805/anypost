# anypost
<hr>
<h3>anypost is an open source, anonymous, tracking free posting app. anypost is simple. just upload a title and comment and your fully anonymous post will be there for everyone to see!</h3>
<hr>
<p><img src="http://anypost.pixel-fy.com/sample.png"width="50%"><img src="http://anypost.pixel-fy.com/chats.png"width="50%"></p>
<hr>
# How to make your own!

1. install xammp, wamp, lamp or what ever mysql php server you use

2. start the mysql server and head to http://localhost/phpmyadmin. Create a new database called "anypost" In that create a table called "posts".
3. Create 4 columns named title, comment, upload_time and display_time. Set all of these to VARCHAR and change the limit to something like 200. 
4. Download the source code to anypost and place it in the root location of the web server, (ex C:/xammp/htdocs).
5. head to http://localhost and hopefully your very own Anypost is running!

If you want your dev center to work (The dev center is a page only for the developer who can post html code and it says "uploaded by dev" instead of the date and time)
1. Create a database ap_dev. Create a table called "user" with 2 tables, one called "username" and one called "password". set the limit to 10.
2. head to http://localhost/dev/ and log in with the password you created.

