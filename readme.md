## BF4 Server Stats Webpage Overview
###### Download the most recent release and view the most recent release notes: https://github.com/tyger07/BF4-Server-Stats/releases/latest
###### View the pretty overview page: http://tyger07.github.io/BF4-Server-Stats/
 
##
![Sample](https://raw.githubusercontent.com/tyger07/BF4-Server-Stats/master/.github/overview.png)
###### *(Example Images) Not affiliated with 'Banzore'*
 
##
 
### Features

* Easy setup.
* Individual server or combined server stats.
* Country stats.
* Map stats.
* Player stats.
* Weapon stats.
* Dog tag stats.
* Game server stats.
* Live scoreboard.
* Top players list / leaderboard.
* Player name search.
* Top players of the Week.
* Suspicious players search.
* Server chat log.
* Stats signature images.
* Gametracker-style server banners.
* Battlelog theme.


### Requirements

This web page code requires the use of a stats database which is created by XpKiller's Procon "Chat, GUID, Stats and Mapstats Logger" Plugin.
If you need help setting up and using XpKiller's Stats Logger plugin, you must seek assistance in XpKiller's plugin thread:
https://myrcon.net/topic/162-chat-guid-stats-and-mapstats-logger-1003/

For best compatibility with this web stats page, use the following settings in XpKiller's Procon Stats Logging plugin:
* "Enable Statslogging?" : Yes
* "Enable Weaponstats?" : Yes
* "Enable Livescoreboard in DB?" : Yes
* "tableSuffix" : None
* "MapStats ON?" : Yes
* "Session ON?" : Yes
* "Save Sessiondata to DB?" : Yes
* "Log playerdata only (no playerstats)?" : No

This webpage code requires that you have access to an Apache web server running a modern version of php and requires that you have read and write permission to add and modify files and directories on that web server.


### Help and Support

For help with this web stats page code, visit the following forum thread:
https://myrcon.net/topic/166-bf4-stats-webpage-for-xpkillers-stats-logger-plugin/
Or, submit a "New Issue" using GitHub:
https://github.com/tyger07/BF4-Server-Stats/issues/new

### Installation Steps


## Environment

| name | required | default | explane |
| --- | --- | --- | --- |
| `BF4_DB_HOST` | Yes | - | - |
| `BF4_DB_PORT` | Yes | - | - |
| `BF4_DB_NAME` | Yes | - | - |
| `BF4_DB_USER` | Yes | - | - |
| `BF4_DB_PASS` | Yes | - | - |
| `BF4_CLAN_NAME` | Yes | - | - |
| `BF4_BANNER_IMAGE` | Yes | - | - |
| `BF4_BANNER_URL` | Yes | - | - |


## Docker Compose example

```yaml
services:
  mariadb:
    image: mariadb:lts
    container_name: bf4-server-stats-db
    restart: always
    environment:
      MARIADB_ALLOW_EMPTY_ROOT_PASSWORD: yes
    volumes:
      - ./mariadb_data:/var/lib/mysql
      - ./initdb.d:/docker-entrypoint-initdb.d
  bf4-server-stats:
    image: ghcr.io/alconium-labs/bf4-server-stats:latest
    container_name: bf4-server-stats
    ports:
      - 8080:80
    environment:
      BF4_DB_HOST: bf4-server-stats-db
      BF4_DB_PORT: "3306"
      BF4_DB_NAME: db
      BF4_DB_USER: user
      BF4_DB_PASS: CHANGEME
      BF4_CLAN_NAME: CHANGEME
      BF4_BANNER_IMAGE: ./common/images/bf4-logo.png
      BF4_BANNER_URL: https://example.com/
    restart: unless-stopped
```

## Image architecture

amd64, arm64

### Additional Information

A .sql file is included in the ./test-database/ folder for users to set up a dummy test database to test this web page when they otherwise have not yet set up a server or have not yet got XpKiller's Stats Logger plugin and database working.


### Changelog

Refer to commmit history on GitHub:
https://github.com/tyger07/BF4-Server-Stats/commits/master



Enjoy!
