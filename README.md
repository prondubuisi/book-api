# book-api

## User

| `Endpoint` | `api/user` |      |
| :---------| :------------ | ----- |
| Request Type |  POST       |    
| Description  | Creates a new User |
|             |                      |
|  `Field`      | `Limits` |  `Required`    |
| email      | Standard email | YES         |
| username      | At least one character | YES |
| password | At least 6 characters     |    YES |

| `Endpoint` | `api/user/id/auth` |
| :---------| :------------ |
| Request Type |  POST |
| Description | Authenticates a user |


## Book

| `Endpoint` | `api/book` | |
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

| `Endpoint` | `api/book/id/cover` |   |
| :---------| :------------ |-------|
| Request Type |  `PUT` |
| Description | Updates book profile adding image path |
|             |                       |
|  `Field`      | `Limits` |  `Required`    |
| photo_path      | path  | YES |

| `Endpoint` | `api/book` |
| :---------| :------------ |
| Request Type |  GET |
| Description | Gets book details |













 
