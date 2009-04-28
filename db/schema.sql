-- sqlite3

CREATE TABLE user(
	id INT AUTO_INCREMENT,
	name VARCHAR(20),
	password_hash VARCHAR(32),
	password_salt VARCHAR(10),
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
