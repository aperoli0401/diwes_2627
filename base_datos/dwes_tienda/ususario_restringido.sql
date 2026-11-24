USER dwes_tienda;
CREATE USER 'tienda_app'@'localhost' IDENTIFIED BY '123456';
GRANT SELECT, INSERT, UPDATE, DELETE ON dwes_tienda.* TO 'tienda_app'@'localhost';
flush PRIVILEGES;