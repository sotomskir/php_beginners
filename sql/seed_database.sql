INSERT INTO persons.dicts (id, type, name, description) VALUES (1, 1, 'PAL', '');
INSERT INTO persons.dicts (id, type, name, description) VALUES (2, 1, 'SEX', '');
INSERT INTO persons.dicts (id, type, name, description) VALUES (3, 2, 'BMI', '');

INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (1, 1.2, 'Tryb siedzacy');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (1, 1.3, 'Dosc aktywny');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (1, 1.4, 'Umiarkowanie aktywny');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (1, 1.5, 'Aktywny');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (1, 1.6, 'Bardzo aktywny');

INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (2, 0, 'Kobieta');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (2, 1, 'Mężczyzna');

INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (3, 18.5, 'Niedowaga');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (3, 25.0, 'Waga idealna');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (3, 30.0, 'Nadwaga');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (3, 40.0, 'Otyłość');
INSERT INTO persons.dicts_values (dicts_id, key, value) VALUES (3, 999.0, 'Duża otyłość');

-- INSERT INTO persons.dicts_range_values (dicts_id, value_from, value_to, description) VALUES (3, 0, 18.5, 'Niedowaga');
-- INSERT INTO persons.dicts_range_values (dicts_id, value_from, value_to, description) VALUES (3, 30, 39.9, 'Otyłość');
-- INSERT INTO persons.dicts_range_values (dicts_id, value_from, value_to, description) VALUES (3, 30, 39.9, 'Otyłość');
-- INSERT INTO persons.dicts_range_values (dicts_id, value_from, value_to, description) VALUES (3, 30, 39.9, 'Otyłość');

INSERT INTO persons.persons (username, password, first_name, last_name, age, sex, pal, weight, height) VALUES ('kowalskij', 'DC1DCDB8F04AC0395350AF2FCFB36D33FE542651534EB9327674A390DCBFA48DC607A54590F52408B6A47F8EE0AD39B7E93A2A5B8D8167886919CA488663C028',  'Jan', 'Kowalski', 44, 1, '1.2', 77, 1.66);
INSERT INTO persons.persons (username, password, first_name, last_name, age, sex, pal, weight, height) VALUES ('abackib', '1C9A0BC3FE51460E263BEF852D645637393696D30B82876C60BEC25183C871FDCFF139A1D343C4AFF75B1A804D3537D47A94243FFEBDB7187A1515A94E84B132',   'Adam', 'Abacki', 32, 1, '1.5', 156, 1.81);

