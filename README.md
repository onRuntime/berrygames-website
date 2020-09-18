<div align="center">
  <br>
	<a href="https://berrygames.net"><img src="https://i.imgur.com/EOSICR3.png" width="160"></a>
  <br>
  <p>
    <a href="https://discord.gg/9vedhPD"><img src="https://discordapp.com/api/guilds/623254930848874511/embed.png" alt="Discord server" ></a>
    <a href="/../../"><img src="https://img.shields.io/github/last-commit/onRuntime/berrygames-website
" alt="GitHub last-commit" /></a>
    <a href="https://www.patreon.com/onruntime"><img src="https://img.shields.io/badge/donate-patreon-F96854" alt="Patreon" /></a>
  </p>
</div>

# BerryGames - Website
BerryGames official website.

## Installation
* [Install Symfony](https://symfony.com/doc/current/setup.html) with Composer (see [requirements details](https://symfony.com/doc/current/reference/requirements.html)).

* Then run the following commands:
```
# Clone the project to download its contents
> cd projects/
> git clone https://github.com/onRuntime/berrygames-website.git

# Make Composer install the project's dependencies into vendor/
> cd berrygames-website/
> composer install
```

* Finally, setup your .env as the .env.example

## Usage
* Note:
Especially when you operate on an existing production project, do not put the following folders/files:
- .env
- var
- vendor
- .idea
- .git
- public/forum

* In case of error 500 try to use the following commands in the project folder:
- chmod -R 777 var/log/
- chmod -R 777 var/cache/

* At each production start, perform the following commands in the project folder:
- rm -rf var/cache/prod/
- rm -rf var/cache/dev/ (if the folder exists)

## Support
<a href="https://www.patreon.com/onruntime">
	<img src="https://c5.patreon.com/external/logo/become_a_patron_button@2x.png" width="160">
</a>

## License
[GNU GPL v3.0](LICENSE)

## Links
* [BerryGames](https://berrygames.net)
* [onRuntime Studio](https://onruntime.com)
