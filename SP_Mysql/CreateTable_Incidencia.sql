CREATE TABLE Incidencia (
    inc_id INT AUTO_INCREMENT PRIMARY KEY,
    inc_hora VARCHAR(10) NOT NULL,
    inc_fecha DATE NOT NULL,
    inc_infractor INT NOT NULL,
    inc_cedinf VARCHAR(15) NOT NULL,
    inc_nominf VARCHAR(100) NOT NULL,
    inc_numcom INT NOT NULL,
    inc_tipofallo VARCHAR(50) NOT NULL,
    inc_observacion TEXT
);
