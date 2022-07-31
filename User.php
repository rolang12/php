<?php

    namespace Models;
    use Models\Conexion;

// require_once '../autoload.php';
class User
{

    public $idUser;
    public $nickName;
    public $passwor;
    public $avatar;
    public $email;
    public $name;
    public $title;
    public $content;
    public $createdAt;

    public function __construct($querys = [])
    {

        foreach ($querys as $key => $value) {
            $this->__call($key, $value);
        }

    }

    public function findByEmail($email)
    {

        $conexion = new Conexion();

        $result_obj = $conexion->select(['email', 'passwor'])->
        from('Users')->where('email', '=', $email);

        $result_str = strval($result_obj);

        $users_found = $result_obj->eject_query($result_str);

        $user_found = $users_found->fetch_assoc();

        $this->__construct($user_found);

        return $this;
    }

    public function listing()
    {

        $conexion = new Conexion();

        $result_obj = $conexion->select(['idUser', 'nickName', 'email', 'Countries.name'])
            ->from('Users')->join('Countries', 'Countries.idCountry', '=', 'Users.countriesId');

        $query_str = strval($result_obj);

        $query = $result_obj->eject_query($query_str);

        $usersArray = $query->fetch_all(MYSQLI_ASSOC);

        $collectionData = [];

        foreach ($usersArray as $user) {

            $collectionData[] = new User($user);
        }

        return $collectionData;
    }

    public function __call($name, $arguments)
    {
        $this->$name = $arguments;
    }

    public function crudCreate($Data)
    {
        $conexion = new Conexion();
        
        $sentencia =  $conexion->stmt_init();
       
        if ($sentencia->prepare("INSERT INTO Users(nickName,passwor,avatar,email,countriesId) VALUES(?,?,?,?,?) ")) {
            
            if (count($_FILES) > 0) {

                $name = uniqid();

                if (file_exists('images')) {

                    switch ($_FILES['avatar']['type']) {
                        case 'image/png':
                            $name .= '.png';
                            break;

                        default:
                            $name .= '.jpg';
                            break;
                    }
                    move_uploaded_file($_FILES['avatar']['tmp_name'], 'images/' . $name);
                    
                }
                $sqlImage = 'images/' . $name;
            }
            
            $pass = password_hash($Data['password'], PASSWORD_BCRYPT);

            /* Vincular los parámetros para los marcadores */
            $sentencia->bind_param("sssss", $Data['nickname'], $pass, $sqlImage, $Data['email'], $Data['pais']);

            /* Ejecutar la consulta */
            $sentencia->execute();
            $sentencia->close();
        }
        
        $conexion = new Conexion();
        $sentencia_sele = $conexion->stmt_init();
             
        if ($sentencia_sele->prepare("SELECT max(idUser) FROM Users")) 
        {
            
            $sentencia_sele->execute();
            $sentencia_sele->bind_result($id);
            $sentencia_sele->fetch();
            
        }
        
        
        $conexion = new Conexion();
        $sentencia_adress =  $conexion->stmt_init();
        
        if ($sentencia_adress->prepare("INSERT INTO Addresses(usersIduser,street) VALUES(?,?)")) {
            
            $sentencia_adress->bind_param("is", $id, $Data['direccion']);

            $sentencia_adress->execute();

          
        }

        if ($sentencia && $sentencia_sele ) {
            if ($sentencia_adress) {
                return true;
            }
        } else {
            return false;
        }

        /* cerrar la conexión */
        $conexion->close();
    }

    public function countArt($idUser)
    {

        $conexion = new Conexion();

        $result_obj = $conexion->select([])->O_count('title', 'cantidad')->
        from('Articles')->where('usersIduser', '=', $idUser);

        $result_str = strval($result_obj);

        $users_found = $result_obj->eject_query($result_str);

        $user_found = $users_found->fetch_assoc();

        $this->__construct($user_found);

        return $this;
    }

    public function crudShowAll($idUser)
    {

        $conexion = new Conexion();

        $result_obj = $conexion->select([
            'nickName', 'createdAt', 'avatar', 'idUser', 'Addresses.street',
            'Countries.name'
        ])->count('Articles.title', 'cantidad')->from('Users')->
        join('Addresses', 'Addresses.usersIduser', '=', 'Users.idUser')->
        join('Articles', 'Articles.usersIduser', '=', 'Users.idUser')->
        join('Countries', 'Countries.idCountry', '=', 'Users.countriesId')->
        where('idUser', '=', $idUser)->groupBy('Addresses.street')->
        orderBy('cantidad')->limit(1);

        $result_str = strval($result_obj);

        $users_found = $result_obj->eject_query($result_str);

        $user_found = $users_found->fetch_assoc();

        $this->__construct($user_found);

        return $this;
    }

    public function crudShow($idUser)
    {

        $conexion = new Conexion();

        $result_obj = $conexion->select([
            'nickName', 'createdAt', 'avatar', 'idUser', 'Addresses.street',
            'Countries.name'
        ])->from('Users')->join('Addresses', 'Addresses.usersIduser', '=', 'Users.idUser')->
        join('Countries', 'Countries.idCountry', '=', 'Users.countriesId')->
        where('idUser', '=', $idUser)->groupBy('Addresses.street')->
        orderBy('nickName')->limit(1);

        $result_str = strval($result_obj);

        $users_found = $result_obj->eject_query($result_str);

        $user_found = $users_found->fetch_assoc();

        $this->__construct($user_found);

        return $this;
    }

    public function crudDelete($idUser)
    {

        $conexion = new Conexion();

        $result_obj = $conexion->delete('Users')->where('idUser', '=', $idUser);

        $result_str = strval($result_obj);

        $users_found = $result_obj->eject_query($result_str);

        if ($users_found) {
            return true;
        } else {
            return false;
        }
    }

    public function crudEdit($idUser)
    {

        $conexion = new Conexion();

        $result_obj = $conexion->select(['*'])->from('Users')->where('idUser', '=', $idUser);

        $result_str = strval($result_obj);

        $users_found = $result_obj->eject_query($result_str);

        $user_found = $users_found->fetch_assoc();

        $this->__construct($user_found);

        return $this;
    }

    public function updateProfile($DATA)
    {

        $conexion = new Conexion();

        $result_obj = $conexion->update('Users', [
            "nickName = '$DATA[newnickname]'",
            "passwor = '$DATA[newpassword]'",
            "email = '$DATA[newemail]'"
        ])
            ->where('idUser', '=', "$DATA[newidusuarios]");

        $result_str = strval($result_obj);


        $users_found = $result_obj->eject_query($result_str);

        if ($users_found) {
            return true;
        } else {
            return false;
        }
    }
}
