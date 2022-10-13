<?php
namespace Model;
require_once 'Conexion.php';
require_once 'Model/Usuario.php';

class M_Usuario extends Conexion
{
    public function getUsers(){
        $query = parent::con()->query('SELECT * FROM usuarios');
        
        $retorno = [];
        
        while($fila = $query->fetch_assoc()){
            $retorno[] = $fila;
        }
        
        return  $retorno;
    }
    
    public function insertUsuario(Usuario $usuario){
        $sentencia = parent::con()->prepare("INSERT INTO usuarios(username, password, nombre) VALUES (?,?,?)");
        
        $sentencia->bind_param("sss", $usuario->getUsername(), $usuario->getPassword(), $usuario->getNombre());
        
        $sentencia->execute();
        $sentencia->close();
    }
    
    public function eliminarUsuario($usuario){

        $sentencia = parent::con()->prepare("DELETE FROM usuarios WHERE username = ? ");
        
        $sentencia->bind_param("s", $usuario);
        
        $sentencia->execute();
        $sentencia->close();
    }
    public function editarUsuario($usuario){

        $sentencia = parent::con()->query(" UPDATE `usuarios` SET `username`=?,`password`=? ,`nombre`= ? WHERE 'username'= $usuario ");
        
        // $sentencia->bind_param("sss", $usuario);
        $sentencia->execute();
        $sentencia->close();
    }
}

