<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Links extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => '5',
                        ),
                        'title' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'code' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'link' => array(
                                'type' => 'TEXT',
                                'constraint' => '15',
                                'null' => TRUE,
                        ),
                        'expired' => array(
                                'type' => 'INT',
                                'constraint' => '25',
                                'null' => TRUE,
                        ),
                        'created' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                        ),
                        'deleted' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('links');
        }

        public function down()
        {
                $this->dbforge->drop_table('links');
        }
}