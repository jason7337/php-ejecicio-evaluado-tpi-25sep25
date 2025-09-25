<?php
namespace app\controllers;

class BlogController{

    public function view($vista, $data=[]){
        extract($data);
        if(file_exists("../app/views/$vista.php")){
            ob_start();
            include "../app/views/$vista.php";
            $content = ob_get_clean();
            return $content;
        }
        else{
            echo "Vista no encontrada ../app/views/$vista.php";
        }
    }

    public function principal(){
        return $this->view('principal', [
            'titulo' => 'Blog Personal - Jasson Gomez',
            'descripcion' => 'Bienvenido a mi blog personal donde comparto conocimientos sobre desarrollo de software y programacion.'
        ]);
    }

    public function inicio(){
        return $this->view('inicio', [
            'titulo' => 'Acerca de mi',
            'nombre' => 'Jasson Armando Gomez Guevara',
            'alias' => 'TJson',
            'profesion' => 'Estudiante de Ingenieria en Sistemas Informaticos',
            'experiencia' => 'Desarrollador Full Stack con experiencia en Python, JavaScript y desarrollo web',
            'universidad' => 'Universidad Nacional de El Salvador',
            'ubicacion' => 'El Salvador',
            'email' => 'gomezjason010@gmail.com',
            'telefono' => '+50375025302',
            'dui' => '06019327-9'
        ]);
    }

    public function lenguaje(){
        return $this->view('lenguaje', [
            'titulo' => 'Mi lenguaje favorito',
            'lenguaje_principal' => 'Python',
            'razon' => 'Python es mi lenguaje favorito porque es versatil, legible y potente. Me permite crear desde APIs robustas hasta sistemas complejos. Su sintaxis clara y amplio ecosistema lo hacen ideal para desarrollo web y aplicaciones empresariales.',
            'otros_lenguajes' => ['JavaScript', 'TypeScript', 'Dart', 'PHP'],
            'tecnologias' => ['React.js', 'Node.js', 'Flutter', 'Docker', 'PostgreSQL', 'MongoDB']
        ]);
    }

    public function contactar(){
        return $this->view('contactar', [
            'titulo' => 'Contactar'
        ]);
    }

    public function procesar_contacto(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $correo = $_POST['correo'] ?? '';
            $telefono = $_POST['telefono'] ?? '';
            $dui = $_POST['dui'] ?? '';

            $errores = [];

            if(!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $correo)){
                $errores[] = 'Correo electronico no valido';
            }

            if(!preg_match('/^[267]\d{3}-\d{4}$/', $telefono)){
                $errores[] = 'Telefono debe tener formato: 2XXX-XXXX, 6XXX-XXXX o 7XXX-XXXX';
            }

            if(!preg_match('/^\d{8}-\d{1}$/', $dui)){
                $errores[] = 'DUI debe tener formato: 12345678-9';
            }

            return $this->view('contactar', [
                'titulo' => 'Contactar',
                'errores' => $errores,
                'correo' => $correo,
                'telefono' => $telefono,
                'dui' => $dui,
                'procesado' => true
            ]);
        }
    }
}
?>