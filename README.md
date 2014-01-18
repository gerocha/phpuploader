# PHP File Uploader

A very simple PHP file uploader. Just put it into your web server and
start uploading files.

## How to use

In order to use this file uploader you must have a HTTP server capable
of running PHP scripts. Apache HTTP is a good choice.

Copy the file **uploader.php** into a directory under your HTTP server
root and access it using a browser. Then choose a file and click on
*Send file*. Simple, huh?

## Configuration

Want some fancy configuration? We don't have enough of it, just three
options in the beginning of **uploader.php**:

- ENCODING: The encoding your HTTP server uses (utf-8 by default)
- TITLE: The title of your page
- DESTINATION: Where the uploaded file must be moved to.

## Todo

Here are some nice things to implement and make this project awesome:

- Password protected access
- Filesize limit
- Filetype filter
- Better template

If you want some of these features just open a PR ;)

## License

This software is free for everyone everywhere. Just do whatever you want
and don't blame me if you have issues.
