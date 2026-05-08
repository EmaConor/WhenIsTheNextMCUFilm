<?php

class NextMovie {
    public function __construct(
        private string $title,
        private int $days_until,
        private string $following_production,
        private string $release_date,
        private string $poster_url,
        private string $overview
    ){ }

    public function get_until_message(): string
    {
        $days = $this->days_until;
        return match (true) {
            $days === 0  => "Hoy se estrena",
            $days === 1  => "Mañana se estrena",
            $days < 7    => "Esta semana se estrena",
            $days < 30   => "Este mes se estrena",
            default      => "En $days dias se estrena",
        };
    }

    public static function fetch_and_create_movie (string $api_url): NextMovie
    {
        $response = file_get_contents($api_url); // Si solo quieres hacer un GET de una API
        $data = json_decode($response, true);

        return new self(
            $data["title"],
            $data["days_until"],
            $data["following_production"]["title"] ?? "Desconocido",
            $data["release_date"],
            $data["poster_url"],
            $data["overview"]
        );
    }

    public function get_data()
    {
        return get_object_vars($this);
    }
}