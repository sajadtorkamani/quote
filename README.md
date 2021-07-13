# Quote CLI

A command-line app that prints inspiring quotes from my Notion database. This is intended only for
my personal use.

## Development setup

- Install composer dependencies
    ```shell
    composer install
    ```
- Test the commands
  ```shell
  ./quote <command>
  ```
- This project uses Laravel Zero so check the [docs](https://laravel-zero.com/docs/introduction) for
  more info.

## Publish updated version
- Create new standalone app.
  ```shell
  php quote app:build quote
  ```
- Push changes to GitHub
- [Draft new release](https://github.com/sajadtorkamani/quote/releases/new)
    - This will automatically publish an updated version on Packagist.

## How to install as a composer package

- Install composer package
  ```shell
  composer global require sajadtorkamani/quote
  ```
- Run
  ```shell
  quote
  ```
