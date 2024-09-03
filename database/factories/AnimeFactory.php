<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Anime;

class AnimeFactory extends Factory
{
    protected $model = Anime::class;

    // Lista de animes predefinidos
    protected static $animes = [
        'Naruto', 
        'One Piece', 
        'Attack on Titan', 
        'Death Note', 
        'Dragon Ball Z', 
        'My Hero Academia', 
        'Fullmetal Alchemist', 
        'Sword Art Online', 
        'Demon Slayer', 
        'Tokyo Ghoul'
    ];

    public function definition(): array
    {
        // Si ya se han usado todos los títulos, vuelve a llenarlos
        if (empty(self::$animes)) {
            self::$animes = [
                'Naruto', 
                'One Piece', 
                'Attack on Titan', 
                'Death Note', 
                'Dragon Ball Z', 
                'My Hero Academia', 
                'Fullmetal Alchemist', 
                'Sword Art Online', 
                'Demon Slayer', 
                'Tokyo Ghoul'
            ];
        }

        // Remueve un título al azar de la lista para garantizar que no se repita
        $titulo = array_splice(self::$animes, array_rand(self::$animes), 1)[0];

        return [
            'titulo' => $titulo,
            'genero' => $this->faker->randomElement(['Acción', 'Comedia', 'Drama', 'Fantasía', 'Ciencia Ficción', 'Terror']),
            'estudio' => $this->faker->company(),
            'estado' => $this->faker->randomElement(['En emisión', 'Completado', 'En pausa']),
            'personaje_principal' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'clasificacion' => $this->faker->randomElement(['G', 'PG', 'PG-13', 'R', 'R+', 'NC-17']),
            'numero_episodios' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
