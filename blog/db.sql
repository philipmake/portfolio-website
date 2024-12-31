
--The strcuture of a blog post in my database
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(50) NOT NULL,
    date DATE NOT NULL,
    content TEXT NOT NULL
);

