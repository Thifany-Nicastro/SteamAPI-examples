<?php
    include("steamapi.php"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h1><?=$json["response"]["players"][0]["personaname"];?></h1>
        <img src="<?=$json["response"]["players"][0]["avatarfull"];?>">
        <ul>
            <li>SteamID64: <?=$json["response"]["players"][0]["steamid"];?></li>
            <li>Display Name: <?=$json["response"]["players"][0]["personaname"];?></li>
            <li>URL: <?=$json["response"]["players"][0]["profileurl"];?></li>
            <li>Small Avatar: <img src='<?=$json["response"]["players"][0]["avatar"];?>'></li>
            <li>Medium Avatar: <img src='<?=$json["response"]["players"][0]["avatarmedium"];?>'></li>
            <li>Full Avatar: <img src='<?=$json["response"]["players"][0]["avatarfull"];?>'></li>
            <li>Status: <?=personaState($json['response']['players'][0]['personastate']);?></li>
            <li>Real Name: <?=$json["response"]["players"][0]["realname"];?></li>
            <li>Joined: <?=$join_date;?></li>
        </ul>
        <ul>
            <li> Jogo: <?=$json2[$appid]["data"]["name"];?></li>
            <li> Desc: <?=$json2[$appid]["data"]["short_description"];?></li>
            <li> Moeda: <?=$json2[$appid]["data"]["price_overview"]["currency"];?></li>
            <li> Preço normal: <?=$json2[$appid]["data"]["price_overview"]["initial"];?></li>
            <li> Preço atual: <?=$json2[$appid]["data"]["price_overview"]["final"];?></li>
            <li> Preço atual F: <?=$json2[$appid]["data"]["price_overview"]["final_formatted"];?></li>
            <li> Desconto: <?=$json2[$appid]["data"]["price_overview"]["discount_percent"];?></li>
        </ul>
    </body>
</html>
