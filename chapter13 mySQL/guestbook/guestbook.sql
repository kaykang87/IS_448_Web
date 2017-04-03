DROP TABLE IF EXISTS guestbook;

CREATE TABLE guestbook (comment_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
                        username VARCHAR(20),
                        comment_text VARCHAR(250),
                        phone_number VARCHAR(20));

INSERT INTO guestbook(comment_id, username, comment_text, phone_number)
VALUES ('kyong', 'hello my name is kyong', '301-123-1234');

INSERT INTO guestbook (comment_id, username, comment_text, phone_number)
VALUES ('kang', 'hello my name is kang', '301-321-4321');