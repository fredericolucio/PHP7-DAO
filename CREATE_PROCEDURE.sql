CREATE PROCEDURE `sp_usuarios_insert` (
pdeslogin VARCHAR(64),
pdessenha VARCHAR(256)

)
BEGIN

	INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(pdeslogin, pdessenha);
    
    SELECT * FROM tb_usuarios WHERE idusuario = LAS_INSERT_ID();

END