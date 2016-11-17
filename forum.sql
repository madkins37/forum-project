#Forum db
DROP DATABASE IF EXISTS forum;
CREATE DATABASE forum;
USE forum;  -- MySQL

CREATE TABLE topics (
  topicID        		INT(11)        NOT NULL   AUTO_INCREMENT,
  topicTitle		   VARCHAR(255)   NOT NULL,
  topicDescription     VARCHAR(255)   NOT NULL,
  topicDateCreated      DATETIME       NOT NULL		DEFAULT NOW(),
  topicCreatedByUserID    INT(11)       NOT NULL,
  PRIMARY KEY (topicID)
);


CREATE TABLE users (
  userID              INT(11)        NOT NULL   AUTO_INCREMENT,
  userName		    VARCHAR(255)   NOT NULL,
  userPassword     VARCHAR(255)   NOT NULL,
  userDateCreated    DATETIME       NOT NULL	DEFAULT NOW(),
  userType      	VARCHAR(1)       NOT NULL,

  PRIMARY KEY (userID)
);



CREATE TABLE threads (
  threadID        		INT(11)        NOT NULL   AUTO_INCREMENT,
  threadTitle			VARCHAR(255)       NOT NULL,
  threadDescription		VARCHAR(255)       NOT NULL,
  threadDateCreated      DATETIME       NOT NULL	DEFAULT NOW(),
  threadTopicID      	INT(11)  		 NOT NULL,
  threadUserID			 INT(11)   		NOT NULL,
  threadFeatured		TINYINT(1)		NOT NULL,

  PRIMARY KEY (threadID)

);



CREATE TABLE comments (	
  commentID        		INT(11)       	 NOT NULL   AUTO_INCREMENT,
  commentUserID     	INT(11)          NOT NULL,
  commentThreadID      	INT(11)    		 NOT NULL,
  commentDateCreated	DATETIME		 NOT NULL	DEFAULT NOW(),
  commentContent		VARCHAR(255)	 NOT NULL,
  commentReplyID		INT(11)			 NOT NULL,
  PRIMARY KEY (commentID)
);



CREATE TABLE forums (
  forumID        			INT(11)        NOT NULL   AUTO_INCREMENT,
  forumPrimaryAdminID     	INT(11)            NOT NULL,
  forumTitle      			VARCHAR(255)       NOT NULL,
  forumDescription 			VARCHAR(255)		NOT NULL,
  forumDateCreated 			DATETIME			NOT NULL	DEFAULT NOW(),
  PRIMARY KEY (forumID)
);

INSERT INTO forums VALUES
(1,2,"Our Crazy PHP Life", "PHP is the way to be", NOW());

INSERT INTO comments VALUES
(1,1,1,NOW(), 'I adopted a cat today', 0),
(2,2,1,NOW(),'Wow!', 1),
(3,4,1,NOW(),'Amazing!', 1),
(4,3,1,NOW(),'News story!', 0),
(5,3,2,NOW(),'Another new story about angry cats:', 0);

INSERT INTO topics VALUES
(1, 'Cats', 'All about your favorite felines!', NOW(), 1);

INSERT INTO users VALUES
(1, 'Olivia', AES_ENCRYPT('SecretSalt', 'Olivia'), NOW(), 'A'),
(2, 'Mark', AES_ENCRYPT('SecretSalt', 'Mark'), NOW(), 'A'),
(3, 'David', AES_ENCRYPT('SecretSalt', 'David'), NOW(), 'A'),
(4, 'Andrew', AES_ENCRYPT('SecretSalt', 'Andrew'), NOW(), 'U');


INSERT INTO threads VALUES
(1, 'Cute Cats', 'Cats take over the Internet', NOW(), 1, 1, 1),
(2, 'Angry Cats', 'Mean cats', NOW(), 1, 1, 0);

INSERT INTO comments VALUES
(1,1,1,NOW(),'Look at this cat: http://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg', 0),
(2,2,1,NOW(),'Wow!', 1),
(3,4,1,NOW(),'Amazing!', 1),
(4,3,1,NOW(),'News story!', 0),
(5,3,2,NOW(),'Another new story about angry cats:', 0);



