Tune of the day
========

Ever wanted to share your tune of the day and have them all nicely listed without spamming your friends? Yeah, why not.

## Can you be a bit more specific?

This little thingy displays your Tunes as __Spotify Play Buttons__ in a chronological order. The Core is a pretty simple nooby PHP-File. Yeah, the `index.php` in the root. But you don't have to care about it. The PHP-File gets your Tunes from the `data.json`.

## Show me how it looks like

[Look here!](http://tune.verwebbt.de)

## What do I have to do?

Edit the `data.json` and add some Tunes to it. It's pretty self-explanatory. Just put the files to your Server and you're good to go.

## Can I theme it?

Oh yes! Theming is a bit like in WordPress. Create a new Folder in `template` with an `index.php`  and put your HTML in it. If you're ready change the value of `template` in the `data.json` to the name of your Template (the name of the folder).
You can find the HTML for the Play Button [here](https://developer.spotify.com/technologies/widgets/spotify-play-button/).

You can use a few functions to get your data in the Template:

* `tune_uri()`: Outputs the URI of the Spotify Song.
* `tune_date($format)`: Outputs the Date. As `$format` you can use any valid date-Format you like.
* `have_tunes()`: Returns `true`, if there is another song in your list. Perfect for `while(have_tunes())`. It also sets the Iterator to the next element.
* `template_folder()`: Outputs the Folder of your Template for things like URL to Stylesheet and stuff.

__Why does it iterate at the start of have_tunes()?__
You can start with calling the newest Song out of your list before looping them all. For example theme it a bit bigger, because it's more important, I think. Then loop through the other tunes.

I made a first template called `schmosby`. It's already there, self-explanatory and has all the available functions in it.

__So, why are you waiting?__