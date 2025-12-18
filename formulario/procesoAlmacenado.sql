
DELIMITER //

CREATE PROCEDURE agregarUsuario(
    IN nombre VARCHAR(50),
    IN clave VARCHAR(50),
    IN pais VARCHAR(50),
    IN correo VARCHAR(50)
)

BEGIN
    INSERT INTO usuarios(nombre, clave, pais, correo)
    VALUES (nombre, clave, pais, correo);
END //

DELIMITER ;