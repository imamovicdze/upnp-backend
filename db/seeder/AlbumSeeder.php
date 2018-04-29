<?php


use Phinx\Seed\AbstractSeed;

class AlbumSeeder extends AbstractSeed
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
                "title" => "Album1",
                "english_title" => "English_Album1"
            ],
            [
                "title" => "Album2",
                "english_title" => "English_Album2"
            ],
            [
                "title" => "Album3",
                "english_title" => "English_Album3"
            ],
            [
                "title" => "Album4",
                "english_title" => "English_Album4"
            ],
            [
                "title" => "Album5",
                "english_title" => "English_Album5"
            ],
            [
                "title" => "Album6",
                "english_title" => "English_Album6"
            ],
            [
                "title" => "Album7",
                "english_title" => "English_Album7"
            ],
            [
                "title" => "Album8",
                "english_title" => "English_Album8"
            ]
        ];
        $user = $this->table('albums');
        $user->insert($data)
            ->save();
    }
}
