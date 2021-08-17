# anypost
Anypost, a free open source, fully anonymous chat app 

# features
* Anonymous Posting
* Commenting
* Topics

## How to use:

* Download any Apache or NGINX server with PHP and MYSQL
* Create database called `anypost`
* Create Tables in the databse:
```
CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `upload_time` varchar(20) NOT NULL,
  `display_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `title` varchar(111) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `upload_time` varchar(111) NOT NULL,
  `display_time` varchar(100) NOT NULL,
  `topic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `topics` (
  `id` int(255) NOT NULL,
  `topic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `topic`) VALUES
(4, 'Question'),
(5, 'Bored Post');
```

For Dev:

```
CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `a` int(11) NOT NULL,
  `aa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `login` (`username`, `password`, `a`, `aa`) VALUES
('user', 'pass', 0, 0);
COMMIT;
```

## To Do:
* Fix Admin area
