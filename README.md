# BlogOyun
Blogoyun is a website that i made in summer 2020. My main task was creating and understanding what API does in those kind of websites, so i put little effort in frontend. I used PHP for API and tested it with POSTMAN. This API does Post, Delete, Read and Update posts in the website. My documention will be about how API Works in this project. 

# Requirements #
- A localhost server.
- Postman (Or other API applications. I will use postman down below.

# Index #
When you open the Api folder inside of app. You will see 6 file: "create.php, "delete.php", "index.php", "read.php", "single_read.php" and "update.php". Those are the documents that we need to use Api. As you know, API has 15 Requests. Some of them are "Get","Post","Put","Delete". We could use every different request on the files that has name on it. But i made index file so we won't have to. Index file does all of that requests with calling them in code. 

# Using postman #
- Open postman
- Open new request page
- Enter Request URL: "http://localhost/BlogOyun/app/api/index.php/" (You can use other files as optional but i highly recommend to use that.)
- Now you're ready.

# POST #
We need to send json codes for creating a post in website. Click on the requests and select "POST" method.

```
{
"user_id": "2" -- User's id. (You can it in the database)
"topic_id":"1" -- Game's topic id (You can it in the database)
"title": "Game tilte", -- I wrote this on purpose, you will see on next code.
"image: <image>,
  "body": "It's the main text in the page"
  "published":"0", -- if yes write "1", if not write "0"
  "steam": "Game's steam url", -- Optional
  "offical": "Game's offical url", -- Optional
}
```

# PUT #
This method changes the current valus in the database. It's same as the previous code. All you have to do is change the value that you want to.

```
{
"user_id": "3" -- User's id. (You can it in the database)
"topic_id":"1" -- Game's topic id (You can it in the database)
"title": "Game Title",
"image: <image>,
  "body": "It's the main text in the page"
  "published":"0", -- if yes write "1", if not write "0"
  "steam": "Game's steam url", -- Optional
  "offical": "Game's offical url", -- Optional
}
```

# GET #
This method gets the posts on the database. If you don't specify the id of the post it will get all the posts.
```
{
"id": "3" -- Post's id. (You can it in the database)
}
```

# DELETE #
This method deletes the post that you specify on code. All you have to do is insert the post's id.
```
{
"id": "3" -- Post's id. (You can it in the database)
}
```
