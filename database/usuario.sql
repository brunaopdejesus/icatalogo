describe tbl_administrador;

INSERT INTO tbl_administrador (nome, usuario, senha) 
	VALUES ('Bruna', 'bruna', '1234');
    
SELECT * FROM tbl_administrador 
	WHERE usuario = 'bruna' AND senha = '1234';

INSERT INTO tbl_administrador (nome, usuario, senha) 
	VALUES ('Bruna', 'bruna', '$2y$10$.WaDqggkNc.xYEgIRRTka.UOO9h2XpcOkhVKf7WhEEM9M/Y7jrfoq');
