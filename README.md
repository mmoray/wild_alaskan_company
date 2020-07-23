# Wild Alaskan Company
Matthew Moray Assessment for Wild Alaskan Company - Test Application

# Instructions
1. Pull the git repository
2. Run the command `docker-compose build && docker-compose up` from the root directory
3. Navigate to any of the supported routes via a web browser

## Supported Routes
* http://localhost/posts
* http://localhost/posts/{posts_pk}
* http://localhost/users/{users_pk}/posts
* http://localhost/users/{users_pk}/posts/{posts_pk}
* http://localhost/categories/{categories_pk}/posts
* http://localhost/categories/{categories_pk}/posts/{posts_pk}

# Docker Setup
* Web Container: nginx 1.10
* App Container: PHP 7.2.5 (FPM)
  * PHP has been set up to have the bare minimum requirements to run Laravel 7.21.0

# Test Laravel Application
* Laravel 7.21.0
* Route File: routes/routes.php
* Controllers:
  * CategoriesPostsController
  * PostsController
  * UsersPostsController

## Resource Route - Composer Package Library
* Pulling from vcs (github) public repository
  * Location: https://github.com/mmoray/resource_router
  * SSH: git@github.com:mmoray/resource_router.git
  * HTTPS: https://github.com/mmoray/resource_router.git
