<?php
class UserModel extends CI_Model
{
    const TABLE_NAME = 'users';

    public function create($user)
    {
        $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
        return $this->db->insert($this::TABLE_NAME, $user);
    }

    public function findByUsername($username) {
        return $this->db->where('username', $username)->get($this::TABLE_NAME)->row_array();
    }

    public function authenticate($username, $password) {
        $user = $this->findByUsername($username);

        if (!$user)
            return false;
        
        return password_verify($password, $user['password']);
    }

    public function findById($id_user){
        $query = $this->db->from($this::TABLE_NAME)
                          ->where('users.id_user', $id_user)
                          ->get()
                          ->row_array();

        return $query;
    }

    public function update($data_user)
    {
        $query = $this->db->where('id_user', $data_user['id_user'])
                          ->update($this::TABLE_NAME, $data_user);
        return $query;
    }

    public function delete($id_user)
    {
        $query = $this->db->where('id_user', $id_user)->delete($this::TABLE_NAME);
        return $query;
    }

}
?>