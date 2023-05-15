<p align="center">
<img src="https://i.ibb.co/ydWTXyD/kyoko.png" width="160"/><br/>
<b>歳納京子</b><br/>
Toshino Kyoko<br/>
<img src="https://img.shields.io/badge/PHP-8.0-bf616a?style=flat-square"/> <img src="https://img.shields.io/badge/LICENE-GPL3.0-ebcb8b?style=flat-square"/> <img src="https://img.shields.io/badge/VERSION-1.0.2-a3be8c?style=flat-square"/><br/>
Generate Random Anime Pictures & Quotes,<br/>
Trace Anime Screenshot To Find The Source,<br/>
And Find Detail Information About Any Anime Titles!<br/>
<u><i>https://kyoko.rei.my.id</i></u>
<br/>
<br/>
Support Me!<br/>
<a href="https://paypal.me/elliottophellia">Paypal</a> - <a href="https://saweria.co/elliottophellia">Saweria</a> - <a href="https://trakteer.id/elliottophellia">Trakteer</a> - <a href="https://ko-fi.com/elliottophellia">Kofi</a>
<br/>
<br/>

```
Note:
you can ajust the result by adding ?r=number or ?result=number to the url

example: 
https://kyoko.rei.my.id/api/sfw.php?r=5
https://kyoko.rei.my.id/api/sfw.php?result=5

result:
{
    apiTimestamp: 1670271152,
    apiStatus: "success",
    apiCode: 200,
    apiResult: {
        url: [
           "https://i.rei.my.id/KBBuZ5R.jpg",
           "https://i.rei.my.id/NOJicBh.png",
           "https://i.rei.my.id/vI9Hgee.jpg",
           "https://i.rei.my.id/-oA3loc.png",
           "https://i.rei.my.id/BA_QzLq.jpg"
        ]
    }
}

For AnimeSearch and AnimeTrace you need to adding query

example:
https://kyoko.rei.my.id/api/myanimelist.php?q=yuru%20yuri

result:
{
   "apiTimestamp":1672283167,
   "apiStatus":"success",
   "apiCode":200,
   "apiResult":{
      "mal_id":12403,
      "url":"https://myanimelist.net/anime/12403/Yuru_Yuri♪♪",
      "images":{
         "jpg":{
            "image_url":"https://cdn.myanimelist.net/images/anime/8/75174.jpg",
            "small_image_url":"https://cdn.myanimelist.net/images/anime/8/75174t.jpg",
            "large_image_url":"https://cdn.myanimelist.net/images/anime/8/75174l.jpg"
         },
         "webp":{
            "image_url":"https://cdn.myanimelist.net/images/anime/8/75174.webp",
            "small_image_url":"https://cdn.myanimelist.net/images/anime/8/75174t.webp",
            "large_image_url":"https://cdn.myanimelist.net/images/anime/8/75174l.webp"
         }
      },
      .......


example:
https://kyoko.rei.my.id/api/trace.php?q=https://bit.ly/akarin-dead

result:
{
   "apiTimestamp":1672283050,
   "apiStatus":"success",
   "apiCode":200,
   "apiResult":{
      "anilist":21088,
      "filename":"[Leopard-Raws] Yuru Yuri San Hai! - 01 RAW (TX 1280x720 x264 AAC).mp4",
      "episode":1,
      "from":334.5,
      "to":336.75,
      "similarity":1,
      "video":"https://media.trace.moe/video/21088/%5BLeopard-Raws%5D%20Yuru%20Yuri%20San%20Hai!%20-%2001%20RAW%20(TX%201280x720%20x264%20AAC).mp4?t=335.625&now=1672286400&token=Mc4fN0NEjNoUi19Jg0f9FewOr8U",
      "image":"https://media.trace.moe/image/21088/%5BLeopard-Raws%5D%20Yuru%20Yuri%20San%20Hai!%20-%2001%20RAW%20(TX%201280x720%20x264%20AAC).mp4.jpg?t=335.625&now=1672286400&token=1vVz8gIdC4mopT1CjHKi5R7Xms"
   }
}
```

</p>
