<?php
class hash{
    public function add_md5($usuario,$senha){

        $senha_hash = md5($senha);
        print "usuario: ".$usuario."<br>";
        print "Senha: ".$senha_hash."<br>";

    }
}
$md5_hash = new hash();
$md5_hash->add_md5("user","123user");
