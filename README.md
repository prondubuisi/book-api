# book-api

## User

| `Endpoint` | `api/users` |      |
| :---------| :------------ | ----- |
| Request Type |  POST       |    
| Description  | Creates a new User |
|             |                      |
|  `Field`      | `Limits` |  `Required`    |
| email      | Standard email | YES         |
| username      | At least one character | YES |
| password | At least 6 characters     |    YES |



## Book

| `Endpoint` | `api/books` | |
| :---------| :------------ | --------|
| Request Type |  `POST` |
| Description | `Creates a new book, with other meta data` |
|             |             |
|  `Field`      | `Limits` |  `Required`    |
| title      | < 80 characters and >= 1 character  | YES |
| author      | < 80 characters and >= 1 character | YES |
| user_id      |  | YES |
| description | >= 10 characters    |    YES |
| price      | number > 1 | YES |
|image   |a valid photo| YES |


| `Endpoint` | `api/books` |
| :---------| :------------ |
| Request Type |  GET |
| Description | Gets book details |













 
