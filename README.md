[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/GoogleURLShortener/functions?utm_source=RapidAPIGitHub_GoogleURLShortenerFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# GoogleURLShortener Package
With the URL Shortener API you can write applications that use simple HTTP methods to create, inspect, and manage goo.gl short links from desktop, mobile, or web.
* Domain: [goo.gl](https://goo.gl)
* Credentials: apiKey, accessToken

## How to get credentials: 
1. Sign in [google dev page](https://console.developers.google.com/apis/credentials?pli=1)
2. Create new API key;

[Read more](https://developers.google.com/url-shortener/v1/getting_started)

## Custom datatypes:
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]```
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 
 
## GoogleURLShortener.shortenLongUrl
The Google URL Shortener API allows you to shorten URLs just as you would on goo.gl.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| Your application API key.
| longUrl| String     | Long URL

## GoogleURLShortener.expandShortUrl
You can call this method to expand any goo.gl short URL.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your application API key.
| shortUrl| String     | Short URL

## GoogleURLShortener.getUrlAnalytics
To look up a short URL's analytics

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your application API key.
| shortUrl| String     | Short URL

## GoogleURLShortener.getUserHistory
To fetch a user's history.

| Field | Type       | Description
|-------|------------|----------
| accessToken| credentials| OAuth 2.0 access token.

