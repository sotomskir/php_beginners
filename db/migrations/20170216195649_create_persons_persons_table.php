<?php

use Phinx\Migration\AbstractMigration;

class CreatePersonsPersonsTable extends AbstractMigration
{
    public function up()
    {
        $this->execute('CREATE TABLE persons.dicts_values (
                          id          SERIAL PRIMARY KEY,
                          dicts_id    bigint,
                          key         varchar(255),
                          value       varchar(255),
                          description varchar(255)
                        );'
        );
    }

    public function down()
    {
        $this->execute('DROP TABLE IF EXISTS persons.dicts_values;');
    }
}
