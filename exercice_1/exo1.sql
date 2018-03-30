/*Selecting all of the article table where his ID is 10 and also selecting this article's author's details*/
Select * FROM articles, users WHERE article.id = 10 AND articles.id_user = users.id;