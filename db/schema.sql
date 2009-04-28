-- sqlite3

CREATE TABLE user(
	id INT AUTO_INCREMENT,
	name VARCHAR(20),
	password_hash VARCHAR(32),
	cookie_token VARCHAR(32),
	PRIMARY KEY(id)
);

CREATE TABLE pub(
	id INT AUTO_INCREMENT,
	name VARCHAR(20)
);

CREATE TABLE status_update(
	user_id INT,
	pub_id INT,
	timestamp INT,
	FOREIGN KEY(user_id) REFERENCES user(id),
	FOREIGN KEY(pub_id) REFERENCES pub(id)
);

-- default user is felix:felix
INSERT INTO user (id, name, password_hash, password_salt) VALUES (
	1,
	'felix',
	'586194401a4245987f1902b0150bdbee',
	1
);

-- some demo pubs
INSERT INTO pub (id, name) VALUES (1, 'globe');
INSERT INTO pub (id, name) VALUES (2, 'hogan');
INSERT INTO pub (id, name) VALUES (3, 'celt');
INSERT INTO pub (id, name) VALUES (4, 'farrington');
INSERT INTO pub (id, name) VALUES (5, 'quays');
INSERT INTO pub (id, name) VALUES (6, 'fitz');
