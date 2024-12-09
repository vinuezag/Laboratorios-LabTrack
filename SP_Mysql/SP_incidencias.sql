DELIMITER $$

CREATE PROCEDURE crudIncidencias(
    IN accion VARCHAR(10),        -- Acción a realizar: 'CREATE', 'READ', 'UPDATE', 'DELETE'
    IN p_inc_id INT,              -- ID de la incidencia (para UPDATE o DELETE)
    IN p_inc_hora VARCHAR(10),    -- Hora de la incidencia
    IN p_inc_fecha DATE,          -- Fecha de la incidencia
    IN p_inc_infractor INT,       -- ID del infractor
    IN p_inc_cedinf VARCHAR(20),  -- Cédula del infractor
    IN p_inc_nominf VARCHAR(100), -- Nombre del infractor
    IN p_inc_numcom INT,          -- Número del comunicado
    IN p_inc_tipofallo VARCHAR(50), -- Tipo de fallo
    IN p_inc_observacion TEXT     -- Observación
)
BEGIN
    CASE accion
        WHEN 'CREATE' THEN
            INSERT INTO Incidencia (inc_hora, inc_fecha, inc_infractor, inc_cedinf, inc_nominf, inc_numcom, inc_tipofallo, inc_observacion)
            VALUES (p_inc_hora, p_inc_fecha, p_inc_infractor, p_inc_cedinf, p_inc_nominf, p_inc_numcom, p_inc_tipofallo, p_inc_observacion);

        WHEN 'READ' THEN
            -- Devuelve todas las incidencias (o filtra por ID si se pasa)
            IF p_inc_id IS NOT NULL THEN
                SELECT * FROM Incidencia WHERE inc_id = p_inc_id;
            ELSE
                SELECT * FROM Incidencia;
            END IF;

        WHEN 'UPDATE' THEN
            UPDATE Incidencia
            SET inc_hora = p_inc_hora,
                inc_fecha = p_inc_fecha,
                inc_infractor = p_inc_infractor,
                inc_cedinf = p_inc_cedinf,
                inc_nominf = p_inc_nominf,
                inc_numcom = p_inc_numcom,
                inc_tipofallo = p_inc_tipofallo,
                inc_observacion = p_inc_observacion
            WHERE inc_id = p_inc_id;

        WHEN 'DELETE' THEN
            DELETE FROM Incidencia WHERE inc_id = p_inc_id;

        ELSE
            SIGNAL SQLSTATE '45000'
            SET MESSAGE_TEXT = 'Acción no válida. Las acciones permitidas son: CREATE, READ, UPDATE, DELETE.';
    END CASE;
END$$

DELIMITER ;
