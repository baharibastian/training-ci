<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'username' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'password' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'email' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'first_name' => array(
                                'type' => 'TEXT',
                                'constraint' => '15',
                                'null' => TRUE,
                        ),
                        'last_name' => array(
                                'type' => 'TEXT',
                                'constraint' => '25',
                                'null' => TRUE,
                        ),
                        'created' => array(
                                'type' => 'date',
                                'null' => TRUE,
                        ),
                        'updated' => array(
                                'type' => 'date',
                                'null' => TRUE,
                        ),
                        'deleted' => array(
                                'type' => 'date',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('users');
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}