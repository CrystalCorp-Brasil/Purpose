<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB as FacadesDB;

    class UserSeeder extends Seeder {
        public function run(): void {
            FacadesDB::table('users')->insert([
                [
                    'name'=>'Nelson Junior',
                    'username'=>'nhojunior',
                    'email'=>'crystalcorpbrasil@gmail.com',
                    'rule'=>'admin',
                    'status'=>'active',
                    'email_verified_at'=> now(),
                    'created_at'=> now(),
                    'password'=>bcrypt('crystalcorp'),
                ],[
                    'name'=>'Editor',
                    'username'=>'publisher',
                    'email'=>'publisher@crystalcorpbrasil.com.br',
                    'rule'=>'publish',
                    'status'=>'active',
                    'email_verified_at'=> now(),
                    'created_at'=> now(),
                    'password'=>bcrypt('crystalcorp'),
                ],[
                    'name'=>'Usuário',
                    'username'=>'user',
                    'email'=>'user@crystalcorpbrasil.com.br',
                    'rule'=>'user',
                    'status'=>'active',
                    'email_verified_at'=> now(),
                    'created_at'=> now(),
                    'password'=>bcrypt('crystalcorp'),
                ],
            ]);
        }
    }
