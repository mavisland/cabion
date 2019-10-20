<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Install_ion_auth extends CI_Migration
{
    private $tables;

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();

        $this->load->config('ion_auth', true);
        $this->tables = $this->config->item('tables', 'ion_auth');
    }

    public function up()
    {
        // Drop table 'groups' if it exists
        $this->dbforge->drop_table($this->tables['groups'], true);

        // Table structure for table 'groups'
        $this->dbforge->add_field([
            'id' => [
                'type'           => 'MEDIUMINT',
                'constraint'     => '8',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'description' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table($this->tables['groups']);

        // Dumping data for table 'groups'
        $data = [
            [
                'name'        => 'admin',
                'description' => 'Administrator'
            ],
            [
                'name'        => 'members',
                'description' => 'General User'
            ]
        ];
        $this->db->insert_batch($this->tables['groups'], $data);

        // Drop table 'users' if it exists
        $this->dbforge->drop_table($this->tables['users'], true);

        // Table structure for table 'users'
        $this->dbforge->add_field([
            'id' => [
                'type'           => 'MEDIUMINT',
                'constraint'     => '8',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'ip_address' => [
                'type'       => 'VARCHAR',
                'constraint' => '45'
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '254',
                'unique'     => true
            ],
            'activation_selector' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
                'unique'     => true
            ],
            'activation_code' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true
            ],
            'forgotten_password_selector' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
                'unique'     => true
            ],
            'forgotten_password_code' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true
            ],
            'forgotten_password_time' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'   => true,
                'null'       => true
            ],
            'remember_selector' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
                'unique'     => true
            ],
            'remember_code' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true
            ],
            'created_on' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'   => true,
            ],
            'last_login' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'   => true,
                'null'       => true
            ],
            'active' => [
                'type'       => 'TINYINT',
                'constraint' => '1',
                'unsigned'   => true,
                'null'       => true
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true
            ],
            'company' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => true
            ]
        ]);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table($this->tables['users']);

        // Dumping data for table 'users'
        $data = [
            'ip_address'              => '127.0.0.1',
            'username'                => 'administrator',
            'password'                => '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa',
            'email'                   => 'admin@admin.com',
            'activation_code'         => '',
            'forgotten_password_code' => null,
            'created_on'              => '1268889823',
            'last_login'              => '1268889823',
            'active'                  => '1',
            'first_name'              => 'Admin',
            'last_name'               => 'istrator',
            'company'                 => 'ADMIN',
            'phone'                   => '0',
        ];
        $this->db->insert($this->tables['users'], $data);

        // Drop table 'users_groups' if it exists
        $this->dbforge->drop_table($this->tables['users_groups'], true);

        // Table structure for table 'users_groups'
        $this->dbforge->add_field([
            'id' => [
                'type'           => 'MEDIUMINT',
                'constraint'     => '8',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'user_id' => [
                'type'       => 'MEDIUMINT',
                'constraint' => '8',
                'unsigned'   => true
            ],
            'group_id' => [
                'type'       => 'MEDIUMINT',
                'constraint' => '8',
                'unsigned'   => true
            ]
        ]);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table($this->tables['users_groups']);

        // Dumping data for table 'users_groups'
        $data = [
            [
                'user_id'  => '1',
                'group_id' => '1',
            ],
            [
                'user_id'  => '1',
                'group_id' => '2',
            ]
        ];
        $this->db->insert_batch($this->tables['users_groups'], $data);

        // Drop table 'login_attempts' if it exists
        $this->dbforge->drop_table($this->tables['login_attempts'], true);

        // Table structure for table 'login_attempts'
        $this->dbforge->add_field([
            'id' => [
                'type'           => 'MEDIUMINT',
                'constraint'     => '8',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'ip_address' => [
                'type'       => 'VARCHAR',
                'constraint' => '45'
            ],
            'login' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true
            ],
            'time' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'   => true,
                'null'       => true
            ]
        ]);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table($this->tables['login_attempts']);
    }

    public function down()
    {
        $this->dbforge->drop_table($this->tables['users'], true);
        $this->dbforge->drop_table($this->tables['groups'], true);
        $this->dbforge->drop_table($this->tables['users_groups'], true);
        $this->dbforge->drop_table($this->tables['login_attempts'], true);
    }
}
