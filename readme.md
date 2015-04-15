Crud Bank using Laravel

## To Run Locally

````
git clone https://github.com/Goye/crud-bank.git
````

You must configure the vhost to run it and then execute in the project folder `sudo composer update`

## Included Awesomeness

Before you start, run:

`php artisan migrate`
`php artisan db:seed`

to populate the DB (it's necesarry configurate the access in app/config/database)

Currently you have a login view and some modules view for the cash in, cash out and the option to edit the profile.

## Testing

Run the following command to create the alias:

`alias phpunit="./vendor/bin/phpunit"`

To run the test put `phpunit

## Stack Objectives

- Cash in
- Cash out
- Peer-Peer Transfers
- Account:
  - Profile (name, address, login, password)
  - Balances
  - Transactions
  - Sessions

Questions, Concerns, Ideas or Anolomies, please direct to [@Goye-says](karlos.goye@gmail.com or karlos.goye92@hotmail.com)