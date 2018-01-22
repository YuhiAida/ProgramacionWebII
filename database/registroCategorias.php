<?php
    if(file_exists("../database/categorias.json")){

        $categoriasJSON = file_get_contents("../database/categorias.json");

        $categorias = json_decode($categoriasJSON,true);
    }else{
      $categorias = [
        [
          "id" => 1,
          "nombre" => "hombre",
          "imagen" => "img/categoria/hombre/1.jpg",
          "descripcions" => "img/categoria/1/1.txt"
        ],

        [
          'id' => 2,
          'nombre' => 'mujer',
          'imagen' => 'img/categoria/mujer/2.jpg',
          'descripcions' => 'img/categoria/2/descripcion.txt'
        ],

        [
          'id' => 3,
          'nombre' => 'hombre y mujer',
          'imagen' => 'img/categoria/hombre y mujer/3.jpg',
          'descripcions' => 'img/categoria/3/descripcion.txt'
        ],

        [
          'id' => 4,
          'nombre' => 'calzado',
          'imagen' => 'img/categoria/calzado/4.jpg',
          'descripcions' => 'img/categoria/4/descripcion.txt'
        ],

        [
          'id' => 5,
          'nombre' => 'varios',
          'imagen' => 'img/categoria/varios/5.jpg',
          'descripcions' => 'img/categoria/5/descripcion.txt'
        ],
      ];
}
?>
