Tune of the day
========

Ever wanted to share your tune of the day and have them all nicely listed without spamming your friends? Yeah, why not.

## Can you be a bit more specific?

This little thingy displays your Tunes as __Spotify Play Buttons__ in a chronological order. The Core is a pretty simple nooby PHP-File. Yeah, the `index.php` in the root. But you don't have to care about it. The PHP-File gets your Tunes from the `data.json`.

## Show me how it looks like

[Look here!](http://tune.verwebbt.de)

## What do I have to do?

Edit the `data.json` and add some Tunes to it. You need the Spotify URI and a Date. You can copy the URI from the Spotify Desktop client.
![Get the Spotify URI](http://verwebbt.de/files/spotify_uri.jpg)

It's pretty self-explanatory. If you're done, just put the files to your Server and you're good to go.

__IMA PRO:__ You can set the File Permissions from `data.json` to something like 0600. So PHP can read the file but nobody can call the JSON with a normal HTTP-Request.

## Can I theme it?

Oh yes! Theming is a bit like in WordPress. Create a new Folder in `template` with an `index.php`  and put your HTML in it. If you're ready change the value of `template` in the `data.json` to the name of your Template (the name of the folder).

You can use a few functions to get your data in the template:

* `tune_uri()`: Outputs the URI of the Spotify Song.
* `tune_date($format)`: Outputs the Date. As `$format` you can use any valid date-Format you like.
* `first_tune()`: Returns `true` if current tune is newest.
* `template_folder()`: Outputs the Folder of your Template for things like URL to Stylesheet and stuff.
* `next_tune()`: Sets Iterator to next tune. Use it at the end of your while-Loop.
* `have_tunes()`: Returns `true`, if there is another song in your list. Perfect for `while(have_tunes())`.

You can find the HTML for the Play Button [here](https://developer.spotify.com/technologies/widgets/spotify-play-button/). I made a first template called `schmosby`. It's already there, self-explanatory and has all the available functions in it.

__So, why are you waiting?__