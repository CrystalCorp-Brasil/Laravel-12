<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use DB;

    class UserSeeder extends Seeder {
        public function run(): void {
            DB::table('users')->insert([
                [
                    'name'=>'NHOJunior',
                    'username'=>'nhojunior',
                    'rule'=>'admin',
                    'status'=>'active',
                    'email'=>'crystalcorpbrasil@gmail.com',
                    'email_verified_at'=> now(),
                    'password'=>bcrypt('crystalcorp'),
                ],
                [
                    'name'=>'Blogger',
                    'username'=>'blogger',
                    'rule'=>'blogger',
                    'status'=>'active',
                    'email'=>'blogger@crystalcorpbrasil.com.br',
                    'email_verified_at'=> now(),
                    'password'=>bcrypt('crystalcorp'),
                ],
                [
                    'name'=>'Usuário',
                    'username'=>'user',
                    'rule'=>'user',
                    'status'=>'active',
                    'email'=>'user@crystalcorpbrasil.com.br',
                    'email_verified_at'=> now(),
                    'password'=>bcrypt('crystalcorp'),
                ],
            ]);
        }
    }
