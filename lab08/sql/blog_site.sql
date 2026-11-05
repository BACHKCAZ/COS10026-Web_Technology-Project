DROP DATABASE IF EXISTS blog_site;
CREATE DATABASE blog_site;
USE blog_site;


CREATE DATABASE IF NOT EXISTS blog_site;
USE blog_site;


CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    is_active BOOLEAN NOT NULL DEFAULT TRUE
);


CREATE TABLE IF NOT EXISTS posts (
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    content TEXT,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);


INSERT INTO users (username, email, is_active) VALUES 
('alex', 'alex@email.com', TRUE),
('mia', 'mia@email.com', FALSE),
('bachhuy', 'bachhuy@email.com', TRUE);
 

INSERT INTO posts (user_id, title, content) VALUES 
(1, 'First Post', 'This is my first blog post.'),
(2, 'Hello World', 'Mia is testing her first post.'),
(3, 'Hello', 'Huy is testing this post.');