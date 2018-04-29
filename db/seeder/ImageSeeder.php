<?php


use Phinx\Seed\AbstractSeed;

class ImageSeeder extends AbstractSeed
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
                "imgur_id" => "ETYNI3k",
                "delete_hash" => "LNmKmwVlEaWAl7y",
                "url" => "https://i.imgur.com/ETYNI3k.png",
                "album_id" => 1
            ],
            [
                "imgur_id" => "RlQzvbm",
                "delete_hash" => "JMgmo3wi12hxvWe",
                "url" => "https://i.imgur.com/ETYNI3k.png",
                "album_id" => 2
            ],
            [
                "imgur_id" => "96792RH",
                "delete_hash" => "5vHhLdThwTviobl",
                "url" => "https://i.imgur.com/ETYNI3k.png",
                "album_id" => 3
            ],
            [
                "imgur_id" => "dNTklKV",
                "delete_hash" => "TloTdFT4ZfJq2RE",
                "url" => "https://i.imgur.com/ETYNI3k.png",
                "album_id" => 4
            ],
            [
                "imgur_id" => "X2cSBNc",
                "delete_hash" => "XNMov5Re4kR5r6c",
                "url" => "https://i.imgur.com/ETYNI3k.png",
                "album_id" => 5
            ],
            [
                "imgur_id" => "4J4GDPB",
                "delete_hash" => "Y78jVgPEFaqVa32",
                "url" => "https://i.imgur.com/ETYNI3k.png",
                "album_id" => 6
            ],
            [
                "imgur_id" => "JQLgC65",
                "delete_hash" => "DRLOaHDB5fpmsrw",
                "url" => "https://i.imgur.com/ETYNI3k.png",
                "album_id" => 1
            ],
            [
                "imgur_id" => "KrLZX8D",
                "delete_hash" => "rmMVOfxD0ME7Pk2",
                "url" => "https://i.imgur.com/ETYNI3k.png",
                "album_id" => 7
            ],
            [
                "imgur_id" => "Repm9Oi",
                "delete_hash" => "g76jTObvModAExY",
                "url" => "https://i.imgur.com/ETYNI3k.png",
                "album_id" => 8
            ],
            [
                "imgur_id" => "pvqgHAG",
                "delete_hash" => "K53V9o6S8QToEyq",
                "url" => "https://i.imgur.com/ETYNI3k.png",
                "album_id" => 1
            ],
            [
                "imgur_id" => "yeq7sqy",
                "delete_hash" => "vPZeAILp23Bkx2N",
                "url" => "https://i.imgur.com/ETYNI3k.png",
                "album_id" => 5
            ]
        ];
        $user = $this->table('images');
        $user->insert($data)
            ->save();
    }
}
