# Insertar nuevos registros
INSERT INTO usuarios
VALUES(
        NULL,
        'Alejandro',
        'Muñoz',
        'ale@mail.com',
        '12345',
        '2020-08-02'
    );
INSERT INTO usuarios
VALUES(
        NULL,
        'Maria',
        'López',
        'marilo@mail.com',
        '54312',
        '2012-08-22'
    );
INSERT INTO usuarios
VALUES(
        NULL,
        'Fernando',
        'Hernandez',
        'fernando@mail.com',
        'fer123',
        '2043-12-02'
    );
# Insertar filas solo con ciertas columnas
INSERT INTO usuarios(email, password)
VALUES('admin@mail.com', 'admin124');
