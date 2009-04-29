-- felix:felix
INSERT INTO user (id, name, password_hash, password_salt)
	VALUES (1, 'felix', '586194401a4245987f1902b0150bdbee', 1);
-- jerem:jerem 
INSERT INTO user (id, name, password_hash, password_salt)
	VALUES (2, 'jerem', 'c8f2b22a21a3a0c863b59fc670aec4b8', 'acdx');
-- dw:dw
INSERT INTO user (id, name, password_hash, password_salt)
	VALUES (3, 'dw', 'a56908ac255c15fc3704a8de6f1763f8', 'rundmc');
-- pat:pat
INSERT INTO user (id, name, password_hash, password_salt)
	VALUES (4, 'pat', 'fff45757e62f0b490b304e3bf77658d6', 'Irish');
-- scott:scott
INSERT INTO user (id, name, password_hash, password_salt)
	VALUES (5, 'scott', '301e6fb9ebbfb0d94b849536606a5e00', 'DraMa');
-- lucy:lucy
INSERT INTO user (id, name, password_hash, password_salt)
	VALUES (6, 'lucy', 'd180583c00928e794f5a3719867267dd', 'Mommy!');
-- john:john
INSERT INTO user (id, name, password_hash, password_salt)
	VALUES (7, 'john', '15ef153c3d00637f429576eea29cd2a0', 'DanceR');

-- some pubs
INSERT INTO pub (id, name) VALUES (1, 'globe');
INSERT INTO pub (id, name) VALUES (2, 'hogan');
INSERT INTO pub (id, name) VALUES (3, 'celt');
INSERT INTO pub (id, name) VALUES (4, 'farrington');
INSERT INTO pub (id, name) VALUES (5, 'quays');
INSERT INTO pub (id, name) VALUES (6, 'fitz');