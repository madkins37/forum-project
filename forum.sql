#Forum db
DROP DATABASE IF EXISTS forum;
CREATE DATABASE forum;
USE forum;  -- MySQL

CREATE TABLE users (
  userID              INT(11)        NOT NULL   AUTO_INCREMENT,
  userName        VARCHAR(255)   NOT NULL,
  userPassword     VARCHAR(255)   NOT NULL,
  userDateCreated    DATETIME       NOT NULL  DEFAULT NOW(),
  userType        VARCHAR(1)       NOT NULL,
  userEmail       VARCHAR(100)     NOT NULL,

  PRIMARY KEY (userID)
);

CREATE TABLE forums (
  forumID             INT(11)        NOT NULL   AUTO_INCREMENT,
  forumPrimaryAdminID       INT(11)            NOT NULL,
  forumTitle            VARCHAR(255)       NOT NULL,
  forumDescription      VARCHAR(255)    NOT NULL,
  forumDateCreated      DATETIME      NOT NULL  DEFAULT NOW(),

  FOREIGN KEY (forumPrimaryAdminID) REFERENCES users(userID),

  PRIMARY KEY (forumID)
);


CREATE TABLE topics (
  topicID           INT(11)        NOT NULL   AUTO_INCREMENT,
  topicTitle       VARCHAR(255)   NOT NULL,
  topicDescription     VARCHAR(255)   NOT NULL,
  topicDateCreated      DATETIME       NOT NULL   DEFAULT NOW(),
  topicCreatedByUserID    INT(11)       NOT NULL,
  topicForumID          INT(11)       NOT NULL,   
  
  FOREIGN KEY (topicCreatedByUserID) REFERENCES users(userID),
  FOREIGN KEY (topicForumID) REFERENCES forums(forumID) ON DELETE CASCADE,

  PRIMARY KEY (topicID)
);



CREATE TABLE threads (
  threadID            INT(11)        NOT NULL   AUTO_INCREMENT,
  threadTitle     VARCHAR(255)       NOT NULL,
  threadDescription   VARCHAR(255)       NOT NULL,
  threadDateCreated      DATETIME       NOT NULL  DEFAULT NOW(),
  threadTopicID       INT(11)      NOT NULL,
  threadUserID       INT(11)      NOT NULL,
  threadFeatured    TINYINT(1)    NOT NULL,

  FOREIGN KEY (threadTopicID) REFERENCES topics(topicID) ON DELETE CASCADE,
  FOREIGN KEY (threadUserID) REFERENCES users(userID),

  PRIMARY KEY (threadID)

);



CREATE TABLE comments ( 
  commentID           INT(11)          NOT NULL   AUTO_INCREMENT,
  commentUserID       INT(11)          NOT NULL,
  commentThreadID       INT(11)        NOT NULL,
  commentDateCreated  DATETIME     NOT NULL DEFAULT NOW(),
  commentContent    VARCHAR(255)   NOT NULL,
  commentReplyID    INT(11)     ,

  FOREIGN KEY (commentUserID) REFERENCES users(userID),
  FOREIGN KEY (commentThreadID) REFERENCES threads(threadID) ON DELETE CASCADE,
  FOREIGN KEY (commentReplyID) REFERENCES comments(commentID) ON DELETE CASCADE,

  PRIMARY KEY (commentID)
);



# First Users
# Then Forum
# Then Topics
# Then Threads
# Then Comments

INSERT INTO users VALUES
(1, 'Olivia', AES_ENCRYPT('SecretSalt', 'Olivia'), NOW(), 'A', "milam33@marshall.edu"),
(2, 'Mark', AES_ENCRYPT('SecretSalt', 'Mark'), NOW(), 'A', "markadki37@gmail.com"),
(3, 'David', AES_ENCRYPT('SecretSalt', 'David'), NOW(), 'A', "wingfield4@live.marshall.edu"),
(4, 'Andrew', AES_ENCRYPT('SecretSalt', 'Andrew'), NOW(), 'U', "what@Imnotsure.cool");

INSERT INTO forums VALUES
(1,2,"Our Crazy PHP Life", "PHP is the way to be", NOW());

INSERT INTO topics VALUES
(1, 'Cats', 'All about your favorite felines!', NOW(), 1, 1);


INSERT INTO threads VALUES
(1, 'Cute Cats', 'Cats take over the Internet', NOW(), 1, 1, 1),
(2, 'Angry Cats', 'Mean cats', NOW(), 1, 1, 0);

INSERT INTO comments VALUES
(1,1,1,NOW(), 'I adopted a cat today', NULL),
(2,2,1,NOW(),'Wow!', 1),
(3,4,1,NOW(),'Amazing!', 1),
(4,3,1,NOW(),'News story!', NULL),
(5,3,2,NOW(),'Another new story about angry cats:', NULL);

INSERT INTO comments VALUES
(6,1,1,NOW(),'Look at this cat: http://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg', NULL),
(7,2,1,NOW(),'Wow!', 1),
(8,4,1,NOW(),'Amazing!', 1),
(9,3,1,NOW(),'News story!', NULL),
(10,3,2,NOW(),'Another new story about angry cats:', NULL);

GRANT ALL PRIVILEGES ON forum.* To 'phpAppConnection'@'localhost' IDENTIFIED BY 'phpAppConnection';

