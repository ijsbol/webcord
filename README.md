# Webcord
If you want to display the number of people on your website, click here.
## Authors
Scrumpy - Project Lead
AlphaDev - the guy who made the readme.md

## Usage
**Refer to the membercount.php file for more.**
Make sure to put the bot token in for authorization and replace the Discord Server ID - 
```html
<?php
$opts = [
    "http" => [
        "method" => "GET",
        "header" => 'Authorization: Bot PUT_YOUR_DISCORD_BOT_TOKEN_HERE'
    ]
];


$context = stream_context_create($opts);

$file = file_get_contents('https://discordapp.com/api/guilds/DISCORD_SERVER_ID?with_counts=true', false, $context);
$file = json_decode($file, true);
$membercount = intval($file["approximate_member_count"]);
?>
```

Example usage down below.

```html
<?php
$opts = [
    "http" => [
        "method" => "GET",
        "header" => 'Authorization: Bot PUT_YOUR_DISCORD_BOT_TOKEN_HERE'
    ]
];


$context = stream_context_create($opts);

$file = file_get_contents('https://discordapp.com/api/guilds/DISCORD_SERVER_ID?with_counts=true', false, $context);
$file = json_decode($file, true);
$membercount = intval($file["approximate_member_count"]);
?>
<html>
<!-- Made by https://github.com/Scrumpyy/ with love -->
<body>
<h1><?php echo $membercount; ?></h1>
</body>
</html>
```
