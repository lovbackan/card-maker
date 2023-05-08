## Card Maker

A site where u can create, read, update and delete cards(crud). Ment to help organize and overview a process where a structure of cards could be helpful.

Created by [Simon Lövbacka](https://github.com/lovbackan) & [Styrbjörn Nordberg](https://github.com/styrbjorn-n)

# Stack

Php (Laravel), Javascript, Html, Css

# Code review

Code review written by [Tommi Uusitalo](https://github.com/tpku) & [Axel Enghamre](https://github.com/AxelEnghamre).

1. `CreateCardController.php: 39` - If category id is null the site crashes. Add a redirect and print and catch an error message if category is null.
2. `Card-displayed.blade.php` - Show Cards blade file is overlapping other views which make some function unable to use. You can’t create a card if show cards is active.
3. `RegistrationController.php: 6 - 7` - Classes Auth and Redirect are never used. Should be removed?
4. `DashboardController.php: 8` - Class “DB” is never used. Should be removed?
5. `RegistrationController.php : 26 - 29` - Due to the validation of the request where unique:users is set, the message and the if statement are unnecessary. The validation will stop the exicution and send a message.
6. `EditCardController.php: 9` - Typo with two “;”
7. `EditCardController.php: 18 - 27` - Move the authentication before the validation of the request.
8. `EditCardController.php: 29 - 31` - Why is the edit of the card based on the title instead of an ID?
9. `LoginController.php: 13 - 18` - Logged-in users could be redirected before attempting to log in the user.
10. `LogoutController.php: 12` - Could add a Session::flush() before running the logout logic.
11. `web.php: 27` - Add middleware('auth') because only logged-in users can log out.
12. `web.php: 33` - Add middleware('guest') because only logged-out users should be able to create accounts.
13. `web.php: 35` - Add middleware('auth') because only logged-in users can create cards.
14. `web.php: 37` - Add middleware('auth') because only logged-in users can edit cards.
15. `web.php: 39` - Add middleware('auth') because only logged-in users can delete cards.
16. `EditCardController: 9` - Class “DB” is never used. Should be removed?
17. `Github Repo` - Remove .env. This file should never be uploaded.
18. `Github Repo` - node_modules. This folder should never be uploaded.
19. `Github Repo` - vendor. This folder should never be uploaded.
20. `Blade files (forms)` - csrf method used could be replaced with "@csrf".
