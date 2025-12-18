CREATE TABLE paises(
	idPais tinyint AUTO_INCREMENT PRIMARY KEY,
    pais varchar(50) UNIQUE
);

--indexado de datos 

INSERT INTO paises (pais) VALUES
('España'),
('Francia'),
('Alemania'),
('Italia'),
('Portugal'),
('Reino Unido'),
('Estados Unidos'),
('Canadá'),
('México'),
('Argentina');