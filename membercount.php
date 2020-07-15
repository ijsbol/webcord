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
