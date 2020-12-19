<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username = "administrator";
        $administrator->name = "admin";
        $administrator->email = "admin@gmail.com";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->phone = "089666332626";
        $administrator->password = \Hash::make("admin123");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->address = "jalan aisyiyah labuhan";

        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");
    }
}
