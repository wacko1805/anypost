# anypost
<hr>
<h3>anypost is an open source, anonymous, tracking free posting app. anypost is simple. just upload a title and comment and your fully anonymous post will be there for everyone to see!</h3>
<hr>
<p><img src="http://anypost.pixel-fy.com/sample.png"width="50%"><img src="http://anypost.pixel-fy.com/chats.png"width="50%"></p>
<hr>
# How to make your own!

1. install xammp, wamp, lamp or what ever mysql php server you use

2. start the mysql server and head to http://localhost/phpmyadmin. Create a new database called "anypost" In that create a table called "posts".
3. Create 3 columns named title, comment and upload_date. Set all of these to VARCHAR and change the limit to something like 200. 
4. Download the source code to anypost and place it in the root location of the web server, (ex c:/xammp/htdocs).
5. head to http://localhost and hopefully your very own Anypost is running!
