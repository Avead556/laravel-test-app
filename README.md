# test laravel app

## install
### 1. Run `docker compose up -d` <br>

.env.example will convert to -> .env and
will run `composer install`
If you want deploy project without docker than do it manually 

### 2. Run `php artisan migrate`
### 3. Run `php artisan queue:work`
### 4. Enjoy
 
### for test `php artisan test`

# Api
## POST `/submit`
body:
`{
    "name": "John Doe",
    "email": "john.doe@example.com",
    "message": "This is a test message."
}
`
<br>
response: 
<br>
200 `{"success": true}`
<br>
422 `{
"message": "The email field must be a valid email address.",
"errors": {
    "email": [
        "The email field must be a valid email address."
    ]
  }
}`
