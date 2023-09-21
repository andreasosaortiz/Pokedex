<?php
function obtenerImagenTipoPokemon($tipo) {
    $tipo_img = '';

    switch ($tipo) {
        case '1':
            $tipo_img = 'Tipos/Acero.png';
            break;
        case '2':
            $tipo_img = 'Tipos/Agua.png';
            break;
        case '3':
            $tipo_img = 'Tipos/Bicho.png';
            break;        
        case '4':
                $tipo_img = 'Tipos/Dragon.png';
            break;      
        case '5':
            $tipo_img = 'Tipos/Electrico.png';
            break;      
        case '6':
            $tipo_img = 'Tipos/Fantasma.png';
            break;      
        case '7':
            $tipo_img = 'Tipos/Fuego.png';
            break;      
        case '8':
            $tipo_img = 'Tipos/Hada.png';
            break; 
        case '9':
            $tipo_img = 'Tipos/Hielo.png';
            break;
        case '10':
            $tipo_img = 'Tipos/Lucha.png';
            break;
        case '11':
            $tipo_img = 'Tipos/Normal.png';
            break;        
        case '12':
                $tipo_img = 'Tipos/Fantasma.png';
            break;      
        case '13':
            $tipo_img = 'Tipos/Psíquico.png';
            break;      
        case '14':
            $tipo_img = 'Tipos/Roca.png';
            break;      
        case '15':
            $tipo_img = 'Tipos/Siniestro.png';
            break;      
        case '16':
            $tipo_img = 'Tipos/Tierra.png';
            break;
        case '17':
            $tipo_img = 'Tipos/Veneno.png';
            break;      
        case '18':
            $tipo_img = 'Tipos/Volador.png';
            break;                               
        default:
            $tipo_img = 'Tipos/Pokebola.png';
            break;
    }

    return $tipo_img;
}

function obtenerNombreTipoPokemon($tipo) {
    $tipo_nombre = '';

    switch ($tipo) {
        case '1':
            $tipo_nombre = 'Acero';
            break;
        case '2':
            $tipo_nombre= 'Agua';
            break;
        case '3':
            $tipo_nombre = 'Bicho';
            break;        
        case '4':
            $tipo_nombre= 'Dragon';
            break;      
        case '5':
            $tipo_nombre = 'Electrico';
            break;      
        case '6':
            $tipo_nombre = 'Fantasma';
            break;      
        case '7':
            $tipo_nombre = 'Fuego';
            break;      
        case '8':
            $tipo_nombre = 'Hada';
            break; 
        case '9':
            $tipo_nombre = 'Hielo';
            break;
        case '10':
            $tipo_nombre = 'Lucha';
            break;
        case '11':
            $tipo_nombre = 'Normal';
            break;        
        case '12':
            $tipo_nombre = 'Fantasma';
            break;      
        case '13':
            $tipo_img = 'Psíquico';
            break;      
        case '14':
            $tipo_nombre = 'Roca';
            break;      
        case '15':
            $tipo_nombre = 'Siniestro';
            break;      
        case '16':
            $tipo_nombre = 'Tierra';
            break;
        case '17':
            $tipo_nombre = 'Veneno';
            break;      
        case '18':
            $tipo_nombre = 'Volador';
            break;                               
        default:
        $tipo_nombre = 'Pokebola';
            break;
    }

    return $tipo_nombre;
}
?>
