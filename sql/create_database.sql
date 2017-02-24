DROP TABLE IF EXISTS persons.dicts;
DROP TABLE IF EXISTS persons.dicts_values;
DROP TABLE IF EXISTS persons.persons;

CREATE TABLE persons.dicts (
  id          SERIAL PRIMARY KEY,
  name        varchar(40),
  description varchar(255),
  type        INTEGER
);

CREATE TABLE persons.dicts_values (
  id          SERIAL PRIMARY KEY,
  dicts_id    bigint,
  key         FLOAT,
  value       varchar(255),
  description varchar(255)
);

CREATE TABLE persons.persons (
  id          SERIAL PRIMARY KEY,
  username    varchar(255),
  password    varchar(128),
  first_name  varchar(255),
  last_name   varchar(255),
  age 	      integer,
  sex		      integer,
  pal		      float,
  weight	    float,
  height	    float
);

