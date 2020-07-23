# Wild Alaskan Company
Matthew Moray Assessment for Wild Alaskan Company

# Docker Setup
* Web Container: nginx 1.10
* App Container: PHP 7.2.5 (FPM)
  * PHP has been set up to have the bare minimum requirements to run Laravel 7.21.0

# Resource Route - Composer Package Library
* Pulling from svn (github) public repository
  * Location: https://github.com/mmoray/resource_router
  * SSH: git@github.com:mmoray/resource_router.git
  * HPPTS: https://github.com/mmoray/resource_router.git

## Test Laravel Application
* Laravel 7.21.0
* Route File: routes/routes.php
* Controllers:
  * CategoriesPostsController
  * PostsController
  * UsersPostsController