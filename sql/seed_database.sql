INSERT INTO persons.dicts (id, name, description) VALUES (1, 'PAL', '');
INSERT INTO persons.dicts (id, name, description) VALUES (2, 'SEX', '');

INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (1, '1.2', 'Tryb siedzacy');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (1, '1.3', 'Dosc aktywny');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (1, '1.4', 'Umiarkowanie aktywny');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (1, '1.5', 'Aktywny');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (1, '1.6', 'Bardzo aktywny');

INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (2, 0, 'Kobieta');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (2, 1, 'Mężczyzna');

INSERT INTO persons.persons (first_name, last_name, age, sex, pal, weight, height) VALUES ('Jan', 'Kowalski', 44, 1, '1.2', 77, 166); 

