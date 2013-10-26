Tune of the day
========

Ever wanted to share your tune of the day and have them all nicely listed without spamming your friends? Yeah, why not.

## Can you be a bit more specific?

This little thingy displays your Tunes as __Spotify Play Buttons__ in a chronological order. You don't need a SQL-Database and Stuff, it's all located in a JSON. The Core is pretty simple and nooby PHP-Stuff.
Adding `/add` to your URL will display all Tunes in a playlist.

## Show me how it looks like

[Look here!](http://tune.verwebbt.de)

## What do I have to do?

1. Change the Path in `add/.htaccess` to your serverpath.
2. Change the Username & Password in `add/.htpasswd`. Use something like [this](http://www.htaccesstools.com/htpasswd-generator/). Later you can add tunes in this area. Default Username and Password is `me`.
3. Edit the default Songs from the `data.json` and add some of yours to it. It's pretty self-explanatory.
4. You pushed it to your Server? Great, you're done.

__IM A PRO:__ You can set the File Permissions from `data.json` to something like 0600. So PHP can read and edit the file but nobody can call the JSON with a normal HTTP-Request.

## Adding Tunes

Of course you can edit the `data.json` directly. But who wants to edit this file every day?
Just call `http://your-fancy-domain.com/add/?[insert spotify uri]` and you've updated your tracks. 

You can copy the URI from the Spotify Desktop client.
![Get the Spotify URI](http://verwebbt.de/files/spotify_uri.jpg)

## Can I theme it?

Oh yes! Theming is a bit like in WordPress. Create a new Folder in `template` with an `index.php`  and put your HTML in it. If you're ready change the value of `template` in the `data.json` to the name of your Template (the name of the folder).
Also you have to create a `all.php`, where your Songs are displayed in a playlist.

You can use a few functions to get your data in the template:

* `tune_uri()`: Outputs the URI of the Spotify Song.
* `get_tune_uri()`: Returns the URI.
* `all_tune_uri()`: Outputs the URI of all Spotify Song separated by a comma.
* `get_all_tune_uri()`: Returns the URI of all Spotify Song separated by a comma.
* `tune_date($format)`: Outputs the Date. As `$format` you can use any valid date-Format you like. Default is `j. F Y – H:i`.
* `get_tune_date($format)`: Returns the Date.
* `template_folder()`: Outputs the Directory of your Template (Location of Template index.php) for things like URL to Stylesheet and stuff.
* `get_template_folder()`: Gets the Directory of your Template.
* `home_url()`: Outputs the URL to home out of the json.
* `get_home_url()`: Returns the URL to home out of the json.
* `first_tune()`: Returns `true` if current tune is newest.
* `next_tune()`: Sets Iterator to next tune. Use it at the end of your while-Loop.
* `have_tunes()`: Returns `true`, if there is another song in your list. Perfect for `while(have_tunes())`.

You can find the HTML for the Play Button [here](https://developer.spotify.com/technologies/widgets/spotify-play-button/). I made a first template called `schmosby`. It's already there, self-explanatory and has all the available functions in it.

__So, why are you waiting?__