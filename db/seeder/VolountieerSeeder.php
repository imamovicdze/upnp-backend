<?php


use Phinx\Seed\AbstractSeed;

class VolountieerSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                "ime_prezime" => "Haris Zenovic",
                "datum" => "1993-09-21",
                "adresa" => "Sutenovacka 26/a",
                "grad" => "Novi Pazar",
                "telefon" => "38978631218",
                "email" => "zenovicharis@live.com",
                "str_sprema" => "I Stepen (cetiri razreda osnovne)",
                "zanimanje" => "programer",
                "hobi" => "asd",
                "iskustvo" => "asd",
                "podrucje_rada" => "Promocija mentalnog zdravlja, , Prevencija nasilja",
                "poslovi" => "Humanitarne akcije, Radne akcije, Organizacija javnih dogadaja",
                "nedeljni_sati" => "25h-32h",
                "vreme" => "Posle podne",
                "dodatna_obuka" => "Da"

            ],
            [
                "ime_prezime" => "Haris Zenovic",
                "datum" => "1993-09-21",
                "adresa" => "Sutenovacka 26/a",
                "grad" => "Novi Pazar",
                "telefon" => "38978631218",
                "email" => "zenovicharis@live.com",
                "str_sprema" => "I Stepen (cetiri razreda osnovne)",
                "zanimanje" => "programer",
                "hobi" => "asd",
                "iskustvo" => "asd",
                "podrucje_rada" => "Promocija mentalnog zdravlja, , Prevencija nasilja",
                "poslovi" => "Humanitarne akcije, Radne akcije, Organizacija javnih dogadaja",
                "nedeljni_sati" => "25h-32h",
                "vreme" => "Posle podne",
                "dodatna_obuka" => "Da"

            ]
        ];
        $user = $this->table('volountieer');
        $user->insert($data)
            ->save();
    }
}
