INSERT INTO `address  book` (`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`)
VALUES (NULL, '李小明5', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 04:55:59.000000'),
(NULL, '李小明6', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', now());



INSERT INTO `address  book` (`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES
(1, '李小明', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 04:55:59'),
(2, '李小明2', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 04:55:59'),
(3, '李小明5', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 04:55:59'),
(4, '李小明6', 'ming@gmail.com', '0918111222', '2002-04-02', '台北市', '2021-04-07 11:12:50');








create
read
update
delete


SELECT `sid`, `name`, `mobile` FROM `address  book` WHERE 1


SELECT * FROM `address  book` WHERE `birthday` < '2000-01-01'